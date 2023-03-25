<?php
ini_set("display_errors", "1");
session_start();
include "../Model/dbConnection.php";

if(isset($_POST["request"])){
    $userID = $_SESSION["userID"];
    $currency = $_POST["currency"];
    $calculated = $_POST["calculated"];
    // echo $userID, $currency,$calculated;
}else {
    echo "error";
}
?>