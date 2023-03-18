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
    <!-- ionic icon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Sold History Page</title>
</head>
<body class="sold_history">
    <div class="main-page">
        <div class="row">
            <nav class="col-2 mt-0">
                <div class="me-0 ms-0 edit_nav">
                    <div class="nav_logo">
                        <img src="./resources/images/Ellipse 3.png" alt="logo" width="35%" class="web_logo mt-5">
                        <p class="web_name mb-4 mt-3">DESSERT HOUSE</p>
                    </div>
                    <div class="ms-md-4">
                        <!-- profile icon from left nav -->
                        <div class="nav_text text-muted mt-4">
                            <img src="./resources/images/person.png" class="icons">
                            <span class="title ms-1">Profile</span>
                        </div>
                        <!-- meun icon from left nav -->
                        <div class="nav_text my-md-1 text-muted">
                            <img src="./resources/images/menu.png" class="my-md-5 icons">
                            <span class="title ms-1">Product Menu</span>
                        </div>
                        <!-- order list icon from left nav -->
                        <div class="nav_text text-muted">
                            <img src="./resources/images/orderList.png" class="icons">
                            <span class="title ms-1">Order Lists</span>
                        </div>
                        <!-- sold history icon from left nav -->
                        <div class="nav_text active">
                            <img src="./resources/images/soldList.png"class="my-md-5 ">
                            <span class="title ms-1">Sold History</span>
                        </div>
                        <!-- incoming order icon from left nav -->
                        <div class="nav_text text-muted">
                            <img src="./resources/images/incomingOrder.png" class="icons">
                            <span class="title ms-1">Incoming Orders</span>
                        </div>
                        <!-- feedback icon -->
                        <div class="nav_text mt-md-5 text-muted feedback_gp">
                            <img src="./resources/images/feedback.png" class="icons cFeedback mt-1" width="13%" height="5%" >
                            <p class="title feedback_text ms-1">Customer's Feedback</p>
                        </div>
                        <!-- logout icon from left nav-->
                        <div class="nav_text text-muted my-md-5">
                            <img src="./resources/images/Logout.png" alt="" class="nav_text icons logout">
                            <span class="title ms-1">Logout</span>
                        </div><br>
                    </div><br>
                </nav>

                <!-- for page -->
                <div class="col-10">
                <p class="h4 my-4 text-center fw-bold">Sold History</p>
                <div class="blue-width me-4">
        <table class="table table-borderless ms-md-2">
            <tr class="t-head">
            <td>No.</td>
            <td>Date</td>
            <td>Order No.</td>
            <td class="col-md-2">Items</td>
            <td>Total Price</td>
            <td class="title-none">Reservation Time</td>
            </tr>
            <tr>
                <td class="h6 td-text fw-bold">1</td>
                <td class="h6 td-text fw-bold">2023/03/05</td>
                <td class="h6 td-text fw-bold">DS_030001</td>
                <td class="h6 td-text fw-bold">
                    <span>Latte x  2</span>
                    <br>
                    <span>Pineapple Cake x 3</span>
                    <span>
                    <ion-icon name="chevron-down-outline" class="down" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></ion-icon>
                    </span>
                </td>
                <td class="h6 td-text fw-bold">$ 80</td>
                <td class="h6 td-text fw-bold title-none">2023/03/06 14:30:00</td>
            </tr>
            <tr class="color-tr">
                <td class=" td-text fw-bold">2</td>
                <td class=" td-text fw-bold">2023/03/05</td>
                <td class=" td-text fw-bold">DS_030001</td>
                <td class=" td-text fw-bold">Americano coffee x 2</td>
                <td class=" td-text fw-bold">$12</td>
                <td class=" td-text fw-bold title-none">2023/03/05 15:30:00</td>
            </tr>
            <tr>
                <td>3</td>
            </tr>
            <tr class="color-tr">
                <td>4</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </table>
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
        </div>
    </div>
    </body>
</html>