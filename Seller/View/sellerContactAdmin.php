<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- seller contact admin css link -->
    <link rel="stylesheet" href="./resources/css/sellerContactAdmin.css">
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
    <title>Seller Contact Admin Page</title>
</head>
<body class="seller_contact_admin_page">
    <div class="row">

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

    <!-- fill boxes -->
    <div class="col-10 ms-0 mt-4">
        <div class="box2">
        <p class="upper_text mt-4">Send us a message and we'll get right back to you!</p>
        <div class="sub_input mt-4">
            <!-- <p class="subject mb-0">Subject</p> -->
            <p class="mb-0 subject_text">Subject</p>
            <input type="text" class="sub_box">
        </div>

        <!-- for message box -->
        <div class="message_input mt-2">
        <p class="message mb-0">Message</p>
        <textarea name="" id="" cols="50" rows="8" class="mt-0"></textarea>
        </div>

        <div>
            <button class="send_btn mt-2">Send</button>
        </div>

        <div class="mt-5 ">
            <p class="footer_text">If you need immediate assistance, please contact +95 9777777777 directly. </p>
        </div>
        </div>
        
    </div>

</body>
</html>