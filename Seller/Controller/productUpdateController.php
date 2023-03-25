<?php 

session_start();
// call database
include "../Model/dbConnection.php";
if(isset($_POST["saveProductBtn"])){
    $pname = $_POST["newProductName"];
    $type = $_POST["productType"];
    $price= $_POST["priceOfeach"];
    $instock= $_POST["instock"];
    $rowId  = $_POST["id"];

    // echo $pname,$ptype,$price,$instock;
    
    // profile data
    // $file = $_FILES['profile']['name'];
    //print_r($file);
    // if ($file != "") {
    // $Location  = $_FILES['profile']['tmp_name'];
    // $extension = pathinfo($file)['extension'];

    // if (move_uploaded_file($Location, "profile/".$sellerId.".".$extension)) {
    //call database connection
    $db  = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare
(
    "
    UPDATE m_product SET 
    (
        product_name    = :pname,
        product_type    = :type,
        product_price   = :price,
        product_instock = :instock
    WHERE id = :id
    )
    "
    );
    $sql->bindValue(":pname",$pname);
    $sql->bindValue(":type",$type);
    $sql->bindValue(":price",$price);
    $sql->bindValue(":instock",$instock);
    $sql->bindValue(":id",$rowId);
    
    $sql->execute();
    header("Location: ../View/sellerNewProductMenu.php");
    }
    

// }
// }
?>