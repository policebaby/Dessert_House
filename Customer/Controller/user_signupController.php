<?php 
ini_set("display_errors", "1");
session_start();

include "../Model/dbConnection.php";
include "./shared/generateCode.php";
include "./shared/mailSender.php";


if(isset($_POST["signup"])){
    $name = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $pwd = $_POST["password"];
    $generate = new Generate();
    $code = $generate -> genCode(256);
    $gender = $_POST["gender"];

    $database = new DBConnection();
    $pdo= $database->connect();

    //check name is already taken or not
    $sql = $pdo->prepare(
        "SELECT user_name FROM m_user WHERE user_name = :name"
    );
    $sql->bindValue(":name", $name);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    //check result exist or not 
    if (count($result) == 0) {
        // insert data 
        $sql= $pdo->prepare(
            "
            INSERT INTO m_user
            (
                user_name,
                user_password,
                code,
                user_email,
                user_phone,
                gender,
                create_date
            )
            VALUES
            (
                :name,
                :pwd,
                :code,
                :email,
                :phone,
                :gender,
                :createDate
            )
            "
        );
        $sql->bindValue(":name", $name);
        $sql->bindValue(":pwd", password_hash($pwd, PASSWORD_DEFAULT));
        $sql->bindValue(":code", $code);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":phone", $phone);
        $sql->bindValue(":gender", $gender);
        $sql->bindValue(":createDate", date('y-m-d'));
        $sql->execute();

        $sql = $pdo->prepare(
            "
            SELECT user_id FROM m_user WHERE user_name = :name
            "
        );
        $sql->bindValue(":name", $name);
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);

        $_SESSION["userID"]= $result[0]["id"];
        $_SESSION["username"] = $name;
        $_SESSION["errorsignup"] = "After signing up.Please verify your account from your email!";
        // $_SESSION["errorsignup"] = "";

        $mail = new SendMail();
        $mail-> sendMail($email,
        "Your Account Has Been Created","<h1> Please click this verify link below to verify your account.</h1><br><a href='http://localhost/Dessert_House/Customer/Controller/verifyController.php?code=$code'> Verify! </a>");
        
        header("Location: ../View/user_signup.php");
    } else {
        $_SESSION["errorsignup"] = "Username has been taken.Use Other name!";
        header("Location: ../View/user_signup.php");
        echo "error";
    }
} else {
    echo "error";
}


?>