<?php
include "change_to_vector.php";
$result="";
$vector=null;
$string="";
if(isset($_POST["txt_box"]))
{
    $string=trim($_POST["txt_box"]);
    $vector=change_to_vector($string);
    $command = escapeshellcmd('Testing.py '.$vector[0].' '.$vector[1]); //Chuyển mã trong tập tin test.py thành các lệnh
    $output = shell_exec($command); // Lấy kết quả trả về biến $output
    $result=$output;
    if($output==1)
    {
        $result="Bình luận thuộc lớp tích cực";
    }
    if($output==0)
    {
        $result="Bình luận thuộc lớp tiêu cực";
    }
    
}
    
    
?>
<html>
    <head></head>
    <body>
    <form method="post">
        <input name="txt_box" type="text" value="<?php echo $string?>">
        <input type="submit" value="Nhập" name="submit"/>
        <?php echo $result?>
    </form>
    
    </body>
</html>
