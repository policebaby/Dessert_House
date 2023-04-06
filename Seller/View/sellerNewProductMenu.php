<?php

include "../Controller/menuTableController.php";

// session_start();
if (isset($_SESSION["sellerName"])) {
    $sellerName = $_SESSION["sellerName"];
    // echo $sellerName;
}
else{
    header("Location: ../View/sellerlogin.php");
}
?>

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
    <!-- ionify link -->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <title>Seller New Product Menu Page</title>
</head>

<body class="seller_new_product_menu_page">
    <div class="row">

        <!-- column1 -->
        <nav class="col-2 mt-0 d-flex flex-direction-column">
            <div class="edit_nav">
                <a href="./sellerDashboard.php" class="nav_logo">
                    <img src="./resources/images/Ellipse 3.png" alt="logo" class="web_logo mt-5">
                    <p class="web_name mb-4 mt-3">DESSERT HOUSE</p>
                </a>
                <!-- sidebar nav -->
                <div class="nav-icons ms-md-3 ms-sm-4 mt-sm-4">
                    <!-- profile icon from left nav -->
                    <a href="./sellerProfile.php" class="nav-text">
                        <span>
                            <iconify-icon icon="bi:people-circle" class="icons"></iconify-icon>
                        </span>
                        <span class="title ms-md-3 mt-2">Profile</span>
                    </a>

                    <!-- meun icon from left nav -->
                    <a href="./sellerNewProductMenu.php" class="nav-text my-md-5 my-sm-4">
                        <span>
                            <iconify-icon icon="material-symbols:menu-book-sharp" class="menu-icon"></iconify-icon>
                        </span>
                        <span href="./sellerNewProductMenu.php" class="product-text ms-md-3 mt-2">Product Menu</span>
                    </a>

                    <!-- order list icon from left nav -->
                    <a href="./orderList.php" class="nav-text">
                        <span>
                            <iconify-icon icon="material-symbols:order-approve-outline" class="icons"></iconify-icon>
                        </span>
                        <span class="title ms-md-3 mt-2">Order Lists</span>
                    </a>

                    <!-- sold history icon from left nav -->
                    <a href="./soldHistory.php" class="nav-text my-md-5 my-sm-4">
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
                    <a href="./feedbackDetails.php" class="nav-text my-md-5 my-sm-4">
                        <span>
                            <iconify-icon icon="ri:feedback-line" class="icons"></iconify-icon>
                        </span>
                        <span class="title ms-md-3">Customers' Feedbacks</span>
                    </a>

                    <!-- logout icon from left nav-->
                    <a href="./sellerlogin.php" class="nav-text mb-5">
                        <span>
                            <iconify-icon icon="material-symbols:logout-rounded" class="icons"></iconify-icon>
                        </span>
                        <span class="title ms-md-3 mt-2">Logout</span>
                    </a>
        </nav>

        <div class="col-10">
            <!-- form start -->
            <form action="../Controller/productMenuController.php" method="post" enctype="multipart/form-data">
                <div class="first-row row mb-3 me-5">
                    <div class="first-row-first col-md-5">
                        <div class="mb-2 product-photo">
                        <p class=" fw-bold h5 mt-3 text-center shop-name"><?= $shopName[0]["shop_name"]?></p>
                            <img src="./resources/images/default_product_image.png" class="seller-photo" id="productImg" required>
                        </div>
                        <input type="file"  class="form-control mt-2 ms-md-3 ms-sm-0" id="formFile" name="productPhoto">
                    </div>

                    <div class="first-row-second col-md-5 mt-md-4 mt-sm-5">
                        <p class="fw-bold h5 insert-title">Insert New Product's Information</p>
                        <div class="label-box">
                            <label for="new-product-name texts" class="fw-bold mt-3 cor-label">New Product Name</label>
                            <input type="text" class="input-box p-md-2 p-sm-2" name="newProductName" required>
                        </div>
                        <div class="label-box my-md-3 my-sm-3">
                            <label for="price-of-each-product" class="fw-bold cor-label">Price Of Each Product</label>
                            <input type="text" class="input-box p-md-2 p-sm-2" name="priceOfeach" required>
                        </div>
                        <div class="label-box">
                            <label for="instock" class="fw-bold">instock</label>
                            <input type="text" class="input-box p-md-2 p-sm-2" name="instock" required>
                        </div>
                        <div class="mb-md-5 mb-sm-5 mt-4">
                            <button class="btns add-btn" name="addBtn">Add</button>
                            <button class="btns ms-4 cancel-btn" id="cancelBtn">Cancel</button>
                        </div>
                    </div>
            </form>
        </div>

        <div class="second-row mt-md-3 mt-sm-2 m-md-5 me-sm-4">
                <p class="product-menu-text h5 fw-bold">Product Menu</p>
                    <table class="table table-borderless">
                        <tr class="t-head text-center">
                            <td>No.</td>
                            <td>Dessert Name</td>
                            <td>Price</td>
                            <td>instock</td>
                            <td ></td>
                            <td></td>
                        </tr>
                        <?php 
                        $count =(($page-1)*$rowLimit) + 1;
                        for ($i=0; $i < count($productList); $i++) { ?>
                            
                            <tr class = "text-center">
                                <td><?= $count++?></td>
                            <td><?= $productList[$i]["product_name"]?></td>
                            <td><?= number_format($productList[$i]["product_price"])?></td>
                            <td><?= $productList[$i]["product_instock"]?></td>
                            <td>
                            <a href="../Controller/productEditController.php?id=<?= $productList[$i]["product_id"]?>" name="editLink"class="fw-bold">Edit</a>
                            </td>
                            <td>
                            <a href="../Controller/deleteLinkController.php?id=<?= $productList[$i]["product_id"]?>" class="text-danger fw-bold">Delete</a>
                            </td>
                        </tr>

                        <?php }?>
                    </table>

            <!-- for pagination -->
            <nav aria-label="Page navigation example">
                    <ul class="pagination  justify-content-center">
                        <li class="page-item 
                        <?php
                        if ($page <= 1) {
                            echo "disabled";
                        }
                        ?>">
                            <a class="page-link" href="?page=<?= $page - 1 ?>" aria-label="Previous">
                                <span class="great" aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <?php
                        for ($i = 1; $i <= $pageList; $i++) { ?>
                            <li class="page-item 
                            <?php
                            if ($page == $i) {
                                echo "active";
                            }
                            ?>">
                                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                            </li>
                        <?php } ?>
                        <li class="page-item 
                        <?php
                        if ($page >= $pageList) {
                            echo "disabled";
                        }
                        ?>">
                            <a class="page-link" href="?page=<?= $page + 1 ?>" aria-label="Next">
                                <span class="less " aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            <!-- </div> -->
        </div>
    </div>
    </div>
    <script src="./resources/js/productMenu.js"></script>
    <script src="./resources/js/cancelBtn.js"></script>
</body>

</html>