<?php
ini_set("display_errors", "1");
session_start();
include "../Model/dbConnection.php";


if(isset($_POST["newcartItems"])){
    $cartList = json_decode($_POST["newcartItems"], true);

    // echo "<pre>";
    // print_r($cartList);

    $database = new DBConnection();
    $pdo = $database->connect();

    $ids = [];
    for ($i = 0; $i < count($cartList); $i++) {
        array_push($ids, $cartList[$i]["id"]);
    }
    $sql = $pdo->prepare(
        "
        SELECT * FROM m_product WHERE del_flg=0 AND FIND_IN_SET (product_id,:id);
        "
    );
    $sql->bindValue(":id", implode(",", $ids));
    $sql->execute();
    $newcartItemList = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($newcartItemList);
}

?>