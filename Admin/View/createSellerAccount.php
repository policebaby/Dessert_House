<?php
ini_set("display_errors", "1");

session_start();

//if admin has not logged in and entered url directly, will direct to log in page.
if (!isset($_SESSION["adminId"])) {
    header("Location:./login.php");
}

if (isset($_SESSION["shopNameErr"])) {
    $shopNameErr = $_SESSION["shopNameErr"];
    unset($_SESSION["shopNameErr"]);
}

if (isset($_SESSION["emailErr"])) {
    $emailErr = $_SESSION["emailErr"];
    unset($_SESSION["emailErr"]);
}


if (isset($_SESSION["createDisplay"])) {
    $block = $_SESSION["createDisplay"];
    unset($_SESSION["createDisplay"]);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link with CSS root,adminSellerAccountList, nav bar , admin dashboard for seller controller,rating block -->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/navbar.css">
    <link rel="stylesheet" href="./resources/css/createSellerAccount.css">
    <link rel="stylesheet" href="./resources/css/adminDashboardforSellerController.css">
    <link rel="stylesheet" href="./resources/css/ratingBlock.css">


    <!-- Import google fonts: public display & dm sen serif -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Public+Sans&display=swap" rel="stylesheet">

    <title>Generate Shop Account</title>
</head>

<body>

    <!-- Nav Bar -->
    <nav class="navbar">
        <ul>
            <li><a href="./adminHome.php"><img src="./resources/img/logo.png" class="dessertHouseLogo" alt="Unable to load logo"></a></li>
            <li><a href="./adminSellerAccountList.php">Seller Controller</a></li>
            <li><a href="./userAccountList.php">User Controller</a></li>
            <li><a href="./adminHome.php">System Management</a></li>
            <li>
                <a href="./adminProfile.php"><img src="./resources/img/profilelogo.png" class="profileLogo" alt="Unable to load Profile Logo" srcset=""></a>
            </li>
        </ul>
    </nav>

    <!-- Dashboard for Seller Controller-->
    <div class="dashboard">
        <!-- Account Icon -->
        <div>
            <div class="icon">
                <a href="./adminSellerAccountList.php">
                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="path1" fill-rule="evenodd" clip-rule="evenodd" d="M30.5615 24.0723C33.0732 25.7773 34.8332 28.0873 34.8332 31.1673V36.6673H42.1665V31.1673C42.1665 27.1706 35.6215 24.8056 30.5615 24.0723Z" fill="white" />
                        <path id="path1" d="M16.5003 22.0007C20.5504 22.0007 23.8337 18.7174 23.8337 14.6673C23.8337 10.6172 20.5504 7.33398 16.5003 7.33398C12.4502 7.33398 9.16699 10.6172 9.16699 14.6673C9.16699 18.7174 12.4502 22.0007 16.5003 22.0007Z" fill="white" />
                        <path id="path1" fill-rule="evenodd" clip-rule="evenodd" d="M27.4997 22.0007C31.5513 22.0007 34.833 18.719 34.833 14.6673C34.833 10.6157 31.5513 7.33398 27.4997 7.33398C26.638 7.33398 25.8313 7.51732 25.0613 7.77398C26.639 9.72505 27.4996 12.1582 27.4996 14.6673C27.4996 17.1764 26.639 19.6096 25.0613 21.5607C25.8313 21.8173 26.638 22.0007 27.4997 22.0007ZM16.4997 23.834C11.6047 23.834 1.83301 26.2907 1.83301 31.1673V36.6673H31.1663V31.1673C31.1663 26.2907 21.3947 23.834 16.4997 23.834Z" fill="white" />
                    </svg>
                </a>
                <p>Seller account list</p>
            </div>
        </div>


        <!-- Generate Seller Icon -->
        <div>
            <div class="icon generate" style="background:white; border-radius: 10px;">
                <a href="./createSellerAccount.php">
                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="path1" d="M7.33333 7.33398V11.0007H36.6667V7.33398M7.33333 12.834L5.5 22.0007V25.6673H7.33333V36.6673H23.8333C23.7417 36.044 23.6867 35.4023 23.6867 34.7423C23.6867 32.5057 24.3833 30.3057 25.6667 28.4723V25.6673H28.49C30.3233 24.439 32.4683 23.7607 34.6683 23.7607C35.97 23.7607 37.2717 23.999 38.5 24.4573V22.0007L36.6667 12.834M11 25.6673H22V33.0007H11M33 27.5007V33.0007H27.5V36.6673H33V42.1673H36.6667V36.6673H42.1667V33.0007H36.6667V27.5007" fill="black" />
                    </svg>
                </a>
                <p style="color:black">Generate Seller Account</p>
            </div>
        </div>
    </div>

    <!-- Create Account Body -->
    <div class="createAccountContainer">

        <!-- Create Account title and successfully created line container -->
        <div class="createHeader">
            <div class="createTitle">Create Account</div>
            <div class="successCreated" style="display:<?php if (isset($block)) echo $block ?>">
                <svg class="stick" width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_588_352" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="17">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 8.69643L4.02546 6.46429L8.07639 10.9286L16.1782 2L18.2037 4.23214L8.07639 15.3929L2 8.69643Z" fill="white" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                    </mask>
                    <g mask="url(#mask0_588_352)">
                        <path d="M-1 -0.570312H18.4444V20.8583H-1V-0.570312Z" fill="#42CD29" />
                    </g>
                </svg>
                <div class="circleForStick"></div>

                <div class="stext">Successfully created</div>
            </div>
        </div>

        <!-- titles and input boxes -->
        <form action="../Controller/createSellerController.php" method="post">
            <div class="labels">
                <div class="description">SHOP NAME</div>
                <input type="text" name="shopName" required>
                <?php if (isset($shopNameErr)) { ?>
                    <br><span style="color: red;"><?php echo $shopNameErr; ?></span>
                <?php } ?>
            </div>
            <div class="labels">
                <div class="description">SELLER NAME</div>
                <input type="text" name="sellerName" required>
            </div>
            <div class="labels">
                <div class="description">EMAIL</div>
                <input type="email" name="email" required>
                <?php if (isset($emailErr)) { ?>
                    <br><span style="color: red;"><?php echo $emailErr; ?></span>
                <?php } ?>
            </div>
            <div class="labels">
                <div class="description">PASSWORD</div>
                <input type="text" name="password" required>
            </div>
            <div class="labels">
                <div class="description">Contact Ph</div>
                <input type="text" name="phone" required>
            </div>
            <button type="submit" name="register">CREATE</button>
        </form>
    </div>




</body>

</html>