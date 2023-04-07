<?php
ini_set("display_errors", "1");
session_start();
include "../Model/dbConnection.php";

if (isset($_SESSION["userID"])) {
    // already success login or sign up
    $id = $_SESSION["userID"];
    // echo $name;
    $database = new DBConnection();
    $pdo = $database->connect();

    //check id exist or not 
    $sql = $pdo->prepare(
        "SELECT * FROM m_user WHERE user_id = :id"
    );
    $sql->bindValue(":id", $id);
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
