<?php
ini_set("display_errors", "1");
session_start();
include "../Model/dbConnection.php";

if(isset($_POST["submit_btn"])){
    $userid = $_SESSION["userID"];
    $shopid = $_POST["shopid"];
    $message = $_POST["message"];
    $rating =$_POST["rating"];
    
    echo $userid, $shopid,$message,$rating;
    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(
        "
        INSERT INTO T_review 
        (
            user_id,
            shop_id,
            user_review,
            create_date
        )
        VALUES
        (
            :userid,
            :shopid,
            :userReview,
            :createDate
        )"
        );
        $sql->bindValue(":userid",$userid);
        $sql->bindValue(":shopid",$shopid);
        $sql->bindValue(":userReview",$message);
        $sql->bindValue(":createDate",date('y-m-d'));
        $sql->execute();

        $sql = $pdo->prepare(
            "
            INSERT INTO T_rating
            (
                user_id,
                shop_id,
                rating_id,
                create_date
            )
            VALUES
            (
                :userid,
                :shopid,
                :rating,
                :createDate
            )"
            );
            $sql->bindValue(":userid",$userid);
            $sql->bindValue(":shopid",$shopid);
            $sql->bindValue(":rating",$rating);
            $sql->bindValue(":createDate",date('y-m-d'));
            $sql->execute();

            header("Location: ../View/user_home.php");
}else{
    echo "error"; 
}


?>