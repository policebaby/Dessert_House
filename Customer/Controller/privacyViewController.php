<?php
ini_set("display_errors", "1");
session_start();

include "../Model/dbConnection.php";

$db = new DBConnection();
$pdo = $db->connect();

$sql = $pdo->prepare(
    "
    SELECT paragraph FROM m_privacy_policy WHERE del_flg = 0 ORDER BY p_pid DESC LIMIT 2; 
    "
);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["paragraph"]= $result;

header("Location: ../View/privacy&policy.php");
