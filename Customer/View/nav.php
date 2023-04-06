<?php




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nav</title>
    <!--css link start-->
    <link href="../View/resources/css/nav.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <link href="../View/resources/css/root.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <!--css link edn-->
    <script src="./lib/jquery3.6.0.js"></script>
    <script src="../View/resources/js/nab.js"></script>
        <!-- js link start -->
        <script src="../View/lib/jquery3.6.0.js"></script>
    <script src="./resources/js/nav.js?v=<?= time() ?>" defer></script>
    <!-- js link end -->
    <!--font link start-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Public+Sans&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Public+Sans&display=swap" rel="stylesheet" />
    <!--font link end-->
    <!--icon link start-->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <!--icon link end-->
    <!-- bootstrap link start -->

    <!-- bootstrap link end -->
    <!-- icon link start -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Public+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <!-- icon link end -->
</head>

<body>
    <!--Nav bar start-->
    <div class="user_navbar">
        <img src="../View/resources/img/logo.png" alt="logo" class="nav_logo" />

        <ul class="nav_desktop">
            <li class="nav_name " id="home"><a href="./user_home.php">Home</a></li>
            <li class="nav_name " id="shop"><a href="./shops.php"> Shop</a></li>
            <li class="nav_name " id="coin_shop"><a href="../Controller/coin_exchangeViewController.php">Coin Shop</a> </li>
        </ul>

        <!--search box start-->
        <div class="searchBox">
            <span><iconify-icon icon="material-symbols:search-rounded" class="search_icon"></iconify-icon></span>
            <input type="text" class="search" placeholder="Search" />
        </div>
        <!--search box end-->
        <div class="dropdown">
            <button class="btn  bg-transparent btnprofile" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                <iconify-icon icon="healthicons:ui-user-profile" class="nav_icons nav_pf"></iconify-icon>
            </button>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenu2">
                <li>
                    <a href="../Controller/user_profileViewController.php">
                        <button class="dropdown-item" type="button">My Profile</button>
                    </a>
                </li>
                <li><a href="./buyHistory.php">
                        <button class="dropdown-item" type="button">My Orders</button>
                    </a>
                </li>
            </ul>



        </div>

        <!-- cart -->
        <form action="./shoppingCart.php" method="post">
            <input type="hidden" name="cartItems" id="cartLists" value="">
            <button type="submit" class="cartbtn btn-link ">
                <iconify-icon icon="material-symbols:shopping-bag" class="cart_icon"></iconify-icon>
            </button>
        </form>
        <!--bento menu start-->
        <a href="#">
            <label for="nav_check">
                <iconify-icon icon="ic:round-menu" class="nav_menu"></iconify-icon>
            </label>
        </a>
        <!--bento menu end-->
    </div>

    <!--flex text start-->
    <input type="checkbox" id="nav_check">
    <ul class="nav_mobile">
        <li class="nav_mvname"><a href="./user_home.php"> Home</a></li>
        <li class="nav_mvname"><a href="./shopProfile.php">Shop</a></li>
        <li class="nav_mvname"><a href="./coin_exchange.php"> Coin Shop</a></li>
        <li class="nav_mvname"><a href="./user_profile.php"> Profile</a></li>
    </ul>
    <!--flex text end-->
    <!--Nav bar end-->
</body>

</html>