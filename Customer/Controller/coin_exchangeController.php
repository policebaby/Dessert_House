<?php
ini_set("display_errors", "1");
session_start();
include "../Model/dbConnection.php";

if(isset($_POST["request"])){
    $userID = $_SESSION["userID"];
    $coinAmount = $_POST["coinAmount"];
    $currency = $_POST["currencytype"];
    $calculated = $_POST["calculated"];
    echo $userID;
    echo "<br>";
    echo $coinAmount;
    echo "<br>";
    echo $currency;
    echo "<br>";
    echo $calculated;
    
    $database = new DBConnection();
    $pdo= $database->connect();

    $sql=$pdo->prepare(
        "
        INSERT INTO T_request_coin_exchange
        (
            user_id,
            currency_from,
            cash_amount,
            requested_coin_count,
            create_date
        )
        VALUES
        (
            :id,
            :currenytype,
            :calculated,
            :coinRequest,
            :createDate
        )
        "
        );
        $sql->bindValue(":id",$userID);
        $sql->bindValue(":currenytype",$currency);
        $sql->bindValue(":calculated",$calculated);
        $sql->bindValue(":coinRequest",$coinAmount);
        $sql->bindValue(":createDate",date('y-m-d'));
        $sql->execute();

        header("Location: ../View/coin_exchange.php");

}else {
    echo "error";
}
?>