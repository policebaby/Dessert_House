<?php
ini_set("display_errors", "1");
include "../Model/dbConnection.php";


session_start();

if(isset($_POST["update"])){
    $name = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $userID =$_SESSION["userID"];
    echo $name,$email,$phone,$userID;
    

    $database = new DBConnection();
    $pdo = $database->connect();

    //profilepic data
    $file =$_FILES['profilepic']['name'];
    if($file!= ""){
        //profilepic exist
        $location = $_FILES['profilepic']['tmp_name'];
        $extension = pathinfo($file)['extension'];

        if (move_uploaded_file($location, "../storages/profile/" . $userID . "." . $extension)) {
        $sql= $pdo->prepare(
            "
            UPDATE M_user SET
            user_name = :name,
            user_email= :email,
            user_phone = :phone,
            user_profilepic= :profilepic
            WHERE user_id = :id
            "
        );
        $sql->bindValue(":profilepic", "profile/" . $userID . "." . $extension);
        }
    }else {
        //no profile pic
        $sql= $pdo->prepare(
            "
            UPDATE M_user SET
            user_name = :name,
            user_email= :email,
            user_phone = :phone
            WHERE user_id = :id
            "
        );
    }
    $sql->bindValue(":name",$name);
    $sql->bindValue(":email",$email);
    $sql->bindValue(":phone",$phone);
    $sql->bindValue(":id",$userID);

    $sql->execute();

    header("Location: ../Controller/user_profileViewController.php ");
    
}else{
    echo "error";
}
?>