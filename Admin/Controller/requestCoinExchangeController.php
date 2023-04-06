<?php

include "../Model/dbConnection.php";

$db = new DBConnection();
$pdo=$db->connect();

// pagination
if(isset($_GET["page"])){
    $currentPage=$_GET["page"];
  }else{
    $currentPage=1;
  }
  
  $rowsPerPage = 6;
  $pageStart=($currentPage-1)*$rowsPerPage;
  $pageStart =($pageStart<1)? 0 : $pageStart;

// to calcualte total record for pagination
$totalRecordSql = $pdo->prepare("SELECT request_id FROM T_request_coin_exchange;
");
$totalRecordSql->execute();
$totalRecordResult = count($totalRecordSql->fetchall(PDO::FETCH_ASSOC));

// to know how many pagination button going to show
$buttonNumber=ceil($totalRecordResult/$rowsPerPage);

// to display informations based on the button number
$showRequestSql=$pdo->prepare("SELECT 
rce.request_id, 
rce.user_id,
u.user_name, 
rce.create_date, 
rce.cash_amount, 
rce.status, 
u.user_email, 
u.user_phone, 
rce.receipt 
FROM 
T_request_coin_exchange rce 
JOIN M_user u ON rce.user_id = u.user_id 
ORDER BY rce.create_date DESC LIMIT $pageStart,$rowsPerPage;");
$showRequestSql->execute();
$showRequestResult=$showRequestSql->fetchAll(PDO::FETCH_ASSOC);


// display today currency
$todayRateSql= $pdo->prepare("SELECT to_mmk, to_usd, to_euro, to_pound FROM M_coin;");
$todayRateSql->execute();
$todayRateResult = $todayRateSql->fetchAll(PDO::FETCH_ASSOC);


// calculate today sold coin
$todayCoinSql=$pdo->prepare("SELECT SUM(requested_coin_count) AS coins_sold_today
FROM T_request_coin_exchange
WHERE DATE(create_date) = CURDATE();");
$todayCoinSql->execute();
$todayCoinResult=$todayCoinSql->fetchAll(PDO::FETCH_ASSOC);

// calculate total sold coin
$totalCoinSql=$pdo->prepare("SELECT SUM(requested_coin_count) AS coins_sold_total
FROM T_request_coin_exchange;");
$totalCoinSql->execute();
$totalCoinResult=$totalCoinSql->fetchAll(PDO::FETCH_ASSOC);



?>