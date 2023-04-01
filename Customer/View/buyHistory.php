<?php


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- css link start -->
    <link rel="stylesheet" href="./resources/css/buyHistory.css">

    <!-- css link end -->
    <!-- js link start -->
    <!-- js link end -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Public+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <title>Buy History</title>
</head>

<body>
    <!-- nav start -->
    <?php
    include "./nav.php"
    ?>
    <!-- nav end -->

    <!-- buyHistory start -->
    <div class="container-fluid p-5 mb-5 text-center ">
        <p class="bhHeader mb-5"><u> Your Order History</u></p>
        <table class="table table-hover mb-5 ">
            <thead class="">
                <tr class="rowCoffee ">
                    <th scope="col">No.</th>
                    <th scope="col">Item Names</th>
                    <th scope="col">Grand Total</th>
                    <th scope="col">Order Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" class="align-middle cellCoffee">1</th>
                    <td class=" align-middle">Coffee</td>
                    <td class="cellCoffee">
                        <div class="price ">
                            <span  class="itemprice align-middle">5</span>
                            <span><iconify-icon class="coinIcon coinposition align-middle"  icon="healthicons:coins"></iconify-icon></span>
                        </div>
                    </td>
                    <td class="align-middle">3/1/2023</td>
                </tr>

            </tbody>
        </table>
        <!-- pagination start -->
        <nav aria-label="Page navigation example ">
            <ul class="pagination  justify-content-center mb-5 mt-5">
                <li class="page-item ">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span class="" aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span class=" " aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- pagination end -->
        <div class="btnHistory d-flex justify-content-end mt-5 mb-5">
            <button class="btn btnColor">Update</button>
            <button class="btn btnColor">Go Home</button>
        </div>
    </div>

    <!-- buyHistory end -->

    <!-- footer start -->
    <?php
    include "./footer.php";
    ?>
    <!-- footer end -->
</body>

</html>