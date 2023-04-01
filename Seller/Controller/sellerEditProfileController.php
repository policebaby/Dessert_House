<?php 

session_start();
if (isset($_SESSION["sellerID"])) {

    $sellerId = $_SESSION["sellerID"];

    // call database
    include "../Model/dbConnection.php";

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

// for shop data

if (isset($_SESSION["shopID"])) {

    $shopId = $_SESSION["shopID"];


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