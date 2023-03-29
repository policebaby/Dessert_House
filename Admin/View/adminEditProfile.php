<?php 

session_start();

$adminFirstName =$_SESSION["adminFirstName"];
$adminLastName =$_SESSION["adminLastName"];
$adminEmail=$_SESSION["adminEmail"];
$adminPassword=$_SESSION["adminPassword"];
$adminPhone = $_SESSION["adminPhone"];


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link with root css,login css, circleBackground css, nav bar css -->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/adminEditProfile.css">
    <link rel="stylesheet" href="./resources/css/circleBackground.css">
    <link rel="stylesheet" href="./resources/css/navbar.css">
    <link rel="stylesheet" href="./resources/css/adminProfile.css">

    <!-- Import google fonts: public display & dm sen serif -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Public+Sans&display=swap" rel="stylesheet">

    <title>Admin Edit Profile</title>
</head>

<body>
    <!-- Nav Bar -->
    <nav class="navbar">
        <ul>
            <li><img src="./resources/img/logo.png" class="dessertHouseLogo" alt="Unable to load logo"></li>
            <li><a href="./adminSellerAccountList.php">Seller Controller</a></li>
            <li><a href="./userAccountList.php">User Controller</a></li>
            <li><a href="./adminHome.php">System Management</a></li>
            <li>
                <a href="./adminProfile.php"><img src="./resources/img/profilelogo.png" class="profileLogo" alt="Unable to load Profile Logo" srcset=""></a>
            </li>
        </ul>
    </nav>

    <!-- Body -->
    <form action="../Controller/adminEditProfileController.php" method="post">
    <div class="container">
        <img class="logoWithBorder" src="./resources/img/logoWithBorder.png" alt="Unable to load Logo">
        <div class="filesButton">
            <button>Choose file</button>
            <button>No file choosen</button>
        </div>
        <div class="twoInputBoxes">
            <input type="text" value="<?=$adminFirstName?>" name="adminFirstName">
            <input type="text" value="<?=$adminLastName?>" name="adminLastName">
        </div>
        <input type="text" placeholder="Please Insert New Password" name="adminPassword">
        <input type="text" value="<?=$adminPhone?>" name="adminPhone">    
        <input type="email" value="<?=$adminEmail?>" name="adminEmail">
        <div class="twoButtons">
            <button type="submit" name="save">Save Profile</button>
            <button>Cancel</button>
        </div>

    </div>
    </form>

    <!-- background circles -->
    <div class="upperLeftOuterCircle"></div>
    <div class="upperLeftInnerCircle"></div>
    <div class="lowerRightOuterCircle"></div>
    <div class="lowerRightInnerCircle"></div>
</body>

</html>