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
    <!-- js link end -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Public+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <title>Coin Exchange</title>
</head>

<body>
    <!-- nav start -->
    <?php
    include "./nav.php"
    ?>
    <!-- nav end -->
    <!-- coin exchange start -->
    <div class=" p-5 coinbody">
        <p class="text-center fs-5 coinsubheader">Coin Exchange Rates</p>
        <div class="container-fluid row exchangeBox =">
            <div class="col-md-5 rateBg ">
                <div class=" currencyRates ">
                    <iconify-icon class="coinIcon coinPosition" icon="healthicons:coins"></iconify-icon>
                    <span class="coinCurrency">x 1 = 1000 MMK</span>
                </div>
                <div class=" currencyRates ">
                    <iconify-icon class="coinIcon coinPosition" icon="healthicons:coins"></iconify-icon>
                    <span class="coinCurrency">x 1 = 10 USD</span>
                </div>
                <div class=" currencyRates ">
                    <iconify-icon class="coinIcon coinPosition" icon="healthicons:coins"></iconify-icon>
                    <span class="coinCurrency">x 1 = 0.94 Euro</span>
                </div>
                <div class=" currencyRates ">
                    <iconify-icon class="coinIcon coinPosition" icon="healthicons:coins"></iconify-icon>
                    <span class="coinCurrency">x 1 = 0.94 Pound</span>
                </div>
            </div>
            <div class="col-md-7 exchangeBg ">
                <p class=" exchangeSubheader">Exchange Coin</p>
                <form action="">
                    <div class="input-group mb-3 inputWidth">
                        <input type="text" class="form-control coinInput" aria-label="Amount (to the nearest dollar)" placeholder="Coin">
                        <select class="form-select currencySelect" id="inputGroupSelect01">
                            <option value="1" selected>MMK</option>
                            <option value="2">USD</option>
                            <option value="3">Euro</option>
                            <option value="4">Pound</option>
                        </select>
                        <div class="calculated"> = MMK</div>
                    </div>
                    <p class="mbCalculated "> =MMK</p>
                    <p class="exchangeSubheader"> Attach Screenshot of bank transition</p>
                    <div class="input-group mb-3 inputWidth2">
                        <input type="file" class="form-control" id="inputGroupFile02" >
                    </div>
                    <div class="mt-4">
                        <button class="btn btnSubmit">Submit</button>
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