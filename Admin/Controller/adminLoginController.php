<?php

//if user logged in successfully,save data to session, for further verifying identity in future
session_start();

include "../Model/dbConnection.php";

$adminName = $_POST["adminName"];
$adminPassword = $_POST["adminPassword"];

//Check if user has already logged in
if(isset($_SESSION["user_id"])){
    //If already logged in go to Homepage
    header("Location:../View/adminHome.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {
    // create an instance of DB connection
    $db = new DBConnection();
    // call the function connect() in the new instance which will return a new PDO object and, and assigning to variable PDO
    $pdo=$db->connect();

    $sql=$pdo->prepare("SELECT * FROM M_admin WHERE admin_name=:adminName and admin_password=:adminPassword ");
    $sql->bindValue(":adminName", $adminName);
    $sql->bindValue(":adminPassword", $adminPassword);

    $sql->execute();

    $result=$sql->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($result);

if (count($result)) {
    header("Location:../View/adminHome.php");
    $_SESSION["adminId"]=$result[0]["admin_id"];

}else{
    $error="Account and Password does not match."."<br/>"."Please Try Again!";
    $_SESSION["error"]=$error;
    header("Location:../View/login.php");
}

}








?>