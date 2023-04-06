<?php
ini_set("display_errors", "1");
session_start();

include "../Controller/shopsViewController.php";
if (isset($_SESSION["mainshops"])) {
    $shops = $_SESSION["mainshops"];
    // echo "ok";
} else {
    echo "error";
}
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
    <link rel="stylesheet" href="./resources/css/shops.css">
    <link rel="stylesheet" href="./resources/css/shop_pblock.css">
    <!-- css link end -->
    <!-- js link start -->
    <script src="../View/lib/jquery3.6.0.js"></script>
    <script src="./resources/js/shops.js?= time() ?>" defer></script>
    <!-- js link end -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Public+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <title>Shops</title>
</head>

<body>
    <!-- nav start -->
    <?php
    include "nav.php";
    ?>
    <!-- nav end -->


    <!-- shops profiles start -->
    <div class="shopProfiles ">
        <div class="pt-3">
            <p class="shopHeader fs-3 text-center text-light ">Shops</p>
        </div>
        <div class=" flex ">
            <div class="row justify-content-center mx-5 ">
                <!-- profile block start -->
                <?php for ($i = 0; $i < count($shops); $i++) { ?>
                    <a href="./shopProfile.php?id=<?= $shops[$i]["shop_id"] ?>" class="boxborder m-5  col-4">
                        <div class="box ">
                            <p class="text-center mt-5 fs-4"><?= $shops[$i]["shop_name"] ?></p>
                        </div>
                        <div class="circle"> <img class="position-relative rounded-circle " src="../../storages/<?= $shops[$i]["shop_profilepic"] ?>" alt="" width="100%"> </div>
                        <!-- had to put both width and height 100% because of sample picture -->
                        <!-- <div class="pic"> <img src="../View/resources/img/Rectangle 381.png" alt="" width="100%" height="100%"></div> -->
                        <?php
                        if ($shops[$i]["shop_coverpic"] == "nocover") {
                            echo '<div class="pic"> <img src="../View/resources/img/Rectangle 381.png" alt="" width="100%" height="100%"></div>';
                        } else {
                            echo '<div class="pic"> <img src="../../storages/' . $shops[$i]["shop_coverpic"] . '" alt="" width="100%" height="100%"></div>';
                        }
                        ?>
                        <div class="newItem ">New</div>
                    </a>
                <?php } ?>
                <!-- profile block end -->
            </div>
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
                "><a class="page-link text-dark" href="?page=<?= $page - 1 ?>">&laquo;</a></li>
                <?php
                for ($i = 1; $i <= $pageList; $i++) { ?>
                    <li class="page-item 
                    <?php
                    if ($page == $i) {
                        echo "active";
                    }
                    ?>"><a class="page-link text-dark" href="?page=<?= $i ?>"><?= $i ?></a></li>
                <?php } ?>
                <li class="page-item
                <?php
                if ($page >= $pageList) {
                    echo "disabled";
                }
                ?>"><a class="page-link text-dark" href="?page=<?= $page + 1 ?>">&raquo;</a></li>
            </ul>
        </nav>

        <!-- pagination end -->

    </div>
    <!-- shops profiles end -->


    <!-- footer start -->
    <?php
    include "./footer.php"
    ?>
    <!-- footer end -->
</body>

</html>