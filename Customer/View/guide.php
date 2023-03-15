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
    <nav class="navbar navbar-expand-lg navbar-light nav">
        <div class="container-fluid ">
            <img src="../View/resources/img/Dessert House-3.png" alt="logo" width="5%" class="ms-3 logo" />
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <ul class="nav justify-content-center me-5">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link text-white mx-3" href="#">Shop</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link text-white" href="#">Coin Shop</a>
                        </li>
                        <li class="nav-item">
                            <div class=" searchBox ms-5">
                                <span><iconify-icon icon="material-symbols:search-rounded" style="color: black" width="1.2em" height="1.2em" class="pt-2"></iconify-icon></span>
                                <input type="text" class="search " placeholder="Search" />
                            </div>
                        </li>

                        <li class="nav-item ">
                            <iconify-icon icon="healthicons:ui-user-profile" style="color: white" width="1.8em" height="1.8em" class="mx-2"></iconify-icon>
                            <iconify-icon icon="material-symbols:shopping-bag" style="color: white" width="1.8em" height="1.8em" class="me-2"></iconify-icon>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>
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
    <div class="footer container-fluid">
        <div class="container p-4">
            <div class="row">
                <!--sub col start -->
                <div class="col-lg-3 col-6 mb-4 mvLogo">
                    <div class="">
                        <div class="d-flex">
                            <img src="../View/resources/img/logo.png" alt="logo" class="logo" />
                            <h4 class="logoName font text-white ms-2">Dessert House</h4>
                        </div>
                        <h6 class="text-white font mt-3">Subscribe our website</h6>
                        <div class="mailbox">
                            <iconify-icon icon="logos:google-gmail" class="mailicon"></iconify-icon>
                            <input type="text" class="mailText text-white-50 ms-2" placeholder="Enter Your Email" />
                        </div>
                    </div>
                </div>
                <!-- sub col end -->

                <!-- needHelp col start -->
                <div class="col-lg-3 col-6 mb-4 mb-md-0 mv">
                    <div class="mt-4 ms-lg-5">
                        <h4 class="subHeader text-white">Need Help?</h4>
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
                <div class="col-lg-3 col-6 mb-4 mb-md-0 mv">
                    <div class="mt-4 mobile ms-lg-2">
                        <h4 class="subHeader text-white">Navigate</h4>
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
                <div class="col-lg-3 col-6 mb-4 mb-md-0 mv">
                    <div class="mt-4 me-md-5 mobile">
                        <h4 class="subHeader text-white">Follow us</h4>
                        <div class="mt-2 mb-2 icons">
                            <iconify-icon icon="logos:facebook"></iconify-icon>
                            <iconify-icon icon="skill-icons:instagram" class="mx-2 px-1"></iconify-icon>
                            <iconify-icon icon="bi:twitter"></iconify-icon>
                        </div>
                        <h4 class="subHeader text-white">Address</h4>
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