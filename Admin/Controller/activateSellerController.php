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
$sql = $pdo->prepare("UPDATE m_seller
JOIN m_shop ON m_seller.shop_id = m_shop.shop_id
SET m_seller.del_flg = 0, m_shop.del_flg = 0
WHERE m_seller.shop_id = :shopId;
                ");

$sql->bindValue(':shopId', $shopId);
$sql->execute();

header("Location:../View/adminSellerAccountList.php?page=$pageNumber");