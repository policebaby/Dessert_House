<?php

include "../Model/dbConnection.php";

$db = new DBConnection();
$pdo=$db->connect();

// code to connect to the database goes here
$title = $_POST['title'];
$sql = $pdo->prepare('SELECT description FROM t_paragraph WHERE title = :title');
$sql->bindValue(":title",$title);
$sql->execute();
$result = $sql->fetch(PDO::FETCH_ASSOC);
echo $result['description'];




?>