<?php
ini_set("display_errors", "1");

//to use session
session_start();

include "../Model/dbConnection.php";

// trim the input to avoid spaces which can be a problem when inserting into database
$shopName = trim($_POST["shopName"]);
$sellerName = trim($_POST["sellerName"]);
$email = trim($_POST["email"]);
$password = trim($_POST["password"]);
$phone = trim($_POST["phone"]);
// $address = trim($_POST["address"]);
$date = date("Y-m-d");

// to avoid undefined array key occurs if only one error;
$shopNameErr = "";
$emailErr = "";

if (isset($_POST['register'])) {
    // create an instance of DB connection
    $db = new DBConnection();
    // call the function connect() in the new instance which will return a new PDO object and assigning to variable pdo
    $pdo = $db->connect();


    //check shop name has already taken from m_shop
    if ($shopName) {
        $sql = $pdo->prepare("SELECT * FROM m_shop WHERE shop_name = :shopName");
        $sql->bindValue(":shopName", $shopName);
        $sql->execute();
        $shopNameResult = $sql->fetchAll(PDO::FETCH_ASSOC);
        if (count($shopNameResult) > 0) {
            $_SESSION["shopNameErr"] = "Shop name already exists!";
            header("Location: ../View/createSellerAccount.php");
            exit;
        }
    }

    //check email has already taken from m_seller
    if ($email) {
        $sql = $pdo->prepare("SELECT * FROM m_seller WHERE email = :email");
        $sql->bindValue(":email", $email);
        $sql->execute();
        $emailResult = $sql->fetchAll(PDO::FETCH_ASSOC);
        if (count($emailResult) > 0) {
            $_SESSION["emailErr"] = "Email already exists!";
            header("Location: ../View/createSellerAccount.php");
            exit;
        }
    }



    //Insert information shop name into m_shop database
    try {
        $pdo->beginTransaction();

        // Insert information shop name into m_shop database
        $sql = $pdo->prepare("
            INSERT INTO m_shop
            (shop_name, shop_soldCount, total_profit, order_number, del_flg, create_date, shop_profilepic, shop_coverpic)
            VALUES
            (:shopName, :shopSoldCount, :totalProfit, :orderNumber, :delFlg, :createDate, :shopProfilePic, :shopCoverPic)
        ");

        $sql->bindValue(':shopName', $shopName);
        $sql->bindValue(':shopSoldCount', 0);
        $sql->bindValue(':totalProfit', 0);
        $sql->bindValue(':orderNumber', 0);
        $sql->bindValue(':delFlg', 0);
        $sql->bindValue(':createDate', $date);
        $sql->bindValue(':shopProfilePic', 0);
        $sql->bindValue(':shopCoverPic', "nocover");

        $sql->execute();

        // Retrieve the generated shop_id
        $shopId = $pdo->lastInsertId();

        // Insert email, password, contact phone, address into m_seller
        $sqlSeller = $pdo->prepare("
            INSERT INTO m_seller
            (seller_name, shop_id, password, email, seller_phone, shop_coinOwn, del_flg, create_date)
            VALUES
            (:sellerName, :shopId, :password, :email, :sellerPhone, :shopCoinOwn, :delFlg, :createDate)            
        ");

        $sqlSeller->bindValue(':sellerName', $sellerName);
        $sqlSeller->bindValue(':shopId', $shopId);
        $sqlSeller->bindValue(':password', $password);
        $sqlSeller->bindValue(':email', $email);
        $sqlSeller->bindValue(':sellerPhone', $phone);
        $sqlSeller->bindValue(':shopCoinOwn', 0);
        $sqlSeller->bindValue(':delFlg', 0);
        $sqlSeller->bindValue(':createDate', $date);

        $sqlSeller->execute();

        $pdo->commit();
    } catch (PDOException $e) {
        print_r($e);
        $pdo->rollback();
        // handle the exception
    }


    $_SESSION["createDisplay"] = "block";
    header("Location: ../View/createSellerAccount.php");
}
