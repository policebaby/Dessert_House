<?php

//to use session
session_start();

$adminFirstName=$_POST["adminFirstName"];
$adminLastName=$_POST["adminLastName"];
$adminPassword=$_POST["adminPassword"];
$adminPhone=$_POST["adminPhone"];
$adminEmail=$_POST["adminEmail"];
$adminId=$_SESSION["adminId"];
$adminName=$adminFirstName." ".$adminLastName;

include "../Model/dbConnection.php";

$db = new DBConnection();
$pdo=$db->connect();

if(isset($_POST["save"])){
    
    $sql=$pdo->prepare("
    UPDATE M_admin 
    SET
    admin_name=:adminName, 
    admin_first_name=:adminFirstName,
    admin_last_name=:adminLastName,
    admin_password=:adminPassword,
    admin_phone=:adminPhone,
    admin_email=:adminEmail
    WHERE
    admin_id=:adminId
    ");

    $sql->bindValue(":adminName", $adminName);
    $sql->bindValue(":adminFirstName", $adminFirstName);
    $sql->bindValue(":adminLastName", $adminLastName);
    $sql->bindValue(":adminPassword", $adminPassword);
    $sql->bindValue(":adminPhone", $adminPhone);
    $sql->bindValue(":adminEmail", $adminEmail);
    $sql->bindValue(":adminId", $adminId);

    $sql->execute();
}

header("Location:./adminProfileController.php");



