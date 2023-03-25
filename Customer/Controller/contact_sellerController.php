<?php
session_start();
include "../Model/dbConnection.php";

if(isset($_POST["submit_btn"])){
    $username = $_SESSION["username"];
    $shopname = $_POST["shopname"];
    $message = $_POST["message"];

}

$db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
        INSERT INTO t_rating
        (
            shop_id,
            user_id,
            rating_id,
            create_date
        )
        VALUES
        (
            :shopname,
            :username,
            :message,
            :date
        );
        "
    );

    $sql->bindValue(":shopname",$shopname);
    $sql->bindValue(":username",$username);
    $sql->bindValue(":message",$message);
    $sql->bindValue(":date",date("Y-m-d"));

    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    $sql = $pdo->prepare(
        "
        SELECT shop_name FROM m_shop WHERE del_flg = 0;
        "
    );


    $sql->bindValue(":shopname",$shopname);
    $sql->execute();
    $shopname = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo $shopname;
?>