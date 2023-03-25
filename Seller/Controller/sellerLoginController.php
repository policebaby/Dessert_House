<?php

session_start();
include "../Model/dbConnection.php";
if(isset($_POST["loginBtn"])){
    $sellerName = $_POST["sellerName"];
    $email      = $_POST["email"];
    $pwd        = $_POST["password"];
    

    // call connection db
    $db  = new DBConnection();
    $pdo = $db->connect();

    // check email from db
    $sql = $pdo->prepare
    (
        "
        SELECT * FROM m_seller WHERE email = :email AND seller_name = :sellerName
        "
    );
    $sql->bindValue(":email",$email);
    $sql->bindValue(":sellerName", $sellerName);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    
    if(count($result) == 0){

        $_SESSION["error"] = "Your email and password are not match!";
        // login fail state
        header("Location: ../View/sellerlogin.php");
    }else{

        // login success state
        $dbpwd = $result[0]["password"];
        if($dbpwd == $pwd){
        //if(password_verify($pwd,$dbpwd)){

            // success state

            $_SESSION["error"] = "";

            $_SESSION["sellerName"]=$sellerName;
            $_SESSION["sellerID"]=$result[0]["seller_id"];
            $_SESSION["shopID"]=$result[0]["shop_id"];


            header("Location: ../View/sellerDashboard.php");
        }else{
            // fail state
            $_SESSION["error"] = "Your email and password are not match!";
            header("Location: ../View/sellerlogin.php");
        }
    }
}







?>