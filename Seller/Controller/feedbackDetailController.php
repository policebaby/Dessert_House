<?php 
// echo "Hello";

session_start();

// call database
include("../Model/dbConnection.php");

if(isset($_SESSION["shopID"])){
    $shopID = $_SESSION["shopID"];
    
    // echo $shopID;

    // call db connection
    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare
    (
        "
        SELECT COUNT(user_id) FROM t_rating
        WHERE shop_id = :shopID
        "
    );
    $sql->bindValue(":shopID", $shopID);
    $sql->execute();
    $totalResult = $sql->fetch(PDO::FETCH_ASSOC);
    $totalRatings = $totalResult['COUNT(user_id)'];
    // echo "$totalRatings";


    $sql = $pdo->prepare(
        "SELECT COUNT(DISTINCT t.user_id) AS num_users
        FROM t_rating AS t
        JOIN m_ratingcategory AS m ON t.rating_id = m.rating_id
        WHERE t.shop_id = :shopID"
    );
    $sql->bindValue(":shopID",$shopID);
    $sql->execute();
    $ShopRating = $sql->fetchAll(PDO::FETCH_ASSOC);
    $shopRatingCount = $ShopRating[0]['num_users'];
    
    $sql = $pdo->prepare(
        "SELECT COUNT(DISTINCT t.user_id) AS num_users
        FROM t_rating AS t
        JOIN m_ratingcategory AS m ON t.rating_id = m.rating_id
        WHERE t.shop_id = :shopID AND m.rating_type = '0' "
    );
    $sql->bindValue(":shopID",$shopID);
    $sql->execute();
    $Sresult = $sql->fetchAll(PDO::FETCH_ASSOC);
    // print_r($Sresult);
    $smileCount = $Sresult[0]['num_users'];

    $sql = $pdo->prepare(
        "SELECT COUNT(DISTINCT t.user_id) AS num_users
        FROM t_rating AS t
        JOIN m_ratingcategory AS m ON t.rating_id = m.rating_id
        WHERE t.shop_id = :shopID AND m.rating_type = '1' "
    );
    $sql->bindValue(":shopID",$shopID);
    $sql->execute();
    $Presult = $sql->fetchAll(PDO::FETCH_ASSOC);
    // print_r($Sresult);
    $pokerCount = $Presult[0]['num_users'];
    
    $sql = $pdo->prepare(
        "SELECT COUNT(DISTINCT t.user_id) AS num_users
        FROM t_rating AS t
        JOIN m_ratingcategory AS m ON t.rating_id = m.rating_id
        WHERE t.shop_id = :shopID AND m.rating_type = '2' "
    );
    $sql->bindValue(":shopID",$shopID);
    $sql->execute();
    $Dresult = $sql->fetchAll(PDO::FETCH_ASSOC);
    // print_r($Sresult);
    $sadCount = $Dresult[0]['num_users'];

    $sql = $pdo->prepare(
        "SELECT COUNT(DISTINCT t.user_id) AS num_users
        FROM t_rating AS t
        JOIN m_ratingcategory AS m ON t.rating_id = m.rating_id
        WHERE t.shop_id = :shopID AND m.rating_type = '3' "
    );
    $sql->bindValue(":shopID",$shopID);
    $sql->execute();
    $Eresult = $sql->fetchAll(PDO::FETCH_ASSOC);
    // print_r($Sresult);
    $crossCount = $Eresult[0]['num_users'];
    
    
    // for review card
    $sql = $pdo->prepare
    (
    "
    SELECT t_review.review_id, m_user.user_name, m_user.user_email, t_review.user_review, t_review.create_date,t_review.update_date, m_user.user_id
    FROM t_review
    JOIN m_user
    ON t_review.user_id = m_user.user_id
    WHERE shop_id = :shopID 
    ORDER BY review_id DESC
    LIMIT 2
    "
    );
    $sql->bindValue(":shopID", $shopID);
    $sql->execute();
    $reviewResult = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    $_SESSION["userID"] = $reviewResult[0]["user_id"];
    $userID = $_SESSION["userID"];

    $_SESSION["userEmail"] = $reviewResult[0]["user_email"];
    $yourEmail = $_SESSION["userEmail"];

    $_SESSION["reviewID"] = $reviewResult[0]["review_id"];
    $reviewID =$_SESSION["reviewID"];
    // echo "<pre>";
    // print_r($reviewResult);

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

}
