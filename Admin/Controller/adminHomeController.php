<?php
include "../Model/dbConnection.php";

$db = new DBConnection();
$pdo=$db->connect();

//Check if user has already logged in
if(isset($_SESSION["user_id"])){
    //If already logged in go to Homepage
    header("Location:../View/adminHome.php");
    exit;
}

// Calculate Total Shops
$totalShopSql=$pdo->prepare("SELECT COUNT(shop_id) AS totalShops FROM m_shop;");
$totalShopSql->execute();
$totalShopResult=$totalShopSql->fetchall(PDO::FETCH_ASSOC);


// Calculate Total User
$totalUserSql=$pdo->prepare("SELECT COUNT(user_id) AS totalUsers FROM m_user;");
$totalUserSql->execute();
$totalUserResult=$totalUserSql->fetchall(PDO::FETCH_ASSOC);


// Calculate customers average satisfactory level
$satisfactorySql=$pdo->prepare("SELECT ROUND(AVG(CASE rating_id 
WHEN 1 THEN 100 
WHEN 2 THEN 75 
WHEN 3 THEN 50 
WHEN 4 THEN 25 
END), 2) AS averagePercentage 
FROM T_rating;");
$satisfactorySql->execute();
$satisfactoryResult=$satisfactorySql->fetchall(PDO::FETCH_ASSOC);


// Calculate total shop revenue
$shopRevenueSql=$pdo->prepare("SELECT SUM(grand_total) AS totalShopRevenue 
FROM T_order 
WHERE status = 1;");
$shopRevenueSql->execute();
$shopRevenueResult=$shopRevenueSql->fetchall(PDO::FETCH_ASSOC);

// Calculate today shop revenue
$todayShopRevenueSql=$pdo->prepare("SELECT SUM(grand_total) AS todayShopRevenue 
FROM T_order 
WHERE status = 1 AND DATE(create_date) = CURDATE();"
);
$todayShopRevenueSql->execute();
$todayShopRevenueResult=$todayShopRevenueSql->fetchall(PDO::FETCH_ASSOC);

// Calculate active user
$activeUserSql=$pdo->prepare("SELECT COUNT(DISTINCT user_id) AS activeUser
FROM T_order
WHERE create_date >= DATE_SUB(NOW(), INTERVAL 1 WEEK);");
$activeUserSql->execute();
$activeUserResult=$activeUserSql->fetchall(PDO::FETCH_ASSOC);


?>