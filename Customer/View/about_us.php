<?php




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <!-- icon link start -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <!-- icon link end -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- css link start -->
    <link href="../View/resources/css/root.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <link href="../View/resources/css/about_us.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <link href="../View/resources/css/footer.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <!-- css link end -->
    <!-- js link start -->
    <!-- js link end -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Public+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
</head>

<body>
    <!--nav bar start-->
    <?php include "./nav.php" ?>
    <!--nav bar end-->
    <!--about us start-->
    <div class="about_us_body">
        <div class="row first_para">
            <div class="col-md-10 offset-md-2">
                <h4 class="title">About Us</h4>
                <p class="text">
                    This information is essential and is not collected more than necessary. This is very different from
                    a website <br> that collects users'names and addresses and then sells it to a third party for marketing
                    purposes.Our Shop <br> just uses a crisp drain and similar Mocha Italia mix as our shops to make the
                    ideal.You haven’t tasted cafe <br> until the point when you’ve tasted Costa.
                </p>
            </div>
        </div>

        <div class="row second_para">
            <div class="col-md-5 offset-md-2 ">
                <img src="../View/resources/img/about_us_1.png" alt="about_us" class="para1_pic">
            </div>
            <div class="col-md-5">
                <h4 class="para1_title">Our Team</h4>
                <p class="text">This information is essential <br>
                    and is not collected more than <br>
                    necessary. This is very different <br>
                    from a website that collects users .
                </p>
            </div>
        </div>
        <div class="row third_para">
            <div class="col-md-5 offset-md-2 ">
                <h4 class="para2_title">Customer Care</h4>
                <p class="text">This information is essential <br>
                    and is not collected more than <br>
                    necessary. This is very different <br>
                    from a website that collects users .
                </p>

            </div>
            <div class="col-md-5 ">
                <img src="../View/resources/img/about_us_2.png" alt="about_us" class="para2_pic">
            </div>
        </div>

    </div>
    <!--about us end-->

    <!--footer start-->
    <?php include "./footer.php" ?>
    <!--footer end-->
</body>

</html>