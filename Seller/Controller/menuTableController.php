<?php 
session_start();

if(isset($_GET["page"])){
    $page = $_GET["page"];
}else{
    $page = 1;
}

$rowLimit = 5;
$pageStart = ($page-1) * $rowLimit; 
$pageStart = ($pageStart<0)? 0 : $pageStart;

// call database
include "../Model/dbConnection.php";

//call database connection
$db  = new DBConnection();
$pdo = $db->connect();

$sql=$pdo->prepare
(
    "
    SELECT * FROM m_product 
    WHERE 
    shop_id = :shopId 
    AND del_flg = 0
    "
);
$sql->bindValue(":shopId",$_SESSION["shopID"]);
$sql->execute();
$totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC);


$sql=$pdo->prepare
(
    "
    SELECT * FROM m_product 
    WHERE 
    shop_id = :shopId 
    AND del_flg = 0 ORDER BY product_id DESC 
    LIMIT $pageStart, $rowLimit
    "
);
$sql->bindValue(":shopId",$_SESSION["shopID"]);
$sql->execute();
$productList = $sql->fetchAll(PDO::FETCH_ASSOC);

$pageList = ceil(count($totalRecord)/$rowLimit);

$sql=$pdo->prepare
(
    "
    SELECT shop_name FROM m_shop 
    WHERE 
    shop_id = :shopId 
    AND del_flg = 0 
    "
);
$sql->bindValue(":shopId",$_SESSION["shopID"]);
$sql->execute();
$shopName = $sql->fetchAll(PDO::FETCH_ASSOC);

?>