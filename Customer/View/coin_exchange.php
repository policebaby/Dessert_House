<?php
ini_set("display_errors", "1");
session_start();

if (isset($_SESSION["coinprice"])) {
    $coinprice = $_SESSION["coinprice"];
    // echo "<pre>";
    // print_r($coinprice);
} else {
    echo "error";
}

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
    <link rel="stylesheet" href="./resources/css/coinExchange.css">

    <!-- css link end -->
    <!-- js link start -->
    <script src="./resources/js/coin_exchange.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <!-- js link end -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Public+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <title>Coin Exchange</title>
</head>

<body >
    <!-- nav start -->
    <?php
    include "./nav.php"
    ?>
    <!-- nav end -->
    <!-- coin exchange start -->
    <div class="ms-3 d-flex flex-column justify-content-center coinbody">
        <p class="text-center fs-5 coinsubheader">Coin Exchange Rates</p>
        <div class="container-fluid row exchangeBox">
            <div class="col-md-5 rateBg ">
                <div class=" currencyRates ">
                    <iconify-icon class="coinIcon coinPosition" icon="healthicons:coins"></iconify-icon>
                    <span class="coinCurrency">x 1 = <?= $coinprice[0]["to_mmk"] ?> MMK</span>
                </div>
                <div class=" currencyRates ">
                    <iconify-icon class="coinIcon coinPosition" icon="healthicons:coins"></iconify-icon>
                    <span class="coinCurrency">x 1 = <?= $coinprice[0]["to_usd"] ?>USD</span>
                </div>
                <div class=" currencyRates ">
                    <iconify-icon class="coinIcon coinPosition" icon="healthicons:coins"></iconify-icon>
                    <span class="coinCurrency">x 1 = <?= $coinprice[0]["to_euro"] ?> Euro</span>
                </div>
                <div class=" currencyRates ">
                    <iconify-icon class="coinIcon coinPosition" icon="healthicons:coins"></iconify-icon>
                    <span class="coinCurrency">x 1 = <?= $coinprice[0]["to_pound"] ?> Pound</span>
                </div>
            </div>
            <div class="col-md-7 exchangeBg ">
                <p class=" exchangeSubheader">Exchange Coin</p>
                <form action="../Controller/coin_exchangeController.php" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3 inputWidth">
                        <!-- coin amount -->
                        <input type="text" id="coinAmount" class="form-control coinInput" value="1" aria-label="Amount (to the nearest dollar)" placeholder="Coin" name="coinAmount" >
                        <!-- currency type -->
                        <select class="form-select currencySelect" id="currency">
                            <option value="<?= $coinprice[0]["to_mmk"] ?>" selected>MMK</option>
                            <option value="<?= $coinprice[0]["to_usd"] ?>">USD</option>
                            <option value="<?= $coinprice[0]["to_euro"] ?>">Euro</option>
                            <option value="<?= $coinprice[0]["to_pound"] ?>">Pound</option>
                        </select>
                        <!-- calculated  -->
                        <input id="calculated" class="calculated text-light bg-transparent border-0" value="= 2500 MMK" name="calculated">
                    </div>
                    <p id="calculated1" class="mbCalculated "> =MMK</p>
                    <!-- attach reciept -->
                    <p class="exchangeSubheader"> Attach Screenshot of bank transition</p>
                    <div class="input-group mb-3 inputWidth2">
                        <input type="file" class="form-control" id="inputGroupFile02" name="receipt">
                    </div>
                    <div class="mt-4">
                        <button type="submit" id="submitBtn" class="btn btnSubmit" name="request">Submit</button>
                        <button class="btn btnCancel"> Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- coin exchange end -->
    <!-- footer start -->
    <?php
    include "./footer.php";
    ?>
    <!-- footer end -->
</body>

</html>