<?php


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--css link start-->
    <link href="../View/resources/css/contact_admin.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <link href="../View/resources/css/root.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <!--css link end-->
    <!--font link start-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Public+Sans&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Public+Sans&display=swap" rel="stylesheet" />
    <!--font link end-->
    <!--icon link start-->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <!--icon link end-->
    <!-- bootstrap link start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- bootstrap link end -->
    <!-- icon link start -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <!-- icon link end -->
</head>

<body>
    <!--Nav bar start-->
    <?php include "./nav.php" ?>
    <!--Nav bar end-->

    <!--contact admin start-->
    <form action="../Controller/contact_adminController.php" method="post">
        <div class="row contactA_ctn">
            <div class="col-md-6">
                <img src="../View/resources/img/conact admin (4).png" alt="contact admin" class="contactA_pic">
            </div>

            <div class="col-md-6 box">
                <h1 class="contact_text_header">Speak With An Admin</h1>
                <h3 class="mt-5  contact_text">Address</h3>
                <p class="ms-md-2 text">No.66, Bahan Township, Yangon,Myanmar.</p>

                <h3 class="mt-4  contact_text">Email</h3>
                <p class="ms-md-2  text">desserthouse@gmail.com</p>

                <h3 class="mt-4 contact_text">Phone Number</h3>
                <div class="ph text">
                    <p class="ms-md-2  "> +95 977777777 ,</p>
                    <p class="ms-md-2  "> +95 988999994 ,</p>
                    <p class="ms-md-2  "> +95 120200395 ,</p>
                </div>

            </div>
            </div>
    </form>
    <!--contact admin end-->

    <!-- footer start -->
    <?php include "./footer.php" ?>
    <!-- footer end -->

</body>

</html>