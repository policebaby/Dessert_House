<?php

include "../Model/dbConnection.php";

$db = new DBConnection();
$pdo=$db->connect();

$showPSql=$pdo->prepare("SELECT title, description FROM t_paragraph WHERE del_flg=0");
$showPSql->execute();
$showPresult=$showPSql->fetchall(PDO::FETCH_ASSOC);



?>  