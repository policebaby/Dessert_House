<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Seller</title>
    <link rel="stylesheet" href="../View/resources/css/contact_seller.css">
    <link rel="stylesheet" href="../View/resources/css/root.css">
        <!--font link start-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Public+Sans&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Public+Sans&display=swap" rel="stylesheet" />
    <!--font link end-->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>

<body>
    <?php include "./nav.php"?>
    <!--contact seller start-->
    <div class="contactS-container">
        <div class="contactS_logo">
            <img src="../View/resources/img/logo.png" alt="logo" class="seller_logo">
        </div>
        <div class="contact_seller_frame">
            <div>
                <img src="../View/resources/img/Feedback-ai-1400x788 1.png" alt="" class="seller_pic">
            </div>
            <div class="contactS_box">
                <h5 class="contactS_text">User Name</h5>
                <input type="text" class="contactS_input">

                <h5 class=" contactS_text">Phone</h5>
                <input type="text" class="contactS_input">

                <h5 class="contactS_text">Your Message</h5>
                <textarea name="comment" id="" cols="40" rows="6" class="contactS_textarea" placeholder="Suggest or comment"></textarea>
                <br>
                <img src="../View/resources/img/Face.png" alt="satisfity" class="S_icons">
                <br>
                <button class="contactS_btn">Submit</button>
            </div>
        </div>
    </div>
    <!--footer start-->
 <?php  include "./footer.php" ?>
    <!--footer end-->
</body>

</html>