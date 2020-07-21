<?php

require_once("../backend/connect.php");
$news_data = array();
for($i=29;$i>=0;$i--)
{
    $date_start=date("Y-m-d",mktime(0,0,0,(int)date("m"),(int)date("d")-$i,(int)date("Y")));
    $news_data[]=array("date"=>$date_start,"value"=>0);
}
$query = "SELECT date(NGAY_NHAN_LIKE) as ngay,count(*) as size_like
from lich_su_like 
 GROUP by NGAY_NHAN_LIKE";
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
            $news_data[$i]["value"]=$row["size_like"];
            break;
        }
        
    }
}
echo json_encode($news_data);
?>