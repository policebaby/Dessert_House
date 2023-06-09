<?php

include "../Controller/soldHistoryController.php";


// session_start();
if (isset($_SESSION["sellerName"])) {
    $sellerName = $_SESSION["sellerName"];
    // echo $sellerName;
} else {
    header("Location: ../View/sellerlogin.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- sold history css link -->
    <link rel="stylesheet" href="./resources/css/soldHistory.css">
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
    <!-- google icon link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- ionify link -->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <!-- ionic icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Sold History Page</title>
</head>

<body class="sold_history">
    <div class="main-page">
        <div class="row">
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
                            <span class="title ms-md-1 mt-2">Profile</span>
                        </a>

                        <!-- meun icon from left nav -->
                        <a href="./sellerNewProductMenu.php" class="nav-text my-md-4 my-sm-4">
                            <span>
                                <iconify-icon icon="material-symbols:menu-book-sharp" class="icons"></iconify-icon>
                            </span>
                            <span class="title ms-md-1 mt-2">Product Menu</span>
                        </a>

                        <!-- order list icon from left nav -->
                        <a href="./orderList.php" class="nav-text">
                            <span>
                                <iconify-icon icon="material-symbols:order-approve-outline" class="icons"></iconify-icon>
                            </span>
                            <span class="title ms-md-1 mt-2">Order Lists</span>
                        </a>

                        <!-- sold history icon from left nav -->
                        <a href="./soldHistory.php" class="nav-text my-md-4 my-sm-4">
                            <span>
                                <iconify-icon icon="mdi:clipboard-text-clock" class="sold-icon"></iconify-icon>
                            </span>
                            <span class="sold-text ms-md-1 mt-2">Sold History</span>
                        </a>

                        <!-- incoming order icon from left nav -->
                        <a href="./incomingOrder.php" class="nav-text">
                            <span>
                                <iconify-icon icon="material-symbols:order-play-outline" class="icons"></iconify-icon>
                            </span>
                            <span class="title ms-md-1 mt-2">Incoming Orders</span>
                        </a>

                        <!-- feedback icon -->
                        <a href="./feedbackDetails.php" class="nav-text my-md-4 my-sm-4">
                            <span>
                                <iconify-icon icon="ri:feedback-line" class="icons"></iconify-icon>
                            </span>
                            <span class="title ms-md-1">Customers' Feedbacks</span>
                        </a>

                        <!-- logout icon from left nav-->
                        <a href="./sellerlogin.php" class="nav-text mb-5">
                            <span>
                                <iconify-icon icon="material-symbols:logout-rounded" class="icons"></iconify-icon>
                            </span>
                            <span class="title ms-md-1 mt-2">Logout</span>
                        </a>
            </nav>
            <!-- for page -->
            <div class="col-10">
                <div class="me-md-3 me-sm-4">
                    <p class="h4 my-4 text-center fw-bold history-text">Sold History</p>
                    <table class="table table-borderless">
                        <tr class="t-head">
                            <td>No.</td>
                            <td>Date</td>
                            <td>Order No.</td>
                            <td class="col-md-2">Items</td>
                            <td>Total Price</td>
                            <td class="title-none">Reservation Time</td>
                        </tr>
                        <?php $count = (($page - 1) * $rowLimit) + 1;
                        for ($i = 0; $i < count($soldResult); $i++) { ?>
                            <tr>
                                <td class="td-text fw-bold"><?= $count++ ?></td>
                                <td class="td-text fw-bold"><?= $soldResult[$i]["create_date"] ?></td>
                                <td class="td-text fw-bold"><?= $soldResult[$i]["order_id"] ?></td>
                                <td class="td-text fw-bold items">
                                    <span><?= explode(',', $soldResult[$i]['items'])[0] ?></span>
                                    <?php if (count(explode(',', $soldResult[$i]['items'])) > 1) { ?>

                                    <?php } ?>
                                    <span>
                                        <ion-icon name="chevron-down-outline" class="down ms-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="showItemName('<?= $soldResult[$i]['items'] ?>','<?= $soldResult[$i]['order_id'] ?>','<?= $soldResult[$i]['create_date'] ?>','<?= $soldResult[$i]['reserve_time'] ?>', '<?= $soldResult[$i]['grand_total'] ?>')"></ion-icon>
                                    </span>
                                </td>
                                <td class="td-text fw-bold"><?= $soldResult[$i]["grand_total"] ?></td>
                                <td class="td-text fw-bold title-none"><?= $soldResult[$i]["reserve_time"] ?></td>
                            </tr>
                        <?php } ?>
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
                </div>
                <!-- popup screen -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="small-pop mt-3 ms-3">
                                <p>Order No. <span id="orderNo"></span></p>
                                <p>Date :<span id="date"></span></p>
                                <p class="fw-bold">Reservation Time : <span id="reservation"> </span></p>
                            </div>
                            <div class="modal-header">
                                <h5 class="modal-title text-decoration-underline" id="staticBackdropLabel">Items</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <span id="itemName" class="items_name"></span>
                                </div>
                            </div>
                            <div class="mb-4 small-pop">
                                <hr>
                                <span class="ms-3">Total</span>
                                <span id="totalPrice" class="total_items me-5"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="./resources/js/soldHistory.js"></script>
</body>

</html>