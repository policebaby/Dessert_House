<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Seller</title>
    <!--css link start-->
    <link href="../View/resources/css/contact_seller.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <link href="../View/resources/css/root.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <!--css link end-->
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
    <!--icon link start-->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <!--icon link end-->
    <!-- bootstrap link start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- bootstrap link end -->
    <!-- icon link start -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <!-- icon link end -->
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