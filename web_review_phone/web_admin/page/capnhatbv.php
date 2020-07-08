<?php
if($_SESSION["QUYEN"]!="Tác giả")
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
                    if($phones!=null)
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
                <textareaname="editor1" id="editor1"></textarea>
                </div>
            </div>
        </div>
        <div class="part-of-news" >
            <div class="row">
                <div class="col-3">
                <label >Tên tác giả</label>
                </div>
                <div class="col">
                <input type="text" class="form-control" name="news_title" value="Tác giả" readonly>
                </div>
            </div>
        </div>
        <div class="part-of-news" style="border-bottom:1px solid #000;text-align:right">
            <div class="row">
                <div class="col-3">
                </div>
                <div class="col">
                <?php
                if($phones!=null)
                {
                    echo '<button type="submit" class="btn btn-primary">Xác nhận</button>';
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
        filebrowserBrowseUrl : '//localhost:8080/web_admin/ckfinder/ckfinder.html',
        filebrowserImageUploadUrl :
        '//localhost:8080/web_admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images&currentFolder=/cars/',
    });
</script>