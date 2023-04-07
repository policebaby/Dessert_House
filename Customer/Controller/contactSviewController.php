<?php
ini_set("display_errors", "1");
session_start();

include "../Model/dbConnection.php";

$db = new DBConnection();
$pdo = $db->connect();

$sql = $pdo->prepare(
    "SELECT * FROM m_ratingCategory "
);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["ratingTypes"]= $result;
echo "<pre>";
print_r($result);

header("Location: ../View/contact_seller.php");

?>