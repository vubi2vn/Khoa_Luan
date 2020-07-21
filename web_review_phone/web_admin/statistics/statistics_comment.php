<?php

require_once("../backend/connect.php");
$news_data = array();
for($i=29;$i>=0;$i--)
{
    $date_start=date("Y-m-d",mktime(0,0,0,(int)date("m"),(int)date("d")-$i,(int)date("Y")));
    $news_data[]=array("date"=>$date_start,"pos"=>0,"neg"=>0);
}
$query = "SELECT date(NGAY_BINH_LUAN) as ngay,sum(CASE when phan_loai_binh_luan =1 then 1 else 0 end) as size_comments_pos,sum(CASE when phan_loai_binh_luan !=1 then 1 else 0 end) as size_comments_neg
from binh_luan 
WHERE NGAY_BINH_LUAN BETWEEN subdate(CURRENT_DATE(),INTERVAL 30 DAY) and CURRENT_DATE GROUP by NGAY_BINH_LUAN";
$stmt = $conn->prepare($query);
if($stmt->execute()){
    if($stmt->rowCount()>0){
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
foreach($result as $row){
    for($i=0;$i<30;$i++)
    {
        if($row['ngay']==$news_data[$i]["date"])
        {
            $news_data[$i]["pos"]=$row["size_comments_pos"];
            $news_data[$i]["neg"]=$row["size_comments_neg"];
            break;
        }
        
    }
}
echo json_encode($news_data);
?>