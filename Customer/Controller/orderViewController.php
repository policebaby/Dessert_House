<?php

ini_set("display_errors", "1");
session_start();

include "../Model/dbConnection.php";

if(isset($_GET["page"])){
    $page = $_GET["page"];
}else{
    $page = 1;
}

$rowLimit = 5;
$pageStart = ($page - 1) * $rowLimit;
$pageStart = ($pageStart<0)? 0 : $pageStart;
$userid= $_SESSION["userID"];

//all data count 
$db = new DBConnection();
$pdo = $db->connect();
$sql= $pdo->prepare(
    "
    SELECT * 
    FROM t_order 
    WHERE user_id = :id AND status = 1
    "
);
$sql->bindValue(":id", $userid);
$sql->execute();
$totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC);


// buy history show
$sql= $pdo->prepare(
    "
    SELECT * 
    FROM t_order 
    WHERE user_id = :id AND status = 1
    LIMIT $pageStart, $rowLimit;
    "
);
$sql->bindValue(":id", $userid);
$sql->execute();
$orderedList = $sql->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["orderedList"]= $orderedList;
// echo "<pre>";
// print_r($orderedList);

$pageList = ceil(count($totalRecord) / $rowLimit);
// echo $pageList

// header("Location: ../View/buyHistory.php");
?>