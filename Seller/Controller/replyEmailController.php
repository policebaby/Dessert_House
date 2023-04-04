<?php 


include "../Model/dbConnection.php";
include "./shared/generateReply.php";
include "./shared/mailSender.php";

session_start();
if(isset($_POST['submit'])){
    $userEmail = $_POST['userEmail'];
    $reviewID =$_POST["reviewID"];
    $shopID = $_SESSION["shopID"];
    $generate = new Generate();
    $sellerReply = $generate->genReply();

    echo $userEmail,$reviewID,$shopID,$sellerReply;

    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare
    (
        "
        INSERT INTO t_seller_reply
        (
            review_id,
            user_email,
            shop_id,
            seller_reply
        )
        VALUES
        (
            :reviewID,
            :userEmail,
            :shopID,
            :sellerReply
        )
        "
    );
    $sql->bindValue(":reviewID",$reviewID);
    $sql->bindValue(":userEmail",$userEmail);
    $sql->bindValue(":shopID",$shopID);
    $sql->bindValue(":sellerReply",$sellerReply);
    $sql->execute();

    $mail = new SendMail();
    $mail->sendMail($userEmail, "Thank you for your feedback!", "<html>
    <head>
        <title>Thank you for your feedback!</title>
    </head>
    <body>
        <p>Dear $userEmail ,</p>
        <p>$sellerReply</p>
        <p>Best regards,<br>The Support Team</p>
    </body>
    </html>");

    $sql = $pdo->prepare
    (
        "
        UPDATE t_review SET
            del_flg = 1
        WHERE shop_id = :shopID AND review_id = :reviewID
        "
    );
    $sql->bindValue(":shopID",$shopID);
    $sql->bindValue(":reviewID",$reviewID);
    $sql->execute();
    header("Location: ../View/feedbackDetails.php");
}

if(isset($_POST['thank'])){
    $userEmail = $_POST['userEmail'];
    $reviewID =$_POST["reviewID"];
    $shopID = $_SESSION["shopID"];
    $generate = new Generate();
    $sellerReply = $generate->genReply();

    echo $userEmail,$reviewID,$shopID,$sellerReply;

    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare
    (
        "
        INSERT INTO t_seller_reply
        (
            review_id,
            user_email,
            shop_id,
            seller_reply
        )
        VALUES
        (
            :reviewID,
            :userEmail,
            :shopID,
            :sellerReply
        )
        "
    );
    $sql->bindValue(":reviewID",$reviewID);
    $sql->bindValue(":userEmail",$userEmail);
    $sql->bindValue(":shopID",$shopID);
    $sql->bindValue(":sellerReply",$sellerReply);
    $sql->execute();

    $mail = new SendMail();
    $mail->sendMail($userEmail, "Thank you for your feedback!", "<html>
    <head>
        <title>Thank you for your feedback!</title>
    </head>
    <body>
        <p>Dear $userEmail ,</p>
        <p>$sellerReply</p>
        <p>Best regards,<br>The Support Team</p>
    </body>
    </html>");

    $sql = $pdo->prepare
    (
        "
        UPDATE t_review SET
            del_flg = 1
        WHERE shop_id = :shopID AND review_id = :reviewID
        "
    );
    $sql->bindValue(":shopID",$shopID);
    $sql->bindValue(":reviewID",$reviewID);
    $sql->execute();
    header("Location: ../View/sellerDashboard.php");
}
?>