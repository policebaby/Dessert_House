<?php

include "../Controller/feedbackDetailController.php";

if (isset($_SESSION["sellerName"])) {
    $sellerName = $_SESSION["sellerName"];
    // echo $sellerName;
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
                        <img src="./resources/images/Ellipse 3.png" alt="logo" class="web_logo mt-5">
                        <p class="web_name mb-4 mt-3">DESSERT HOUSE</p>
                    </a>
                    <!-- sidebar nav -->
                    <div class="nav-icons ms-md-4 ms-sm-3 mt-sm-4">
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
                <p class="mt-3 mb-4 fw-bold h4 feedback-title text-center">Feedback Details</p>
                <!-- percent and progress row -->
                <div class="row">
                    <!-- for percent gp -->
                    <div class="col-md-3 col-sm-3">
                        <div class="per-average">
                            <div class="per-face-text ms-3 mt-md-3 mt-sm-3">
                                <?php
                                $Smile = ($smileCount / $shopRatingCount) * 100;
                                if ($Smile <= 45) {
                                    echo '<span class="d-flex">
                                        <iconify-icon icon="ph:smiley-sad-bold" class="gold-faces"></iconify-icon>
                                        <span class="h3 ms-md-2 mt-md-3 mt-sm-2 cent">' . number_format($Smile, 0) . '%</span><br>
                                        </span>
                                        <p class="ms-md-3 ms-sm-3 fw-bold above-text">Below Average</p>';
                                } else if ($Smile <= 65) {
                                    echo '<span class="d-flex">
                                        <iconify-icon icon="charm:face-neutral" class="gold-faces"></iconify-icon>
                                        <span class="h3 ms-md-2 mt-md-3 mt-sm-2 cent">' . number_format($Smile, 0) . '%</span><br>
                                        </span>
                                        <p class="ms-md-3 ms-sm-3 fw-bold above-text">Middle Average</p>';
                                } else {
                                    echo '<span class="d-flex">
                                        <iconify-icon icon="gg:smile-mouth-open" class="gold-faces"></iconify-icon>
                                        <span class="h3 ms-md-2 mt-md-3 mt-sm-2 cent">' . number_format($Smile, 0) . '%</span><br>
                                        </span>
                                        <p class="ms-md-3 ms-sm-3 fw-bold above-text">Above Average</p>';
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
                                $Spercent = ($smileCount / $shopRatingCount) * 100;
                                for ($i = 0; $i < count($Sresult); $i++) { ?>
                                    <div class="progress w-50 mt-2 ms-md-3 ms-sm-3">
                                        <div class="progress-bar" role="progressbar" style="width: <?= $Spercent ?>%" aria-valuenow="<?= $Spercent ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="mt-md-2 mt-sm-2 ms-md-3 ms-sm-3 fw-bold total-review"><?= $smileCount ?> reviews</span>
                            </div>
                        <?php } ?>

                        <!-- progress 2 -->
                        <div class="each-progress my-1">
                            <img src="./resources/images/normal.png" class="faces">
                            <?php
                            $percent = ($pokerCount / $shopRatingCount) * 100;
                            for ($i = 0; $i < count($Presult); $i++) { ?>
                                <div class="progress w-50 mt-2 ms-md-3 ms-sm-3">
                                    <div class="progress-bar" role="progressbar" style="width: <?= $percent ?>%" aria-valuenow="<?= $percent ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="mt-md-2 mt-sm-2 ms-md-3 ms-sm-3 fw-bold total-review"><?= $pokerCount ?> reviews</span>
                        </div>
                    <?php } ?>

                    <!-- progress 3 -->
                    <div class="each-progress">
                        <img src="./resources/images/unhappy.png" class="faces">
                        <?php
                        $Dpercent = ($sadCount / $shopRatingCount) * 100;
                        for ($i = 0; $i < count($Dresult); $i++) { ?>
                            <div class="progress w-50 mt-2 ms-md-3 ms-sm-3">
                                <div class="progress-bar" role="progressbar" style="width: <?= $Dpercent ?>%" aria-valuenow="<?= $Dpercent ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="mt-md-2 mt-sm-2 ms-md-3 ms-sm-3 fw-bold total-review"><?= $sadCount ?> review</span>
                    </div>
                <?php } ?>
                <!-- progress 4 -->
                <div class="each-progress my-1">
                    <img src="./resources/images/unlike.png" class="faces">
                    <?php
                    $Epercent = ($crossCount / $shopRatingCount) * 100;
                    for ($i = 0; $i < count($Eresult); $i++) { ?>
                        <div class="progress w-50 mt-2 ms-md-3 ms-sm-3">
                            <div class="progress-bar" role="progressbar" style="width: <?= $Epercent ?>%" aria-valuenow="<?= $Epercent ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="mt-md-2 mt-sm-2 ms-md-3 ms-sm-3 fw-bold total-review"><?= $crossCount ?> review</span>
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
                        // echo $userEmail;
                        
                        
                    ?>
                        <div class="each-review ms-md-3 ms-sm-3 mt-md-3" id="<?= $reviewID ?>">
                            <div class="details mt-2">
                                <div class="dis me-1 mt-md-2 mt-sm-2 ms-2"></div>
                                <span class="ms-md-3 ms-sm-3 fw-bold"><?= $username ?></span>
                                <img src="./resources/images/happy-face.png" class="ha-face">
                            </div>
                            <span class="ms-md-5 ms-sm-5 date"><?= $date ?></span>
                            <p class="ms-md-5 ms-sm-5 user-text">
                                <?= $feedback_text ?>
                            </p>
                            <div id="reply-container">
                            <span class="reply-text mb-1" id="reply-text">Reply</span>
                            <input type="hidden" name="reviewID" value="<?= $reviewID ?>">
                            </div>

                            <div id="sellerReply" >
                                
                                <hr class="hr-line">
                                <!-- seller reply -->
                                    <div class="details mt-1 reply-card">
                                        <div class="dis me-1 ms-2"></div>
                                        <span class="ms-md-3 ms-sm-3 fw-bold " name="sellerName"><?= $sellerName ?></span>
                                    </div>
                                    <span class="ms-md-5 ms-sm-5 date"><?= $replyDate ?></span>
                                    <form action="../Controller/sellerReplyTextController.php" method="post">
                                    <?php 
                                    if(isset($_SESSION['review'] )){
                                        $sellerReplyTexter = $_SESSION['review'];
                                        
                                    }?>
                                    <textarea class="form-control" name="replyText" rows="3"><?php echo isset($sellerReplyTexter["seller_reply"]) ? $sellerReplyTexter["seller_reply"] : '' ?></textarea>

                                    <!-- <textarea class="form-control" name="replyText" rows="3"><?php echo $sellerReplyTexter["seller_reply"] ?></textarea> -->

                                        <div class="mt-auto">
                                            <button type="submit" class="btn btn-primary send-button mt-2" name="sendReply" id="sendBtn">Send</button>
                                        </div>
                                        <input type="hidden" value="<?= $userEmail ?>" name="userEmail">
                                    </form>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <script src="./resources/js/sendReply.js"></script>
</body>

</html>