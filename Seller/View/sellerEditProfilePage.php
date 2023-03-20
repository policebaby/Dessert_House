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
<div class="main-page">
        <div class="row">
        <nav class="col-2 mt-0">
        <div class="edit_nav">
    <div class="nav_logo">
            <img src="./resources/images/Ellipse 3.png" alt="logo" width="35%" class="web_logo mt-md-5 mt-sm-5">
            <p class="web_name mb-4 mt-3">DESSERT HOUSE</p>
    </div>
    <div class="ms-md-4">
        <!-- profile icon from left nav -->
        <div class="nav_text  mt-md-4 mt-sm-4">
            <img src="./resources/images/person.png" class="icons">
            <span class="title ms-1">Profile</span>
        </div>
        <!-- meun icon from left nav -->
        <div class="nav_text my-md-1 text-muted">
            <img src="./resources/images/menu.png" class="my-md-5 icons">
            <span class="title ms-1">Product Menu</span>
        </div>
        <!-- order list icon from left nav -->
        <div class="nav_text text-muted">
            <img src="./resources/images/orderList.png" class="icons">
            <span class="title ms-1">Order Lists</span>
        </div>
        <!-- sold history icon from left nav -->
        <div class="nav_text text-muted">
            <img src="./resources/images/soldList.png"class="my-md-5 icons">
            <span class="title ms-1">Sold History</span>
        </div>
        <!-- incoming order icon from left nav -->
        <div class="nav_text text-muted">
            <img src="./resources/images/incomingOrder.png" class="icons">
            <span class="title ms-1">Incoming Orders</span>
        </div>
        <!-- feedback icon -->
        <div class="nav_text mt-md-5 text-muted feedback_gp">
            <img src="./resources/images/feedback.png" class="icons cFeedback mt-md-1 mt-sm-1" width="13%" height="5%" >
            <p class="title feedback_text ms-1">Customer's Feedback</p>
        </div>
        <!-- logout icon from left nav-->
        <div class="nav_text text-muted my-md-5">
            <img src="./resources/images/Logout.png" alt="" class="nav_text icons logout">
            <span class="title ms-1">Logout</span>
        </div>
        <br>
        </div>
<br>
        </nav>

    <!-- column2 -->
    <div class="col-9 column2">

        <div class="box2 mt-4">

        <div class="profile_banner text-center mb-5">
        <span class="edit_photo_bg">
            <img src="./resources/images/editPhoto.png" class="editPhoto">
        </span>
        <div class="mb-3 mt-md-3 mt-sm-3">
            <input class="form-control" type="file" id="formFile">
        </div>
        </div>

        <!-- sellerName and old password input box -->
        <div class="mt-4 label_box_row">
            <span class="label_box mb-sm-3 lbox1">
                <label for="sellerName" class="coner_label fw-bold">Seller Name</label>
                <input type="text" placeholder="enter your name" class="input_box">
            </span>

            <span class="label_box ms-md-5">
                <label for="oldPassword" class="coner_label fw-bold">Old Password</label>
                <input type="password" placeholder="enter your old password" class="input_box">
            </span>
        </div>

        <!-- shopName and new password box -->
        <div class="label_box_row mt-3">
            <span class="label_box mb-sm-3 lbox2">
                <label for="shopName" class="coner_label fw-bold">Shop Name</label>
                <input type="text" placeholder="enter your shop name" class="input_box">
            </span>
            <span class="label_box ms-md-5">
                <label for="newPassword" class="coner_label fw-bold">New Password</label>
                <input type="password" placeholder="enter your new password" class="input_box">
            </span>
        </div>
        <!-- phone and confirm password box -->
        <div class="label_box_row mt-3">
            <span class="label_box mb-sm-3 lbox2">
                <label for="phone" class="coner_label fw-bold">Phone</label>
                <input type="text" placeholder="enter your phone number" class="input_box">
            </span>
            <span class="label_box ms-md-5">
                <label for="newPassword" class="coner_label fw-bold">Confirm Password</label>
                <input type="password" placeholder="confirm your new password" class="input_box">
            </span>
        </div>
        <!-- email box -->
        <div class="label_box mt-md-3 mt-sm-3">
            <label for="email" class="email fw-bold">Email</label>
            <input type="email" placeholder="enter your email" class="input_box">
        </div>

        <!-- button -->
        <div class="mt-md-4 mt-sm-4 mb-sm-5">
            <span>
                <button class="btns saveBtn">Save Profile</button>
            </span>
            <span>
                <button class="btns cancelBtn ms-3">Cancel</button>
            </span>
        </div>
        </div>
    </div>
    </div>
    
    </body>
</html>