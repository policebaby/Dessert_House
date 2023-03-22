<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- order list css link -->
    <link rel="stylesheet" href="./resources/css/orderList.css">
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
    <title>Order List Page</title>
</head>
<body class="order_list_page">
    <div class="main-page">
        <div class="row">
        <nav class="col-2 mt-0 d-flex flex-direction-column">
                <div class="edit_nav">
                    <div class="nav_logo">
                        <img src="./resources/images/Ellipse 3.png" alt="logo" class="web_logo mt-5">
                        <p class="web_name mb-4 mt-3">DESSERT HOUSE</p>
                    </div>
                    <!-- sidebar nav -->
                    <div class="nav-icons ms-md-4 ms-sm-3 mt-sm-4">
        <!-- profile icon from left nav -->
        <div class="nav-text">
            <span>
                <iconify-icon icon="bi:people-circle" class="icons"></iconify-icon>
            </span>
            <span class="title ms-md-1 mt-2 text-muted">Profile</span>
        </div>

        <!-- meun icon from left nav -->
        <div class="nav-text my-md-4 my-sm-4">
            <span>
            <iconify-icon icon="material-symbols:menu-book-sharp" class="icons"></iconify-icon>
            </span>
            <span class="title ms-md-1 mt-2 text-muted">Product Menu</span>
        </div>

        <!-- order list icon from left nav -->
        <div class="nav-text">
            <span>
            <iconify-icon icon="material-symbols:order-approve-outline" class="order-icon"></iconify-icon>
            </span>
            <span class="title ms-md-1 mt-2 active">Order Lists</span>
        </div>

        <!-- sold history icon from left nav -->
        <div class="nav-text my-md-4 my-sm-4">
        <span>
        <iconify-icon icon="mdi:clipboard-text-clock" class="icons"></iconify-icon>
        </span>
            <span class="title ms-md-1 mt-2 text-muted">Sold History</span>
        </div>

        <!-- incoming order icon from left nav -->
        <div class="nav-text text-muted">
            <span>
            <iconify-icon icon="material-symbols:order-play-outline" class="icons"></iconify-icon>
            </span>
            <span class="title ms-md-1 mt-2">Incoming Orders</span>
        </div>

        <!-- feedback icon -->
        <div class="nav-text my-md-4 my-sm-4">
            <span>
            <iconify-icon icon="ri:feedback-line" class="icons"></iconify-icon>
            </span>
            <span class="title ms-md-1 text-muted">Customer's Feedback</span>
        </div>

        <!-- logout icon from left nav-->
        <div class="nav-text text-muted">
            <span>
            <iconify-icon icon="material-symbols:logout-rounded" class="icons"></iconify-icon>
            </span>
            <span class="title ms-md-1 mt-2">Logout</span>
        </div>
        </nav>
        <div class="col-10">
        <p class="h4 fw-bold my-md-4 my-sm-4 order-text">Order List</p>
        <div class="blue-width me-5 d-flex justify-content-center ">
        <table class="table table-borderless ms-md-2 ms-sm-3">
            <tr class="t-head">
            <td>No.</td>
            <td>Date</td>
            <td>Order No.</td>
            <td class="col-md-2 col-sm-2">Items</td>
            <td class="title-name">Total Price</td>
            <td class="title-name">Reservation Time</td>
            <td>Status</td>
            </tr>
            <tr>
                <td class="td-text fw-bold">1</td>
                <td class="td-text fw-bold">2023/03/05</td>
                <td class="td-text fw-bold">DS_030001</td>
                <td class="td-text fw-bold types">
                    <span>Latte x  2</span>
                    <span>
                    <ion-icon name="chevron-down-outline" class="down" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></ion-icon>
                    </span>
                </td>
                <td class="td-text fw-bold title-name">$ 80</td>
                <td class="td-text fw-bold title-name">2023/03/06 14:30:00</td>
                <td class="td-text fw-bold">Accept</td>
            </tr>
            <tr class="color-tr">
                <td class=" td-text fw-bold">2</td>
                <td class=" td-text fw-bold">2023/03/05</td>
                <td class=" td-text fw-bold">DS_030001</td>
                <td class=" td-text fw-bold">Americano coffee x 2</td>
                <td class=" td-text fw-bold title-name">$12</td>
                <td class=" td-text fw-bold title-name">2023/03/05 15:30:00</td>
                <td class=" td-text fw-bold">Reject</td>
            </tr>
            </table>
            <!-- popup screen-->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="small-pop mt-3 ms-3">
                            <p class="fw-bold">Reservation Time : <span>2023/03/06 14:30:00	</span></p>
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
                    <div class="mb-4">
                        <hr>
                        <span class="ms-3">Total</span>
                        <span class="total_items me-5">$80</span>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- for pagination -->
        <nav aria-label="Page navigation example d-flex justify-content-center">
            <ul class="pagination  justify-content-center p-0">
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
    </div>
    </body>
</html>