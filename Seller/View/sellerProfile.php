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
    <title>Seller Profile Page</title>
</head>
<body>
    <div class=" row mt-0 seller_profile_page">

    <div class="col-2 edit_nav">
    <div class="mt-3 mb-3 text-center">
            <img src="./resources/images/Ellipse 3.png" alt="logo" width="33%" class="nav_logo">
            <p class="web_name mb-4 mt-3">DESSERT HOUSE</p>
        </div>
        <div class="ms-md-4 ms-sm-4">
        <!-- profile icon from left nav -->
        <div class="mt-4 nav_text">
            <img src="./resources/images/person.png" class="icons">
            <span class="title">Profile</span>
        </div>
        <!-- meun icon from left nav -->
        <div class="nav_text my-3 text-muted">
            <img src="./resources/images/menu.png" alt="" class="my-3 icons">
            <span class="title">Product Menu</span>
        </div>
        <!-- order list icon from left nav -->
        <div class="nav_text text-muted">
            <img src="./resources/images/orderList.png" class="icons">
            <span class="title">Order Lists</span>
        </div>
        <!-- sold history icon from left nav -->
        <div class="nav_text my-3 text-muted">
            <img src="./resources/images/soldList.png" alt="" class="my-3 icons">
            <span class="title">Sold History</span>
        </div>
        <!-- incoming order icon from left nav -->
        <div class="nav_text text-muted">
            <img src="./resources/images/incomingOrder.png" class="icons">
            <span class="title">Incoming Orders</span>
        </div>
        <!-- logout icon from left nav-->
        <div class="nav_text my-3 text-muted">
            <img src="./resources/images/Logout.png" alt="" class="my-3 nav_text icons">
            <span class="title">Logout</span>
        </div>
        </div>
    </div>

    <!-- fill input box -->
    <div class="col-10 mt-3 ms-0 profile-page">
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
                <input type="email" placeholder="cafe@gmail.com" class="edit edit_center">
        </div>

        <!-- password -->
            <div class="profileLogo my-4">
                <input type="password" placeholder="password" class="edit edit_center">
        </div>

        <!-- phone number -->
        <div class="profileLogo">
                <input type="text" placeholder="09777777777" class="edit edit_center">
            </div>

            <!-- edit button -->
            <div class="profileLogo my-4">
                <button type="button" class="edit_profile_btn edit edit_center mt-sm-4">Edit Profile</button>
            </div>
        </div>
    </div>
    </div>
</body>
</html>