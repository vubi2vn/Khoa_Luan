<?php
//Kiểm tra phân quyền
if($_SESSION["TEN_PHAN_QUYEN"]!="admin")
{
    header("Location:index.php");
}
?>
<?php include "backend/comments.php"?>
<?php
$id="";
$comment=null;
if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    $comment=select_detail_comment($conn,$id);
} 
?>
<?php
//Phân trang
//source:https://freetuts.net/thuat-toan-phan-trang-voi-php-va-mysql-550.html
$limit_record=3;
$current_page=isset($_GET['page']) ? $_GET['page'] : 1;
$total_records=get_total_record_detail_report($conn,$id);
$total_record=$total_records>0?$total_records:1;
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
    if($total_records==0)
    {
        header('Location:index?p=ds');
    }
?>
<div class="ds_binhluan">
    <a href="javascript:history.back()" class="btn btn-success">Trở về</a>
    <p><h5>Nội dung report bình luận </h5></p>
    <?php if($comment!=null)
    {
        foreach($comment as $c)
        {
            echo '<p><b>Nội dung</b>: '.$c["NOI_DUNG_BINH_LUAN"].' <p>
            <p><b>Điện thoại</b>: '.$c["TEN_DIEN_THOAI"].'<p>';
        }
    }
    ?>
    
    <hr/>
    <table class="table">
    <?php
        if($total_records>0) 
        {
            echo '<thead class="thead-light">
            <tr>
            <th scope="col">User báo cáo</th>
            <th scope="col">Thời gian báo cáo</th>
            <th scope="col">Loại báo cáo</th>
            <th scope="col">Nội dung(nếu có)</th>
            <th scope="col">Tình trạng giải quyết</th>
            
            </tr>
        </thead>';
        }
    ?>
        <tbody>
        <?php
            $start=($current_page-1)*$limit_record;
            foreach(get_record_limit_detail_report($conn,$id,$start,$limit_record) as $a)
            {
                echo '<tr>
                <th scope="row">'.$a['USER_NAME'].'</th>
                <td>'.$a['NGAY_BAO_CAO'].'</td>
                <td>'.$a['LOAI_BAO_CAO'].'</td>
                <td>'.$a['NOI_DUNG_BAO_CAO'].'</td>
                <td>';
                if($a['TINH_TRANG_GIAI_QUYET']!="1")
                {
                    echo'Chưa giải quyết';
                }
                else
                {
                    echo'Đã giải quyết';
                }
                echo '</td>
                </tr>';
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
            <a class="page-link" href="index.php?p=ds_hangsx&page='.($current_page-1).'" aria-label="Previous">
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
                    echo '<li class="page-item disabled"><a class="page-link" href="index.php?p=ds_hangsx&page='.$i.'">'.$i.'</a></li>';
                }
                else
                {
                    echo '<li class="page-item"><a class="page-link" href="index.php?p=ds_hangsx&page='.$i.'">'.$i.'</a></li>';
                }
            }
        ?>
           
        <?php
        if ($current_page < $total_page && $total_page > 1){
            echo '<li class="page-item">
            <a class="page-link" href="index.php?p=ds_hangsx&page='.($current_page+1).'" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
            </li>';
        }
        ?>
            
        </ul>
    </nav>
</div>
<?php include "popup/update_comment.php";?>