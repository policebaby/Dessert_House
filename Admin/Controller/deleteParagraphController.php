<?php
include "../Model/dbConnection.php";
$db = new DBConnection();
$pdo=$db->connect();

$title = $_POST['title'];
$sql = $pdo->prepare('UPDATE T_paragraph SET del_flg = 1 WHERE title = :title');
$sql->bindValue(":title", $title);
$result = $sql->execute();
if ($result) {
  echo "Success";
} else {
  echo "Error";
}
?>
