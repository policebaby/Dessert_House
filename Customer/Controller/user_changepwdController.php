<?php
ini_set("display_errors", "1");
session_start();
include "../Model/dbConnection.php";

if (isset($_POST["changepwd"])) {
    $oldpwd = $_POST["oldpwd"];
    $newpwd = $_POST["newpwd"];
    $id = $_SESSION["userID"];
    // echo $oldpwd, $newpwd;

    $db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(
        "SELECT * FROM m_user WHERE user_id = :id "
    );
    $sql->bindValue(":id", $id);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    $dbpassword = $result[0]['user_password'];
    // echo "<pre>";
    // print_r($result);

    if (password_verify($oldpwd, $dbpassword)) {
        //oldpassword correct
        // echo "correct";
        $sql= $pdo->prepare(
            "
            UPDATE m_user SET
            user_password = :newpwd
            WHERE user_id = :id
            "
        );
        $sql->bindValue(":newpwd",password_hash($newpwd,PASSWORD_DEFAULT));
        $sql->bindValue(":id",$id);
        $sql->execute();
        $_SESSION["incorrectoldpwd"]= "";
        header("Location: ../View/user_login.php");
    } else {
        // incorrect oldpassword
        $_SESSION["incorrectoldpwd"]="Your old password is incorrect!";
        header("Location: ../View/user_change_pwd.php");
    }
} else {
    echo "error";
}
