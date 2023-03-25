<?php
ini_set("display_errors", "1");
include "../Model/dbConnection.php";
session_start();

if(isset($_POST["update"])){
    $name = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    echo $name,$email,$phone;

    //profilepic data


}else{
    echo "error";
}
?>