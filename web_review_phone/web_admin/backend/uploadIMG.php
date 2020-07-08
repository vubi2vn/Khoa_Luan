
<?php
//source:https://xuanthulab.net/upload-file-trong-php.html
//Thư mục bạn sẽ lưu file upload
$target_dir    = "upload/";
//Vị trí file lưu tạm trong server
$nfile=isset($_FILES["user_avatar"])?$_FILES["user_avatar"]:$_FILES["user_navatar"];
$target_file   = $target_dir . basename($nfile["name"]);
$allowUpload   = true;
//Lấy phần mở rộng của file
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$maxfilesize   = 10000000; //(bytes)
////Những loại file được phép upload
$allowtypes    = array('jpg', 'png', 'jpeg', 'gif');
$err="";

if(isset($_POST["btn_submit_avatar"])||isset($_POST["btn-sutmit"])) {
    //Kiểm tra xem có phải là ảnh
    if(!empty($nfile["tmp_name"]))
    {
        $check = getimagesize($nfile["tmp_name"]);
        if($check !== false) {
            $allowUpload = true;
        } else {
            $allowUpload = false;
            $err=$err."File upload không phải là file ảnh! ";
        }
    }
    else
    {
        $allowUpload = false;
            $err=$err."Chưa chọn nhật file! ";
    }
    
}

// Kiểm tra nếu file đã tồn tại thì không cho phép ghi đè
if (file_exists($target_file)) {
    $allowUpload = false;
    $err=$err."File upload đã tồn tại, hãy đổi tên file và thử lại! ";
}
// Kiểm tra kích thước file upload cho vượt quá giới hạn cho phép
if ($nfile["size"] > $maxfilesize)
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
    if (move_uploaded_file($nfile["tmp_name"], $target_file))
    {
        $nname=(string)date("dmyhis");
        $url=$target_dir. $nname.'.' .(string)$imageFileType;
        rename($target_dir. basename( $nfile["name"]), $url);
        
    }
    else
    {
        $err=$err."Có lỗi khi sao chép file!";
    }
}
else
{
    $err=$err. "Không upload được file!";
}
?>