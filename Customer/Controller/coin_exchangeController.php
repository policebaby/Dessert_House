<?php
ini_set("display_errors", "1");
session_start();
include "../Model/dbConnection.php";


if (isset($_POST["request"])) {
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
    $pdo = $database->connect();

    $file = $_FILES['receipt']['name'];
    //receipt insert 
    $location = $_FILES['receipt']['tmp_name'];
    $extension = pathinfo($file)['extension'];
    if (move_uploaded_file($location,"../../storages/receipt/".$userID.time().".".$extension)) {

        $sql = $pdo->prepare(
            "
        INSERT INTO T_request_coin_exchange
        (
            user_id,
            currency_from,
            cash_amount,
            requested_coin_count,
            receipt,
            create_date
        )
        VALUES
        (
            :id,
            :currenytype,
            :calculated,
            :coinRequest,
            :receipt,
            :createDate
        )
        "
        );
        $sql->bindValue(":id", $userID);
        $sql->bindValue(":currenytype", $currency);
        $sql->bindValue(":calculated", $calculated);
        $sql->bindValue(":coinRequest", $coinAmount);
        $sql->bindValue(":receipt", "receipt/".$userID.time().".".$extension);
        $sql->bindValue(":createDate", date('y-m-d'));
        $sql->execute();
        header("Location: ../View/coin_exchange.php");
    }
    
} else {
    echo "error";
}
