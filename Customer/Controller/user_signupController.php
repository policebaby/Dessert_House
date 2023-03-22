<?php 
ini_set("display_errors", "1");
session_start();

include "../Model/dbConnection.php";

if(isset($_POST["signup"])){
    $name = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $pwd = $_POST["password"];
    $gender = $_POST["gender"];
    

    echo $name;
    echo $email;
    echo $phone;
    echo $pwd;
    echo $gender;
    

    // $database = new DBConnection();
    // $pdo= $database->connect();

    //check name is already taken or not
    // $sql = $pdo->prepare(
    //     "SELECT name FROM M_user WHERE name = :name"
    // );
    // $sql->bindValue(":name", $name);
    // $sql->execute();

    // $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    //check result exist or not 
    // if (count($result) == 0) {
        //insert data 
        // $sql= $pdo->prepare(
        //     "
        //     INSERT INTO M_user
        //     (
        //         user_name,
        //         user_password,
        //         user_email,
        //         user_phone,
        //         gender
        //     )
        //     VALUES
        //     (
        //         :name,
        //         :pwd,
        //         :email,
        //         :phone,
        //         :gender
        //     )
        //     "
        // );
        // $sql->bindValue(":name", $name);
        // $sql->bindValue(":pwd", password_hash($pwd, PASSWORD_DEFAULT));
        // $sql->bindValue(":email", $email);
        // $sql->bindValue(":phone", $phone);
        // $sql->bindValue(":gender", $gender);
        // $sql->execute();

    // }
} else {
    echo "error";
}


?>