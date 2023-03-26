<?php

session_start();
if (isset($_SESSION["sellerID"])) {

    $sellerId = $_SESSION["sellerID"];

    // call database
    include "../Model/dbConnection.php";

    // call connection db
    $db  = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
        SELECT * FROM m_seller WHERE seller_id = :id
        "
    );

    $sql->bindValue(":id", $sellerId);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
}


?>

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
    <!--ionify  link-->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <title>Seller Edit Profile Page</title>
</head>

<body class="seller_edit_profile_page">
    <div class="main-page">
        <div class="row">
            <nav class="col-2 d-flex flex-direction-column">
                <div class="edit_nav">
                    <a href="./sellerDashboard.php" class="nav_logo text-decoration-none">
                        <img src="./resources/images/Ellipse 3.png" alt="logo" class="web_logo mt-md-5 mt-sm-3">
                        <p class="web_name mb-4 mt-3">DESSERT HOUSE</p>
                    </a>
                    <!-- sidebar nav -->
                    <div class="nav-icons ms-md-4 ms-sm-3 mt-sm-4">
                        <!-- profile icon from left nav -->
                        <a href="./sellerProfile.php" class="nav-text ms-sm-2 text-decoration-none">
                            <span>
                                <iconify-icon icon="bi:people-circle" class="profile-icon"></iconify-icon>
                            </span>
                            <span class="profile-text ms-md-3 mt-2">Profile</span>
                        </a>

                        <!-- meun icon from left nav -->
                        <a href="./sellerNewProductMenu.php" class="nav-text my-md-4 my-sm-3 text-decoration-none">
                            <span>
                                <iconify-icon icon="material-symbols:menu-book-sharp" class="icons"></iconify-icon>
                            </span>
                            <span class="title ms-md-3 mt-2">Product Menu</span>
                        </a>

                        <!-- order list icon from left nav -->
                        <a href="./sellerlogin.php" class="nav-text text-decoration-none">
                            <span>
                                <iconify-icon icon="material-symbols:order-approve-outline" class="icons"></iconify-icon>
                            </span>
                            <span class="title ms-md-3 mt-2">Order Lists</span>
                        </a>

                        <!-- sold history icon from left nav -->
                        <a href="./soldHistory.php" class="nav-text my-md-4 my-sm-3 text-decoration-none">
                            <span>
                                <iconify-icon icon="mdi:clipboard-text-clock" class="icons"></iconify-icon>
                            </span>
                            <span class="title ms-md-3 mt-2">Sold History</span>
                        </a>

                        <!-- incoming order icon from left nav -->
                        <a href="./incomingOrder.php" class="nav-text text-decoration-none">
                            <span>
                                <iconify-icon icon="material-symbols:order-play-outline" class="icons"></iconify-icon>
                            </span>
                            <span class="title ms-md-2 mt-2">Incoming Orders</span>
                        </a>

                        <!-- feedback icon -->
                        <a href="./feedbackDetails.php" class="nav-text my-md-4 my-sm-3 text-decoration-none">
                            <span>
                                <iconify-icon icon="ri:feedback-line" class="icons"></iconify-icon>
                            </span>
                            <span class="title ms-md-3">Customer's Feedback</span>
                        </a>

                        <!-- logout icon from left nav-->
                        <a href="./sellerlogin.php" class="nav-text text-decoration-none">
                            <span>
                                <iconify-icon icon="material-symbols:logout-rounded" class="icons"></iconify-icon>
                            </span>
                            <span class="title ms-md-3 mt-2">Logout</span>
                        </a>
                        <br>
            </nav>

            <!-- column2 -->
            <div class="col-9 column2 d-flex flex-direction-column justify-content-center">
                <form action="../Controller/updateProfileController.php" method="post" enctype="multipart/form-data">
                    <div class="box2 mt-4">
                        <div class="profile_banner text-center mb-5">
                            <div class="mt-2 edit_photo_bg d-flex flex-direction-column justify-content-center">
                            
                            <!-- to show choose profile photo -->
                            <?php
                        if ($result[0]["shop_profilepic"] == "noprofile"){
                            echo '<img src="./resources/images/default.png" class="editPhoto mb-3" id="profileImg" > ';
                        } else {
                            echo '<img src= "../Controller/' .$result[0]["shop_profilepic"]. ' " class="editPhoto mb-3" id="profileImg" >';
                        };
                        ?>
                            </div>
                            <div class="mb-3 mt-md-3 mt-sm-3 d-flex flex-direction-column justify-content-center">
                                <input class="form-control" type="file" id="formFile" name="profile">
                            </div>
                        </div>
                        <!-- sellerName and old password input box -->
                        <div class="mt-md-4 mt-sm-4 label_box_row">
                            <span class="label_box mb-sm-3 lbox1">
                                <label for="sellerName" class="coner_label fw-bold">Seller Name</label>
                                <input type="text" placeholder="enter your name" class="input_box" name="sellerName" value="<?php echo $result[0]["seller_name"]; ?>">
                            </span>
                            <span class="label_box ms-md-5">
                                <label for="oldPassword" class="coner_label fw-bold">Old Password</label>
                                <input type="password" placeholder="enter your old password" class="input_box" name="password" value="<?php echo $result[0]["password"]; ?>">
                            </span>
                        </div>
                        <!-- shopName and new password box -->
                        <div class="label_box_row mt-md-3 mt-sm-3">
                            <span class="label_box mb-sm-3 lbox2">
                                <label for="shopName" class="coner_label fw-bold">Shop Name</label>
                                <input type="text" placeholder="enter your shop name" class="input_box" name="shop_name" value="<?php echo $result[0]["shop_name"]; ?>">
                            </span>
                            <span class="label_box ms-md-5">
                                <label for="newPassword" class="coner_label fw-bold">New Password</label>
                                <input type="password" placeholder="enter your new password" class="input_box" id="new-password" name="newPassword">
                            </span>
                        </div>
                        <!-- phone and confirm password box -->
                        <div class="label_box_row mt-md-3 mt-sm-3">
                            <span class="label_box mb-sm-3 lbox2">
                                <label for="phone" class="coner_label fw-bold">Phone</label>
                                <input type="text" placeholder="enter your phone number" class="input_box" name="seller_phone" value="<?php echo $result[0]["seller_phone"]; ?>">
                            </span>
                            <span class="label_box ms-md-5">
                                <label for="newPassword" class="coner_label fw-bold">Confirm Password</label>
                                <input type="password" placeholder="confirm your new password" class="input_box" id="confirm-password" name="confirmPassword">
                            </span>
                        </div>
                        <!-- email box -->
                        <div class="label_box_row mt-md-3 mt-sm-3">
                            <span class="label_box mb-sm-3 lbox2">
                                <label for="email" class="email fw-bold">Email</label>
                                <input type="email" placeholder="enter your email" class="input_box" name="email" value="<?php echo $result[0]["email"]; ?>">
                            </span>
                            <span class="label_box ms-md-5">
                                <label for="address" class="email fw-bold">Shop Address</label>
                                <input type="text" placeholder="enter shop address" class="input_box" name="shopAddress" value="<?php echo $result[0]["shopAddress"]; ?>">
                            </span>
                        </div>
                        <p id="message" class="fw-bold text-danger text-center"></p>
                        <!-- button -->
                        <div class="mt-md-4 mt-sm-4 mb-sm-5">
                            <span>
                                <button class="btns saveBtn" type="submit" name="saveBtn">Save Profile</button>
                            </span>
                            <a href="./sellerProfile.php">
                                <button class="btns cancelBtn ms-3">Cancel</button>
                            </a>
                        </div>
                    </div>
            </div>
            </form>
        </div>

        <!-- seller edit profile page js link -->
        <script src="./resources/js/sellerEditProfilePage.js"></script>
        <!-- confirm password js link -->
        <script src="./resources/js/confirmPassword.js"></script>
</body>

</html>