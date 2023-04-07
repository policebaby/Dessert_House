<?php

//to use session
session_start();

$adminId=$_SESSION["adminId"];

include "../Model/dbConnection.php";

$db = new DBConnection();
$pdo=$db->connect();

$sql=$pdo->prepare("SELECT * FROM m_admin WHERE admin_id=:adminId");
$sql->bindValue(":adminId",$adminId);
$sql->execute();

$result=$sql->fetchall(PDO::FETCH_ASSOC);

$_SESSION["adminFirstName"]=$result[0]["admin_first_name"];
$_SESSION["adminLastName"]=$result[0]["admin_last_name"];
$_SESSION["adminEmail"]=$result[0]["admin_email"];
$_SESSION["adminPassword"]=$result[0]["admin_password"];
$_SESSION["adminPhone"]=$result[0]["admin_phone"];

header("Location: ../View/adminProfile.php");

echo "<pre>";
print_r($result);

?>