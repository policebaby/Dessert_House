<?php

// call database
include "../Model/dbConnection.php";
session_start();
// post data
if (isset($_POST["saveBtn"])) {

    $sellerName   = $_POST["sellerName"];
    $shopName     = $_POST["shop_name"];
    $shopAddress  = $_POST["shopAddress"];
    $pwd          = $_POST["password"];
    $email        = $_POST["email"];
    $phone        = $_POST["seller_phone"];

    // profile data
    $file=$_FILES['profile']['name'];
    if($file != "") {

        $sellerId  = $_SESSION["sellerID"];
        $Location  = $_FILES['profile']['tmp_name'];
        $extension = pathinfo($file)['extension'];

        if (move_uploaded_file($Location, "profile/" . $sellerId . "." . $extension)) {

            // call connection db
            $db  = new DBConnection();
            $pdo = $db->connect();

            $sql = $pdo->prepare(
                "
            UPDATE m_seller SET
                seller_name      = :sellerName,
                shop_name        = :shopName,
                shopAddress      = :shopAddress,
                password         = :pwd,
                email            = :email,
                seller_phone     = :phone,
                shop_profilepic  = :photo
            WHERE seller_id  = :id
            "
            );

            $sql->bindValue(":sellerName", $sellerName);
            $sql->bindValue(":shopName", $shopName);
            $sql->bindValue(":shopAddress", $shopAddress);
            $sql->bindValue(":pwd", $pwd);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":phone", $phone);
            $sql->bindValue(":photo", "profile/" . $sellerId . "." . $extension);
            $sql->bindValue(":id", $sellerId);

            $sql->execute();
            header("Location: ../View/sellerProfile.php");
        }
    } else {
        echo "file upload fail!";
    }
} else {
    header("Location: ../View/sellerProfile.php");
}
