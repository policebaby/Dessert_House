<?php

include "../Model/dbConnection.php";

$db = new DBConnection();
$pdo=$db->connect();


if(isset($_POST["requestId"])){
   
$requestId = $_POST["requestId"];

$approveSql=$pdo->prepare("UPDATE T_request_coin_exchange AS rce
JOIN M_user AS u ON rce.user_id = u.user_id
SET rce.status = 1, u.user_coin = u.user_coin + rce.requested_coin_count
WHERE rce.request_id = :request_id;
");
$approveSql->bindValue(":request_id",$requestId);
$approveSql->execute();

header ("Location:../View/ratingCoinPage.php");



}




?>