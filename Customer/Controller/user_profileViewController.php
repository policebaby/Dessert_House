<?php
ini_set("display_errors", "1");
session_start();
include "../Model/dbConnection.php";

if (isset($_SESSION["username"])) {
    // already success login or sign up
    $name = $_SESSION["username"];
    // echo $name;
    $database = new DBConnection();
    $pdo = $database->connect();

    //check name is already taken or not
    $sql = $pdo->prepare(
        "SELECT * FROM M_user WHERE user_name = :name"
    );
    $sql->bindValue(":name", $name);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($result);
    $_SESSION["userprofile"]= $result;
    header("Location: ../View/user_profile.php");
} else {
    // error
    header("Location: ./user_login.php");
}
