<?php 


session_start();

if(isset($_GET["page"])){
    $page = $_GET["page"];
}else{
    $page = 1;
}


$rowLimit = 5;
$pageStart = ($page-1) * $rowLimit; 
$pageStart = ($pageStart<0)? 0 : $pageStart;


include "../Model/dbConnection.php";

if(isset($_SESSION["shopID"])){
    $shopID = $_SESSION["shopID"];
    // echo $shopID;

    // call connection db
    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare
    (
        "
        SELECT * FROM t_order
        WHERE 
        shop_id = :shopID AND del_flg = 0 AND status = 1
        "
    );
    $sql->bindValue(":shopID",$shopID);
    $sql->execute();
    $totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC);


    $sql = $pdo->prepare
    (
        "
        SELECT * FROM t_order
        WHERE 
        shop_id = :shopID AND del_flg = 0 AND status = 1
        LIMIT $pageStart , $rowLimit
        "
    );
    $sql->bindValue(":shopID",$shopID);
    $sql->execute();
    $soldResult = $sql->fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // print_r($orderResult);

    $pageList = ceil(count($totalRecord)/$rowLimit);
}
?>