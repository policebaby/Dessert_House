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
    <!-- hero section start -->
    <div class="container-fluid heroSection">
        <div class="row">
            <div class="col-6 ">
                <div class="orderInputs">
                    <p class="startOrder">Start order now</p>
                    <form>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault01">Dessert name</label>
                                <input type="text" class="form-control" id="validationDefault01" placeholder="Search dessert name" value="" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault01">Shop name</label>
                                <input type="text" class="form-control" id="validationDefault01" placeholder="Search shop name" value="" required>
                            </div>
                        </div>
                        <button class="btn  btnCoffee" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <div class="col-6">
                <img src="./resources/img/coffeeHS.jpeg" alt="" width="100%">
            </div>
        </div>
    </div>
    <!-- hero section end -->
    <!-- slideshow start -->
    <div id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="./resources/img/dessertSlide1.webp" class="d-block w-100" alt="...">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <button class="btn btnCoffee">View More</button>
                </div> -->
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="./resources/img/dessertSlide2.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="./resources/img/dessertSlide3.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- slideshow end -->
    <!-- shops profiles start -->
    <div class="shopProfiles ">
        <div class="p-3" >
            <p class="shopHeader fs-3 text-center ">Shops</p>
        </div>
        
        <div class="row  mx-5">
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
        <div class="text-center ">
            <button class="btn btnCoffee my-3">View More</button>
        </div>
    </div>
    <!-- shops profiles end -->
    <!-- guide Start -->
    <div class="guide p-4">
        <p class="text-center guideHeader">How to use this website</p>
        <div class="row">
            <div class="col-3 "> 
            <div class="stepCircle ">
                    <p class="step text-center">1st Step</p>
                </div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="stepCircle ">
                    <p class="step text-center">1st Step</p>
                </div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="stepCircle ">
                    <p class="step text-center">1st Step</p>
                </div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="stepCircle ">
                    <p class="step text-center">1st Step</p>
                </div>
                
            </div>
            <div class="col-9 ">
                <p class="instruction">Choose the shop you desire and select the desserts you want from the menu.  </p>
                <p class="instruction">Select the estimated time you will arrive to the shop.</p>
                <p class="instruction">Pay the total amount calculated in the cart when you check out.</p>
                <p class="instruction1">Enjoy the dessert you pre-ordered at our Dessert House when you arrived. </p>
            </div>
        </div>
    </div>
    <!-- guide end -->
</body>

</html>