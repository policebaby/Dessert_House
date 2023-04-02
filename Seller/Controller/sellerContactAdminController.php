<?php

// call database
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
            seller_id,
            subject,
            message,
            create_date
        ) 
        VALUES 
        (
            :sellerID,
            :subject,
            :message,
            :date
        )
        "
    );
    $sql->bindValue(':sellerID',$sellerId);
    $sql->bindValue(':subject',$subject);
    $sql->bindValue(':message',$message);
    $sql->bindValue(':date',date("Y-m-d"));
    $sql->execute();

    header("Location: ../View/sellerContactAdmin.php");
}

?>