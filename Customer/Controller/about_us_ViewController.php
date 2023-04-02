<?php
ini_set("display_errors", "1");
session_start();

include "../Model/dbConnection.php";

$db = new DBConnection();
$pdo = $db->connect();

$sql = $pdo->prepare(
    "
    SELECT title FROM m_aboutus ORDER BY aboutus_id DESC LIMIT 1;; 
    "
);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
// print_r($result);
$_SESSION["title"]= $result;

$sql = $pdo->prepare(
    "
    SELECT description FROM m_aboutus ORDER BY aboutus_id DESC LIMIT 1;; 
    "
);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
// print_r($result);
$_SESSION["description"]= $result;


$sql = $pdo->prepare(
    "
    SELECT title FROM t_paragraph ORDER BY paragraph_id DESC LIMIT 1; 
    "
);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
// print_r($result);
$_SESSION["subtitle"]= $result;


$sql = $pdo->prepare(
    "
    SELECT description FROM t_paragraph ORDER BY paragraph_id DESC LIMIT 1;; 
    "
);
$sql->execute();
$t_paragraph = $sql->fetchAll(PDO::FETCH_ASSOC);
// print_r($result);
$_SESSION["t_paragraph"]= $t_paragraph;

$sql = $pdo->prepare(
    "
    SELECT sec_title FROM t_paragraph ORDER BY paragraph_id DESC LIMIT 1;; 
    "
);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
print_r($result);
$_SESSION["sec_title"]= $result;


$sql = $pdo->prepare(
    "
    SELECT sec_description FROM t_paragraph ORDER BY paragraph_id DESC LIMIT 1;; 
    "
);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
// print_r($result);
$_SESSION["sec_description"]= $result;

header("Location: ../View/about_us.php");










?>