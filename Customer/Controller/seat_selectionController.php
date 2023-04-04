<?php
ini_set("display_errors", "1");
session_start();
include "../Model/dbConnection.php";

if(isset($_POST["send"])){
    $booking =$_POST["send"];
    $userid = $_SESSION["userID"];
    echo $booking;
}else{
    echo "error";
}

$db = new DBConnection();
$pdo = $db->connect();
$sql = $pdo->prepare(
    "
    INSERT INTO t_booking_seat 
    (
        user_id,
        order_id,
        booking_seat_status,
        create_date
    )
    VALUES
    (
        :userid,
        :userid,
        :createDate
    )"
    );
    $sql->bindValue(":userid",$userid);
    $sql->bindValue(":createDate",date('y-m-d'));
    $sql->execute();













// header("Location: ../View/reservationForm.php");
?>