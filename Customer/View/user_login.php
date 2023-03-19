<?php




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User login</title>
    <!-- css link start -->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/user_login.css">
    <!-- css link end -->
    <!-- js link start -->
    <!-- js link end -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Public+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
</head>
<body class="container-fluid position-relative">
<div class=" row bgImg ">
        <!-- reservationForm start -->
        <div class="col-md-5  reserveBg">
            <div class="logoborder">
                <img src="../View/resources/img/logo.png" alt="logo" class="logo" />
                <div class="reserveForm  ">
                    <p class="text-center text-light fs-4">Reservation Form</p>
                    <div class="p-3">
                        <form>
                            <!-- input group start -->
                            <div class="mb-4">
                                <input type="text" class="form-control outlineColor" id="" placeholder="User Name">
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control outlineColor" id="" placeholder="Phone">
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control outlineColor" id="" placeholder="Reservation Date">
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control outlineColor" id="" placeholder="Reservation Time">
                            </div>
                            <!-- input group end -->

                            <!-- person count start -->
                            <p class="text-light">How many person you will be with ?</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                <label class="form-check-label" for="inlineRadio3">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                                <label class="form-check-label" for="inlineRadio4">6</label>
                            </div>
                            <!-- person count end -->
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn outlineColor btnBook">Book Seat</button>
                                <button type="submit" class="btn btnCancel">Cancel</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- reservationForm start -->
    </div>
</body>
</html>
