<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- seller edit profile css link -->
    <link rel="stylesheet" href="./resources/css/sellerEditProfile.css">
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
    <title>Seller Edit Profile Page</title>
</head>
<body class="seller_edit_profile_page">
    <div class="row">
        <!-- column1 -->
    <div class="col-2 me-0 ms-0 edit_nav">
    <div class="my-3 nav_logo">
            <img src="./resources/images/Ellipse 3.png" alt="logo" width="35%" class="web_logo">
            <p class="web_name mb-4 mt-3">DESSERT HOUSE</p>
    </div>
        <div class="ms-4">
        <!-- profile icon from left nav -->
        <div class="mt-4 nav_text">
            <img src="./resources/images/person.png" class="icons">
            <span class="title ms-1">Profile</span>
        </div>
        <!-- meun icon from left nav -->
        <div class="nav_text my-3 text-muted">
            <img src="./resources/images/menu.png" alt="" class="my-3 icons">
            <span class="title ms-1">Product Menu</span>
        </div>
        <!-- order list icon from left nav -->
        <div class="nav_text text-muted">
            <img src="./resources/images/orderList.png" class="icons">
            <span class="title ms-1">Order Lists</span>
        </div>
        <!-- sold history icon from left nav -->
        <div class="nav_text my-3 text-muted">
            <img src="./resources/images/soldList.png"class="my-3 icons">
            <span class="title ms-1">Sold History</span>
        </div>
        <!-- incoming order icon from left nav -->
        <div class="nav_text text-muted">
            <img src="./resources/images/incomingOrder.png" class="icons">
            <span class="title ms-1">Incoming Orders</span>
        </div>
        <!-- feedback icon -->
        <div class="nav_text my-3 text-muted feedback_gp">
            <img src="./resources/images/feedback.png" class="icons my-3 cFeedback" width="13%" height="5%">
            <p class="title feedback_text ms-1 mt-2">Customer's Feedback</p>
        </div>
        <!-- logout icon from left nav-->
        <div class="nav_text text-muted mb-5">
            <img src="./resources/images/Logout.png" alt="" class="nav_text icons">
            <span class="title ms-1">Logout</span>
        </div>
        </div>
    </div>

    <!-- column2 -->
    <div class="col-10">

        <div class="box2 mt-4">
        <div class="edit_photo_bg">
            <img src="./resources/images/editPhoto.png">
        </div>
        <div>
        <input type="file" class="chooseFile">
        </div>
        <!-- sellerName and old password input box -->
        <div>
            <span>
                <label for="sellerName">Seller Name</label>
                <input type="text" placeholder="enter your name">
            </span>
            <span>
                <label for="oldPassword">Old Password</label>
                <input type="password" placeholder="enter your old password">
            </span>
        </div>
        <!-- shopName and new password box -->
        <div>
            <span>
                <label for="shopName">Shop Name</label>
                <input type="text" placeholder="enter your shop name">
            </span>
            <span>
                <label for="newPassword">New Password</label>
                <input type="password" placeholder="enter your new password">
            </span>
        </div>
        <!-- phone and confirm password box -->
        <div>
            <span>
                <label for="phone">Phone</label>
                <input type="text" placeholder="enter your phone number">
            </span>
            <span>
                <label for="newPassword">Confirm Password</label>
                <input type="password" placeholder="confirm your new password">
            </span>
        </div>
        <!-- email box -->
        <div>
            <label for="email">Email</label>
            <input type="email" placeholder="enter your email">
        </div>
        <div>
            <span>
                <button>Save Profile</button>
            </span>
            <span>
                <button>Cancel</button>
            </span>
        </div>
        </div>
    </div>








    </body>
</html>