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
    <!-- ionic icon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Sold History Page</title>
</head>
<body class="sold_history">
    <nav class="side-nav">
        <div class="mt-4">
            <img src="./resources/images/Ellipse 3.png" alt="webLogo" class="web-logo ms-5">
            <p class="web-name ms-4">DESSERT HOUSE</p>
        </div>
        <div class="side">
            <ion-icon name="person-circle-outline" class="profile-icon"></ion-icon>
        <!-- <span class="material-symbols-outlined profile-icon">account_circle</span> -->
        <span class="profile-names ms-2 mt-2">Profile</span>
        </div>
        <div class="side">
        <span class="material-symbols-outlined nav-icons">menu_book</span>
        <span class="nav-names ms-2 mt-2">Product Menu</span>
        </div>
        <div class="side">
        <span class="material-symbols-outlined nav-icons">order_approve</span>
        <span class="nav-names ms-2 mt-2">Order List</span>
        </div>
        <div class="side">
        <span class="material-symbols-outlined nav-icons">pending_actions</span>
        <span class="nav-names ms-2 mt-2">Sold History</span>
        </div>
        <div class="side">
        <span class="material-symbols-outlined nav-icons">order_play</span>
        <span class="nav-names ms-2 mt-2">Incoming Order</span>
        </div>
        <div class="side">
        <span class="material-symbols-outlined nav-icons">sms_failed</span>
        <span class="nav-names ms-2 mt-2">Customer's Feedback</span>
        </div>
        <div class="side">
        <span class="material-symbols-outlined nav-icons">logout</span>
        <span class="nav-names ms-2 mt-2">Logout</span>
        </div>
    </nav>
    
    <div class="page row ms-4">
        <p class="h4 fw-bold my-md-4 my-sm-4 text-center">Sold History</p>
        <div class="blue-width ms-md-4">
            <table class="table table-borderless ms-md-4 ms-sm-3 w-100">
            <tr class="t-head">
            <td>No.</td>
            <td>Date</td>
            <td>Order No.</td>
            <td class="col-md-2 col-sm-2">Items</td>
            <td class="title-name">Total Price</td>
            <td class="title-name">Reservation Time</td>
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
            </tr>
            <tr class="color-tr">
                <td class=" td-text fw-bold">2</td>
                <td class=" td-text fw-bold">2023/03/05</td>
                <td class=" td-text fw-bold">DS_030001</td>
                <td class=" td-text fw-bold">Americano coffee x 2</td>
                <td class=" td-text fw-bold title-name">$12</td>
                <td class=" td-text fw-bold title-name">2023/03/05 15:30:00</td>
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