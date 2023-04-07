<?php
ini_set("display_errors", "1");
session_start();

include "../Model/dbConnection.php";

$db = new DBConnection();
$pdo = $db->connect();

$sql = $pdo->prepare(
    "
    SELECT title FROM m_aboutus ORDER BY aboutus_id DESC LIMIT 1;
    "
);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
// print_r($result);
$_SESSION["title"]= $result;

$sql = $pdo->prepare(
    "
    SELECT description FROM m_aboutus ORDER BY aboutus_id DESC LIMIT 1;
    "
);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
// print_r($result);
$_SESSION["description"]= $result;


$sql = $pdo->prepare(
    "
    SELECT title,description FROM t_paragraph ORDER BY paragraph_id DESC LIMIT 2; 
    "
);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
// print_r($result);
$_SESSION["aboutu_paragraph"]= $result;





header("Location: ../View/about_us.php");
