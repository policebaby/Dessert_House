<?php
ini_set("display_errors", "1");
// session_start();

include "../Model/dbConnection.php";

$db = new DBConnection();
$pdo = $db->connect();

$sql = $pdo->prepare(
    "SELECT * FROM m_shop WHERE del_flg = 0  LIMIT 4"
);
$sql->execute();
$shops = $sql->fetchAll(PDO::FETCH_ASSOC);
// $_SESSION["homeshops"]= $result;
// echo "<pre>";
// print_r($result);
// header("Location: ../View/user_home.php");

if(isset($_POST["dessertname"])){
    echo "ok";
}


