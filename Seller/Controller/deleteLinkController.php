<?php 

// call database
include "../Model/dbConnection.php";

if(isset($_GET["id"])){
    //echo $_GET["id"];
    $deleteID = $_GET["id"];

    //call database connection
    $db  = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
        UPDATE m_product SET
        del_flg = 1 
        WHERE id = :id
        "
    );
    $sql->bindValue(":id",$deleteID);

    $sql->execute();

    header("Location: ../View/sellerNewProductMenu.php");
}

?>