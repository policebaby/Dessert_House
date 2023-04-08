<?php

include "../Model/dbConnection.php";

$db = new DBConnection();
$pdo=$db->connect();

$title = $_POST['title'];
$description = $_POST['description'];

// check if the title already exists
$sql = $pdo->prepare('SELECT COUNT(*) FROM t_paragraph WHERE title = :title');
$sql->bindValue(":title", $title);
$sql->execute();
$count = $sql->fetchColumn();

if ($count > 0) {
  // the title already exists, so don't insert a new row
  echo "Error: A paragraph with the same title already exists";
} else {
  // the title doesn't exist, so insert a new row
  $sql = $pdo->prepare('INSERT INTO t_paragraph (title, description, del_flg, create_date) VALUES (:title, :description, 0, NOW())');
  $sql->bindValue(":title",$title);
  $sql->bindValue(":description",$description);
  $sql->execute();
  
  echo "New paragraph saved successfully";
}

