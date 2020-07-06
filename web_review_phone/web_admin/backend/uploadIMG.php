
<?php
//source:https://xuanthulab.net/upload-file-trong-php.html
//Thư mục bạn sẽ lưu file upload
$target_dir    = "upload/";
//Vị trí file lưu tạm trong server
$target_file   = $target_dir . basename($_FILES["user_avatar"]["name"]);
$allowUpload   = true;
//Lấy phần mở rộng của file
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$maxfilesize   = 10000000; //(bytes)
////Những loại file được phép upload
$allowtypes    = array('jpg', 'png', 'jpeg', 'gif');
$err="";

if(isset($_POST["btn_submit_avatar"])) {
    //Kiểm tra xem có phải là ảnh
    $check = getimagesize($_FILES["user_avatar"]["tmp_name"]);
    if($check !== false) {
        $allowUpload = true;
    } else {
        $allowUpload = false;
        $err=$err."File upload không phải là file ảnh! ";
    }
}

// Kiểm tra nếu file đã tồn tại thì không cho phép ghi đè
if (file_exists($target_file)) {
    $allowUpload = false;
    $err=$err."File upload đã tồn tại, hãy đổi tên file và thử lại! ";
}
// Kiểm tra kích thước file upload cho vượt quá giới hạn cho phép
if ($_FILES["user_avatar"]["size"] > $maxfilesize)
{
    $allowUpload = false;
    $err=$err."File upload vượt quá 10mb! ";
}


// Kiểm tra kiểu file
if (!in_array($imageFileType,$allowtypes ))
{
    $allowUpload = false;
    $err=$err."File upload phải có đuôi .jpg, .png, .jpeg, .gif! ";
}
$url="";
// Check if $uploadOk is set to 0 by an error
if ($allowUpload) {
    if (move_uploaded_file($_FILES["user_avatar"]["tmp_name"], $target_file))
    {
        $nname=(string)date("dmyhis");
        $url=$target_dir. $nname.'.' .(string)$imageFileType;
        rename($target_dir. basename( $_FILES["user_avatar"]["name"]), $url);
        
    }
    else
    {
        echo "<script type='text/javascript'>alert('Có lỗi khi sao chép file!');</script>";
    }
}
else
{
    echo "<script type='text/javascript'>alert('Không upload được file!\n".$err.");</script>";
}
?>