<?php 

// call database
include "../Model/dbConnection.php";

if(isset($_POST["addBtn"])){
    $newName = $_POST["newProductName"];
    $type    = $_POST["productType"];
    $price   = $_POST["priceOfeach"];

    // call database connection
    //call database connection
    $db  = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare
    (
        "
        INSERT INTO m_product 
        () 
        VALUES 
        ()
        "
    );
}



?>