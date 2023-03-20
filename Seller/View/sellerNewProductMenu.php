<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- seller new product menu css link -->
    <link rel="stylesheet" href="./resources/css/sellerNewProductMenu.css">
    <!-- seller root css link -->
    <link rel="stylesheet" href="./resources/css/seller-root.css">
    <!-- bootstrap js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- bootstrap css cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Public+Sans&display=swap" rel="stylesheet">
    <!-- ionic icon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Seller New Product Menu Page</title>
</head>
<body class="seller_new_product_menu_page">
<div class="row">

        <!-- column1 -->
        <div class="col-2 edit_nav">
    <div class="my-md-4 mt-md-3 nav_logo">
            <img src="./resources/images/Ellipse 3.png" alt="logo" width="35%" class="web_logo mt-5">
            <p class="web_name mb-4 mt-3">DESSERT HOUSE</p>
    </div>
        <div class="ms-md-4 ms-sm-4">
        <!-- profile icon from left nav -->
        <div class="mt-4 nav_text text-muted">
            <img src="./resources/images/person.png" class="icons">
            <span class="title ms-1">Profile</span>
        </div>
        <!-- meun icon from left nav -->
        <div class="nav_text my-md-5 active">
            <img src="./resources/images/menu.png" class="my-3 product-logo">
            <span class="title ms-1">Product Menu</span>
        </div>
        <!-- order list icon from left nav -->
        <div class="nav_text text-muted">
            <img src="./resources/images/orderList.png" class="icons">
            <span class="title ms-1">Order Lists</span>
        </div>
        <!-- sold history icon from left nav -->
        <div class="nav_text my-md-5 text-muted">
            <img src="./resources/images/soldList.png"class="my-3 icons">
            <span class="title ms-1">Sold History</span>
        </div>
        <!-- incoming order icon from left nav -->
        <div class="nav_text text-muted mb-1">
            <img src="./resources/images/incomingOrder.png" class="icons">
            <span class="title ms-1">Incoming Orders</span>
        </div>
        <!-- feedback icon -->
        <div class="nav_text mt-md-5 text-muted feedback_gp">
            <img src="./resources/images/feedback.png" class="icons cFeedback mt-md-1 mt-sm-1 mb-3" width="13%" height="5%">
            <p class="title feedback_text ms-1 mt-0">Customer's Feedback</p>
        </div>
        <!-- logout icon from left nav-->
        <div class="nav_text text-muted mb-5 my-md-5">
            <img src="./resources/images/Logout.png" alt="" class="nav_text icons logout">
            <span class="title ms-1">Logout</span>
        </div>
        </div>
    </div>

    <div class="col-10">
        <div class="first-row row mb-5 me-5">
            <div class="first-row-first col-md-5 ms-sm-5">
                <div class="seller-photo mb-2"></div>
                <input class="form-control mt-2 ms-md-3" type="file" id="formFile">
            </div>

            <div class="first-row-second col-md-5 mt-md-4 mt-sm-5">
                <p class="fw-bold insert-title">Insert New Product's Information</p>
                <div class="label-box">
                    <label for="new-product-name texts" class="fw-bold">New Product Name</label>
                    <input type="text" class="input-box">
                </div>
                <div class="label-box my-md-3 my-sm-3">
                    <label for="product-type" class="fw-bold">Product Type</label>
                    <input type="text" class="input-box">
                </div>
                <div class="label-box mb-md-5 mb-sm-5">
                    <label for="price-of-each-product" class="fw-bold">Price Of Each Product</label>
                    <input type="text" class="input-box">
                </div>
                <div class="mb-md-5 mb-sm-5">
                    <button class="btns add-btn">Add</button>
                    <button class="btns ms-4 cancel-btn">Cancel</button>
                </div>
            </div>
        </div>

        <div class="second-row mt-5">
            <p class="product-menu-text fw-bold">Product Menu</p>
            <div class="mt-3 text-center me-md-2 row">
                <div class="blue-width me-md-4 me-sm-1">
                    <table class="table table-borderless ms-sm-1 ms-md-1">
                        <tr class="t-head">
                            <td class="col-md-3">Dessert Name</td>
                            <td class="col-md-2">Price</td>
                            <td class="col-md-3">Product Type</td>
                            <td class="col-md-2">
                                <a href="">Edit</a>
                            </td>
                            <td class="col-2">
                                <a href="" class="text-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="color-tr">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="color-tr">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="color-tr">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- for pagination -->
            <nav aria-label="">
                <ul class="pagination mb-sm-5">
                    <li class="page-item disabled">
                        <a class="page-link great" href="#" tabindex="-1" aria-disabled="true">
                            <ion-icon name="chevron-back-outline"></ion-icon>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link p-one" href="#">1</a>
                    </li>
                    <li class="page-item" aria-current="page">
                        <a class="page-link text-muted" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link text-muted" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link less" href="#">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- </div> -->
        </div>
    </div>
</div>

    </body>
</html>