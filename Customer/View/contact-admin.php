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
    <link rel="stylesheet" href="../View/resources/css/contact_admin.css">
    <link rel="stylesheet" href="../View/resources/css/root.css">
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
    <!--Nav bar start-->
    <div class="user_navbar">
        <img src="../View/resources/img/logo.png" alt="logo" class="nav_logo" />

        <ul class="nav_desktop">
            <li class="nav_name">Home</li>
            <li class="nav_name">Shop</li>
            <li class="nav_name">Coin Shop</li>
        </ul>

        <!--search box start-->
        <div class="searchBox">
            <span><iconify-icon icon="material-symbols:search-rounded" class="search_icon"></iconify-icon></span>
            <input type="text" class="search" placeholder="Search" />
        </div>
        <!--search box end-->

        <a href="#">
            <iconify-icon icon="healthicons:ui-user-profile" class="nav_icons nav_pf"></iconify-icon>
        </a>

        <a href="#">
            <iconify-icon icon="material-symbols:shopping-bag" class="nav_icons"></iconify-icon>
        </a>

        <!--bento menu start-->
        <a href="#">
            <label for="nav_check">
                <iconify-icon icon="ic:round-menu" class="nav_menu"></iconify-icon>
            </label>
        </a>
        <!--bento menu end-->
    </div>

    <!--flex text start-->
    <input type="checkbox" id="nav_check">
    <ul class="nav_mobile">
        <li class="nav_mvname">Home</li>
        <li class="nav_mvname">Shop</li>
        <li class="nav_mvname">Coin Shop</li>
        <li class="nav_mvname">Profile</li>
    </ul>
    <!--flex text end-->
    <!--Nav bar end-->

    <!--contact admin start-->
    <div class="row">
        <div class="col-md-6">
            <img src="../View/resources/img/conact admin (4).png" alt="contact admin" class="contactA_pic">
        </div>
        <div class="col-md-6   mt-4">
            <h4 class="mt-4 contact_text_header">Have Some Questions?</h4>
            <h5 class="mt-5  contact_text">User Name</h5>
            <input type="text" class="contactA_input ms-md-5">

            <h5 class="mt-4  contact_text">Phone</h5>
            <input type="text" class="contactA_input ms-md-5">

            <h5 class="mt-4 contact_text">Your Message</h5>
            <textarea name="comment" id="" cols="41" rows="6" class="contactA_textarea ms-md-5"></textarea>
            <br>
            <button class="send_btn mt-4 mb-5">Send</button>
        </div>
    </div>
    <!--contact admin end-->

    <!-- footer start -->
    <div class="footer container-fluid">
        <div class="container p-4">
            <div class="row">
                <!--sub col start -->
                <div class="col-lg-3 col-6 mb-4 ">
                    <div class="">
                        <div class="d-flex">
                            <img src="../View/resources/img/logo.png" alt="logo" class="footer_logo" />
                            <h4 class="logoName footer_font text-white ms-2">Dessert House</h4>
                        </div>
                        <h6 class="text-white footer_font mt-3">Subscribe our website</h6>
                        <div class="mailbox">
                            <iconify-icon icon="logos:google-gmail" class="mailicon"></iconify-icon>
                            <input type="text" class="mailText text-white-50 ms-2" placeholder="Enter Your Email" />
                        </div>
                    </div>
                </div>
                <!-- sub col end -->

                <!-- needHelp col start -->
                <div class="col-lg-3 col-6 mb-4 mb-md-0 footer_mv footer_bar">
                    <div class="mt-4 ms-lg-5 ">
                        <h4 class="footer_subHeader text-white">Need Help?</h4>
                        <br />
                        <p class="text-white">
                            Contact Admin <br />
                            Contact Seller <br />
                            Guide <br />
                            About us <br />
                            Privacy Policy
                        </p>
                    </div>
                </div>
                <!-- needHelp col end -->

                <!-- Navigate col start -->
                <div class="col-lg-3 col-6 mb-4 mb-md-0 footer_mv">
                    <div class="mt-4 mobile ms-lg-2">
                        <h4 class="footer_subHeader text-white">Navigate</h4>
                        <br />
                        <p class="text-white">
                            Coin Shop <br />
                            Product Page <br />
                            Seat booking
                        </p>
                    </div>
                </div>
                <!-- Navigate col end -->
                <!-- followUs col start -->
                <div class="col-lg-3 col-6 mb-4 mb-md-0 footer_mv footer_bar">
                    <div class="mt-4 me-md-5 mobile">
                        <h4 class="footer_subHeader text-white">Follow us</h4>
                        <div class="mt-2 mb-2 footer_icons">
                            <iconify-icon icon="logos:facebook"></iconify-icon>
                            <iconify-icon icon="skill-icons:instagram" class="mx-2 px-1"></iconify-icon>
                            <iconify-icon icon="bi:twitter"></iconify-icon>
                        </div>
                        <h4 class="footer_subHeader text-white">Address</h4>
                        <p class="text-white normalText">
                            No.66, Bahan Township, Yangon, <br />
                            Myanmar. <br />
                            +95 977777777<br />
                            desserthouse@gmail.com
                        </p>
                    </div>
                </div>
                <!-- followUs col end -->
            </div>
        </div>
    </div>
    <!-- footer end -->

</body>

</html>