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
    <link href="../View/resources/css/user_profile.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
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
        <!-- navbar end -->
        <!-- user_profile start -->
        <div class="pf_container">
        <div class="row ">
            <div class="col-md-4 first_pf_title">
            <iconify-icon icon="healthicons:ui-user-profile-outline"  class="pf_pic1"></iconify-icon>
            <p  class="title1">Profile</p>
            <hr class="left_line"> 
            </div>
            <div class="col-md-8">
            <div class="sec_pf_title">
            <iconify-icon icon="healthicons:ui-user-profile-outline"  class="pf_pic2"></iconify-icon>
            <p class="title2">Profile</p>
            </div>
            <hr class="right_line">
            <div class="profile_name">
            <div class="first_name">
            <p>First Name</p>
            <input type="text" placeholder="Alexis">
            </div>
            <div class="last_name">
            <p>Last Name</p>
            <input type="text" placeholder="Van Krik">
            </div>
            </div>
            <p>Email</p>
            <input type="text" placeholder="alexisvankrik@gmail.com">            
            <p>Password</p>
            <input type="text" placeholder=".........">            
            <p>Phone Number</p>
            <input type="text" placeholder="+95 9777777777">
            <br>
            <div>
            <iconify-icon icon="healthicons:coins"></iconify-icon>
            <p>Coins</p>
            <input type="text" placeholder="100">
            <button>Buy Coins</button>
            </div>
            <button>Change</button>
            <div class="pf_logout">
            <iconify-icon icon="material-symbols:logout"></iconify-icon>
            <p>Log Out</p>
            </div>
        </div>


        </div>
        </div>
        <!-- user_profile end -->
        <!-- footer start -->
        <!-- footer end -->
    </body>
</html>