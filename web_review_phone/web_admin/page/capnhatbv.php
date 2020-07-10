<?php
if($_SESSION["TEN_PHAN_QUYEN"]!="tacgia")
{
    header("Location:index.php");
}
?>
<?php
include "backend/news.php";
?>

<?php
$phones=select_phone_without_news($conn);
?>
<?php
//kiểm tra biến get
$phone=null;
if(isset($_GET["news_id"]))
{
    $phone=select_phone_by_news_id($conn,$_GET["news_id"]);
}
?>
<?php
//Thêm bài viết mới
if(isset($_POST["btn_submit"]))
{
    $id_phone=$_POST["phone_option"];
    $title=trim($_POST["news_title"]);
    $content=$_POST["editor1"];
    if($title==null||$title=="")
    {
        echo "<script type='text/javascript'>alert('Tiêu đề không được bỏ trống!');</script>";
        header('refresh:1');
    }
    elseif(update_news($conn,$id_phone,$_SESSION["ID_USER"],$title,$content,$name))
    {
        echo "<script type='text/javascript'>alert('Cập nhật bài viết cho điện thoại!');</script>";
        header('refresh:1');
    }
    else
    {
        echo "<script type='text/javascript'>alert('Có lỗi khi tạo bài viết!');</script>";
        header('refresh:1');
    }

}
?>
<h5> Cập nhật bài viết mới</h5>
<div class="news-infor">
    <form method="post">
        <div class="part-of-news" >
            <div class="row">
                <div class="col-3">
                <label >Mẫu điện thoại</label>
                </div>
                <div class="col">
                <select name="phone_option" class="form-control">
                    <?php
                    if($phone!=null)
                    {
                        foreach($phone as $a)
                        {
                            echo '<option value="'.$a["ID_DIEN_THOAI"].'">'.$a["TEN_DIEN_THOAI"].'</option>';
                        }
                    }
                    else if($phones!=null)
                    {
                        foreach($phones as $a)
                        {
                            echo '<option value="'.$a["ID_DIEN_THOAI"].'">'.$a["TEN_DIEN_THOAI"].'</option>';
                        }
                    }
                    ?>
                </select>
                </div>
            </div>
        </div>
        <div class="part-of-news" >
            <div class="row">
                <div class="col-3">
                <label >Tiêu đề bài viết</label>
                </div>
                <div class="col">
                <input type="text" class="form-control" name="news_title" placeholder="ABC">
                </div>
            </div>
        </div>
        <div class="part-of-news" >
            <div class="row">
                <div class="col-3">
                <label >Nội dung bài viết</label>
                </div>
                <div class="col">
                <textarea name="editor1" id="editor1"></textarea>
                </div>
            </div>
        </div>
        <div class="part-of-news" >
            <div class="row">
                <div class="col-3">
                <label >Tên tác giả</label>
                </div>
                <div class="col">
                <input type="text" class="form-control" name="name_author" value="<?php echo $name?>" readonly>
                </div>
            </div>
        </div>
        <div class="part-of-news" style="border-bottom:1px solid #000;text-align:right">
            <div class="row">
                <div class="col-3">
                </div>
                <div class="col">
                <?php
                if($phones!=null||$phone!=null)
                {
                    echo '<button type="submit" class="btn btn-primary" name="btn_submit">Xác nhận</button>';
                } 
                ?>
                <a href="index.php?p=capnhat_baiviet" class="btn btn-danger" style="width:93px">Đặt lại</a>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    CKEDITOR.replace( 'editor1' ,{
        filebrowserBrowseUrl : '//localhost:81/phone/web_admin/ckfinder/ckfinder.html',
        filebrowserImageUploadUrl :
        '//localhost:81/phone/web_admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images&currentFolder=/cars/',
    });
</script>