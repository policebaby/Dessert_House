<?php
ini_set("display_errors", "1");
session_start();
include "../Model/dbConnection.php";

if (isset($_POST["reset"])) {
    $fourdigit = $_POST["fourdigit"];
    $newpwd = $_POST["newpwd"];

    $database = new DBConnection();
    $pdo = $database->connect();

    $sql = $pdo->prepare(
        " SELECT * FROM M_user WHERE fourdigit_code = :fourdigit"
    );
    $sql->bindValue(":fourdigit", $fourdigit);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($result);
    if (count($result) == 0) {
        //incorrect digit 
        $_SESSION["digitIncorrect"] = "Incorrect Digit!";
        header("Location: ../View/reset_pwd.php");
    } else {
        // CORRECT DIGIT    
        $_SESSION["digitIncorrect"] = " ";
        $sql = $pdo->prepare(
            "
            UPDATE M_user SET
            user_password = :newpwd
            WHERE fourdigit_code = :fourdigit
            "
        );
        $sql->bindValue(":newpwd", password_hash($newpwd,PASSWORD_DEFAULT));
        $sql->bindValue(":fourdigit", $fourdigit);
        $sql->execute();
        
        header("Location: ../View/success_forget_pwd.php");
    }
} else {
    echo "error";
}
