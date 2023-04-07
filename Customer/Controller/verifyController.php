<?php
ini_set("display_errors", "1");
include "../Model/dbConnection.php";

$code = $_GET["code"];

$db = new DBConnection();
$pdo = $db->connect();

$sql = $pdo->prepare(
    "SELECT * FROM m_user WHERE code = :code"
);

$sql->bindValue(":code", $code);
$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

if (count($result) == 0) {
    echo "wrong verify code!";
} else {
    $sql = $pdo->prepare(
        " UPDATE m_user  SET 
        verify = 1 
        WHERE code = :code
        "
    );
    $sql->bindValue(":code", $code);
    $sql->execute();
    header("Location:../View/user_login.php");
}
