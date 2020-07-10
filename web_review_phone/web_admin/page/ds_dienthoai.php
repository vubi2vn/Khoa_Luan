<?php
include "backend/phone.php";
include "backend/trademark.php";
?>

<?php
//Phân trang
//source:https://freetuts.net/thuat-toan-phan-trang-voi-php-va-mysql-550.html
$limit_record=6;
$current_page=isset($_GET['page']) ? $_GET['page'] : 1;
$total_record=get_total_record_phone($conn);
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
//Thêm điện thoại mới
if(isset($_POST["btn_submit_avatar"]))
{
    $name=trim($_POST["txt_phone_name"]);
    $trademark=$_POST["ntrademark_option"];
    $price=$_POST["txt_price"];
    if($name==""||$name==null)
    {
        echo "<script type='text/javascript'>alert('Tên điện thoại không được để trống!');</script>";
        header('refresh:1');
    }
    elseif(find_phone($conn,$name)!=null)
    {
        echo "<script type='text/javascript'>alert('Tên điện thoại bị trùng!');</script>";
        header('refresh:1');
    }
    elseif((float)$price<100000)
    {
        echo "<script type='text/javascript'>alert('Giá điện thoại phải lớn hơn 100.000 VND!');</script>";
        header('refresh:1');
    }
    else
    {
        include "backend/uploadIMG.php";
        if(insert_phone($conn,$trademark,$name,$price,$url))
        {
            if(insert_phone_infor($conn,$name))
            {
                if(insert_review_for_phone($conn,$name))
                {
                    echo "<script type='text/javascript'>alert('Thêm điện thoại thành công!');</script>";
                    header('refresh:1');
                }
                else
                {
                    echo "<script type='text/javascript'>alert('Có lỗi trong quá trình tạo bài viết! Vui lòng liên hệ nhân viên kỹ thuật!');</script>";
                    header('refresh:1');
                }
            }
            else
            {
                echo "<script type='text/javascript'>alert('Có lỗi trong quá trình tạo thông tin cấu hình! Vui lòng liên hệ nhân viên kỹ thuật!');</script>";
                header('refresh:1');
            }
        }
        else
        {
            echo "<script type='text/javascript'>alert('Có lỗi trong quá trình cập nhật! Vui lòng liên hệ nhân viên kỹ thuật!');</script>";
            header('refresh:1');
        }
    } 
}

//Cập nhật điện thoại
if(isset($_POST["btn_submit"]))
{
    $id=$_POST["txt_phone_id"];
    $name=trim($_POST["txt_nphone_name"]);
    $trademark=$_POST["trademark_option"];
    $price=$_POST["txt_nprice"];
    if($name==""||$name==null)
    {
        echo "<script type='text/javascript'>alert('Tên điện thoại không được để trống!');</script>";
        header('refresh:1');
    }
    elseif(find_phone($conn,$name)!=null)
    {
        echo "<script type='text/javascript'>alert('Tên điện thoại bị trùng!');</script>";
        header('refresh:1');
    }
    elseif((float)$price<100000)
    {
        echo "<script type='text/javascript'>alert('Giá điện thoại phải lớn hơn 100.000 VND!');</script>";
        header('refresh:1');
    }
    else
    {
        include "backend/uploadIMG.php";
        if(update_phone($conn,$id,$trademark,$name,$price,$url))
        {
            echo "<script type='text/javascript'>alert('Cập nhật hàng thành công!');</script>";
            
        }
        else
        {
            echo "<script type='text/javascript'>alert('Có lỗi trong quá trình cập nhật! Vui lòng liên hệ nhân viên kỹ thuật!');</script>";
            header('refresh:1');
        }
    } 
}
?>

<div class="ds_hsx">
    <h5>Danh sách điện thoại</h5>
    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#insert-phone">Thêm mới</a>
    <hr/>
    <table class="table">
        
        <thead class="thead-light">
            <tr>
            <th scope="col">id</th>
            <th scope="col">Tên hãng</th>
            <th scope="col">Tên điện thoại</th>
            <th scope="col">Giá thị trường</th>
            <th scope="col">Website</th>
            <th scope="col">Cấu hình</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Điểm đánh giá</th>
            <th scope="col">Xóa</th>
            <th scope="col">Sửa</th>
            
            </tr>
        </thead>
        <tbody>
        <?php
            $start=($current_page-1)*$limit_record;
            foreach(get_record_limit_phone($conn,$start,$limit_record) as $a)
            {
                echo '<tr>
                <th scope="row">'.$a['ID_DIEN_THOAI'].'</th>
                <td>'.$a['TEN_HANG_SAN_XUAT'].'</td>
                <td>'.$a['TEN_DIEN_THOAI'].'</td>
                <td>'.number_format($a['GIA_CA_THI_TRUONG']).' VND</td>
                <td><a href="index.php?p=phone_link&id='.$a['ID_DIEN_THOAI'].'" >Link</a></td>
                <td><a href="" >Xem</a></td>
                <td><img src="../lib/images/'.$a['URL_HINH_ANh'].'" alt="hình ảnh" style="width:50px"></td>
                <td>'.$a['DIEM_DANH_GIA'].'</td>
                <td><button class="btn btn-danger" onclick="delete_store('.$a['ID_DIEN_THOAI'].')">Xóa</button></td>
                <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#update-phone"
                data-id="'.$a['ID_DIEN_THOAI'].'"
                data-name="'.$a['TEN_DIEN_THOAI'].'"
                data-trademark="'.$a['ID_HANG_SAN_XUAT'].'"
                data-price="'.$a['GIA_CA_THI_TRUONG'].'"
                >Sửa</a></td>
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
            <a class="page-link" href="index.php?p=ds_dienthoai&page='.($current_page-1).'" aria-label="Previous">
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
                    echo '<li class="page-item disabled"><a class="page-link" href="index.php?p=ds_dienthoai&page='.$i.'">'.$i.'</a></li>';
                }
                else
                {
                    echo '<li class="page-item"><a class="page-link" href="index.php?p=ds_dienthoai&page='.$i.'">'.$i.'</a></li>';
                }
            }
        ?>
           
        <?php
        if ($current_page < $total_page && $total_page > 1){
            echo '<li class="page-item">
            <a class="page-link" href="index.php?p=ds_dienthoai&page='.($current_page+1).'" aria-label="Next">
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
include "popup/insert_phone.php";
include "popup/update_phone.php";
?>
<script>
    function delete_store(id){
        if(confirm("Tất cả thông tin về điện thoại sẽ bị xóa! Bạn vẫn muốn tiếp tục?") == true){
            window.location="backend/delete_phone.php?id="+id.toString();
        }
    }
    $('#update-phone').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var name = button.data('name')
    var trademark = button.data('trademark')
    var price = button.data('price')
    var modal = $(this)
    document.getElementById("txt_phone_id").value = String(id)
    document.getElementById("txt_nphone_name").value = String(name)
    document.getElementById("txt_nprice").value = String(price)
    modal.find('#trademark_option').val(trademark)
    })
</script>