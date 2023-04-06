<?php

session_start();

if(isset($_GET["page"])){
    $page = $_GET["page"];
}else{
    $page = 1;
}


$rowLimit = 5;
$pageStart = ($page-1) * $rowLimit; 
$pageStart = ($pageStart<0)? 0 : $pageStart;


include "../Model/dbConnection.php";
if (isset($_SESSION["shopID"])) {
    $shopID = $_SESSION["shopID"];
    // echo $shopID;

    // call connection db
    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
            "
        SELECT *
        FROM t_order AS o
        INNER JOIN t_orderdetail AS d ON o.order_id = d.order_id
        WHERE d.shop_id = :shopID AND d.del_flg = 0 AND o.status = 0
        ORDER BY o.order_id
        "
        );
    $sql->bindValue(":shopID", $shopID);
    $sql->execute();
    $totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC);

    $sql = $pdo->prepare(
            "
        SELECT o.order_id, o.items, o.grand_total, o.create_date, o.reserve_time, o.status, d.quantity
        FROM t_order AS o
        INNER JOIN t_orderdetail AS d ON o.order_id = d.order_id
        WHERE d.shop_id = :shopID AND o.order_id = d.order_id AND status = 0
        GROUP BY o.order_id
        ORDER BY o.order_id
        
        LIMIT $pageStart , $rowLimit
        "
        );
    $sql->bindValue(":shopID", $shopID);

    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($result);

    $pageList = ceil(count($totalRecord)/$rowLimit);
}


?> 