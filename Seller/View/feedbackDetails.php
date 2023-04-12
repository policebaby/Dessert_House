<?php
ini_set("display_errors", "1");
include "../Controller/feedbackDetailController.php";

if (isset($_SESSION["sellerName"])) {
    $sellerName = $_SESSION["sellerName"];
    // echo $sellerName;
} else {
    header("Location: ../View/sellerlogin.php");
}

//  check if $review variable is set and not null
if (isset($_SESSION['review']) && !is_null($_SESSION['review'])) {
    $review = $_SESSION['review'];
}

?>


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
    <!-- ionic icon link -->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <!-- Include jQuery from a CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Feedback Details Page</title>
</head>

<body class="feedbackDetails_page">
    <div class="main-page">
        <div class="row">
            <nav class="col-2 mt-0">
                <div class="me-0 ms-0 edit_nav">
                    <a href="./sellerDashboard.php" class="nav_logo">
                        <img src="./resources/images/Ellipse 3.png" alt="logo" class="web_logo mt-md-5 mt-sm-2">
                        <p class="web_name mb-4 mt-3">DESSERT HOUSE</p>
                    </a>
                    <!-- sidebar nav -->
                    <div class="nav-icons ms-md-2 ms-sm-3 mt-sm-4">
                        <!-- profile icon from left nav -->
                        <a href="./sellerProfile.php" class="nav-text">
                            <span>
                                <iconify-icon icon="bi:people-circle" class="icons"></iconify-icon>
                            </span>
                            <span class="title ms-md-3  mt-2">Profile</span>
                        </a>

                        <!-- meun icon from left nav -->
                        <a href="./sellerNewProductMenu.php" class="nav-text my-md-5 my-sm-4">
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
                        <a href="./soldHistory.php" class="nav-text my-md-5 my-sm-4">
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
                            <span class="title ms-md-1 mt-2">Incoming Orders</span>
                        </a>

                        <!-- feedback icon -->
                        <a href="./feedbackDetails.php" class="nav-text my-md-5 my-sm-4">
                            <span>
                                <iconify-icon icon="ri:feedback-line" class="feedback-icon"></iconify-icon>
                            </span>
                            <span class="ms-md-3 cf-text">Customers' Feedbacks</span>
                        </a>

                        <!-- logout icon from left nav-->
                        <a href="./sellerlogin.php" class="nav-text mb-5">
                            <span>
                                <iconify-icon icon="material-symbols:logout-rounded" class="icons"></iconify-icon>
                            </span>
                            <span class="title ms-md-3 mt-2">Logout</span>
                        </a>
                        <div></div>
                        <br>
            </nav>

            <!-- page -->
            <div class="col-10">
                <p class="mt-3 mb-md-4 mb-sm-4 fw-bold h4 feedback-title text-center">Feedback Details</p>
                <!-- percent and progress row -->
                <div class="row">
                    <!-- for percent gp -->
                    <div class="col-md-3 col-sm-3">
                        <div class="per-average">
                            <div class="per-face-text ms-3 mt-md-3 mt-sm-3">
                                <?php
                                if ($overallPercentage != 0) {
                                    if ($overallPercentage <= 25) {
                                        echo '<span class="d-flex face-pt">
                                    <iconify-icon icon="fa6-regular:face-dizzy" class="gold-faces"></iconify-icon>
                                        <span class="h3 ms-md-2 mt-md-3 mt-sm-2 cent">' . number_format($overallPercentage, 0) . '%</span><br>
                                        </span>
                                        <p class="ms-md-3 ms-sm-3 fw-bold above-text">Below Average</p>';
                                    } else if ($overallPercentage <= 50) {
                                        echo '<span class="d-flex face-pt">
                                    <iconify-icon icon="ph:smiley-sad-bold" class="gold-faces"></iconify-icon>
                                        <span class="h3 ms-md-2 mt-md-3 mt-sm-2 cent">' . number_format($overallPercentage, 0) . '%</span><br>
                                        </span>
                                        <p class="ms-md-3 ms-sm-3 fw-bold above-text">Middle Average</p>';
                                    } else if ($overallPercentage <= 75) {
                                        echo '<span class="d-flex face-pt">
                                    <iconify-icon icon="charm:face-neutral" class="gold-faces"></iconify-icon>
                                        <span class="h3 ms-md-2 mt-md-3 mt-sm-2 cent">' . number_format($overallPercentage, 0) . '%</span><br>
                                        </span>
                                        <p class="ms-md-3 ms-sm-3 fw-bold above-text">Good Average</p>';
                                    } else {
                                        echo '<span class="d-flex justify-content-center">
                                    <iconify-icon icon="gg:smile-mouth-open" class="gold-faces"></iconify-icon>
                                        <span class="h3 ms-md-2 mt-md-3 mt-sm-2 cent">' . number_format($overallPercentage, 0) . '%</span><br>
                                        </span>
                                        <p class="ms-md-5 ms-sm-3 fw-bold above-text">Above Average</p>';
                                    }
                                } else {
                                    echo '<span class="d-flex justify-content-center">
                                        <span class="h3 ms-2">0%</span><br>
                                        </span>
                                    ';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- for progress gp -->
                    <div class="col-md-9 col-sm-9">
                        <div class="progress-gp">
                            <!-- progress 1 -->
                            <div class="each-progress">
                                <img src="./resources/images/happy.png" class="faces">
                                <?php
                                if ($shopRatingCount != 0) {
                                    $Spercent = ($smileCount / $shopRatingCount) * 100;
                                } else {
                                    $Spercent = 0;
                                }
                                for ($i = 0; $i < count($Sresult); $i++) { ?>
                                    <div class="progress w-50 mt-2 ms-md-3 ms-sm-3">
                                        <div class="progress-bar" role="progressbar" style="width: <?= $Spercent ?>%" aria-valuenow="<?= $Spercent ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <?php if ($shopRatingCount != 0) { ?>
                                        <span class="mt-md-2 mt-sm-2 ms-md-3 ms-sm-3 fw-bold total-review"><?= $smileCount ?> reviews</span>
                                    <?php } else { ?>
                                        <span class="mt-md-2 mt-sm-2 ms-md-3 ms-sm-3 fw-bold total-review">No reviews yet</span>
                                    <?php } ?>
                            </div>
                        <?php } ?>
                        <!-- progress 2 -->
                        <div class="each-progress">
                            <img src="./resources/images/normal.png" class="faces">
                            <?php
                            if ($shopRatingCount != 0) {
                                $percent = ($pokerCount / $shopRatingCount) * 100;
                            } else {
                                $percent = 0;
                            }
                            for ($i = 0; $i < count($Presult); $i++) { ?>
                                <div class="progress w-50 mt-2 ms-md-3 ms-sm-3">
                                    <div class="progress-bar" role="progressbar" style="width: <?= $percent ?>%" aria-valuenow="<?= $percent ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <?php if ($shopRatingCount != 0) { ?>
                                    <span class="mt-md-2 mt-sm-2 ms-md-3 ms-sm-3 fw-bold total-review"><?= $pokerCount ?> reviews</span>
                                <?php } else { ?>
                                    <span class="mt-md-2 mt-sm-2 ms-md-3 ms-sm-3 fw-bold total-review">No reviews yet</span>
                                <?php } ?>
                        </div>
                    <?php } ?>
                    <!-- progress 3 -->
                    <div class="each-progress">

                        <img src="./resources/images/unhappy.png" class="faces">
                        <?php
                        if ($shopRatingCount != 0) {
                            $Dpercent = ($sadCount / $shopRatingCount) * 100;
                        } else {
                            $Dpercent = 0;
                        }
                        for ($i = 0; $i < count($Dresult); $i++) { ?>
                            <div class="progress w-50 mt-2 ms-md-3 ms-sm-3">
                                <div class="progress-bar" role="progressbar" style="width: <?= $Dpercent ?>%" aria-valuenow="<?= $Dpercent ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <?php if ($shopRatingCount != 0) { ?>
                                <span class="mt-md-2 mt-sm-2 ms-md-3 ms-sm-3 fw-bold total-review"><?= $sadCount ?> reviews</span>
                            <?php } else { ?>
                                <span class="mt-md-2 mt-sm-2 ms-md-3 ms-sm-3 fw-bold total-review">No reviews yet</span>
                            <?php } ?>
                    </div>
                <?php } ?>

                <!-- progress 4 -->
                <div class="each-progress">

                    <img src="./resources/images/unlike.png" class="faces">
                    <?php
                    if ($shopRatingCount != 0) {
                        $Epercent = ($crossCount / $shopRatingCount) * 100;
                    } else {
                        $Epercent = 0;
                    }
                    for ($i = 0; $i < count($Eresult); $i++) { ?>
                        <div class="progress w-50 mt-2 ms-md-3 ms-sm-3">
                            <div class="progress-bar" role="progressbar" style="width: <?= $Epercent ?>%" aria-valuenow="<?= $Epercent ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <?php if ($shopRatingCount != 0) { ?>
                            <span class="mt-md-2 mt-sm-2 ms-md-3 ms-sm-3 fw-bold total-review"><?= $crossCount ?> reviews</span>
                        <?php } else { ?>
                            <span class="mt-md-2 mt-sm-2 ms-md-3 ms-sm-3 fw-bold total-review">No reviews yet</span>
                        <?php } ?>
                </div>
            <?php } ?>

                        </div>
                    </div>
                </div>
                <!-- review cards -->
                <p class="fw-bold mt-2 ms-md-3 ms-sm-3 review-title text-center">Reviews</p>
                <div class="d-flex flex-direction-column justify-content-center two-cards">
                    <?php
                    foreach ($reviewResult as $feedback) {
                        $username = $feedback['user_name'];
                        $date = $feedback['create_date'];
                        $replyDate = date('Y-m-d');
                        $feedback_text = $feedback['user_review'];
                        $reviewID = $feedback['review_id'];
                        $userEmail = $feedback['user_email'];
                    ?>

                        <div class="each-review ms-md-3 ms-sm-3 my-2" id="<?= $reviewID ?>">
                            <div class="details mt-2">
                                <div class="dis me-1 mt-md-2 mt-sm-2 ms-2"></div>
                                <span class="ms-md-3 ms-sm-3 fw-bold"><?= $username ?></span>
                            </div>
                            <span class="ms-md-5 ms-sm-5 date"><?= $date ?></span>
                            <p class="ms-md-5 ms-sm-5 user-text">
                                <?= $feedback_text ?>
                            </p>
                            <form action="../Controller/replyEmailController.php" method="POST">
                                <input type="hidden" name="userEmail" value="<?= $userEmail ?>">
                                <input type="hidden" name="reviewID" value="<?= $reviewID ?>">
                                <input type="submit" name="submit" value="Reply Thank" class="ms-md-5 ms-sm-5 px-3 bg-primary text-white replyBtn">
                            </form>

                        </div>
                    <?php } ?>
                </div>
                <!-- for pagination -->
                <nav aria-label="Page navigation example" class="mt-2 mb-sm-5">
                    <ul class="pagination  justify-content-center">
                        <li class="page-item 
                        <?php
                        if ($page <= 1) {
                            echo "disabled";
                        }
                        ?>">
                            <a class="page-link" href="?page=<?= $page - 1 ?>" aria-label="Previous">
                                <span class="great" aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <?php
                        for ($i = 1; $i <= $pageList; $i++) { ?>
                            <li class="page-item 
                            <?php
                            if ($page == $i) {
                                echo "active";
                            }
                            ?>">
                                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                            </li>
                        <?php } ?>
                        <li class="page-item 
                        <?php
                        if ($page >= $pageList) {
                            echo "disabled";
                        }
                        ?>">
                            <a class="page-link" href="?page=<?= $page + 1 ?>" aria-label="Next">
                                <span class="less " aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <script src="./resources/js/sendReply.js"></script>
</body>

</html>