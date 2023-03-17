<?php





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
    <head>
    <body>
        <!-- navbar  start -->
        <?php include "./nav.php" ?>
        <!-- navbar end -->
        <!-- user_change_pwd start -->
        <div class="">
        <div class="row ">
            <!--left side-->
            <div class="col-md-4 ">
            <iconify-icon icon="healthicons:ui-user-profile-outline"  class="pf_pic1"></iconify-icon>
            <p  class="">Profile</p>
            <hr class=""> 
            </div>
            <!---->
            <div class="col-md-8">
            <div class="">
            <iconify-icon icon="healthicons:ui-user-profile-outline"  class="pf_pic2"></iconify-icon>
            <p class="">Profile</p>
            </div>
            <hr class="">
            <!-- Old password -->
            <div class="">
            <h6>Old password</h6>
            <input type="text" placeholder="Please input your old password">
            </div>
            <!-- Create new password -->
            <div class="">
            <h6>Create new password</h6>
            <input type="text" placeholder="Please input your new password">
            </div>
            <!-- Confirm new password -->
            <div class="">
            <h6>Confirm new password</h6>
            <input type="text" placeholder="Please confirm your new password"> 
            </div> 
            <button id="confirm">Confirm</button>
        </div>


        </div>
        </div>
        <!-- user_change_pwd end -->
        <!-- footer start -->
        <?php include "./footer.php"   ?>
        <!-- footer end -->
    </body>
</html>