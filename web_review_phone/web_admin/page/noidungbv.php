<?php include "backend/news.php"?>
<?php
$new=null;
if(isset($_GET["news_id"]))
{
    $id=$_GET["news_id"];
    $new=select_news($conn,$id);
}
else
{
    header("Location:index.php?p=ds_baiviet");
}
?>
<h5> Nội dung bài viết</h5>
<a href="javascript:history.back()" class="btn btn-success">Trở về</a>
<hr/>
<div class="news-infor">
<?php
    if ($new!=null)
    {
        foreach($new as $a)
        {
            echo '<h2>'.$a["TITLE"].'<h2>';
            echo $a["NOI_DUNG_BAI_VIET"];
        }
    }
?>

    
</div>