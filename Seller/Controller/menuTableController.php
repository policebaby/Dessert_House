<?php 
session_start();
// call database
 include "../Model/dbConnection.php";
//call database connection
$db  = new DBConnection();
$pdo = $db->connect();
$sql=$pdo->prepare
(
    "
    SELECT * FROM m_product 
    WHERE 
    shop_id = :shopId 
    AND del_flg = 0 ORDER BY product_id DESC LIMIT 5 
    "
);
$sql->bindValue(":shopId",$_SESSION["shopID"]);
$sql->execute();
$productList = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql=$pdo->prepare
(
    "
    SELECT shop_name FROM m_seller 
    WHERE 
    shop_id = :shopId 
    AND del_flg = 0 
    "
);
$sql->bindValue(":shopId",$_SESSION["shopID"]);
$sql->execute();
$shopName = $sql->fetchAll(PDO::FETCH_ASSOC);

?>