<?php 
// echo "Hello";

session_start();

if(isset($_GET["page"])){
    $page = $_GET["page"];
}else{
    $page = 1;
}

$rowLimit = 3;
$pageStart = ($page-1) * $rowLimit; 
$pageStart = ($pageStart<0)? 0 : $pageStart;


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
        WHERE t.shop_id = :shopID AND m.rating_value = 1 "
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
        WHERE t.shop_id = :shopID AND m.rating_value = 2 "
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
        WHERE t.shop_id = :shopID AND m.rating_value = 3 "
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
        WHERE t.shop_id = :shopID AND m.rating_value = 4 "
    );
    $sql->bindValue(":shopID",$shopID);
    $sql->execute();
    $Eresult = $sql->fetchAll(PDO::FETCH_ASSOC);
    // print_r($Sresult);
    $crossCount = $Eresult[0]['num_users'];
    
    // for pagination
    $sql = $pdo->prepare
    (
    "
    SELECT *
    FROM t_review
    JOIN m_user
    ON t_review.user_id = m_user.user_id
    WHERE shop_id = :shopID AND t_review.del_flg = 0
    ORDER BY review_id DESC
    "
    );
    $sql->bindValue(":shopID", $shopID);
    $sql->execute();
    $totalResult = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    
    // for review card
    $sql = $pdo->prepare
    (
    "
    SELECT *
    FROM t_review
    JOIN m_user
    ON t_review.user_id = m_user.user_id
    WHERE shop_id = :shopID AND t_review.del_flg = 0
    ORDER BY review_id DESC
    LIMIT $pageStart , $rowLimit
    "
    );
    $sql->bindValue(":shopID", $shopID);
    $sql->execute();
    $reviewResult = $sql->fetchAll(PDO::FETCH_ASSOC);

    // $reviewID =$_SESSION["reviewID"];

    $pageList = ceil(count($totalResult)/$rowLimit);



    
}
