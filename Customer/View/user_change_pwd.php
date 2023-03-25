<?php
ini_set("display_errors", "1");
session_start();

if (isset($_SESSION["userprofile"])) {
    $userprofile = $_SESSION["userprofile"];

    // echo "ok";
} else {
    echo "error";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--css link start-->
    <link href="../View/resources/css/user_change_pwd.css?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <link href="../View/resources/css/root.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <!--css link end-->
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
    <?php include "./nav.php"  ?>
    <!-- navbar end -->
    <!-- user_change_pwd start -->
    <div class="ch_pwd_container mt-5">
        <div class="row ">
            <div class="col-md-4 first_pwd_title">
                <iconify-icon icon="healthicons:ui-user-profile-outline" class="pwd_pic1"></iconify-icon>
                <p class="pw_title1">Profile</p>
                <hr class="left_line">
            </div>
            <div class="col-md-8">
                <div class="sec_pwd_title">
                    <?php
                    if ($userprofile[0]["user_profilepic"] == "noprofile") {
                        echo '<img src="./resources/img/default.jpg" id="profileimg" class="rounded float-start" alt="..." width="15%">';
                    } else {
                        echo '<img src="../storages/' . $userprofile[0]["user_profilepic"] . '" id="profileimg" class="rounded float-start" alt="" width="15%">';
                    }
                    ?>
                    <p class="pw_title2 ms-3"><?= $userprofile[0]["user_name"] ?></p>
                </div>
                <!-- inputs -->
                <hr class="right_line">
                <form action="../Controller/user_changepwdController.php" method="post">
                    <!-- Old password  -->
                    <div class="old">
                        <h6>Old password</h6>
                        <input type="password" placeholder="Please input your old password" name="oldpwd">
                    </div>
                    <p class="text-danger">
                        <?php
                        if (isset($_SESSION["incorrectoldpwd"])) {
                            echo  $_SESSION["incorrectoldpwd"];
                        }
                        ?></p>
                    <!-- Create new password -->
                    <div class="create_new">
                        <h6>Create new password</h6>
                        <input type="password" placeholder="Please input your new password" name="newpwd">
                    </div>

                    <!-- Confirm new password-->
                    <!-- <div class="confirm_new">
                        <h6>Confirm new password</h6>
                        <input type="text" placeholder="Please confirm your new password">
                    </div> -->

                    <button type="submit" name="changepwd" id="change_btn" class="mb-5">Confirm</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- user_change_pwd end -->
    <!-- footer start -->
    <?php include "./footer.php"   ?>
    <!-- footer end -->
</body>

</html>