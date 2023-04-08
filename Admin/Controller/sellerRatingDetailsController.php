<?php

include "../Model/dbConnection.php";

$db = new DBConnection();
$pdo = $db->connect();

// counter block
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $shopId = $_POST["shopId"];
    $ratingPercentage = $_POST["ratingPercentage"];
    $shopName = $_POST["shopName"];

   
    $sql=$pdo->prepare("SELECT COUNT(*) as count, rating_id
    FROM t_rating
    WHERE shop_id = :shopId
    GROUP BY rating_id;
    ");
    $sql->bindValue(":shopId",$shopId);
    $sql->execute();
    $ratings=$sql->fetchAll(PDO::FETCH_ASSOC);
  


//reviews
$reviewSql=$pdo->prepare("SELECT tr.user_id, tr.user_review, tr.seller_reply, tr.create_date, mu.user_name
FROM t_review tr
INNER JOIN m_user mu ON tr.user_id = mu.user_id
WHERE tr.shop_id = :shopId;
");
$reviewSql->bindValue(":shopId",$shopId);
$reviewSql->execute();
$reviews=$reviewSql->fetchAll(PDO::FETCH_ASSOC);
}


