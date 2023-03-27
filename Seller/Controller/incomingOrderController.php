<?php

session_start();
include "../Model/dbConnection.php";
$db = new DBConnection();
$pdo = $db->connect();

$shopID = $_SESSION["shopID"];

$sql = $pdo->prepare
("SELECT * FROM t_orderlist/orderdetail WHERE shop_id = :shopID");

?>