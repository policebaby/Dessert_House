<?php
ini_set("display_errors", "1");
session_start();
// unset($_SESSION["username"]);


include "../Model/dbConnection.php";

if (isset($_POST["login"])) {
    $name = $_POST["username"];
    $pwd = $_POST["password"];

    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
        SELECT * FROM M_user WHERE user_name = :name;
        "
    );
    $sql->bindValue(":name", $name);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // print_r($result);

    if (count($result) == 0) {
        //fail login
        $_SESSION["error"] = "UserName OR Password not match!!";
        header("Location: ../View/user_login.php");
    }else {
        $dbpassword = $result[0]['user_password'];
        $userid = $result[0]['user_id'];
        $verify = $result[0]['verify'];
        $del_flg = $result[0]['del_flg'];
        if (password_verify( $pwd,$dbpassword)) {
            // login success
            $_SESSION["error"] = " ";
            $_SESSION["username"] = $name;
            $_SESSION["userID"] = $userid;
            if ($verify == 1 && $del_flg == 0) {
                echo "email & pwd correct!";
                header("Location: ../View/user_home.php");
            } else {
                // verification needed or banned
                if($verify == 0){
                    $_SESSION["error"] = "You Need To Verify!";
                }else if($del_flg == 1){
                    $_SESSION["error"] = "Your account has been banned! ";
                }
                // echo "need verify";
                header("Location: ../View/user_login.php");
            }
        } else {
            // password or username doesn't match
            $_SESSION["error"] = "UserName OR Password not match!!";
            echo "email or pwd wrong!";
            header("Location: ../View/user_login.php");
        }
    }
}
