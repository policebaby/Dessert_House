<?php

include "../Model/dbConnection.php";

$db = new DBConnection();
$pdo=$db->connect();

if(isset($_POST["mmk"])){
    $mmkValue=$_POST["mmkValue"];
    $mmkSql=$pdo->prepare("UPDATE m_coin
    SET to_mmk = :mmkValue");
    $mmkSql->bindValue(":mmkValue",$mmkValue);
    $mmkSql->execute();
}

if(isset($_POST["usd"])){
    $usdValue=$_POST["usdValue"];
    $usdSql=$pdo->prepare("UPDATE m_coin
    SET to_usd = :usdValue");
    $usdSql->bindValue(":usdValue",$usdValue);
    $usdSql->execute();
}

if(isset($_POST["eur"])){
    $eurValue=$_POST["eurValue"];
    $eurSql=$pdo->prepare("UPDATE m_coin
    SET to_euro = :eurValue");
    $eurSql->bindValue(":eurValue",$eurValue);
    $eurSql->execute();
}

if(isset($_POST["pound"])){
    $poundValue=$_POST["poundValue"];
    $poundSql=$pdo->prepare("UPDATE m_coin
    SET to_pound = :poundValue");
    $poundSql->bindValue(":poundValue",$poundValue);
    $poundSql->execute();
}

header ("Location:../View/ratingCoinPage.php");

?>