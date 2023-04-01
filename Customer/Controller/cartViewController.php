<?php
ini_set("display_errors", "1");
session_start();

include "../Model/dbConnection.php";
$cartList = [];


if (isset($_POST["cartItems"])) {
    $cartList = json_decode($_POST["cartItems"], true);
    $_SESSION["cartLists"] = $cartList;

    $database = new DBConnection();
    $pdo = $database->connect();

    $sql = $pdo->prepare(
        "
        SELECT * FROM m_product WHERE del_flg=0 AND FIND_IN_SET (product_id,:id);
        "
    );

    $ids = [];
    $qty = [];
    for ($i = 0; $i < count($cartList); $i++) {
        array_push($ids, $cartList[$i]["id"]);
        array_push($qty, $cartList[$i]["qty"]);
    }
    // echo implode(",",$ids);
    // echo"<pre>";
    // print_r($qty);
    $sql->bindValue(":id", implode(",", $ids));
    $sql->execute();
    $cartItemList = $sql->fetchAll(PDO::FETCH_ASSOC);
}
else if (isset($_SESSION["cartLists"])) {
    $cartList = $_SESSION["cartLists"];
}

if (isset($_GET["del"])) {
   $del = $_GET["del"];
   array_splice($_SESSION["cartLists"],$del,1);

    $cartList = $_SESSION["cartLists"];

    $database = new DBConnection();
    $pdo = $database->connect();

    $sql = $pdo->prepare(
        "
        SELECT * FROM m_product WHERE del_flg=0 AND FIND_IN_SET (product_id,:id);
        "
    );

    $ids = [];
    $qty = [];
    for ($i = 0; $i < count($cartList); $i++) {
        array_push($ids, $cartList[$i]["id"]);
        array_push($qty, $cartList[$i]["qty"]);
    }
    // echo implode(",",$ids);
    // echo"<pre>";
    // print_r($qty);
    $sql->bindValue(":id", implode(",", $ids));
    $sql->execute();
    $cartItemList = $sql->fetchAll(PDO::FETCH_ASSOC);
} 