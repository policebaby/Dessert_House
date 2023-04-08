<?php
ini_set("display_errors", "1");

// echo "HELLO" ;

session_start();
// call database
include("../Model/dbConnection.php");
if (isset($_SESSION["shopID"])) {
    $shopID = $_SESSION["shopID"];
    // echo $shopID;

    // call db connection
    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
        SELECT COUNT(product_id) FROM m_product 
        WHERE 
        shop_id = :shopID AND del_flg=0
        "
    );
    $sql->bindValue(":shopID", $shopID);
    $sql->execute();
    $itemResult = $sql->fetchAll(PDO::FETCH_ASSOC);
    $itemCount = $itemResult[0]['COUNT(product_id)'];

    // total order
    $sql = $pdo->prepare(
        "
        SELECT t_order.status, COUNT(DISTINCT t_order.order_id) AS num_orders
        FROM t_order
        LEFT JOIN t_orderdetail ON t_order.order_id = t_orderdetail.order_id
        WHERE t_orderdetail.shop_id = :shopID OR t_orderdetail.shop_id IS NULL
        GROUP BY t_order.status;
        "
    );
    $sql->bindValue(":shopID", $shopID);
    $sql->execute();
    $orderResult = $sql->fetchAll(PDO::FETCH_ASSOC);

    $totalOrder = 0;
    foreach ($orderResult as $row) {
        $status = $row['status'];
        $totalOrder += $row['num_orders'];
    }
    // echo $totalOrder;

    // for sold count
    $sql = $pdo->prepare(
        "
        SELECT SUM(t_orderdetail.quantity) AS total_quantity
        FROM t_orderdetail
        JOIN t_order ON t_orderdetail.order_id = t_order.order_id
        WHERE t_orderdetail.shop_id = :shopID AND t_order.status = 1;
        
            "
    );
    $sql->bindValue(":shopID", $shopID);
    // $sql->bindValue(":status", $status);
    $sql->execute();
    $result = $sql->fetch(PDO::FETCH_ASSOC);
    $soldCount = isset($result['total_quantity']) ? $result['total_quantity'] : 0;
    $soldCount = $result['total_quantity'];
    // echo $soldCount;


    // pending Order count
    $sql = $pdo->prepare(
        "
        SELECT COUNT(DISTINCT t_order.order_id) AS pending
    FROM t_order
    JOIN t_orderdetail ON t_order.user_id = t_orderdetail.user_id
    WHERE t_orderdetail.shop_id = :shopID AND t_order.status = 0;

        "
    );
    $sql->bindValue(":shopID", $shopID);
    $sql->execute();
    $Pendresult = $sql->fetch(PDO::FETCH_ASSOC);

    $pendingOrder = $Pendresult['pending'];




    // // Calculate the total number of ratings for the shop
    $sql = $pdo->prepare(
        "
        SELECT COUNT(user_id) FROM t_rating
        WHERE shop_id = :shopID
        "
    );
    $sql->bindValue(":shopID", $shopID);
    $sql->execute();
    $totalResult = $sql->fetch(PDO::FETCH_ASSOC);
    $totalRatings = $totalResult['COUNT(user_id)'];


    // rating count
    $sql = $pdo->prepare(
        "SELECT COUNT(DISTINCT t.user_id) AS num_users
        FROM t_rating AS t
        JOIN m_ratingcategory AS m ON t.rating_id = m.rating_id
        WHERE t.shop_id = :shopID"
    );
    $sql->bindValue(":shopID", $shopID);
    $sql->execute();
    $ShopRating = $sql->fetchAll(PDO::FETCH_ASSOC);
    $shopRatingCount = $ShopRating[0]['num_users'];


    // Count the number of each type of feedback
    $sql = $pdo->prepare("
    SELECT m.rating_value, COUNT(DISTINCT t.user_id) AS num_users
    FROM t_rating AS t
    JOIN m_ratingcategory AS m ON t.rating_id = m.rating_id
    WHERE t.shop_id = :shopID
    GROUP BY m.rating_value");
    $sql->bindValue(":shopID", $shopID);
    $sql->execute();
    $feedbackCounts = $sql->fetchAll(PDO::FETCH_ASSOC);

    $totalFeedback = 0;
    $positiveFeedback = 0;
    foreach ($feedbackCounts as $count) {
        $ratingValue = $count['rating_value'];
        $numUsers = $count['num_users'];
        $totalFeedback += $numUsers;
        if ($ratingValue == 1) {
            $positiveFeedback += $numUsers;
        }
    }

    if ($totalFeedback > 0) {
        $overallPercentage = $positiveFeedback / $totalFeedback * 100;
    } else {
        $overallPercentage = 0;
    }

    // echo "<pre>";
    // print_r($feedbackCounts);


    // Calculate the percentage for each type of feedback
    $feedbackPercentages = [];
    $totalRatings = 0;
    foreach ($feedbackCounts as $count) {
        $ratingValue = $count['rating_value'];
        $numUsers = $count['num_users'];
        $feedbackPercentages[$ratingValue] = $numUsers / $shopRatingCount * 100;
        $totalRatings += $numUsers;
    }
    // echo $totalRatings;

    // generate username from user_id
    $sql = $pdo->prepare(
        "
    SELECT t_review.review_id, m_user.user_name,m_user.user_email, t_review.create_date, t_review.user_review
    FROM t_review
    JOIN m_user
    ON t_review.user_id = m_user.user_id
    WHERE shop_id = :shopID AND t_review.del_flg = 0
    ORDER BY review_id DESC
    LIMIT 3
    "
    );
    $sql->bindValue(":shopID", $shopID);
    $sql->execute();
    $reviewResult = $sql->fetchAll(PDO::FETCH_ASSOC);

    // print_r($reviewResult);
}
