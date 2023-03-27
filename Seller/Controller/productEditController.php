<?php 

session_start();
include "../Model/dbConnection.php";

// call connection db
$db  = new DBConnection();
$pdo = $db->connect();


if(isset($_GET["id"])){
    $updateID = $_GET["id"];

    // echo $updateID;

$sql= $pdo->prepare
(
    "
    SELECT * FROM m_product 
    WHERE product_id = :id
    "
);
$sql->bindValue(":id",$updateID);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($result);

$_SESSION["editMenu"] = $result;

header("Location: ../View/productEdit.php");
}






?>