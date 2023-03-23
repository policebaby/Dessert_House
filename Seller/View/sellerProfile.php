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
                    <div class="nav_logo">
                        <img src="./resources/images/Ellipse 3.png" alt="logo" class="web_logo mt-md-5 mt-sm-4">
                        <p class="web_name mb-4 mt-3">DESSERT HOUSE</p>
                    </div>
                    <!-- sidebar nav -->
                    <div class="nav-icons ms-md-3 ms-sm-3 mt-sm-4">
                        <!-- profile icon from left nav -->
                        <div class="nav-text">
                            <span>
                                <iconify-icon icon="bi:people-circle" class="profile-icon"></iconify-icon>
                            </span>
                            <a href="./sellerProfile.php" class="profile-text ms-md-3 mt-2">Profile</a>
                        </div>
                        <!-- meun icon from left nav -->
                        <div class="nav-text my-md-4 my-sm-4">
                            <span>
                                <iconify-icon icon="material-symbols:menu-book-sharp" class="icons"></iconify-icon>
                            </span>
                            <a href="./sellerNewProductMenu.php" class="title ms-md-3 mt-2">Product Menu</a>
                        </div>
                        <!-- order list icon from left nav -->
                        <div class="nav-text">
                            <span>
                                <iconify-icon icon="material-symbols:order-approve-outline" class="icons"></iconify-icon>
                            </span>
                            <a href="./orderList.php" class="title ms-md-3 mt-2">Order Lists</a>
                        </div>
                        <!-- sold history icon from left nav -->
                        <div class="nav-text my-md-4 my-sm-4">
                            <span>
                                <iconify-icon icon="mdi:clipboard-text-clock" class="icons"></iconify-icon>
                            </span>
                            <a href="./soldHistory.php" class="title ms-md-3 mt-2">Sold History</a>
                        </div>
                        <!-- incoming order icon from left nav -->
                        <div class="nav-text">
                            <span>
                                <iconify-icon icon="material-symbols:order-play-outline" class="icons"></iconify-icon>
                            </span>
                            <a href="./incomingOrder.php" class="title ms-md-2 mt-2">Incoming Orders</a>
                        </div>
                        <!-- feedback icon -->
                        <div class="nav-text my-md-4 my-sm-4">
                            <span>
                                <iconify-icon icon="ri:feedback-line" class="icons"></iconify-icon>
                            </span>
                            <a href="./feedbackDetails.php" class="title ms-md-3">Customer's Feedback</a>
                        </div>
                        <!-- logout icon from left nav-->
                        <div class="nav-text">
                            <span>
                                <iconify-icon icon="material-symbols:logout-rounded" class="icons"></iconify-icon>
                            </span>
                            <a href="./sellerlogin.php" class="title ms-md-3 mt-2">Logout</a>
                        </div>
                    </nav>

    <!-- fill input box -->
    <div class="col-10 mt-3 profile-page d-flex justify-content-center">
        <div class="profile-page">
        <div class="mt-2 profileLogo">
            <img src="./resources/images/shopLogo.jpg" alt="" class="shopLogo mb-2">
        </div>
        <div class="seller_name mt-4 profileLogo">
            <!-- name -->
            <div class="me-md-3 me-sm-3">
                <input type="text" class="name edit_center MaryCafe" placeholder="Mary">
            </div>

            <!-- cafe name -->
            <div class=" ms-md-3 ms-sm-3">
                <input type="text" class="shop_name edit_center MaryCafe" placeholder="cafe">
            </div>

        </div>

        <!-- email -->
        <div class="profileLogo mt-4">
                <input type="email" placeholder="cafe@gmail.com" class="edit edit_center sm-box">
        </div>

        <!-- password -->
            <div class="profileLogo my-4">
                <input type="password" placeholder="password" class="edit edit_center sm-box">
        </div>

        <!-- phone number -->
        <div class="profileLogo">
                <input type="text" placeholder="09777777777" class="edit edit_center sm-box">
            </div>

            <!-- edit button -->
            <div class="profileLogo my-4">
                <button type="button" class="edit_profile_btn edit edit_center mt-sm-4 sm-box">Edit Profile</button>
            </div>
        </div>
    </div>
    </div>
</body>
</html>