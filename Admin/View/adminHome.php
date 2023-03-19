<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link with CSS root, rating coin page-->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/adminHome.css">
    <link rel="stylesheet" href="./resources/css/ratingBlock.css">

    <!-- Import google fonts: public display & dm sen serif -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Public+Sans&display=swap" rel="stylesheet">

    <title>Rating Coin</title>
</head>

<body>

    <!-- include nav bar and systmen management dashboard  -->
    <?php include_once "./dashBoardAndNavForSystemManagement.php" ?>

    <div class="blocks">
        <div class="ratingBlock">
            <div class="iconAndShopName">
                <!-- Seller Icon -->
                <div>
                    <div class="icon">
                        <svg width="34" height="30" viewBox="0 0 34 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 26.0007H6V18.6673H17M33.5 18.6673V15.0007L31.6667 5.83398H2.33333L0.5 15.0007V18.6673H2.33333V29.6673H20.6667V18.6673H28V29.6673H31.6667V18.6673M31.6667 0.333984H2.33333V4.00065H31.6667V0.333984Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="shopName">Total Seller</div>
            </div>
            <div class="percent">1053</div>
        </div>


    </div>

</body>

</html>