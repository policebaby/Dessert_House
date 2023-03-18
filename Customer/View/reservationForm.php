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
        <div class="col-5  reserveBg">
            <div class="logoborder">
                <img src="../View/resources/img/logo.png" alt="logo" class="logo" />
                <div class="reserveForm  ">
                    <p>Reservation Form</p>
                    <div>
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="" placeholder="User Name" >
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="" placeholder="Phone">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="" placeholder="Reservation Date">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="" placeholder="Reservation Time">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- reservationForm start -->
    </div>
</body>

</html>