<?php


session_start();

include "../Model/dbConnection.php";
$userId=$_POST["userId"];
$_SESSION["userId"]=$userId;

$db= new DBConnection();
$pdo=$db->connect();
$sql=$pdo->prepare("SELECT DISTINCT m_shop.shop_name, m_shop.shop_id
                FROM m_shop
                INNER JOIN T_review ON m_shop.shop_id = T_review.shop_id
                WHERE T_review.user_id = :userId
                ");

$sql->bindValue(':userId',$userId);
$sql->execute();
$shopNameResult = $sql->fetchall(PDO::FETCH_ASSOC);



