<?php
ini_set("display_errors", "1");

include "../Controller/sellerDashboardController.php";

if (isset($_SESSION["sellerName"])) {
    $sellerName = $_SESSION["sellerName"];
} else {
    header("Location: ../View/sellerlogin.php");
}

?>

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
    <!--ionify  link-->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <title>Seller Dashboard Page</title>
</head>

<body class="seller_dashboard_page">
    <div class="main-page">
        <div class="row">
            <nav class="col-2  d-flex flex-direction-column">
                <div class="edit_nav">
                    <a href="./sellerDashboard.php" class="nav_logo text-decoration-none">
                        <img src="./resources/images/Ellipse 3.png" alt="logo" class="web_logo mt-md-5 mt-sm-4">
                        <p class="web_name mb-4 mt-3">DESSERT HOUSE</p>
                    </a>
                    <div class="nav-icons ms-md-3 ms-sm-4 mt-sm-4">
                        <!-- profile icon from left nav -->
                        <div class="nav-text">
                            <span>
                                <iconify-icon icon="bi:people-circle" class="icons"></iconify-icon>
                            </span>
                            <a href="./sellerProfile.php" class="title ms-md-2 mt-2">Profile</a>
                        </div>

                        <!-- meun icon from left nav -->
                        <div class="nav-text my-md-4 my-sm-4">
                            <span>
                                <iconify-icon icon="material-symbols:menu-book-sharp" class="icons"></iconify-icon>
                            </span>
                            <a href="./sellerNewProductMenu.php" class="title ms-md-2 mt-2">Product Menu</a>
                        </div>

                        <!-- order list icon from left nav -->
                        <div class="nav-text">
                            <span>
                                <iconify-icon icon="material-symbols:order-approve-outline" class="icons"></iconify-icon>
                            </span>
                            <a href="./orderList.php" class="title ms-md-2 mt-2">Order Lists</a>
                        </div>

                        <!-- sold history icon from left nav -->
                        <div class="nav-text my-md-4 my-sm-4">
                            <span>
                                <iconify-icon icon="mdi:clipboard-text-clock" class="icons"></iconify-icon>
                            </span>
                            <a href="./soldHistory.php" class="title ms-md-2 mt-2">Sold History</a>
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
                            <a href="./feedbackDetails.php" class="title ms-md-2">Customers' Feedbacks</a>
                        </div>

                        <!-- logout icon from left nav-->
                        <div class="nav-text">
                            <span>
                                <iconify-icon icon="material-symbols:logout-rounded" class="icons"></iconify-icon>
                            </span>
                            <a href="./sellerlogin.php" class="title ms-md-2 mt-2">Logout</a>
                        </div>
            </nav>


            <div class="col-md-10">
                <div class="bs-2 d-flex justify-content-center">
                    <div class="bs-1 d-flex justify-content-center">
                        <div class="blue_squares">
                            <img src="./resources/images/itemCount.png" class="mt-md-3 mt-sm-3 icon21">
                            <?php
                            echo '<p class="text_21 mt-md-2 mt-sm-2">' . $itemCount . '</p>';
                            ?>
                            <span class="blue_name">Item Count</span>
                        </div>
                        <div class="blue_squares ms-sm-5 ms-md-0">
                            <img src="./resources/images/total.png" class="mt-md-3 mt-sm-3 icon21">
                            <?php
                            echo '<p class="text_21 mt-md-2 mt-sm-2">' . $totalOrder . '</p>';
                            ?>
                            <p class="blue_name">Total Order</p>
                        </div>
                    </div>
                    <div class="bs-1 d-flex justify-content-center">
                        <div class="blue_squares">
                            <img src="./resources/images/soldCount.png" class="mt-md-3 mt-sm-3 icon21">
                            <?php
                            $soldCount = isset($result['total_quantity']) ? $result['total_quantity'] : 0;
                           
                            echo '<p class="text_21 mt-md-2 mt-sm-2">' . $soldCount . '</p>';
                            ?>
                            <p class="blue_name">Sold Item Count</p>
                        </div>
                        <div class="blue_squares ms-sm-5 ms-md-0">
                            <img src="./resources/images/pendingOrder.png" class="mt-md-3 mt-sm-3 icon21">
                            <?php
                            echo '<p class="text_21 mt-md-2 mt-sm-2">' . $pendingOrder . '</p>';
                            ?>
                            <p class="blue_name">Pending Orders</p>
                        </div>
                    </div>
                </div>

                <div class="second-row row d-flex justify-content-center">
                    <span class="second_row_first mt-2 col-md-4 col-sm-10">
                        <p class="mt-3 ms-md-3 ms-sm-4 user-per-text">Customers' Satisfactory Percentage</p>
                        <div class="text-center">
                            <span class="cent">
                                <?php
                                if ($overallPercentage != 0) {
                                    if ($overallPercentage <= 25) {
                                        echo '<span class="d-flex justify-content-center">
                <iconify-icon icon="fa6-regular:face-dizzy" class="fs-1"></iconify-icon>
                    <span class="h3 ms-2">' . number_format($overallPercentage, 0) . '%</span><br>
                    </span>
                    ';
                                    } else if ($overallPercentage <= 50) {
                                        echo '<span class="d-flex justify-content-center">
                <iconify-icon icon="ph:smiley-sad-bold" class="fs-1"></iconify-icon>
                    <span class="h3 ms-2">' . number_format($overallPercentage, 0) . '%</span><br>
                    </span>
                    ';
                                    } else if ($overallPercentage <= 75) {
                                        echo '<span class="d-flex justify-content-center">
                <iconify-icon icon="charm:face-neutral" class="fs-1"></iconify-icon>
                    <span class="h3 ms-2">' . number_format($overallPercentage, 0) . '%</span><br>
                    </span>
                    ';
                                    } else {
                                        echo '<span class="d-flex justify-content-center">
                <iconify-icon icon="gg:smile-mouth-open" class="fs-1"></iconify-icon>
                    <span class="h3 ms-2">' . number_format($overallPercentage, 0) . '%</span><br>
                    </span>
                    ';
                                    };
                                }else {
                                        echo '<span class="d-flex justify-content-center">
                                            <span class="h3 ms-2">0%</span><br>
                                            </span>
                                        ';}
                                ?>

                            </span>
                        </div>
                        <div class="ms-md-3 ms-sm-3 mt-md-4 mt-sm-4">
                            <img src="./resources/images/smile.png" class="emoji">
                            <span class="cent">customers' satisfactory 65- 100%</span>
                        </div>
                        <div class="ms-md-3 ms-sm-3 my-md-5 my-sm-5">
                            <img src="./resources/images/simple.png" class="emoji">
                            <span class="cent">customers' satisfactory 45- 65%</span>
                        </div>
                        <div class="ms-md-3 ms-sm-3">
                            <img src="./resources/images/sad.png" class="emoji">
                            <span class="cent">customers' satisfactory 10- 45%</span>
                        </div>
                    </span>

                    <span class="second_row_second mb-sm-5 mt-md-2 mt-sm-4 ms-md-3 col-md-6 col-sm-6 mb-5">
                        <p class="mt-3 ms-4 feedback_header">Customers' Feedbacks</p>
                        <div class="blue-card mb-4">
                            <?php


                            foreach ($reviewResult as $feedback) {
                                $username = $feedback['user_name'];
                                $date = $feedback['create_date'];
                                $replyDate = date('Y-m-d');
                                $feedback_text = $feedback['user_review'];
                                $reviewID = $feedback['review_id'];
                                $userEmail = $feedback['user_email'];
                            ?>

                                <?php
                                $limit = 80;

                                if (strlen($feedback_text) > $limit) {
                                    $shortString = substr($feedback_text, 0, $limit) . '........';
                                } else {
                                    $shortString = $feedback_text;
                                }

                                ?>
                                <div class="feedback_card" id="<?= $reviewID ?>">
                                    <div class="detail ms-3 mt-3 mb-0">
                                        <div class="dis me-3 mt-2"></div>
                                        <span class="user_name mt-1 mb-0"><?= $username ?></span>
                                    </div>
                                    <span class="ms-md-5 ms-sm-5 user_text"><?= $date ?></span>
                                    <p class="ms-md-5 ms-sm-5 user_text mt-0">
                                        <?= $shortString ?>
                                    </p>
                                    <form action="../Controller/replyEmailController.php" method="POST">
                                        <input type="hidden" name="userEmail" value="<?= $userEmail ?>">
                                        <input type="hidden" name="reviewID" value="<?= $reviewID ?>">
                                        <input type="submit" name="thank" value="Reply Thank" class="ms-md-5 ms-sm-5 px-3 bg-primary text-white replyBtn">
                                    </form>

                                </div>
                            <?php } ?>

                            <div class="mt-md-4 mt-sm-4">
                                <a href="./feedbackDetails.php" class="view mt-5 text-decoration-none ">View All</a>
                            </div>
                        </div>
                    </span>
                </div>

            </div>
        </div>
    </div>
</body>

</html>