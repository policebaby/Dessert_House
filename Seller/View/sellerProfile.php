<?php

include "../Controller/sellerProfileController.php";

// session_start();
if (isset($_SESSION["sellerName"])) {
    $sellerName = $_SESSION["sellerName"];
    // echo $sellerName;
}
else{
    header("Location: ../View/sellerlogin.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- seller profile css link -->
    <link rel="stylesheet" href="./resources/css/sellerProfile.css">
    <!-- seller root css link -->
    <link rel="stylesheet" href="./resources/css/seller-root.css">
    <!-- bootstrap js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- bootstrap css cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Public+Sans&display=swap" rel="stylesheet">
    <!-- iconify link -->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <title>Seller Profile Page</title>
</head>

<body class="seller_profile_page">
    <div class=" row">
    <nav class="col-2 d-flex flex-direction-column">
                <div class="edit_nav">
                    <a href="./sellerDashboard.php" class="nav_logo text-decoration-none">
                        <img src="./resources/images/Ellipse 3.png" alt="logo" class="web_logo mt-md-5 mt-sm-3">
                        <p class="web_name mb-4 mt-3">DESSERT HOUSE</p>
                    </a>
                    <!-- sidebar nav -->
                    <div class="nav-icons ms-md-3 ms-sm-4 mt-sm-4">
                        <!-- profile icon from left nav -->
                        <a href="./sellerProfile.php" class=" text-decoration-none d-flex">
                            <span>
                                <iconify-icon icon="bi:people-circle" class="profile-icon"></iconify-icon>
                            </span>
                            <span class="profile-text ms-md-3 mt-2">Profile</span>
                        </a>

                        <!-- meun icon from left nav -->
                        <a href="./sellerNewProductMenu.php" class="nav-text my-md-4 my-sm-3 text-decoration-none">
                            <span>
                                <iconify-icon icon="material-symbols:menu-book-sharp" class="icons"></iconify-icon>
                            </span>
                            <span class="title ms-md-3 mt-2">Product Menu</span>
                        </a>

                        <!-- order list icon from left nav -->
                        <a href="./sellerlogin.php" class="nav-text text-decoration-none">
                            <span>
                                <iconify-icon icon="material-symbols:order-approve-outline" class="icons"></iconify-icon>
                            </span>
                            <span class="title ms-md-3 mt-2">Order Lists</span>
                        </a>

                        <!-- sold history icon from left nav -->
                        <a href="./soldHistory.php" class="nav-text my-md-4 my-sm-3 text-decoration-none">
                            <span>
                                <iconify-icon icon="mdi:clipboard-text-clock" class="icons"></iconify-icon>
                            </span>
                            <span class="title ms-md-3 mt-2">Sold History</span>
                        </a>

                        <!-- incoming order icon from left nav -->
                        <a href="./incomingOrder.php" class="nav-text text-decoration-none">
                            <span>
                                <iconify-icon icon="material-symbols:order-play-outline" class="icons"></iconify-icon>
                            </span>
                            <span class="title ms-md-2 mt-2">Incoming Orders</span>
                        </a>

                        <!-- feedback icon -->
                        <a href="./feedbackDetails.php" class="nav-text my-md-4 my-sm-3 text-decoration-none">
                            <span>
                                <iconify-icon icon="ri:feedback-line" class="icons"></iconify-icon>
                            </span>
                            <span class="title ms-md-3">Customers' Feedbacks</span>
                        </a>

                        <!-- logout icon from left nav-->
                        <a href="./sellerlogin.php" class="nav-text text-decoration-none">
                            <span>
                                <iconify-icon icon="material-symbols:logout-rounded" class="icons"></iconify-icon>
                            </span>
                            <span class="title ms-md-3 mt-2">Logout</span>
                        </a>
                        <br>
            </nav>

        <!-- fill input box -->
        <div class="col-10 mt-3 profile-page d-flex justify-content-center">
            <form action="./sellerEditProfilePage.php" method="post">
                <div class="profile-page">
                    <div class="mt-2 profileLogo">
                        <?php
                        if ($shopResult[0]["shop_profilepic"] == "noprofile"){
                            echo '<img src="./resources/images/default.png" class="shopLogo mb-3" id="profileImg">';
                        } else {
                            // echo '<pre>';
                            // print_r($shopResult[0]["shop_profilepic"]);
                            echo '<img src= " '.$shopResult[0]["shop_profilepic"].' " class="shopLogo mb-3" id="profileImg">';
                        };
                        ?>
                    </div>

                        <!-- name -->
                        <div class="mt-4 profileLogo">
                            <input type="text" class="edit edit_center text-center" placeholder="Seller name" name="sellerName" value="<?php echo $result[0]["seller_name"]; ?>" readonly>
                        </div>

                    <!-- cafe name -->
                    <div class="profileLogo my-4">
                        <input type="text" placeholder="Cafe name" class="edit edit_center text-center sm-box" name="shopName" value="<?php echo $shopResult[0]["shop_name"]; ?>" readonly>
                    </div>

                    <!-- email -->
                    <div class="profileLogo">
                        <input type="email" placeholder="cafe@gmail.com" class="edit edit_center sm-box text-center" name="email" value="<?php echo $result[0]["email"]; ?>" readonly>
                    </div>

                    <!-- phone number -->
                    <div class="profileLogo my-4">
                        <input type="text" placeholder="seller phone number" class="edit edit_center sm-box text-center" name="phone" value="<?php echo $result[0]["seller_phone"]; ?>" readonly>
                    </div>

                    <!-- edit button -->
                    <div class="profileLogo ">
                        <button type="submit" class="edit_profile_btn edit edit_center mt-sm-3 sm-box text-center" name="editBtn">Edit Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="./resources/js/sellerEditProfilePage.js"></script>
</body>

</html>