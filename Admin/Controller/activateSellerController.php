<?php


session_start();

include "../Model/dbConnection.php";

if(isset($_GET["page"])){
    $pageNumber=$_GET["page"];
  }else{
    $pageNumber=1;
  }


$shopId = $_POST["shopId"];


$db = new DBConnection();
$pdo = $db->connect();
$sql = $pdo->prepare("UPDATE M_seller
JOIN M_shop ON M_seller.shop_id = M_shop.shop_id
SET M_seller.del_flg = 0, M_shop.del_flg = 0
WHERE M_seller.shop_id = :shopId;
                ");

$sql->bindValue(':shopId', $shopId);
$sql->execute();

header("Location:../View/adminSellerAccountList.php?page=$pageNumber");