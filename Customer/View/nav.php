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
</head>

<body>
  <!--Nav bar start-->
  <div class="nav">
    <div class="">
      <img src="../View/resources/img/logo.png" alt="logo" class="logo" />
    </div>

    <ul class="desktop">
      <li>Home</li>
      <li>Shop</li>
      <li>Coin Shop</li>
    </ul>

    <!--search box start-->
    <div class="searchBox">
      <span><iconify-icon icon="material-symbols:search-rounded" class="search_icon"></iconify-icon></span>
      <input type="text" class="search" placeholder="Search" />
    </div>
    <!--search box end-->

    <a href="#">
      <iconify-icon icon="healthicons:ui-user-profile" class="icons pf"></iconify-icon>
    </a>

    <a href="#">
      <iconify-icon icon="material-symbols:shopping-bag" class="icons"></iconify-icon>
    </a>

    <!--bento menu start-->
    <a href="#">
      <label for="check">
        <iconify-icon icon="ic:round-menu" class="menu"></iconify-icon>
      </label>
    </a>
    <!--bento menu end-->
  </div>

  <!--flex text start-->
  <input type="checkbox" id="check">
  <ul class="mobile">
    <li>Home</li>
    <li>Shop</li>
    <li>Coin Shop</li>
    <li>Profile</li>
  </ul>
  <!--flex text end-->

  <!--Nav bar end-->
</body>

</html>