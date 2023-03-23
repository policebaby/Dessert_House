<?php
ini_set("display_errors", "1");
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <!--css link start-->
    <link href="../View/resources/css/reset_pwd.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <link href="../View/resources/css/root.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <!--css link end-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Public+Sans:wght@400;600&display=swap" rel="stylesheet">
    <!-- bootstrap link start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- bootstrap link end -->
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>

<body>
    <!-- nav bar start -->
    <?php include "./nav.php"  ?>
    <!-- nav bar end -->
    <!-- reset password start -->
    <div class="div_main">
        <div class="pi_card">
            <iconify-icon icon="ion:lock-closed-sharp" class="lock_icon"></iconify-icon>
            <p class="title">Reset your password?</p>
            <p>We have send four digits on your email.</p>
            <!-- <a href="../Controller/.php" class="text-dark">Resend code.</a> -->
            <p class="text-danger">
                <?php
                if (isset($_SESSION["digitIncorrect"])) {
                    echo  $_SESSION["digitIncorrect"];
                }
                ?></p>
            <form action="../Controller/reset_pwdController.php" method="post" >
                <input type="text" placeholder="Four digit code" class="input_code" name="fourdigit">
                <input type="password" placeholder="New password" class="input_new" name="newpwd">
                <button type="submit" class="btn btn-lg" id="reset_btn" name="reset">Reset password</button>
            </form>
        </div>
    </div>
    <!-- reset password start -->
    <!-- footer start -->
    <?php include "./footer.php"  ?>
    <!-- footer end -->
</body>

</html>