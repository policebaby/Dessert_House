<?php
ini_set("display_errors", "1");
session_start();

include "../Model/dbConnection.php";

$db = new DBConnection();
$pdo = $db->connect();

$sql = $pdo->prepare(
    "SELECT * FROM m_ratingcategory "
);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["ratingTypes"]= $result;
// echo "<pre>";
// print_r($result);

$sql = $pdo->prepare(
    "
    SELECT * FROM m_shop WHERE del_flg = 0;
    "
    );

    $sql->execute();
    $shops = $sql->fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // print_r($shops);





// header("Location: ../View/contact_seller.php");

?>