<?php
ini_set("display_errors", "1");

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
    // call the function connect() in the new instance which will return a new PDO object and assigning to variable pdo
    $pdo=$db->connect();

    $sql=$pdo->prepare("SELECT * FROM M_admin WHERE admin_name=:adminName and admin_password=:adminPassword ");
    $sql->bindValue(":adminName", $adminName);
    $sql->bindValue(":adminPassword", $adminPassword);

    $sql->execute();

    $result=$sql->fetchAll(PDO::FETCH_ASSOC);
    print_r($result);

    // if result>1 store adminId to session for further usages. 
if (count($result)) {
    $_SESSION["adminId"]=$result[0]["admin_id"];
    header("Location:../View/adminHome.php");
}else{
    $error="Account and Password does not match."."<br/>"."Please Try Again!";
    $_SESSION["logInError"]=$error;
    header("Location:../View/login.php");
}

}








?>