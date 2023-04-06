<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>footer User</title>
  <!-- css link start -->
  <link rel="stylesheet" href="../View/resources/css/footer.css">
  <link rel="stylesheet" href="../View/resources/css/root.css">
  <!-- css link end -->
  <!--font link start-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&display=swap" rel="stylesheet" />
  <!-- font link end -->
  <!-- bootstrap link start -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" /> -->
  <!-- bootstrap link end -->

  <!-- icon link start -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Public+Sans:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
  <!-- icon link end -->
</head>

<body>
  <!-- footer start -->
  <div class="footer container-fluid">
    <div class="container p-4">
      <div class="row">
        <!--sub col start -->
        <div class="col-lg-3 col-6 mb-4 footer_mv">
          <div class="">
            <div class="d-flex">
              <img src="../View/resources/img/logo.png" alt="logo" class="footer_logo" />
              <h4 class="logoName footer_font text-white ms-2">Dessert House</h4>
            </div>
            <h6 class="text-white footer_font mt-3">Subscribe our website</h6>
            <div class="mailbox">
              <iconify-icon icon="logos:google-gmail" class="mailicon"></iconify-icon>
              <input type="text" class="mailText text-white-50 ms-2" placeholder="Enter Your Email" />
            </div>
          </div>
        </div>
        <!-- sub col end -->

        <!-- needHelp col start -->
        <div class="col-lg-3 col-6 mb-4 mb-md-0 footer_mv footer_bar">
          <div class="mt-4 ms-lg-5 ">
            <h4 class="footer_subHeader text-white">Need Help?</h4>
            <br />
            <p class="text-white">
              <a href="../View/contact-admin.php"> Contact Admin</a><br />
              <a href="../Controller/contactSviewController.php"> Contact Seller</a> <br />
              <a href="../View/guide.php"> Guide </a><br />
              <a href="../Controller/about_us_ViewController.php">About us</a> <br />
              <a href="../Controller/privacyViewController.php">Privacy Policy</a>
            </p>
          </div>
        </div>
        <!-- needHelp col end -->

        <!-- Navigate col start -->
        <div class="col-lg-3 col-6 mb-4 mb-md-0 footer_mv">
          <div class="mt-4 mobile ms-lg-2">
            <h4 class="footer_subHeader text-white">Navigate</h4>
            <br />
            <p class="text-white">
              <a href="../View/coin_exchange.php">Coin Shop</a> <br />
              <a href="../View/shops.php">Product Page </a><br />
              <a href="../View/seat_selection.php">Seat booking</a>
            </p>
          </div>
        </div>
        <!-- Navigate col end -->
        <!-- followUs col start -->
        <div class="col-lg-3 col-6 mb-4 mb-md-0 footer_mv footer_bar">
          <div class="mt-4 me-md-5 mobile">
            <h4 class="footer_subHeader text-white">Follow us</h4>
            <div class="mt-2 mb-2 footer_icons">
              <iconify-icon icon="logos:facebook"></iconify-icon>
              <iconify-icon icon="skill-icons:instagram" class="mx-2 px-1"></iconify-icon>
              <iconify-icon icon="bi:twitter"></iconify-icon>
            </div>
            <h4 class="footer_subHeader text-white">Address</h4>
            <p class="text-white normalText">
              No.66, Bahan Township, Yangon, <br />
              Myanmar. <br />
              +95 977777777<br />
              desserthouse@gmail.com
            </p>
          </div>
        </div>
        <!-- followUs col end -->
      </div>
    </div>
  </div>
  <!-- footer end -->


</body>

</html>