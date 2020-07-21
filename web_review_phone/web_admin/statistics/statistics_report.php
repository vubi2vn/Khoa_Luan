<?php
require_once("../backend/connect.php");
$news_data = array();
$query = "sELECT count(*) as size_report FROM chi_tiet_bao_cao WHERE TINH_TRANG_GIAI_QUYET!=1
UNION ALL 
SELECT count(*) FROM chi_tiet_bao_cao WHERE TINH_TRANG_GIAI_QUYET=1";
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