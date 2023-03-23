<?php
ini_set("display_errors", "1");
session_start();
include "../Model/dbConnection.php";
include "./shared/generateCode.php";
include "./shared/mailSender.php";

if (isset($_POST["forgetpwd"])) {
    $email = $_POST["email"];
    $generate = new Generate();
    $fourdigit = $generate -> genCode(4);

    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(
        "
        SELECT * FROM M_user WHERE user_email = :email;
        "
    );
    $sql->bindValue(":email", $email);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // print_r($result);
    if(count($result)==0){
        //email does not exist
        $_SESSION["emailcheck"] = "Your email is not registered!";
        // echo "error";
        header("Location: ../View/forget_password.php");
    }else {
        // email exist
        $_SESSION["emailcheck"] = " ";
        $sql = $pdo->prepare(
            "
            UPDATE M_user SET 
            fourdigit_code = :fourdigit
            WHERE user_email = :email
            "
            );
            $sql->bindValue(":email",$email);
            $sql->bindValue(":fourdigit",$fourdigit);
            $sql->execute();


        $mail = new SendMail();
        $mail-> sendMail($email,
        "Your Password Has Been Reset",
        "<h3> Do not share this code to anyone!</h3>
        <br>
        <h3> $fourdigit </h3>
        ");

        header("Location: ../View/reset_pwd.php");
    }
} else {
    echo "error";
}
