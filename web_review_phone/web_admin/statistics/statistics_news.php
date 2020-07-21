<?php
require_once("../backend/connect.php");
$news_data = array();
$query = "sELECT count(*) as size_news FROM bai_viet WHERE ID_USER IS NULL 
UNION ALL 
SELECT count(*) FROM bai_viet WHERE ID_USER IS NOT NULL";
$stmt = $conn->prepare($query);
if($stmt->execute()){
    if($stmt->rowCount()>0){
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
foreach($result as $row){
    $news_data[] = $row;
}

echo json_encode($news_data);
?>