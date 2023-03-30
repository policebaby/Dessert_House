<?php 
// echo "HELLO" ;

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
        SELECT COUNT(product_id) FROM m_product 
        WHERE 
        shop_id = :shopID
        "
    );
    $sql->bindValue(":shopID",$shopID);
    $sql->execute();
    $itemResult = $sql->fetchAll(PDO::FETCH_ASSOC);
    $itemCount = $itemResult[0]['COUNT(product_id)'];
    // print_r( $itemResult);

    $sql = $pdo->prepare
    (
        "
        SELECT COUNT(status) FROM t_order 
        WHERE 
        shop_id = :shopID AND status = 1
        "
    );
    $sql->bindValue(":shopID",$shopID);
    $sql->execute();
    $orderResult = $sql->fetchAll(PDO::FETCH_ASSOC);
    $totalOrder = $orderResult[0]['COUNT(status)'];
    // print_r( $orderResult);

    $sql = $pdo->prepare
    (
        "
        SELECT COUNT(items) FROM t_order 
        WHERE 
        shop_id = :shopID AND status = 1
        "
    );
    $sql->bindValue(":shopID",$shopID);
    $sql->execute();
    $soldResult = $sql->fetchAll(PDO::FETCH_ASSOC);
    $soldCount = $soldResult[0]['COUNT(items)'];
    // print_r( $pendingOrder);

    $sql = $pdo->prepare
    (
        "
        SELECT COUNT(order_id) FROM t_order 
        WHERE 
        shop_id = :shopID 
        "
    );
    $sql->bindValue(":shopID",$shopID);
    $sql->execute();
    $pendingResult = $sql->fetchAll(PDO::FETCH_ASSOC);
    $pendingOrder = $pendingResult[0]['COUNT(order_id)'];
    // print_r( $pendingOrder);



// Calculate the total number of ratings for the shop
$sql = $pdo->prepare("
SELECT COUNT(user_id) FROM t_rating
WHERE shop_id = :shopID
");
$sql->bindValue(":shopID", $shopID);
$sql->execute();
$totalResult = $sql->fetch(PDO::FETCH_ASSOC);
$totalRatings = $totalResult['COUNT(user_id)'];

// Calculate the rating percentages for each rating type
$sql = $pdo->prepare("
SELECT r.rating_type, COUNT(*) / :total * 100 AS rating_percent
FROM t_rating tr
JOIN m_ratingcategory r ON tr.rating_id = r.rating_id
WHERE tr.shop_id = :shopID
GROUP BY r.rating_type
");
$sql->bindValue(":shopID", $shopID);
$sql->bindValue(":total", $totalRatings);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo"<pre>";
// print_r($result); 

// generate username from user_id
$sql = $pdo->prepare
(
    "
    SELECT t_review.review_id, m_user.user_name, t_review.user_review
FROM t_review
JOIN m_user
ON t_review.user_id = m_user.user_id
WHERE shop_id = :shopID 
ORDER BY review_id DESC
LIMIT 3
    "
);
$sql->bindValue(":shopID", $shopID);
$sql->execute();
$reviewResult = $sql->fetchAll(PDO::FETCH_ASSOC);

// print_r($reviewResult);
}
