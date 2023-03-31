<?php
ini_set("display_errors", "1");
session_start();

include "../Model/dbConnection.php";
if(isset($_POST["cartItems"])){
    $cartList = json_decode($_POST["cartItems"], true);
    $_SESSION["cartLists"]= $cartList;

    $database = new DBConnection();
    $pdo = $database->connect();
    
    $sql = $pdo->prepare(
        "
        SELECT * FROM m_product WHERE del_flg=0 AND FIND_IN_SET (product_id,:id);
        "
    );
    
    $ids = [];
    $qty =[];
    for ($i = 0; $i < count($cartList); $i++) {
        array_push($ids, $cartList[$i]["id"]);
        array_push($qty, $cartList[$i]["qty"]);
    }
    // echo implode(",",$ids);
    // echo"<pre>";
    // print_r($qty);
    $sql->bindValue(":id", implode(",", $ids));
    $sql->execute();
    $cartItemList = $sql->fetchAll(PDO::FETCH_ASSOC);
    
}

if (isset($_POST["delete"])){
    $hiddenid = $_POST["hiddenID"]; 
// echo"<pre>";
print_r($hiddenid);

array_splice($_SESSION["cartLists"],$hiddenid,1);

$database = new DBConnection();
$pdo = $database->connect();

$sql = $pdo->prepare(
    "
    SELECT * FROM m_product WHERE del_flg=0 AND FIND_IN_SET (product_id,:id);
    "
);

$ids = [];
// $qty =[];
for ($i = 0; $i < count($_SESSION["cartLists"]); $i++) {
    array_push($ids, $_SESSION["cartLists"][$i]["id"]);
    // array_push($qty, $_SESSION["cartLists"][$i]["qty"]);
}
// echo implode(",",$ids);
// echo"<pre>";
// print_r($qty);
$sql->bindValue(":id", implode(",", $ids));
$sql->execute();
$cartItemList = $sql->fetchAll(PDO::FETCH_ASSOC);

}else{
    echo "error";
}


