<?php
ini_set("display_errors", "1");

include "../Controller/cartViewController.php";

$_SESSION["cartItemList"]= $cartItemList;
// print_r($cartItemList);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- css link start -->
    <link rel="stylesheet" href="./resources/css/shoppingCart.css?key=<?=time()?>">
    <!-- <link href="style.css?key=<?=time()?>" type="text/css" rel="stylesheet" /> -->
    <!-- css link end -->
    <!-- js link start -->
    <script src="./lib/jquery3.6.0.js"></script>
    <script src="./resources/js/cart.js?=time()?>" defer></script>
    <!-- js link end -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Public+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <title>Shopping Cart</title>
</head>

<body>
    <!-- nav start -->
    <?php
    include "./nav.php"
    ?>
    <!-- nav end -->

    <!-- shoppingcart start -->
    <div class=" text-center ">
        <p class="cartHeader mb-5"> Shopping Cart</p>
        <table class="table table-hover my-5">
            <thead>
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody id="tbody">
                <!-- row start -->
                <?php
                $subtotal = 0;
                $listofPrice =[];
                $listofName =[];
                for ($i = 0; $i < count($cartItemList); $i++) {
                    $subtotal += $cartList[$i]["qty"] * $cartItemList[$i]["product_price"];
                    array_push($listofPrice, ($cartList[$i]["qty"]* $cartItemList[$i]["product_price"]));
                    // echo "<pre>";
                    // print_r($listofPrice);
                    array_push($listofName, ($cartItemList[$i]["product_name"]));
                ?>
                    <tr class=" text-center align-middle">
                        <th scope="row" class="itemimg cellCoffee">
                            <img src="../../storages/<?= $cartItemList[$i]["product_picture"] ?>" alt="" width="100px" class="">
                            <p><?= $cartItemList[$i]["product_name"] ?></p>
                        </th>
                        <td class="cellCoffee">
                            <div class="price">
                                <span id="itemprice<?= $cartList[$i]['id'] ?>" class="itemprice"><?= $cartItemList[$i]["product_price"] ?></span>
                                <span class=""><iconify-icon class="coinIcon coinposition" icon="healthicons:coins"></iconify-icon></span>
                            </div>
                        </td>
                        <td class="cellCoffee">
                            <div class="btn-group btn-group-sm itemCount align-middle" role="group" aria-label="Basic outlined example">
                                <button type="button" onclick="minus(<?= $cartList[$i]['id'] ?>)" class="btn btnOutline">-</button>
                                <button type="button" id="qty<?= $cartList[$i]['id'] ?>" class="btn btnOutline"><?= $cartList[$i]["qty"] ?></button>
                                <button type="button" onclick="plus(<?= $cartList[$i]['id'] ?>)" class="btn btnOutline">+</button>
                            </div>
                        </td>
                        <td class="cellCoffee">
                            <div class="price">
                                <span id="total<?= $cartList[$i]['id'] ?>" class="itemprice"><?= $cartList[$i]["qty"] * $cartItemList[$i]["product_price"] ?></span>
                                <span><iconify-icon class="coinIcon coinposition" icon="healthicons:coins"></iconify-icon></span>
                            </div>
                        </td>
                        <td class="cellCoffee">
                            <!-- <button class="btn" id="delete<?= $i ?>" onclick="deleteitem(<?= $i ?>,event,<?= $cartItemList[$i]['product_id'] ?>)" name="delete<?= $i ?>" class="fs-1 align-middle mt-4"> -->
                            <button class="btn btndelete align-middle" id="delete<?= $i ?>" onclick="deleteitem(<?=$i?>)" name="delete<?= $i ?>" class="fs-1 align-middle mt-4">
                                <iconify-icon icon="material-symbols:delete-forever-rounded"></iconify-icon>
                            </button>
                        </td>
                    </tr>
                <?php } ?>
                <!-- row end -->
            </tbody>
        </table>
        <!-- pagination start -->
        <!-- <nav aria-label="Page navigation example ">
            <ul class="pagination pMargin justify-content-center">
                <li class="page-item ">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span class="" aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span class=" " aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav> -->
        <!-- pagination end -->
    </div>
    <!-- check out start -->
    <div class="checkoutBorder container-fluid ">
        <div class="">
            <div class="p-5">
                <div class="mb-5">
                    <span class="checkoutInfo">Subtotal :</span>
                    <span id="subtotal" class="itemprice"><?= $subtotal ?></span>
                    <span><iconify-icon class="coinIcon coinposition" icon="healthicons:coins"></iconify-icon></span>
                </div>
                <div class="checkoutInfo">Reserved Seat Number :</div>

                <div class="d-flex justify-content-end mt-5 btnCheckoutMD">
                    <form action="../Controller/checkoutController.php" method="post">
                        <input id="subtotalinput" type="hidden" value="<?= $subtotal ?>" name="subtotal" >
                        <input type="hidden" value="<?=implode(",", $listofPrice)?>" name="itemPrice">
                        <input type="hidden" value="<?=implode(",", $listofName)?>" name="itemName">
                        <button type="submit" id="checkout" name="checkout" class="btn btnCheckout mb-5">Check Out
                            <iconify-icon icon="ic:baseline-arrow-circle-right" class="btnArrow"></iconify-icon>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- check out end -->

    <!-- shopping cart end -->

    <!-- footer start -->
    <?php
    include "./footer.php";
    ?>
    <!-- footer end -->
</body>

</html>