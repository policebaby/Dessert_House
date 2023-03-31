<?php
ini_set("display_errors", "1");
session_start();

// print_r($_SESSION);
if (isset($_SESSION["description"])) {
    $description = $_SESSION["description"];
    // echo "<pre>";
    // print_r($description);
} else {
    echo "error";
}

if (isset($_SESSION["title"])) {
    $title = $_SESSION["title"];
    // echo "<pre>";
    // print_r($title);
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
<!--font link start-->
<link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&display=swap" rel="stylesheet" />
  <!-- font link end -->
</head>

<body>
    <!--nav bar start-->
    <?php include "./nav.php" ?>
    <!--nav bar end-->
    <!--about us start-->
    <div class="about_us_body">
        <div class="row first_para">
            <div class="col-md-12">

            <?php for ($i = 0; $i < count($title); $i++) {  ?>
                <h4 class="title"><?= $title[$i]["title"] ?></h4>
                <br>
            <?php } ?>

                
                <div class="about_text">
                <?php for ($i = 0; $i < count($description); $i++) {  ?>
                <p class="text paragraph "><?= $description[$i]["description"] ?></p>
                <br>
            <?php } ?>
                <!-- <p class="text paragraph ">
                    This information is essential and is not collected more than necessary. This is very different from
                    a website  that collects users'names and addresses and then sells it to a third party for marketing
                    purposes.Our Shop  just uses a crisp drain  and similar Mocha Italia mix as our shops to make the
                    ideal.You haven’t tasted cafe  until the point when you’ve tasted Costa.
                </p> -->
                </div>
            </div>
        </div>

        <div class="row second_para">
        <div class="mb">
            <div class="paragraph">
            <div class="col-md-5 paragraph pic">
                <img src="../View/resources/img/about_us_1.png" alt="about_us" class="para1_pic">
            </div>
            <div class="col-md-5 paragraph">
                <div class="first">
                <h4 class="para1_title">Our Team</h4>
                <div class="mv">
                <p class="text paragraph">This information is essential <br>
                    and is not collected more than <br>
                    necessary. This is very different <br>
                    from a website that collects users .
                </p>
                </div>
                </div>
            </div>
            </div>
            </div>
        </div>
        <div class="row third_para">
            <div class="mb">
        <div class="paragraph">
            <div class="col-md-5 ms-md-5  paragraph">
            <div class="first">
                <h4 class="para2_title">Customer Care</h4>
                <div class="mv">
                <p class="text paragraph">This information is essential<br>
                    and is not collected more than <br>
                    necessary. This is very different <br>
                    from a website that collects users .
                </p>
                </div>
                </div>
            </div>
            <div class="col-md-5 paragraph pic">
                <img src="../View/resources/img/about_us_2.png" alt="about_us" class="para2_pic">
            </div>
        </div>
        </div>
        </div>
    </div>
    <!--about us end-->

    <!--footer start-->
    <?php include "./footer.php" ?>
    <!--footer end-->
</body>

</html>