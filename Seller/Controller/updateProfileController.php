<?php

// call database
include "../Model/dbConnection.php";
session_start();
// post data
if (isset($_POST["saveBtn"])) {

    $sellerName      = $_POST["sellerName"];
    $shopName        = $_POST["shop_name"];
    $pwd             = $_POST["password"];
    $email           = $_POST["email"];
    $phone           = $_POST["seller_phone"];


    // profile data
    $file = $_FILES['profile']['name'];
    $cvfile = $_FILES['cover']['name'];
    // print_r($cvfile);
    if ($file != "" && $cvfile != "") {
        $sellerId  = $_SESSION["sellerID"];
        $shopId     = $_SESSION["shopID"];
        // echo $sellerId;
        // echo $shopId;
        $Location  = $_FILES['profile']['tmp_name'];
        $cvLocation  = $_FILES['cover']['tmp_name'];
        $extension = pathinfo($file)['extension'];
        $cvextension = pathinfo($cvfile)['extension'];

        move_uploaded_file($Location, "../../storages/shopprofile/" . $shopId . "." . $extension);
        move_uploaded_file($cvLocation, "../../storages/shopcover/" . $shopId . "." . $cvextension);

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
        // $sql->bindValue(":pwd", password_hash($pwd,PASSWORD_DEFAULT));
        $sql->bindValue(":email", $email);
        $sql->bindValue(":phone", $phone);
        $sql->bindValue(":id", $sellerId);
        $sql->execute();

        $sql = $pdo->prepare(
            "
            UPDATE m_shop SET
                shop_name        = :shopName,
                shop_profilepic  = :photo,
                shop_coverpic = :cover
            WHERE shop_id  = :ID
            "
        );
        $sql->bindValue(":shopName", $shopName);
        $sql->bindValue(":photo", "../../storages/shopprofile/" . $shopId . "." . $extension);
        $sql->bindValue(":cover", "../../storages/shopcover/" . $shopId . "." . $cvextension);
        $sql->bindValue(":ID", $shopId);
        $sql->execute();

        header("Location: ../View/sellerProfile.php");
    }
    if ($file != "" && $cvfile == "") {
        $sellerId  = $_SESSION["sellerID"];
        $shopId     = $_SESSION["shopID"];
        // echo $sellerId;
        // echo $shopId;
        $Location  = $_FILES['profile']['tmp_name'];
        $extension = pathinfo($file)['extension'];

        move_uploaded_file($Location, "../../storages/shopprofile/" . $shopId . "." . $extension);


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
        // $sql->bindValue(":pwd", password_hash($pwd,PASSWORD_DEFAULT));
        $sql->bindValue(":email", $email);
        $sql->bindValue(":phone", $phone);
        $sql->bindValue(":id", $sellerId);
        $sql->execute();

        $sql = $pdo->prepare(
            "
                    UPDATE m_shop SET
                        shop_name        = :shopName,
                        shop_profilepic  = :photo
                    WHERE shop_id  = :ID
                    "
        );
        $sql->bindValue(":shopName", $shopName);
        $sql->bindValue(":photo", "../../storages/shopprofile/" . $shopId . "." . $extension);
        $sql->bindValue(":ID", $shopId);
        $sql->execute();

        header("Location: ../View/sellerProfile.php");
    }
    if ($file == "" && $cvfile != "") {
        $sellerId  = $_SESSION["sellerID"];
        $shopId     = $_SESSION["shopID"];
        // echo $sellerId;
        // echo $shopId;

        $cvLocation  = $_FILES['cover']['tmp_name'];

        $cvextension = pathinfo($cvfile)['extension'];

        move_uploaded_file($cvLocation, "../../storages/shopcover/" . $shopId . "." . $cvextension);

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
        // $sql->bindValue(":pwd", password_hash($pwd,PASSWORD_DEFAULT));
        $sql->bindValue(":email", $email);
        $sql->bindValue(":phone", $phone);
        $sql->bindValue(":id", $sellerId);
        $sql->execute();

        $sql = $pdo->prepare(
            "
                    UPDATE m_shop SET
                        shop_name        = :shopName,
                        shop_coverpic = :cover
                    WHERE shop_id  = :ID
                    "
        );
        $sql->bindValue(":shopName", $shopName);
        $sql->bindValue(":cover", "../../storages/shopcover/" . $shopId . "." . $cvextension);
        $sql->bindValue(":ID", $shopId);
        $sql->execute();

        header("Location: ../View/sellerProfile.php");
    } else {
        // echo "OK";
        $sellerId  = $_SESSION["sellerID"];
        $shopId  = $_SESSION["shopID"];
        // echo $shopId;

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
                    shop_name        = :shopName
                    WHERE shop_id  = :ID
                "
        );
        $sql->bindValue(":shopName", $shopName);
        $sql->bindValue(":ID", $shopId);
        $sql->execute();

        echo $shopId;
        echo "fail";

        // header("Location: ../View/sellerProfile.php");
    }
} else {
    echo "error error ";
    // file uploaded or cancel btn
    // header("Location: ../View/sellerProfile.php");
}
