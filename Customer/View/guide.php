<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- css link start -->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/guide.css">
    <link rel="stylesheet" href="./resources/css/footer.css">

    <!-- css link end -->
    <!-- js link start -->
    <!-- js link end -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Public+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <title>Guide</title>
</head>

<body>
    <!-- nav start -->
    <?php
    include "nav.php";
    ?>
    <!-- nav end -->
    <!-- FAQ Start -->
    <div class="container">
        <p class="FAQheader text-center ">Frequently asked Questions </p>
        <ul style="list-style-type:disc" class="FAQbox">
            <li>
                <p class="FAQ">What is <span class="logoName"> DESSERT HOUSE ?</span></p>
                <p><span class="logoName"> DESSERT HOUSE</span> is a website that will help customers to be convenience and reduced the time of waiting before enjoying desserts at our food court.</p>
            </li>
            <li>
                <p class="FAQ">What is coin ?</p>
                <p> Coin is the currency that will be used in our system to buy the project of our website and the purpose is to make customer experienced easier times while using our website.</p>
            </li>
            <li>
                <p class="FAQ">What is booking system ?</p>
                <p> Booking system is for customers who want to make sure the seat are available before coming to our food courts and to avoid cases where customers have to experience queuing for a long time.</p>
            </li>
            <li>
                <p class="FAQ">Is it possible to pay with cash without buying coins?</p>
                <p>We prioritized the customer’s satisfactory the most. Which is why we accept both the coin payment, cash payment as well as credit cards.</p>
            </li>
        </ul>
    </div>
    <!-- FAQ end -->
    <!-- footer start -->
    <?php
    include "./footer.php"
    ?>
    <!-- footer end -->
</body>

</html>