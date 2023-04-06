<?php
ini_set("display_errors", "1");
session_start();

include "../Model/dbConnection.php";

$id=$_GET["id"];
if(isset($_GET["page"])){
    $page = $_GET["page"];
}else{
    $page = 1;
}

$rowLimit = 20;
$pageStart = ($page - 1) * $rowLimit;
// echo $pageStart;
$pageStart = ($pageStart<0)? 0 : $pageStart;

$db = new DBConnection();
$pdo = $db->connect();
// shop
$sql= $pdo->prepare(
    "
    SELECT * FROM m_shop WHERE shop_id = :id;
    "
);
$sql->bindValue(":id",$id );
$sql->execute();
$shopinfo = $sql->fetchAll(PDO::FETCH_ASSOC);

// product count
$sql= $pdo->prepare(
    "
    SELECT * FROM m_product WHERE shop_id = :id;
    "
);
$sql->bindValue(":id",$id );
$sql->execute();
$productcount = $sql->fetchAll(PDO::FETCH_ASSOC);

// product 
$sql= $pdo->prepare(
    "SELECT * FROM m_product WHERE shop_id = :id AND del_flg = 0
    LIMIT $pageStart, $rowLimit
    "
);
$sql->bindValue(":id",$id );
$sql->execute();
$products = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($products);

$pageList = ceil(count($productcount) / $rowLimit);





?>