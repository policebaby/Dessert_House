<?php
ini_set("display_errors", "1");
session_start();

if (isset($_SESSION["username"])) {
    // already success login or sign up
    $name = $_SESSION["username"];
    // echo $name;
} else {
    header("Location: ./user_login.php");
}
// userprofile data 
$userprofile = $_SESSION["userprofile"];
// echo "<pre>";
// print_r($userprofile) ;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <!--css link start-->
    <link href="../View/resources/css/user_profile.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <link href="../View/resources/css/root.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <!--css link end-->
    <!-- js link start -->
    <script src="./resources/js/edit_profile.js" defer></script>
    <!-- js link end -->
    <!--font link start-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Public+Sans&display=swap" rel="stylesheet" />
    <!--font link end-->
    <!--icon link start-->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <!--icon link end-->
    <!-- bootstrap link start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- bootstrap link end -->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</head>

<body>
    <!-- navbar  start -->
    <?php include "./nav.php" ?>
    <!-- navbar end -->
    <!-- user_profile start -->
    <div class="pf_container">
        <div class="row ">
            <div class="col-md-4 first_pf_title">
                <iconify-icon icon="healthicons:ui-user-profile-outline" class="pf_pic1"></iconify-icon>
                <p class="title1">Profile</p>
                <hr class="left_line">
            </div>

            <div class="col-md-8 d-flex flex-column">
                <!-- userdata insert -->
                <div class="sec_pf_title">
                    <?php
                    if ($userprofile[0]["user_profilepic"] == "noprofile") {
                        echo '<img src="./resources/img/default.jpg" id="profileimg" class="rounded float-start" alt="..." width="15%">';
                    } else {
                        echo '<img src="../storages/' . $userprofile[0]["user_profilepic"] . '" id="profileimg" class="rounded float-start" alt="" width="15%">';
                    }
                    ?>

                    <p class="title2 ms-3"><?= $userprofile[0]["user_name"] ?></p>
                </div>
                <hr class="right_line">
                <form action="../Controller/update_profileController.php" method="post" enctype="multipart/form-data">
                    <!-- profile pic -->
                    <input type="file" name="profilepic" id="changeProfile" class="mb-2 ">
                    <div class="profile_name">
                        <!-- first name -->
                        <div class="first_name">
                            <h6>User Name</h6>
                            <input type="text" placeholder="" value="<?= $userprofile[0]["user_name"] ?>" name="username">
                        </div>
                    </div>
                    <!-- email -->
                    <div class="email">
                        <h6>Email</h6>
                        <input type="text" placeholder="" value="<?= $userprofile[0]["user_email"] ?>" name="email">
                    </div>
                    <!-- phone number -->
                    <div class="phone_number">
                        <h6>Phone Number</h6>
                        <input type="text" placeholder="" value="<?= $userprofile[0]["user_phone"] ?>" name="phone">
                    </div>
                    <br>
                    <div class="buy_coin">
                        <iconify-icon icon="healthicons:coins" class="coin_icon"></iconify-icon>
                        <p>Coins</p>
                        <input type="text" placeholder="" value="<?= $userprofile[0]["user_coin"] ?>" readonly>
                        <a href="./coin_exchange.php">
                            <button id="buycoin_btn">Buy Coins</button>
                        </a>
                    </div>
                    <div class="last_role">
                        <button type="submit" name="update" class="btn edit_btn">Update Profile</button>
                </form>
                <form action="./user_change_pwd.php">
                    <button type="submit" class="btn change_btn ">Change Password</button>
                </form>
            </div>
            <button class="btn" id="pf_logout">
                <!-- <iconify-icon icon="material-symbols:logout" id="logout_icon"></iconify-icon> -->
                <a class="logout_text text-decoration-none" href="../View/user_profile.php">Back</a>
            </button>
        </div>

    </div>
    </div>
    <!-- user_profile end -->
    <!-- footer start -->
    <?php include "./footer.php"   ?>
    <!-- footer end -->
    <!-- <script>
        changeProfile.addEventListener("change", function(event) {
            document.getElementById("profileimg").src =
                window.URL.createObjectURL(event.target.files[0]);

        })
    </script> -->
</body>

</html>