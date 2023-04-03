<?php
ini_set("display_errors", "1");

include "../Model/dbConnection.php";
$db = new DBConnection();
$pdo = $db->connect();

if(isset($_GET["page"])){
    $page = $_GET["page"];
}else{
    $page = 1;
}

$rowLimit = 20; //control shop show count 
$pageStart = ($page - 1) * $rowLimit;
$pageStart = ($pageStart<0)? 0 : $pageStart;


// shop count
$sql = $pdo->prepare(
    "SELECT * FROM M_shop WHERE del_flg = 0 "
);
$sql->execute();
$shopcount = $sql->fetchAll(PDO::FETCH_ASSOC);

// shop show
$sql = $pdo->prepare(
    "SELECT * FROM M_shop WHERE del_flg = 0
    LIMIT $pageStart, $rowLimit 
    "
);
$sql->execute();
$shops = $sql->fetchAll(PDO::FETCH_ASSOC);
$pageList = ceil(count($shopcount) / $rowLimit);
$_SESSION["mainshops"] = $shops;

// echo "<pre>";
// print_r($shops);




?>