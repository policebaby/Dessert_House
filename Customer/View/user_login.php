<?php
ini_set("display_errors", "1");
session_start();
unset($_SESSION["username"]);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User login</title>
    <!--css link start-->
    <link href="../View/resources/css/user_login.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <link href="../View/resources/css/root.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <!--css link end-->
    <!-- js link start -->
    <!-- js link end -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Public+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <!--bootstrap start-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--bootstrap end-->
</head>

<body class="container-fluid position-relative">
    <div class=" row bg_img">
        <!-- reservationForm start -->
        <div class="col-md-5  login_bg">
            <div class="logo_border">
                <img src="../View/resources/img/logo.png" alt="logo" class="logo" />
                <div class="frame">
                    <p class="text-center text-light fs-3 title">Log in</p>
                    <div class="p-3 login_input login_form ">
                        <form action="../Controller/user_loginController.php" method="post" >
                            <!-- input group start -->
                            <div class="mb-4 ">
                                <input type="text" class="form-control outlineColor" id="" placeholder="User Name" name="username">
                            </div>
                            <div class="mb-4">
                                <input type="password" class="form-control outlineColor" id="" placeholder="Password" name="password">
                            </div>
                            <!-- input group end -->
                            <p class="text-danger">
                                    <?php
                                    if (isset($_SESSION["error"])) {
                                        echo  $_SESSION["error"];
                                    }
                                    ?></p>
                            <button type="submit" class="btn btnlogin mt-3 mb-4" name="login">Login</button>
                            <br>
                            <a href="./user_signup.php" class="mb-4">Don't Have Account? Sign Up!</a>
                            <br>
                            <a href="./forget_password.php" class="mt-4">Forget Password</a>
                            <!-- line start -->
                            <!-- text between two lines -->
                            <!-- <div class="lastbar">
                                <div class="two_lines">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="line_left line"></div>
                                        </div>
                                        <div class="col-6 "><span>login with other</span></div>
                                        <div class="col-3">
                                            <div class="line_right line"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- Three icons -->
                            <!-- <div class="lastbar_icon">
                                <div class="login_icons mt-4 fs-6 align-center">
                                    <iconify-icon icon="logos:facebook" class="login_icon"></iconify-icon>
                                    <iconify-icon icon="skill-icons:twitter" class="login_icon mx-5"></iconify-icon>
                                    <iconify-icon icon="logos:google-icon" class="login_icon"></iconify-icon>
                                </div>
                            </div> -->
                            <!-- line end -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- reservationForm start -->
    </div>
</body>

</html>