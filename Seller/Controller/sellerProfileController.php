<?php 
// call database
include "../Model/dbConnection.php";
session_start();
if (isset($_SESSION["sellerID"])) {

    $sellerId = $_SESSION["sellerID"];

    // call connection db
    $db  = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
        SELECT * FROM m_seller WHERE seller_id = :id
        "
    );

    $sql->bindValue(":id", $sellerId);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
}

if (isset($_SESSION["shopID"])) {

    $shopId = $_SESSION["shopID"];

    // call connection db
    $db  = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
        SELECT * FROM m_shop WHERE shop_id = :id
        "
    );

    $sql->bindValue(":id", $shopId);
    $sql->execute();

    $shopResult = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>