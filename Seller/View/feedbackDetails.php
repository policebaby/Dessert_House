<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- seller feedback details css link -->
    <link rel="stylesheet" href="./resources/css/feedbackDetails.css">
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
    <title>Feedback Details Page</title>
</head>
<body class="feedbackDetails_page">
    <div class="main-page">
        <div class="row">
        <nav class="col-2 mt-0">
        <div class="me-0 ms-0 edit_nav">
    <div class="nav_logo">
            <img src="./resources/images/Ellipse 3.png" alt="logo" class="web_logo mt-5">
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
        <div class="nav_text mt-md-5 active feedback_gp">
            <img src="./resources/images/feedback.png" class="icons cFeedback mt-md-1 mt-sm-1" width="13%" height="5%" >
            <p class="title feedback_text ms-1">Customer's Feedback</p>
        </div>
        <!-- logout icon from left nav-->
        <div class="nav_text text-muted my-md-5">
            <img src="./resources/images/Logout.png" alt="" class="nav_text icons logout">
            <span class="title ms-1">Logout</span>
        </div><br>
        </div><br>
        <div></div>
        <br>
        </nav>
        <!-- page -->
        <div class="col-10">
            <p class="mt-3 mb-4 fw-bold h4 feedback-title">Feedback Details</p>
            <!-- percent and progress row -->
            <div class="row">
                <!-- for percent gp -->
                <div class="col-md-3 col-sm-3">
                <div class="per-average">
                    <div class="per-face-text ms-3 mt-md-3 mt-sm-3">
                        <span class="h3 fw-bold per-text">75%</span>
                        <img src="./resources/images/happy-face.png" class="smile-face">
                    </div>
                    <p class="ms-md-3 ms-sm-3 fw-bold above-text">Above Average</p>
                </div>
                </div>
                <!-- for progress gp -->
                <div class="col-md-9 col-sm-9">
                <div class="progress-gp">
                    <!-- progress 1 -->
                    <div class="each-progress">
                        <img src="./resources/images/happy.png" class="faces">
                        <div class="progress w-50 mt-2 ms-md-3 ms-sm-3">
                            <div class="progress-bar" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="mt-md-2 mt-sm-2 ms-md-3 ms-sm-3 fw-bold total-review">62 reviews</span>
                    </div>
                    <!-- progress 2 -->
                    <div class="each-progress my-1">
                        <img src="./resources/images/normal.png" class="faces">
                        <div class="progress w-50 mt-2 ms-md-3 ms-sm-3">
                            <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="mt-md-2 mt-sm-2 ms-md-3 ms-sm-3 fw-bold total-review">20 reviews</span>
                    </div>
                    <!-- progress 3 -->
                    <div class="each-progress">
                        <img src="./resources/images/unhappy.png" class="faces">
                        <div class="progress w-50 mt-2 ms-md-3 ms-sm-3">
                            <div class="progress-bar" role="progressbar" style="width: 4%" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="mt-md-2 mt-sm-2 ms-md-3 ms-sm-3 fw-bold total-review">4 reviews</span>
                    </div>
                    <!-- progress 4 -->
                    <div class="each-progress my-1">
                        <img src="./resources/images/unlike.png" class="faces">
                        <div class="progress w-50 mt-2 ms-md-3 ms-sm-3">
                            <div class="progress-bar" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="mt-md-2 mt-sm-2 ms-md-3 ms-sm-3 fw-bold total-review">1 review</span>
                    </div>
                </div>
                </div>
            </div>

            <!-- review cards -->
            <p class="fw-bold mt-2 ms-md-3 ms-sm-3 review-title">Reviews</p>
            <div>
                <div class="each-review ms-md-3 ms-sm-3">
                    <div class="details mt-2">
                        <div class="dis me-1 mt-md-2 mt-sm-2 ms-2"></div>
                        <span class="ms-md-3 ms-sm-3 fw-bold">username</span>
                        <img src="./resources/images/happy-face.png" class="ha-face">
                    </div>
                    <span class="ms-md-5 ms-sm-5 date">7 March 2023</span>
                    <p class="ms-md-5 ms-sm-5 user-text">
                    Went for the first time with friends. My wife and I shared the Calamari appetizer, Cesar Salad and the Seafood risotto. Service, atmosphere, and food were all top shelf. Manager checked on us himself. Highly recommend to any and all. Great Experience.
                    </p>
                    <span class="reply-text mb-1">Reply</span>
                </div>
                <!-- for reply review -->
                <div class="each-review mt-md-4 mt-sm-4 ms-md-3 ms-sm-3 mb-sm-5 space-bottom">
                    <div class="details mt-2">
                        <div class="dis me-1 mt-md-2 mt-sm-2 ms-2"></div>
                        <span class="ms-md-3 ms-sm-3 fw-bold">username</span>
                        <img src="./resources/images/happy-face.png" class="ha-face">
                    </div>
                    <span class="ms-md-5 ms-sm-5 date">7 March 2023</span>
                    <p class="ms-md-5 ms-sm-5 user-text">
                    Went for the first time with friends. My wife and I shared the Calamari appetizer, Cesar Salad and the Seafood risotto. Service, atmosphere, and food were all top shelf. Manager checked on us himself. Highly recommend to any and all. Great Experience.
                    </p>
                    <hr class="hr-line">
                    <!-- seller reply -->
                    <div class="details mt-1">
                        <div class="dis me-1 ms-2"></div>
                        <span class="ms-md-3 ms-sm-3 fw-bold">sellername</span>
                        <img src="./resources/images/happy-face.png" class="ha-face">
                    </div>
                    <span class="ms-md-5 ms-sm-5 date">8 March 2023</span>
                    <p class="ms-md-5 ms-sm-5 seller-text">
                    We really appreciate you taking the time to share your rating with us. We look forward to seeing you again soon.”
                    </p>
                </div>
            </div>
        </div>
        </div>
    </div>
    </body>
</html>