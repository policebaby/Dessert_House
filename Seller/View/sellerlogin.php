<?php 

session_start();
unset($_SESSION["sellerName"]);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Dessert-House-Seller-Login-Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href=''>
    <!-- boostrap js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- boostrap css cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- seller css link -->
    <link rel="stylesheet" href="./resources/css/seller-login.css">
    <!-- root css -->
    <link rel="stylesheet" href="./resources/css/seller-root.css">
    <!-- font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Public+Sans&display=swap" rel="stylesheet">
</head>
<body>
  <div class="seller_login row mt-0 back-blue">
    <div class="col-md-5 me-0 text-center mb-sm-5 col-sm-11 box-1">
      <div class = "mt-md-2 mt-sm-5">
        <img src="./resources/images/Ellipse 3.png" alt="logo" class="web-logo">
      </div>

      <!-- form start -->
      <form action="../Controller/sellerLoginController.php" method="post">
      <p class="text-center login-text mt-md-4 mt-sm-4">Log in</p>
      <input type="text" placeholder="Seller Name" class="seller_name box1 my-md-2 my-sm-4 text-center" required name="sellerName">
      <input type="email" placeholder="Email" class = "email box1 my-md-3 my-sm-2 text-center" required name="email">
      <input type="password" placeholder="Password" class="password box1 my-md-2 my-sm-2 text-center" required name="password">
      <button class="loginBtn mt-md-3 mt-sm-3" type="submit" name="loginBtn">Login</button>

      <!-- To show login fail state -->
      <p class="mt-4 text-danger fs-5">
        <?php 

        if(isset($_SESSION["error"])){
          echo $_SESSION["error"];
        }


        ?>
      </p>
      <!-- text between two lines -->
      <div class="redLine mt-4 mb-4">
        <div class="header__center">Login with other</div>
      </div>
      <!-- social medias -->
      <div class = "mt-5 mb-5 social3">
        <img src="./resources/images/logos_facebook.png" alt="" class="me-md-5 me-sm-5">
        <img src="./resources/images/Group.png" alt="" class="mx-5">
        <img src="./resources/images/logos_google-icon.png" alt="" class="ms-md-5 ms-sm-5">
      </div>
      </form>
      <!-- form end -->

    </div>

    <div class="col-md-7 col-sm-0 mt-0 ms-0  login-bg-photo">
    <img src="./resources/images/Rectangle 174.png" alt="seller-login-photo" class="ms-0" width="100%">
    </div>
  </div>
</body>
</html>