<?php

session_start();
include "../Model/dbConnection.php";
if (isset($_SESSION["shopID"])) {
    $shopID = $_SESSION["shopID"];
    // echo $shopID;

    // call connection db
    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
        SELECT * FROM t_order 
        WHERE 
        shop_id = :shopID
        "
    );

    $sql->bindValue("shopID", $shopID);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    // print_r($result);

    for ($i=0; $i < count($result); $i++) { 
        
    }
}


?> 