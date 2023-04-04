<?php
ini_set("display_errors", "1");
session_start();
include "../Model/dbConnection.php";

if(isset($_POST["dessertname"])){
    $dessertname = $_POST["dessertname"];
    $shopid = $_POST["shopid"];

    $db = new DBConnection();
    $pdo = $db->connect();
    
    $sql= $pdo->prepare(
        "
        SELECT * FROM M_product WHERE product_name LIKE :dessertname 
        AND shop_id = :shopid
        "
    );
    $sql->bindValue(":dessertname",'%'.$dessertname.'%');
    $sql->bindValue(":shopid",$shopid);
    $sql->execute();
    $productList = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($productList);
}



?>