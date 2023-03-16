<?php




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>nav</title>
  <!--css link start-->
  <link rel="stylesheet" href="../View/resources/css/nav.css">
  <link rel="stylesheet" href="../View/resources/css/root.css">
  <!--css link edn-->
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
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Public+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
  <!-- icon link end -->
</head>

<body>
  <!--Nav bar start-->
  <div class="user_navbar">
      <img src="../View/resources/img/logo.png" alt="logo" class="nav_logo" />

    <ul class="nav_desktop">
      <li class="nav_name">Home</li>
      <li class="nav_name">Shop</li>
      <li class="nav_name">Coin Shop</li>
    </ul>

    <!--search box start-->
    <div class="searchBox">
      <span><iconify-icon icon="material-symbols:search-rounded" class="search_icon"></iconify-icon></span>
      <input type="text" class="search" placeholder="Search" />
    </div>
    <!--search box end-->

    <a href="#">
      <iconify-icon icon="healthicons:ui-user-profile" class="nav_icons nav_pf"></iconify-icon>
    </a>

    <a href="#">
      <iconify-icon icon="material-symbols:shopping-bag" class="nav_icons"></iconify-icon>
    </a>

    <!--bento menu start-->
    <a href="#">
      <label for="nav_check">
        <iconify-icon icon="ic:round-menu" class="nav_menu"></iconify-icon>
      </label>
    </a>
    <!--bento menu end-->
  </div>

  <!--flex text start-->
  <input type="checkbox" id="nav_check">
  <ul class="nav_mobile">
    <li class="nav_mvname">Home</li>
    <li class="nav_mvname">Shop</li>
    <li class="nav_mvname">Coin Shop</li>
    <li class="nav_mvname">Profile</li>
  </ul>
  <!--flex text end-->
  <!--Nav bar end-->

  
  <body>
</html>