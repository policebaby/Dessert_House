<?php
ini_set("display_errors", "1");
session_start();

include "../Model/dbConnection.php";

$id=$_GET["id"];

$db = new DBConnection();
$pdo = $db->connect();
// product 
$sql= $pdo->prepare(
    "
    SELECT * FROM m_product WHERE shop_id = :id;
    "
);
$sql->bindValue(":id",$id );
$sql->execute();
$products = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($products);

// shop
$sql= $pdo->prepare(
    "
    SELECT * FROM m_shop WHERE shop_id = :id;
    "
);
$sql->bindValue(":id",$id );
$sql->execute();
$shopinfo = $sql->fetchAll(PDO::FETCH_ASSOC);


?>