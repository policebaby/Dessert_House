<?php

include "../Model/dbConnection.php";

$db = new DBConnection();
$pdo=$db->connect();

if(isset($_GET["page"])){
    $pageNumber=$_GET["page"];
  }else{
    $pageNumber=1;
  }

if (isset($_POST["requestId"])) {
    $requestId = $_POST["requestId"];

    $rejectSql=$pdo->prepare("UPDATE T_request_coin_exchange
    SET status = 2
    WHERE request_id = :request_id;
");
    $rejectSql->bindValue(":request_id", $requestId);
    $rejectSql->execute();
}

header("Location:../View/ratingCoinPage.php?page=$pageNumber");