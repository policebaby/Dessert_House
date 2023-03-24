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
    <!--ionify  link-->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <title>Seller Contact Admin Page</title>
</head>

<body class="seller_contact_admin_page">
    <div class="row">
        <nav class="col-2 mt-0 d-flex flex-direction-column">
            <div class="me-0 ms-0 edit_nav">
                <a href="./sellerDashboard.php" class="nav_logo text-decoration-none">
                    <img src="./resources/images/Ellipse 3.png" alt="logo" width="35%" class="web_logo mt-md-5 mt-sm-5">
                    <p class="web_name mb-4 mt-3">DESSERT HOUSE</p>
                </a>

                <!-- sidebar nav -->
                <div class="nav-icons ms-md-2 mt-sm-4 ms-sm-4 ">
                    <!-- profile icon from left nav -->
                    <a href="./sellerProfile.php" class="nav-text">
                        <span>
                            <iconify-icon icon="bi:people-circle" class="profile-icon"></iconify-icon>
                        </span>
                        <span class="profile-text mt-2 ms-md-3">Profile</span>
                    </a>

                    <!-- meun icon from left nav -->
                    <a href="./sellerNewProductMenu.php" class="nav-text my-md-4 my-sm-3">
                        <span>
                            <iconify-icon icon="material-symbols:menu-book-sharp" class="icons"></iconify-icon>
                        </span>
                        <span class="title ms-md-3 mt-2">Product Menu</span>
                    </a>

                    <!-- order list icon from left nav -->
                    <a href="./orderList.php" class="nav-text">
                        <span>
                            <iconify-icon icon="material-symbols:order-approve-outline" class="icons"></iconify-icon>
                        </span>
                        <span class="title ms-md-3 mt-2">Order Lists</span>
                    </a>

                    <!-- sold history icon from left nav -->
                    <a href="./soldHistory.php" class="nav-text my-md-4 my-sm-3">
                        <span>
                            <iconify-icon icon="mdi:clipboard-text-clock" class="icons"></iconify-icon>
                        </span>
                        <span class="title ms-md-3 mt-2">Sold History</span>
                    </a>

                    <!-- incoming order icon from left nav -->
                    <a href="./incomingOrder.php" class="nav-text">
                        <span>
                            <iconify-icon icon="material-symbols:order-play-outline" class="icons"></iconify-icon>
                        </span>
                        <span class="title ms-md-2 mt-2">Incoming Orders</span>
                    </a>

                    <!-- feedback icon -->
                    <a href="./feedbackDetails.php" class="nav-text my-md-4 my-sm-3">
                        <span>
                            <iconify-icon icon="ri:feedback-line" class="icons"></iconify-icon>
                        </span>
                        <span class="title ms-md-3">Customer's Feedback</span>
                    </a>

                    <!-- logout icon from left nav-->
                    <a href="./sellerlogin.php" class="nav-text">
                        <span>
                            <iconify-icon icon="material-symbols:logout-rounded" class="icons"></iconify-icon>
                        </span>
                        <span class="title ms-md-3 mt-2">Logout</span>
                    </a>
                    <br>
        </nav>
        <!-- fill boxes -->
        <div class="col-10 mt-4 d-flex justify-content-center">
            <div class="box2">
                <form action="../Controller/sellerContactAdminController.php" method="post">
                    <p class="upper_text fw-bold mt-4">Send us a message and we'll get right back to you!</p>
                    <div class="sub_input mt-4">
                        <!-- <p class="subject mb-0">Subject</p> -->
                        <p class="mb-0 subject_text">Subject</p>
                        <input type="text" class="sub_box" name="subjectText">
                    </div>

                    <!-- for message box -->
                    <div class="message_input mt-md-4 mt-sm-4">
                        <p class="message mb-0">Message</p>
                        <textarea name="messageText" id="" cols="50" rows="8" class="message-box"></textarea>
                    </div>

                    <div>
                        <button class="send_btn mt-2" name="sendAdmin">Send</button>
                    </div>

                    <div class="mt-5 ">
                        <p class="footer_text">If you need immediate assistance, please contact +95 9777777777 directly. </p>
                    </div>
            </div>
            </form>

        </div>

</body>

</html>