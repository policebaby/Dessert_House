<?php


session_start();

include "../Model/dbConnection.php";
$userId=$_POST["userId"];


$db= new DBConnection();
$pdo=$db->connect();
$sql=$pdo->prepare("UPDATE M_user 
                SET del_flg = :activate
                WHERE user_id = :userId
                ");

$sql->bindValue(':activate',0);
$sql->bindValue(':userId',$userId);
$sql->execute();

header("Location:../View/userAccountList.php");


?>