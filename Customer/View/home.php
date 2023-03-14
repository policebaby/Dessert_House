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
    <link rel="stylesheet" href="./resources/css/home.css">
    <link rel="stylesheet" href="./resources/css/footer.css">
    <!-- css link end -->
    <!-- js link start -->
    <!-- js link end -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Public+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <title>Home</title>
</head>

<body>
    
    <!-- hero section start -->
    <div class="container-fluid heroSection">
        <div class="row">
            <div class="col-md-6 ">
                <div class="orderInputs">
                    <p class="startOrder">Start order now</p>
                    <form>
                        <div class="form-row">
                            <div class="col-md-5 mb-3 me-5">
                                <label for="validationDefault01">Dessert name</label>
                                <input type="text" class="form-control" id="validationDefault01" placeholder="Search dessert name" value="" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-5 mb-3 me-5">
                                <label for="validationDefault01">Shop name</label>
                                <input type="text" class="form-control" id="validationDefault01" placeholder="Search shop name" value="" required>
                            </div>
                        </div>
                        <button class="btn  btnCoffee" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <img src="./resources/img/coffeeHS.jpeg" alt="" width="100%">
            </div>
        </div>
    </div>
    <!-- hero section end -->

    <!-- shops profiles start -->
    <div class="shopProfiles ">
        <div class="pt-3">
            <p class="shopHeader fs-3  text-center text-light ">Shops</p>
        </div>
        <div class="flex">
            <div class="row justify-content-center mx-5 ">
                <!-- profile block start -->
                <div class="boxborder m-5  col-4">
                    <div class="box ">
                        <p class="text-center mt-5 fs-4">Starbuck</p>
                    </div>
                    <div class="circle"> <img class="position-relative rounded-circle " src="./resources/img/Ellipse 180.png" alt="" width="100%"> </div>
                    <!-- had to put both width and height 100% because of sample picture -->
                    <div class="pic"> <img src="./resources/img/Rectangle 381.png" alt="" width="100%" height="100%"></div>
                    <div class="newItem ">New</div>
                </div>
                <div class="boxborder m-5 col-4">
                    <div class="box ">
                        <p class="text-center mt-5 fs-4">Starbuck</p>
                    </div>
                    <div class="circle"> <img class="position-relative rounded-circle " src="./resources/img/Ellipse 180.png" alt="" width="100%"> </div>
                    <!-- had to put both width and height 100% because of sample picture -->
                    <div class="pic"> <img src="./resources/img/Rectangle 381.png" alt="" width="100%" height="100%"></div>
                    <div class="newItem ">New</div>
                </div>
                <div class="boxborder m-5 col-4">
                    <div class="box ">
                        <p class="text-center mt-5 fs-4">Starbuck</p>
                    </div>
                    <div class="circle"> <img class="position-relative rounded-circle " src="./resources/img/Ellipse 180.png" alt="" width="100%"> </div>
                    <!-- had to put both width and height 100% because of sample picture -->
                    <div class="pic"> <img src="./resources/img/Rectangle 381.png" alt="" width="100%" height="100%"></div>
                    <div class="newItem ">New</div>
                </div>
                <div class="boxborder m-5 col-4">
                    <div class="box ">
                        <p class="text-center mt-5 fs-4">Starbuck</p>
                    </div>
                    <div class="circle"> <img class="position-relative rounded-circle " src="./resources/img/Ellipse 180.png" alt="" width="100%"> </div>
                    <!-- had to put both width and height 100% because of sample picture -->
                    <div class="pic"> <img src="./resources/img/Rectangle 381.png" alt="" width="100%" height="100%"></div>
                    <div class="newItem ">New</div>
                </div>
                <!-- profile block end -->
            </div>
        </div>
        <div class="text-center ">
            <button class="btn btnCoffee my-3">View More</button>
        </div>
    </div>
    <!-- shops profiles end -->
    <!-- guide Start -->
    <div class="guide p-4">
        <p class="text-center guideHeader">How to use this website</p>
        <div class="row">
            <div class="col-2 col-3  ">
                <div class="stepCircle">
                    <p class="step text-center">1st Step</p>
                </div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="stepCircle ">
                    <p class="step text-center">2nd Step</p>
                </div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="stepCircle ">
                    <p class="step text-center">3rd Step</p>
                </div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="stepCircle ">
                    <p class="step text-center">4th Step</p>
                </div>

            </div>
            <div class="col-9 ">
                <p class="instruction">Choose the shop you desire and select the desserts you want from the menu. </p>
                <p class="instruction">Select the estimated time you will arrive to the shop.</p>
                <p class="instruction ">Pay the total amount calculated in the cart when you check out.</p>
                <p class="instruction1">Enjoy the dessert you pre-ordered at our Dessert House when you arrived. </p>
            </div>
        </div>
    </div>
    <!-- guide end -->

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