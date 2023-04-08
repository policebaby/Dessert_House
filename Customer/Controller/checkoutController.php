<?php
ini_set("display_errors", "1");
session_start();
include "../Model/dbConnection.php";


$cartLists = $_SESSION["cartLists"];
$cartitemList = $_SESSION["cartItemList"];

if (isset($_POST["checkout"])) {
    $userid = $_SESSION["userID"];
    $subtotal = $_POST["subtotal"];
    $itemprice  = explode(",", $_POST["itemPrice"]);
    $itemname  = explode(",", $_POST["itemName"]);
    $items = [];
    echo "<pre>";
    // print_r($itemname);//might need to convert into string
    print_r($itemprice);
    // print_r($cartitemList);
    // print_r($cartLists);
    // echo $subtotal;

    // converting array into string
    for ($i=0; $i < count($itemname); $i++) { 
        // echo $itemname[$i]." x ".$cartLists[$i]["qty"].", " ;
        array_push($items, ($itemname[$i]." x ".$cartLists[$i]["qty"].", "));
    }
    // print_r(implode($items) );

    $db = new DBConnection();
    $pdo = $db->connect();
    // ADD ORDER
    $sql = $pdo->prepare(
        "
        INSERT INTO t_order
        (
            user_id,
            items,
            grand_total,
            reserve_time,
            create_date
        )
        VALUES
        (
            :userid,
            :items,
            :grandtotal,
            :reservetime,
            :date
        )
        "
    );
    $sql->bindValue(":userid", $userid);
    $sql->bindValue(":items", implode($items));
    $sql->bindValue(":grandtotal", $subtotal);
    $sql->bindValue(":reservetime", date("Y-m-d H:i:s"));
    $sql->bindValue(":date", date("Y-m-d"));
    $sql->execute();


    //get latest id
    $sql = $pdo->prepare(
        "
        SELECT order_id FROM t_order order by order_id DESC LIMIT 1;
        "
    );
    $sql->execute();
    $orderID = $sql->fetchAll(PDO::FETCH_ASSOC)[0]["order_id"];
    echo $orderID;

    //add order detail
    for ($i=0; $i < count($cartLists) ; $i++) { 
        $sql = $pdo->prepare(
            "
            INSERT INTO t_orderdetail
            (
                order_id,
                user_id,
                shop_id,
                product_id,
                quantity,
                total_price,
                create_date
            )
            VALUES
            (
                :orderID,
                :userID,
                :shopID,
                :productID,
                :qty,
                :totalprice,
                :date
            )
            "
            );
            $sql->bindValue(":orderID",$orderID);
            $sql->bindValue(":userID",$userid);
            $sql->bindValue(":shopID",$cartitemList[$i]["shop_id"]);
            $sql->bindValue(":productID",$cartLists[$i]["id"]);
            $sql->bindValue(":qty",$cartLists[$i]["qty"]);
            $sql->bindValue(":totalprice",$itemprice[$i]);
            $sql->bindValue(":date",date("Y-m-d"));
            $sql->execute();
    } 
    header("Location: ../View/user_home.php");
}
?>