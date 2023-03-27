<?php

// call database
include "../Controller/incomingOrderController.php";
// session_start();
if (isset($_SESSION["shopID"])) {
    $shopID = $_SESSION["shopID"];
    // echo $shopID;

    // call connection db
    $db = new DBConnection();
    $pdo = $db->connect();

    $sql = $pdo->prepare(
        "
        SELECT * FROM t_order 
        WHERE 
        shop_id = :shopID
        "
    );

    $sql->bindValue("shopID", $shopID);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    // print_r($result);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- incoming order css link -->
    <link rel="stylesheet" href="./resources/css/incomingOrder.css">
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
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <!-- ionic icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Incoming Order Page</title>
</head>

<body class="incoming_order_page">
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
                            <span class="title ms-md-3  mt-2">Profile</span>
                        </a>

                        <!-- meun icon from left nav -->
                        <a href="./sellerNewProductMenu.php" class="nav-text my-md-4 my-sm-4">
                            <span>
                                <iconify-icon icon="material-symbols:menu-book-sharp" class="icons"></iconify-icon>
                            </span>
                            <span class="title ms-md-3 mt-2">Product Menu</span>
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
                                <iconify-icon icon="material-symbols:order-play-outline" class="incoming-icon"></iconify-icon>
                            </span>
                            <span class="incoming-text ms-md-1 mt-2">Incoming Orders</span>
                        </a>

                        <!-- feedback icon -->
                        <a href="./feedbackDetails.php" class="nav-text my-md-4 my-sm-4">
                            <span>
                                <iconify-icon icon="ri:feedback-line" class="icons"></iconify-icon>
                            </span>
                            <span class="title ms-md-3">Customer's Feedback</span>
                        </a>

                        <!-- logout icon from left nav-->
                        <a href="./sellerlogin.php" class="nav-text mb-5">
                            <span>
                                <iconify-icon icon="material-symbols:logout-rounded" class="icons"></iconify-icon>
                            </span>
                            <span class="title ms-md-3 mt-2">Logout</span>
                        </a>
            </nav>

            <!-- page -->
            <div class="col-10 ">
                <p class="h4 fw-bold my-4 incomingorder-text text-center">Incoming Orders</p>
                <div class="blue-width me-md-4 me-sm-4">
                    <table class="table table-borderless ms-md-1 ms-sm-1">
                        <tr class="t-head">
                            <td>No.</td>
                            <td>Date</td>
                            <td>Order No.</td>
                            <td class="col-md-2 title-name">Items</td>
                            <td class="title-name">Total Price</td>
                            <td class="title-name">Reservation Time</td>
                            <td class="title-name">Status</td>
                            <td class="col-3"></td>
                            <td class="seeMore"></td>
                        </tr>
                        <?php
                        $count = 1;
                        for ($i = 0; $i < count($result); $i++) { ?>
                            <tr>
                            <td class="td-text fw-bold"><?= $count++?></td>
                                <td class="td-text fw-bold"><?= $result[$i]["create_date"] ?></td>
                                <td class="td-text fw-bold"><?= $result[$i]["order_id"] ?></td>
                                <td class="td-text fw-bold title-name">
                                    <span class="types">
                                        <span><?= $result[$i]["items"] ?></span>
                                    </span>
                                    <span>
                                        <ion-icon name="chevron-down-outline" class="down" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></ion-icon>
                                    </span>
                                </td>
                                <td class="td-text fw-bold title-name"><?= $result[$i]["total_price"] ?></td>
                                <td class="td-text fw-bold title-name"><?= $result[$i]["reserve_time"] ?></td>
                                <td class="td-text fw-bold title-name">Pending</td>
                                <td class="btn2">
                                    <button class="aBtn accept-reject">Accept</button>
                                    <button class="rBtn accept-reject">Reject</button>
                                </td>
                                <td class="seeMore">
                                    <a href="#" class="fw-bold" data-bs-toggle="modal" data-bs-target="#staticBackdrop">See More</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                    <!-- popup screen-->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="small-pop ms-3 mt-3">
                                    <p>Order No. :<span>DS_030003</span></p>
                                    <p>Date :<span>2023/03/05</span></p>
                                    <p>Reservation Date : <span>2023/03/06 13:40:00</span></p>
                                </div>
                                <div class="modal-header">
                                    <h5 class="modal-title text-decoration-underline" id="staticBackdropLabel">Items</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div>
                                        <span class="items_name">Latte</span>
                                        <span class="total_items me-5">x 2</span>
                                    </div>
                                </div>
                                <div class="small-pop">
                                    <hr>
                                    <span class="ms-4">Total</span>
                                    <span class="total_items me-5">$80</span>
                                    <p class="my-4 ms-4 h5 fw-bold">Status : Pending</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- for pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination  justify-content-center">
                        <li class="page-item ">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span class="great" aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link beat" href="#">1</a></li>
                        <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                        <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span class="less " aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</body>

</html>