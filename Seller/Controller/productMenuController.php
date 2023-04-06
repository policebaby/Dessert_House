<?php

session_start();
// call database
include "../Model/dbConnection.php";

if (isset($_POST["addBtn"])) {
    $newName = $_POST["newProductName"];
    $price   = $_POST["priceOfeach"];
    $instock = $_POST["instock"];
    $shopId = $_SESSION["shopID"];

    //echo $newName,$type,$price,$shopId;

    // profile data
    $file = $_FILES['productPhoto']['name'];
    // print_r($file);
    if ($file != "") {
        $Location  = $_FILES['productPhoto']['tmp_name'];
        $extension = pathinfo($file)['extension'];
        if (move_uploaded_file($Location, "../../storages/products/".$file.".".$extension)) {
            //call database connection
            $db  = new DBConnection();
            $pdo = $db->connect();
            $sql = $pdo->prepare(
    "
        INSERT INTO m_product 
        (
            shop_id,
            product_name,
            product_price,
            product_picture,
            product_instock,
            create_date
        ) 
        VALUES 
        (
            :shop_id,
            :product_name,

            :product_price,
            :product_picture,
            :product_instock,
            :date
        )
    "
                );
            $sql->bindValue(":shop_id", $shopId);
            $sql->bindValue(":product_name", $newName);
            $sql->bindValue(":product_price", $price);
            $sql->bindValue(":product_picture", "../storages/products/" . $file . "." . $extension);
            $sql->bindValue(":product_instock", $instock);
            $sql->bindValue(":date", date("Y-m-d"));
            $sql->execute();

            header("Location: ../View/sellerNewProductMenu.php");
        }
    }
}
