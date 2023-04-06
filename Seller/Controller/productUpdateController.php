<?php 

session_start();
// // call database
include "../Model/dbConnection.php";
if(isset($_POST["saveProductBtn"])){
    $pname = $_POST["newProductName"];
    $price= $_POST["priceOfeach"];
    $instock= $_POST["instock"];
    $rowId  = $_POST["id"];

//     // echo $pname,$ptype,$price,$instock;

$file = $_FILES['productImg']['name'];
// print_r($file);
if($file != ""){
    $Location  = $_FILES['productImg']['tmp_name'];
// print_r($Location);
$extension = pathinfo($file)['extension'];

if (move_uploaded_file($Location, "../../storages/products/".$rowId.".".$extension)) {

    //call database connection
    $db  = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
    "
    UPDATE m_product SET 
        product_name    = :pname,
        product_price   = :price,
        product_instock = :instock,
        product_picture = :photo
    WHERE product_id = :id
    "
    );
    $sql->bindValue(":pname",$pname);
    $sql->bindValue(":price",$price);
    $sql->bindValue(":instock",$instock);
    $sql->bindValue(":photo","../../storages/products/".$rowId.".".$extension);
    $sql->bindValue(":id",$rowId);
    
    $sql->execute();
    header("Location: ../View/sellerNewProductMenu.php");
    }
}else{
    // echo "Ok";
    //call database connection
    $db  = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
    "
    UPDATE m_product SET 
        product_name    = :pname,
        product_price   = :price,
        product_instock = :instock
    WHERE product_id = :id
    "
    );
    $sql->bindValue(":pname",$pname);
    $sql->bindValue(":price",$price);
    $sql->bindValue(":instock",$instock);
    $sql->bindValue(":id",$rowId);
    
    $sql->execute();
    header("Location: ../View/sellerNewProductMenu.php");
}
    }
