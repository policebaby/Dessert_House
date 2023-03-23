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
        <?php include "./nav.php" ?>
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
            <!-- first name -->
            <div class="first_name">
            <h6>First Name</h6>
            <input type="text" placeholder="Alexis">
            </div>
            <!-- last name -->
            <div class="last_name">
            <h6>Last Name</h6>
            <input type="text" placeholder="Van Krik">
            </div>
            </div>
            <!-- email -->
            <div class="email">
            <h6>Email</h6>
            <input type="text" placeholder="alexisvankrik@gmail.com"> 
            </div> 
            <!-- password -->
            <div class="desk_mobile">
            <div class="password">        
            <h6>Password</h6>
            <input type="text" placeholder="........."> 
            </div> 
            <a href="#"><u class="link_change_pwd"><p>Change Password</p></u> </a>
            </div>   
            <!-- phone number -->
            <div class="phone_number">       
            <h6>Phone Number</h6>
            <input type="text" placeholder="+95 9777777777" >
            </div>
            <br>
            <div class="buy_coin">
            <iconify-icon icon="healthicons:coins" class="coin_icon"></iconify-icon>
            <p>Coins</p>
            <input type="text" placeholder="100">
            <button id="buycoin_btn">Buy Coins</button>
            <a href="#"><u class="coin_line">Buy Coins</u></a>
            </div>
            <div class="last_role">
            <button id="change_btn">Change Password</button>
            <button id="pf_logout">
            <iconify-icon icon="material-symbols:logout" id="logout_icon"></iconify-icon>
            <p class="logout_text">Log Out</p>
            </button>
            </div>
  
        </div>


        </div>
        </div>
        <!-- user_profile end -->
        <!-- footer start -->
        <?php include "./footer.php"   ?>
        <!-- footer end -->
    </body>
</html>