<?php

include "../Model/dbConnection.php";

session_start();


// post data
if(isset($_POST["sendAdmin"])){
    
    $subject  =  $_POST["subjectText"];
    $message  =  $_POST["messageText"];

    $sellerId  = $_SESSION["sellerID"];

    //call database connection
    $db  = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare
    (
        "
        INSERT INTO t_seller_contact_admin 
        (
            id,
            seller_id,
            subject,
            message
        ) 
        VALUES 
        (
            id,
            :sellerID,
            :subject,
            :message
        )
        "
    );
    $sql->bindValue(':sellerID',$sellerId);
    $sql->bindValue(':subject',$subject);
    $sql->bindValue(':message',$message);
    $sql->execute();

    header("Location: ../View/sellerContactAdmin.php");
}

?>