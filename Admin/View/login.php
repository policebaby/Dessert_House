<?php

session_start();
//If the username and password does not match, will have this session
if (isset($_SESSION["logInError"])) {
    $logInError = $_SESSION["logInError"];
    unset($_SESSION["logInError"]);
}


// After logged in onced, there will be adminid in session, which can help direct to admin Home page directly when visiting login url
if(isset($_SESSION["adminId"])){
    header("Location: ./adminHome.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link with root css,login css, circleBackground css -->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/logIn.css">
    <link rel="stylesheet" href="./resources/css/circleBackground.css">

    <!-- Import google fonts: public display & dm sen serif -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Public+Sans&display=swap" rel="stylesheet">

    <title>Admin Log In</title>
</head>

<body>
    <!-- Login Card -->
    <div class="firstContainer">
        <img src="./resources/img/logo.png" alt="Fail to load Logo" class="logo">

        <div class="upperContainer"></div>
        <div class="lowerContainer">
            <div class="title">DESSERT HOUSE</div>
            <div class="loginText">Log in</div>

            <!-- Insert form to send data to server -->
            <form class="form" action="../Controller/adminLoginController.php" method="post">
                <input type="text" placeholder="Admin Name" id="adminName" class="nameInputBox" name="adminName">
                <input type="text" placeholder="Password" id="adminpassword" class="passwordInputBox" name="adminPassword">
                <?php if (isset($logInError)) { ?>
                    <br><span style="color: red;"><?php echo $logInError; ?></span>
                <?php } ?>
                <button type="submit" class="logInButton">Log in</button>
            </form>
        </div>
    </div>





    <!-- background circles -->
    <div class="upperLeftOuterCircle"></div>
    <div class="upperLeftInnerCircle"></div>
    <div class="lowerRightOuterCircle"></div>
    <div class="lowerRightInnerCircle"></div>
</body>

</html>