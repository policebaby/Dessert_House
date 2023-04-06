<?php
ini_set("display_errors", "1");
session_start();
include "../Model/dbConnection.php";

if(isset($_POST["send"])){
    $booking =$_POST["send"];
    echo $booking;
    $_SESSION["seat_name"]= $booking;
    // print_r($_SESSION["seat_name"]);
}else{
    echo "error";
}


header("Location: ../View/reservationForm.php");
