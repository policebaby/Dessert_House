<?php 

include "../Model/dbConnection.php";

session_start();
// call connection db
$db = new DBConnection();
$pdo = $db->connect();

$order_id = $_POST['orderId'];
$shopID = $_SESSION["shopID"];

if (isset($_POST['AcceptBtn'])) {

    $sql = $pdo->prepare
    (
        "
        UPDATE t_order SET 
        status = 1 
        WHERE shop_id = :shopID AND order_id = :orderID
        "
    );
    $sql->bindValue(":shopID",$shopID);
    $sql->bindValue(":orderID",$order_id);
    $sql->execute();

    
    header("Location: ../View/incomingOrder.php");
} elseif (isset($_POST['RejectBtn'])) {
    $sql = $pdo->prepare
    (
        "
        UPDATE t_order SET 
        status = 0 
        WHERE shop_id = :shopID AND order_id = :orderID
        "
    );
    $sql->bindValue(":shopID",$shopID);
    $sql->bindValue(":orderID",$order_id);
    $sql->execute();
    header("Location: ../View/incomingOrder.php");
}

?>