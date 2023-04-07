<?php
session_start();

if (isset($_SESSION["userID"])) {
    // already success login or sign up
    // print_r($_SESSION) ;
} else {
    echo "else";
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
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/reservationForm.css">
    <link href="style.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <!-- css link end -->
    <!-- js link start -->
    <script src="./resources/js/reservationForm.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <!-- js link end -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Public+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <title>Reservation Form</title>
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
                        <form action="../Controller/reservation_formController.php" method="post">
                            <!-- input group start -->
                            <div class="mb-4">
                                <input type="text" class="form-control outlineColor" name="username" id="" placeholder="User Name">
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control outlineColor" name="phone" id="" placeholder="Phone">
                            </div>
                            <div class="mb-4">
                                <input type="date" class="form-control outlineColor" name="r_date" id="" placeholder="Reservation Date">
                            </div>
                            <div class="mb-4">
                                <input type="time" class="form-control outlineColor" name="r_time" id="" placeholder="Reservation Time">
                            </div>
                            <!-- input group end -->

                            <!-- person count start -->
                            <p class="text-light">How many person you will be with ?</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="4">
                                <label class="form-check-label" for="inlineRadio3">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="6">
                                <label class="form-check-label" for="inlineRadio4">6</label>
                            </div>
                            <!-- person count end -->
                            <div class="d-flex justify-content-end">
                            <button type="submit" id="btnBook" class="btn  btnBook " name="book">Book Seat</button>
                                <button type="submit" class="btn btnCancel" >Cancel</button>

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