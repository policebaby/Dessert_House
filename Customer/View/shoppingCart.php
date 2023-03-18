<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- css link start -->
    <link rel="stylesheet" href="./resources/css/shoppingCart.css">
    <link href="style.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <!-- css link end -->
    <!-- js link start -->
    <!-- js link end -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Public+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <title>Shopping Cart</title>
</head>

<body>
    <!-- nav start -->
    <?php
    include "./nav.php"
    ?>
    <!-- nav end -->

    <!-- shoppingcart start -->
    <div class=" text-center ">
        <p class="cartHeader"> Shopping Cart</p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <!-- row start -->
                <tr class=" text-center align-middle">
                    <th scope="row" class="itemimg cellCoffee">
                        <img src="./resources/img/blackcoffee.png" alt="" width="100px" class="">
                        <p>Coffee</p>
                    </th>
                    <td class="cellCoffee">
                        <div class="price">
                            <span class="itemprice">2</span>
                            <span class=""><iconify-icon class="coinIcon coinposition" icon="healthicons:coins"></iconify-icon></span>
                        </div>
                    </td>
                    <td class="cellCoffee">
                        <div class="btn-group btn-group-sm itemCount" role="group" aria-label="Basic outlined example">
                            <button type="button" class="btn btnOutline">-</button>
                            <button type="button" class="btn btnOutline">5</button>
                            <button type="button" class="btn btnOutline">+</button>
                        </div>
                    </td>
                    <td class="cellCoffee">
                        <div class="price">
                            <span class="itemprice">2</span>
                            <span><iconify-icon class="coinIcon coinposition" icon="healthicons:coins"></iconify-icon></span>
                        </div>
                    </td>
                </tr>
                <!-- row end -->
                <!-- row start -->
                <tr class=" text-center align-middle">
                    <th scope="row" class="itemimg cellCoffee">
                        <img src="./resources/img/blackcoffee.png" alt="" width="100px" class="">
                        <p>Coffee</p>
                    </th>
                    <td class="cellCoffee">
                        <div class="price">
                            <span class="itemprice">2</span>
                            <span class=""><iconify-icon class="coinIcon coinposition" icon="healthicons:coins"></iconify-icon></span>
                        </div>
                    </td>
                    <td class="cellCoffee">
                        <div class="btn-group btn-group-sm itemCount" role="group" aria-label="Basic outlined example">
                            <button type="button" class="btn btnOutline">-</button>
                            <button type="button" class="btn btnOutline">5</button>
                            <button type="button" class="btn btnOutline">+</button>
                        </div>
                    </td>
                    <td class="cellCoffee">
                        <div class="price">
                            <span class="itemprice">2</span>
                            <span><iconify-icon class="coinIcon coinposition" icon="healthicons:coins"></iconify-icon></span>
                        </div>
                    </td>
                </tr>
                <!-- row end -->
                <!-- row start -->
                <tr class=" text-center align-middle">
                    <th scope="row" class="itemimg cellCoffee">
                        <img src="./resources/img/blackcoffee.png" alt="" width="100px" class="">
                        <p>Coffee</p>
                    </th>
                    <td class="cellCoffee">
                        <div class="price">
                            <span class="itemprice">2</span>
                            <span class=""><iconify-icon class="coinIcon coinposition" icon="healthicons:coins"></iconify-icon></span>
                        </div>
                    </td>
                    <td class="cellCoffee">
                        <div class="btn-group btn-group-sm itemCount" role="group" aria-label="Basic outlined example">
                            <button type="button" class="btn btnOutline">-</button>
                            <button type="button" class="btn btnOutline">5</button>
                            <button type="button" class="btn btnOutline">+</button>
                        </div>
                    </td>
                    <td class="cellCoffee">
                        <div class="price">
                            <span class="itemprice">2</span>
                            <span><iconify-icon class="coinIcon coinposition" icon="healthicons:coins"></iconify-icon></span>
                        </div>
                    </td>
                </tr>
                <!-- row end -->


            </tbody>
        </table>
        <!-- pagination start -->
        <nav aria-label="Page navigation example ">
            <ul class="pagination pMargin justify-content-center">
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
    </div>
    <!-- check out start -->
    <div class="checkoutBorder container-fluid">
        <div class="">
            <div class="p-5">
                <div class="mb-5">
                    <span class="checkoutInfo">Subtotal </span>
                    <span class="itemprice">: 6</span>
                    <span><iconify-icon class="coinIcon coinposition" icon="healthicons:coins"></iconify-icon></span>
                </div>
                <div class="checkoutInfo">Reserved Seat Number : B1</div>

                <div class="d-flex justify-content-end mt-5 btnCheckoutMD">
                    <button class="btn btnCheckout ">Check Out
                        <iconify-icon icon="ic:baseline-arrow-circle-right" class="btnArrow"></iconify-icon></button>
                </div>
            </div>
        </div>
    </div>
    <!-- check out end -->

    <!-- shopping cart end -->

    <!-- footer start -->
    <?php
    include "./footer.php";
    ?>
    <!-- footer end -->
</body>

</html>