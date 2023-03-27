<?php 

session_start();
if(isset($_SESSION["editMenu"])){
    $result = $_SESSION["editMenu"];

    // print_r($result);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- seller new product menu edit css link -->
    <link rel="stylesheet" href="./resources/css/newProductEdit.css">
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
    <!-- ionify link -->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <title>New Product Edit Page</title>
</head>

<body class="new_product_edit_page">
    <div class="row">
        <!-- column1 -->
        <nav class="col-2 mt-0 d-flex flex-direction-column">
            <div class="edit_nav">
                <a href="./sellerDashboard.php" class="nav_logo">
                    <img src="./resources/images/Ellipse 3.png" alt="logo" class="web_logo mt-5">
                    <p class="web_name mb-4 mt-3">DESSERT HOUSE</p>
                </a>
                <!-- sidebar nav -->
                <div class="nav-icons ms-md-4 ms-sm-3 mt-sm-4">
                    <!-- profile icon from left nav -->
                    <a href="./sellerProfile.php" class="nav-text">
                        <span>
                            <iconify-icon icon="bi:people-circle" class="icons"></iconify-icon>
                        </span>
                        <span class="title ms-md-3 mt-2">Profile</span>
                    </a>

                    <!-- meun icon from left nav -->
                    <a href="./sellerNewProductMenu.php" class="nav-text my-md-4 my-sm-4">
                        <span>
                            <iconify-icon icon="material-symbols:menu-book-sharp" class="menu-icon"></iconify-icon>
                        </span>
                        <span class="product-text ms-md-3 mt-2">Product Menu</span>
                    </a>

                    <!-- order list icon from left nav -->
                    <a href="./orderList.php" class="nav-text">
                        <span>
                            <iconify-icon icon="material-symbols:order-approve-outline" class="icons"></iconify-icon>
                        </span>
                        <span class="title ms-md-3 mt-2">Order Lists</span>
                    </a>

                    <!-- sold history icon from left nav -->
                    <a href="./soldHistory.php" class="nav-text my-md-4 my-sm-4">
                        <span>
                            <iconify-icon icon="mdi:clipboard-text-clock" class="icons"></iconify-icon>
                        </span>
                        <span class="title ms-md-3 mt-2">Sold History</span>
                    </a>

                    <!-- incoming order icon from left nav -->
                    <a href="./incomingOrder.php" class="nav-text">
                        <span>
                            <iconify-icon icon="material-symbols:order-play-outline" class="icons"></iconify-icon>
                        </span>
                        <span class="title ms-md-2 mt-2">Incoming Orders</span>
                    </a>

                    <!-- feedback icon -->
                    <a href="./feedbackDetails.php" class="nav-text my-md-4 my-sm-4">
                        <span>
                            <iconify-icon icon="ri:feedback-line" class="icons"></iconify-icon>
                        </span>
                        <span class="title ms-md-3">Customer's Feedback</span>
                    </a>

                    <!-- logout icon from left nav-->
                    <a href="./sellerlogin.php" class="nav-text">
                        <span>
                            <iconify-icon icon="material-symbols:logout-rounded" class="icons"></iconify-icon>
                        </span>
                        <span class="title ms-md-3 mt-2">Logout</span>
                    </a>
        </nav>

        <div class="col-10">
            <p class="h4 fw-bold edit-title mt-3">Products Edition</p>
            <div class="first-row mb-5 me-5 mt-4">
                <!-- form start -->
                <form action="../Controller/productUpdateController.php" method="post" enctype="multipart/form-data">
                <input type="hidden" value="<?= $result[0]["product_id"]?>" name="id">
                <div class="edit-photo-gp">
                    <div class="seller-photo mb-2">
                        <!-- to show choose profile photo -->
                        <?php
                            echo '<img src= "../Controller/' .$result[0]["product_picture"].' " class="seller-photo mb-3" id="productImg">';
                        ?>
                    </div>
                    <input class="form-control mt-2" type="file" id="formFile" name="productImg">
                </div>

                <div class="box-gp mt-md-5 mt-sm-5">
                    <div class="label-box">
                        <label for="new-product-name texts" class="fw-bold">Product Name</label>
                        <input type="text" class="input-box p-3" value="<?= $result[0]["product_name"]?>" name="newProductName">
                    </div>
                    <div class="label-box my-md-3 my-sm-3">
                        <label for="product-type" class="fw-bold">Product Type</label>
                        <input type="text" class="input-box p-3" value="<?= $result[0]["product_type"]?>" name="productType">
                    </div>
                    <div class="label-box">
                        <label for="price-of-each-product" class="fw-bold">Price Of Each Product</label>
                        <input type="text" class="input-box p-3" value="<?= $result[0]["product_price"]?> MMK" name="priceOfeach" >
                    </div>
                    <div class="label-box my-md-3 my-sm-3">
                            <label for="instock" class="fw-bold">Instock</label>
                            <input type="text" class="input-box p-3" name="instock"value="<?= $result[0]["product_instock"]?>" name="instock">
                        </div>
                    <div class="mb-md-5 mb-sm-5">
                        <button class="btns add-btn" name="saveProductBtn">Save</button>
                        <a href="./sellerNewProductMenu.php" type="button"class="btns ms-4 cancel-btn text-center text-decoration-none" id="cancelBtn">Cancel</a>
                    </div>
                </div>
                </form>
            </div>


        </div>

        <script src="./resources/js/productMenu.js"></script>
    </div>
</body>

</html>