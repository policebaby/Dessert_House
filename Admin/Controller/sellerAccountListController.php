<?php

include "../Model/dbConnection.php";

$db = new DBConnection();
$pdo = $db->connect();

if(isset($_GET["page"])){
  $currentPage=$_GET["page"];
}else{
  $currentPage=1;
}

$rowsPerPage = 2;
$pageStart=($currentPage-1)*$rowsPerPage;
$pageStart =($pageStart<1)? 0 : $pageStart;




// to calcualte total record for pagination
$sql = $pdo->prepare("SELECT M_shop.shop_id, M_shop.shop_name, M_shop.create_date,
COALESCE(SUM(T_orderdetail.total_price), 0) AS total_revenue, M_shop.del_flg
FROM M_shop
LEFT JOIN T_orderdetail ON T_orderdetail.shop_id = M_shop.shop_id
GROUP BY M_shop.shop_id
LIMIT $pageStart, $rowsPerPage;

");
$sql->execute();
$totalResult = count($sql->fetchall(PDO::FETCH_ASSOC));
// to know how many pagination button going to show
$buttonNumber=ceil($totalResult/$rowsPerPage);

// to display all the informations except ratings
$sql = $pdo->prepare("SELECT M_shop.shop_id, M_shop.shop_name, M_shop.create_date,
COALESCE(SUM(T_orderdetail.total_price), 0) AS total_revenue, M_shop.del_flg
FROM M_shop
LEFT JOIN T_orderdetail ON T_orderdetail.shop_id = M_shop.shop_id
GROUP BY M_shop.shop_id
LIMIT $pageStart, $rowsPerPage;
");
$sql->execute();
$result = $sql->fetchall(PDO::FETCH_ASSOC);



// to display ratings
$ratingSql = $pdo->prepare("SELECT M_shop.shop_name, M_shop.create_date, M_shop.del_flg,
    CASE 
      WHEN COUNT(*) = 0 THEN 'N/A'
      ELSE ROUND(
        COALESCE(SUM(
          CASE T_rating.rating_id
            WHEN 1 THEN 100
            WHEN 2 THEN 75
            WHEN 3 THEN 50
            WHEN 4 THEN 25
            ELSE 0
          END
        ), 0) / COUNT(*),
        0
      ) 
    END AS rating_percentage
    FROM M_shop
    LEFT JOIN T_rating ON T_rating.shop_id = M_shop.shop_id
    GROUP BY M_shop.shop_id;");
$ratingSql->execute();
$ratingResult = $ratingSql->fetchAll(PDO::FETCH_ASSOC);


$contactSql=$pdo->prepare("SELECT seller_phone,email FROM M_seller GROUP BY shop_id;");
$contactSql->execute();
$contactResult=$contactSql->fetchall(PDO::FETCH_ASSOC);
