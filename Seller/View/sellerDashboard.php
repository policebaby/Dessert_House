<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- seller dashboard css link -->
    <link rel="stylesheet" href="./resources/css/sellerDashboard.css">
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
    <title>Seller Dashboard Page</title>
</head>
<body class="seller_dashboard_page">
    <div class="main-page">
        <div class="row">
        <nav class="col-2 mt-0">
        <div class="me-0 ms-0 edit_nav">
    <div class="nav_logo">
            <img src="./resources/images/Ellipse 3.png" alt="logo" width="35%" class="web_logo mt-5">
            <p class="web_name mb-4 mt-3">DESSERT HOUSE</p>
    </div>
    <div class="ms-md-4">
        <!-- profile icon from left nav -->
        <div class="nav_text text-muted mt-4">
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
        </div><br>
        </div><br>
        </nav>

        
        <div class="col-md-10">
            <!-- <div class="first-row mt-2 row"> -->
                <div class="bs-2 ms-md-4 ms-sm-5">
                <div class="bs-1">
                    <!-- <div class=" col-md-2 mx-md-4 col-sm-3 mx-sm-5"> -->
                    <div class="blue_squares">
                        <img src="./resources/images/itemCount.png" class="mt-md-3 mt-sm-3 icon21">
                        <p class="text_21 mt-md-2 mt-sm-2">21</p>
                        <span class="blue_name">Item Count</span>
                    </div>
                <!-- </div> -->
                <!-- <div class=" col-md-2 mx-md-4 col-sm-3 mx-sm-5"> -->
                    <div class="blue_squares ms-sm-5 ms-md-0">
                        <img src="./resources/images/total.png" class="mt-md-3 mt-sm-3 icon21">
                        <p class="text_21 mt-md-2 mt-sm-2">21</p>
                        <p class="blue_name">Total Order</p>
                    </div>
                <!-- </div> -->
                </div>
                <div class="bs-1">
                    <!-- <div class=" col-md-2 mx-md-4 col-sm-3 mx-sm-5"> -->
                    <div class="blue_squares">
                        <img src="./resources/images/soldCount.png" class="mt-md-3 mt-sm-3 icon21">
                        <p class="text_21 mt-md-2 mt-sm-2">21</p>
                        <p class="blue_name">Sold Item Count</p>
                    </div> 
                <!-- </div> -->
                <!-- <div class=" col-md-2 mx-md-4 col-sm-3 mx-sm-5"> -->
                    <div class="blue_squares ms-sm-5 ms-md-0">
                        <img src="./resources/images/pendingOrder.png" class="mt-md-3 mt-sm-3 icon21">
                        <p class="text_21 mt-md-2 mt-sm-2">21</p>
                        <p class="blue_name">Pending Orders</p>
                    </div>
                <!-- </div> -->
                </div>
            <!-- </div> -->
                </div>

                <div class="second-row row">
                <span class="second_row_first mt-2 ms-md-5 col-md-4 col-sm-10 ms-sm-3">
                <p class="mt-3 ms-md-3 ms-sm-4 user-per-text">Customers' Satisfactory Percentage</p>
                <div class="text-center">
                <img src="./resources/images/smile.png" class="smile">
                <span class="cent">100%</span>
            </div>
            <div class="ms-md-3 ms-sm-3 mt-md-4 mt-sm-4">
                <img src="./resources/images/smile.png" class="emoji">
                <span class="cent">customers' satisfactory 65- 100%</span>
            </div>
            <div class="ms-md-3 ms-sm-3 my-md-5 my-sm-5">
                <img src="./resources/images/simple.png" class="emoji">
                <span class="cent">customers' satisfactory  45- 65%</span>
            </div>
            <div class="ms-md-3 ms-sm-3">
                <img src="./resources/images/sad.png" class="emoji">
                <span class="cent">customers' satisfactory 10- 45%</span>
            </div>
        </span>

        <span class="second_row_second mb-sm-5 mt-md-2 mt-sm-4 ms-md-3 col-md-6 col-sm-6 mb-5">
            <p class="mt-3 ms-4 feedback_header">Customers' Feedbacks</p>
            <div>
                <div class=" ms-md-5 ms-sm-4 feedback_card">
                    <div class="detail ms-3 mt-3 mb-0">
                    <div class="dis me-3 mt-2"></div>
                    <p class="user_name mt-1 mb-0">username</p>
                    </div>
                    <p class="ms-md-5 ms-sm-5 user_text mt-0">
                        “The way you gave that presentation listened to what I said
                        about the snafu last month. I appreciate application of feedback.”
                    </p>
                    <button class="replyBtn">Reply this feedback</button>
                </div>
                <div class=" ms-md-5 ms-sm-4 feedback_card">
                    <div class="detail ms-3 mt-3 mb-0">
                    <div class="dis me-3 mt-2"></div>
                    <p class="user_name mt-1 mb-0">username</p>
                    </div>
                    <p class="ms-md-5 ms-sm-5 user_text mt-0">
                        “The way you gave that presentation listened to what I said
                        about the snafu last month. I appreciate application of feedback.”
                    </p>
                    <button class="replyBtn">Reply this feedback</button>
                </div>
                <div class=" ms-md-5 ms-sm-4 feedback_card">
                    <div class="detail ms-3 mt-3 mb-0">
                    <div class="dis me-3 mt-2"></div>
                    <p class="user_name mt-1 mb-0">username</p>
                    </div>
                    <p class="ms-md-5 ms-sm-5 user_text">
                        “The way you gave that presentation listened to what I said
                        about the snafu last month. I appreciate application of feedback.”
                    </p>
                    <button class="replyBtn">Reply this feedback</button>
                </div>
            </div>
            <button class="view mt-md-4 mt-sm-4">View All</button>
        </span>
        </div>
        
        </div>
        </div>
    </div>
    </body>
</html>