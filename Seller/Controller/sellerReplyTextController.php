<?php

// call database
include "../Model/dbConnection.php";
include "./shared/mailSender.php";
session_start();
if(isset($_POST["sendReply"])){
    
    $reviewID =$_SESSION["reviewID"];
    $userID = $_SESSION["userID"];
    $userEmail = $_POST["userEmail"];
    $shopID =$_SESSION["shopID"];
    $replyText = $_POST["replyText"];
    $replyDate = date("Y,m,d H:i:s");

    
    //call database connection
    $db  = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare
    (
        "
        INSERT INTO t_seller_reply
        (
            review_id,
            user_id,
            user_email,
            shop_id,
            seller_reply,
            update_date
        )
        VALUES
        (
            :reviewID,
            :userID,
            :userEmail,
            :shopID,
            :sellerReply,
            :replyDate
        )
        "
    );
    $sql->bindValue(":reviewID",$reviewID);
    $sql->bindValue(":userID",$userID);
    $sql->bindValue(":userEmail",$userEmail);
    $sql->bindValue(":shopID",$shopID);
    $sql->bindValue(":sellerReply",$replyText);
    $sql->bindValue(":replyDate",$replyDate);
    $sql->execute();

    $mail = new SendMail();
    $mail->sendMail("thaetun99@gmail.com","Thank","k");
header("Location: ../View/feedbackDetails.php");

}
$sql= $pdo->prepare
(
    "
    SELECT seller_reply FROM t_seller_reply 
    WHERE shop_id = :shopID AND user_id = :userID AND review_id = :reviewID
    ORDER BY update_date DESC
    LIMIT 1
    "
);
$sql->bindValue(":shopID", $shopID);
$sql->bindValue(":userID", $userID);
$sql->bindValue(":reviewID", $reviewID);
$sql->execute();
$review = $sql->fetch(PDO::FETCH_ASSOC);
$_SESSION['review'] = $review;

?>