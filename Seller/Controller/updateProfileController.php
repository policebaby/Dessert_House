<?php

// call database
include "../Model/dbConnection.php";
session_start();
// post data
if (isset($_POST["saveBtn"])) {

    $sellerName      = $_POST["sellerName"];
    $shopName        = $_POST["shop_name"];
    $shopAddress     = $_POST["shopAddress"];
    $pwd             = $_POST["password"];
    $email           = $_POST["email"];
    $phone           = $_POST["seller_phone"];


    // profile data
    $file = $_FILES['profile']['name'];
    // print_r($file);
    if ($file != "") {
        $sellerId  = $_SESSION["sellerID"];
        $shopId     = $_SESSION["shopID"];
        // echo $sellerId;
        // echo $shopId;
        $Location  = $_FILES['profile']['tmp_name'];
        $extension = pathinfo($file)['extension'];

        if (move_uploaded_file($Location, "../storages/profile/" .$shopId. "." .$extension)) {

            // call connection db
            $db  = new DBConnection();
            $pdo = $db->connect();

            $sql = $pdo->prepare(
                "
            UPDATE m_seller SET
                seller_name      = :sellerName,
                password         = :pwd,
                email            = :email,
                seller_phone     = :phone
            WHERE seller_id  = :id
            "
            );

            $sql->bindValue(":sellerName", $sellerName);
            $sql->bindValue(":pwd", $pwd);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":phone", $phone); 
            $sql->bindValue(":id", $sellerId);
            $sql->execute();

            $sql = $pdo->prepare(
                "
            UPDATE m_shop SET
                shop_name        = :shopName,
                shopAddress      = :shopAddress,
                shop_profilepic  = :photo
            WHERE shop_id  = :id
            "
            );
            $sql->bindValue(":shopName", $shopName);
            $sql->bindValue(":shopAddress", $shopAddress);
            $sql->bindValue(":photo", "../storages/profile/" .$shopId. "." .$extension);
            $sql->bindValue(":id", $shopId);
            $sql->execute();



            header("Location: ../View/sellerProfile.php");
        }
    } else {
        // echo "OK";
        $sellerId  = $_SESSION["sellerID"];
        $shopId  = $_SESSION["shopID"];
        // echo $sellerId,$shopId;

        // // call connection db
        $db  = new DBConnection();
        $pdo = $db->connect();


        $sql = $pdo->prepare(
            "
            UPDATE m_seller SET
            seller_name      = :sellerName,
            password         = :pwd,
            email            = :email,
            seller_phone     = :phone
            WHERE seller_id  = :id
        "
        );

        $sql->bindValue(":sellerName", $sellerName);
        $sql->bindValue(":pwd", $pwd);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":phone", $phone);
        $sql->bindValue(":id", $sellerId);
        $sql->execute();

        $sql = $pdo->prepare(
            "
        UPDATE m_shop SET
            shop_name        = :shopName,
            shopAddress      = :shopAddress
        WHERE shop_id  = :id
        "
        );
        $sql->bindValue(":shopName", $shopName);
        $sql->bindValue(":shopAddress", $shopAddress);
        $sql->bindValue(":id", $shopId);
        $sql->execute();


        header("Location: ../View/sellerProfile.php");
    }
} else {
    // file uploaded or cancel btn
    header("Location: ../View/sellerProfile.php");
}
