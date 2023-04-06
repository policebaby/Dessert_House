<?php
include "../Controller/shopProfileViewController.php";

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
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/shopProfile.css">
    <!-- css link end -->
    <!-- js link start -->
    <script src="./lib/jquery3.6.0.js"></script>
    <script src="./resources/js/shopProfile.js" defer></script>
    <!-- js link end -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Public+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <title>Shop Profile</title>
</head>

<body>
    <!-- nav start -->
    <?php
    include "nav.php";
    ?>
    <!-- nav end -->
    <!-- hero section start -->
    <div class="container-fluid  shopProfile  ">
        <!-- <img src="./resources/img/shop pic.jpg" alt="" class="shopHSpic"> -->
        <div class="">
            <button class="btn btnBack px-3 ms-5 mt-5">
                <iconify-icon icon="material-symbols:arrow-back-ios-new-rounded" class="backIcon"></iconify-icon>
                <span class="textBack "><a href="./shops.php"> Back</a></span>
            </button>
            <div>
                <div class="shopLogo ms-5 mt-5">
                    <img src="<?= $shopinfo[0]["shop_profilepic"] ?>" alt="" class="shopProfileLogo">
                    <span class="shopName"><?= $shopinfo[0]["shop_name"] ?></span>
                    <div class="text-light ms-5 position-relative">
                        <iconify-icon icon="gg:smile-mouth-open" class="smileIcon"></iconify-icon>
                        <span class="cusRating ">Customers’ satisfactory 95%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- hero section end -->
    <!-- menu section start -->
    <div class="container-fluid d-flex justify-content-center menuBG">
        <div class="menu  text-center">Menu</div>
        <!-- <div class="menu text-center  opacity70">Cold Drink</div>
        <div class="menu text-center opacity70">Dessert Menu</div> -->
    </div>
    <!-- menu section end -->
    <!-- menublocks start -->

    <div class="menuBlockBg">
        <div class="container-fluid d-flex justify-content-center  row ">
            <?php for ($i = 0; $i < count($products); $i++) { ?>
                <!-- single menu block start -->
                <div class="menublock col-md-3  justify-content-center">
                    <div class="newItem ">New</div>
                    <div class="  d-flex justify-content-center imgBorder">
                        <img src="../../storages/<?= $products[$i]["product_picture"] ?>" alt="" width="80%" class="menuImg ">
                    </div>
                    <div class="price ">
                        <iconify-icon class="priceCoin" icon="healthicons:coins"></iconify-icon>
                        <span class="priceNum"><?= $products[$i]["product_price"] ?></span>
                    </div>
                    <div class="line "></div>
                    <p class="productName text-center"><?= $products[$i]["product_name"] ?></p>
                    <div class="line"></div>
                    <div class=" d-flex justify-content-center">
                        <div class="btn-group btn-group-sm itemCount" role="group" aria-label="Basic outlined example">
                            <button type="button" onclick="minus(<?= $i ?>)" class="btn btnOutline minus">-</button>
                            <button type="button" id="qty<?= $i ?>" class="btn btnOutline qty">1</button>
                            <button type="button" onclick="plus(<?= $i ?>)" class="btn btnOutline plus">+</button>
                        </div>
                        <button type="" data="<?= $products[$i]["product_id"] ?>" onclick="addcart(<?= $i ?>)" class="btnhidden addcart ">
                            <iconify-icon icon="material-symbols:add-shopping-cart" class="productCart"></iconify-icon>
                        </button>
                    </div>
                </div>
                <!-- single menu block end -->
            <?php } ?>


        </div>
        <!-- pagination start -->
        <nav aria-label="Page navigation example ">
            <ul class="pagination  justify-content-center mb-5 mt-5">
                <li class="page-item 
                <?php
                if ($page <= 1) {
                    echo "disabled";
                }
                ?>
                "><a class="page-link text-dark" href="?id=<?=$id?>&page=<?= $page - 1 ?>">&laquo;</a></li>
                <?php
                for ($i = 1; $i <= $pageList; $i++) { ?>
                    <li class="page-item 
                    <?php
                    if ($page == $i) {
                        echo "active";
                    }
                    ?>"><a class="page-link text-dark" href="?id=<?=$id?>&page=<?= $i ?>"><?= $i ?></a></li>
                <?php } ?>
                <li class="page-item
                <?php
                if ($page >= $pageList) {
                    echo "disabled";
                }
                ?>"><a class="page-link text-dark" href="?id=<?=$id?>&page=<?= $page + 1 ?>">&raquo;</a></li>
            </ul>
        </nav>

        <!-- pagination end -->
    </div>
    <!-- menublocks end -->
    <!-- booking seat start-->
    <p class="text-center bookSeatText"> Finish Choosing Food? Book Your Seat.</p>
    <div class="text-center">
        <a href="./seat_selection.php"><button class="btn btnBooking">Booking Seat</button></a>
    </div>
    <!-- booking seat end-->
    <!-- footer start -->
    <?php
    include "./footer.php"
    ?>
    <!-- footer end -->

</body>

</html>