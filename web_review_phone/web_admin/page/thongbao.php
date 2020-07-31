
<?php
$limit_record=5;
$current_page=isset($_GET['page']) ? $_GET['page'] : 1;
$total_record=get_total_record_thongbaos($conn,$_SESSION["ID_USER"]);
$total_record=$total_record>0?$total_record:1;
$total_page=ceil($total_record/$limit_record);
if($current_page>$total_page)
{
    $current_page=$total_page;
}
else if ($current_page < 1){
    $current_page = 1;
}
?>
<?php
// update đã đọc
if(isset($_POST["btn-da-doc"]))
{
    update_dadoc($conn,$_POST['txtx_id_chitiet_thongbao']);
    
}
?>
<div class="thongbao">
    <h5>Danh sách thông báo</h5>
    <hr/>
    <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">Ngày nhận</th>
            <th scope="col">Tên thông báo</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Xem chi tiết</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $start=($current_page-1)*$limit_record;
            foreach(get_record_limit_thongbaos($conn,$_SESSION["ID_USER"],$start,$limit_record) as $a)
            {
                
                echo '
                <tr>
                <td>'.$a['NGAY_GUI_THONG_BAO'].'</td>
                <td>'.$a['TEN_THONG_BAO'].'</td>
                <td>';
                if($a['DA_XEM']==0)
                {
                    echo '<p style="color:red">Chưa xem</p>';
                }
                else
                {
                    echo '<p>Đã xem</p>';
                }
                echo '</td>
                <td>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#chitiet_thongbao" 
                data-ten_tb="'.$a['TEN_THONG_BAO'].'"
                data-noidung_tb="'.$a['NOI_DUNG_THONG_BAO'].'"
                data-noidung-khac="'.$a['NOI_DUNG_KHAC'].'"
                data-id-chitiet-thongbao="'.$a['ID_CHI_TIET_THONG_BAO'].'"
                data-id_thongbao="'.$a['ID_THONG_BAO'].'"
                >Xem chi tiết</a></td>
                ';

            }
        ?>
            
            
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
        <?php
        if($total_page>1 && $current_page>1)
        {
           echo '<li class="page-item">
            <a class="page-link" href="index.php?p=thongbao&page='.($current_page-1).'" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
            </li>';
        }
        ?>
        <?php
            for($i=1; $i<=$total_page;$i++)
            {
                if($i==$current_page)
                {
                    echo '<li class="page-item disabled"><a class="page-link" href="index.php?p=thongbao&page='.$i.'">'.$i.'</a></li>';
                }
                else
                {
                    echo '<li class="page-item"><a class="page-link" href="index.php?p=thongbao&page='.$i.'">'.$i.'</a></li>';
                }
            }
        ?>
           
        <?php
        if ($current_page < $total_page && $total_page > 1){
            echo '<li class="page-item">
            <a class="page-link" href="index.php?p=thongbao&page='.($current_page+1).'" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
            </li>';
        }
        ?>
            
        </ul>
    </nav>
</div>

<?php 
include "popup/chitiet_thongbao.php"; 
?>
<script>
    $('#chitiet_thongbao').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var ten_tb = button.data('ten_tb')
    var noidung_tb = button.data('noidung_tb')
    var noidung_khac = button.data('noidung-khac')
    var id_chitiet_thongbao = button.data('id-chitiet-thongbao')
    var modal = $(this)
    document.getElementById("lbl_ten_tb").innerHTML = String(ten_tb)
    document.getElementById("txt_noidung_tb").innerHTML = String(noidung_tb)
    document.getElementById("txt_noidung_khac").innerHTML = String(noidung_khac)
    document.getElementById("txtx_id_chitiet_thongbao").value = String(id_chitiet_thongbao)
    });
</script>