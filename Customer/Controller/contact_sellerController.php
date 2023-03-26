<?php
session_start();
include "../Model/dbConnection.php";

if(isset($_POST["submit_btn"])){
    $username = $_SESSION["username"];
    $shopname = $_POST["shopname"];
    $message = $_POST["message"];

}


try{
    $db = new DBConnection();
    $pdo = $db->connect();

    // $sql = "INSERT INTO t_rating(shop_id, user_id, rating_id, create_date)VALUES (:shopname, :username, :message,:date)";
    $sql = "INSERT INTO t_contact_seller( user_name, shop_name, message, created_at) VALUES ('$username', '$shopname', '$message', NOW())";

    $st = $pdo->prepare($sql);    

    // $st->bindValue(":shopname",$shopname,PDO::PARAM_STR);
    // $st->bindValue(":username",$username,PDO::PARAM_STR);
    // $st->bindValue(":message",$message,PDO::PARAM_STR);
    // $st->bindValue(":date",date("Y-m-d"),PDO::PARAM_STR);

    $st->execute();
    echo "success ";
    echo "<br>";
    // $result = $st->fetchAll(PDO::FETCH_ASSOC);

    $select = "SELECT * FROM contact_seller";
    // $st = $pdo->prepare(
    //     "
    //     SELECT shop_name FROM m_shop WHERE del_flg = 0;
    //     "
    // );

    $result = $pdo->query($select);

    // $se->bindValue(":shopname",$shopname);
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        $shopname = $row['shop_name'];
    }

    echo $shopname;
}catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
?>
