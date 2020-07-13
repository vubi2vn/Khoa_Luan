<?php include "backend/comments.php"?>
<?php
//Phân trang
//source:https://freetuts.net/thuat-toan-phan-trang-voi-php-va-mysql-550.html
$limit_record=3;
$current_page=isset($_GET['page']) ? $_GET['page'] : 1;
$total_record=get_total_record_comments($conn);
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
// update Bình luận
if(isset($_POST["btn-update-comment"]))
{
    $id=$_POST["txt_idcomment"];
    $class=$_POST["select_class"];
    $hide=$_POST["radio_hide"];
    {
        if($id!=null&&$id!="")
        {
            if(update_comment($conn,$id,$class,$hide))
            {
                if(!update_detail_report($conn,$id))
                {
                    echo "<script type='text/javascript'>alert('Cập nhật trạng thái bình luận thất bại!');</script>";
                    
                }
                if(!update_phone_score($conn,$id))
                {
                    echo "<script type='text/javascript'>alert('Cập nhật điểm đánh giá thất bại!');</script>";
                }
                echo "<script type='text/javascript'>alert('Đã cập nhật bình luận!');</script>";
                header('refresh:1');
            }
            else
            {
                echo "<script type='text/javascript'>alert('Có lỗi trong quá trình cập nhật!');</script>";
                header('refresh:3');
            }
        }
        else
        {
            echo "<script type='text/javascript'>alert('Lỗi xác định id!');</script>";
            header('refresh:3');
        }
    }
}
?>
<div class="ds_binhluan">
    <h5>Danh sách bình luận bị report</h5>
    <hr/>
    <table class="table">
        
        <thead class="thead-light">
            <tr>
            <th scope="col">id</th>
            <th scope="col">Điện thoại</th>
            <th scope="col">Tên người bình luận</th>
            <th scope="col">Nội dung</th>
            <th scope="col">Tình trạng</th>
            <th scope="col">Chi tiết báo cáo</th>
            <th scope="col">Cập nhật</th>
            
            </tr>
        </thead>
        <tbody>
        <?php
            $start=($current_page-1)*$limit_record;
            foreach(get_record_limit_comments($conn,$start,$limit_record) as $a)
            {
                echo '<tr>
                <th scope="row">'.$a['ID_BINH_LUAN'].'</th>
                <td>'.$a['TEN_DIEN_THOAI'].'</td>
                <td>'.$a['TEN_NGUOI_BINH_LUAN'].'</td>
                <td>'.$a['NOI_DUNG_BINH_LUAN'].'</td>
                <td>';
                if($a['coun']>0)
                {
                    echo 'Chưa giải quyết';
                }
                else
                {
                    echo 'Đã giải quyết';
                }
                echo '</td>
                <td><a href="index.php?p=ds_noidung_baocao&id='.$a['ID_BINH_LUAN'].'" class="btn btn-success">Xem</a></td>
                <td><button class="btn btn-primary" data-toggle="modal" data-target="#update-comment"
                data-id="'.$a['ID_BINH_LUAN'].'"
                data-classes="'.$a['PHAN_LOAI_BINH_LUAN'].'"
                data-hide="'.$a['HIEN_THI_BINH_LUAN'].'">Sửa
                </button></td>
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
<script>
$('#update-comment').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var classes = button.data('classes')
    var hide = button.data('hide')
    var modal = $(this)
    document.getElementById("txt_id_comment").value = String(id)
    if(hide=="1")
    {
        document.getElementById("radio_hide_true").checked=true
    }
    else
    {
        document.getElementById("radio_hide_false").checked=true
    }
    modal.find('#select_class').val(classes)
    })
</script>