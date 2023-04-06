<?php


include "../Controller/sellerAccountListController.php";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link with CSS root,adminSellerAccountList, nav bar , admin dashboard for seller controller,pagination -->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/navbar.css">
    <link rel="stylesheet" href="./resources/css/adminSellerAccountList.css">
    <link rel="stylesheet" href="./resources/css/adminDashboardforSellerController.css">
    <link rel="stylesheet" href="./resources/css/pagination.css">

    <!-- Import google fonts: public display & dm sen serif -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Public+Sans&display=swap" rel="stylesheet">


    <title>Seller Account List</title>
</head>

<body>
    <!-- Nav Bar -->
    <nav class="navbar">
        <ul>
            <li><a href="./adminHome.php"><img src="./resources/img/logo.png" class="dessertHouseLogo" alt="Unable to load logo"></a></li>
            <li><a href="./adminSellerAccountList.php">Seller Controller</a></li>
            <li><a href="./userAccountList.php">User Controller</a></li>
            <li><a href="./adminHome.php">System Management</a></li>
            <li>
                <a href="./adminProfile.php"><img src="./resources/img/profilelogo.png" class="profileLogo" alt="Unable to load Profile Logo" srcset=""></a>
            </li>
        </ul>
    </nav>

    <!-- Dashboard for Seller Controller-->
    <div class="dashboard">
        <!-- Account Icon -->
        <div>
            <div class="icon" style="background:white; border-radius: 10px;">
                <a href="./adminSellerAccountList.php">
                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="path1" fill-rule="evenodd" clip-rule="evenodd" d="M30.5615 24.0723C33.0732 25.7773 34.8332 28.0873 34.8332 31.1673V36.6673H42.1665V31.1673C42.1665 27.1706 35.6215 24.8056 30.5615 24.0723Z" fill="black" />
                        <path id="path1" d="M16.5003 22.0007C20.5504 22.0007 23.8337 18.7174 23.8337 14.6673C23.8337 10.6172 20.5504 7.33398 16.5003 7.33398C12.4502 7.33398 9.16699 10.6172 9.16699 14.6673C9.16699 18.7174 12.4502 22.0007 16.5003 22.0007Z" fill="black" />
                        <path id="path1" fill-rule="evenodd" clip-rule="evenodd" d="M27.4997 22.0007C31.5513 22.0007 34.833 18.719 34.833 14.6673C34.833 10.6157 31.5513 7.33398 27.4997 7.33398C26.638 7.33398 25.8313 7.51732 25.0613 7.77398C26.639 9.72505 27.4996 12.1582 27.4996 14.6673C27.4996 17.1764 26.639 19.6096 25.0613 21.5607C25.8313 21.8173 26.638 22.0007 27.4997 22.0007ZM16.4997 23.834C11.6047 23.834 1.83301 26.2907 1.83301 31.1673V36.6673H31.1663V31.1673C31.1663 26.2907 21.3947 23.834 16.4997 23.834Z" fill="black" />
                    </svg>
                </a>
                <p style="color:black">Seller account list</p>
            </div>
        </div>


        <!-- Generate Seller Icon -->
        <div>
            <div class="icon generate">
                <a href="./createSellerAccount.php">
                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="path1" d="M7.33333 7.33398V11.0007H36.6667V7.33398M7.33333 12.834L5.5 22.0007V25.6673H7.33333V36.6673H23.8333C23.7417 36.044 23.6867 35.4023 23.6867 34.7423C23.6867 32.5057 24.3833 30.3057 25.6667 28.4723V25.6673H28.49C30.3233 24.439 32.4683 23.7607 34.6683 23.7607C35.97 23.7607 37.2717 23.999 38.5 24.4573V22.0007L36.6667 12.834M11 25.6673H22V33.0007H11M33 27.5007V33.0007H27.5V36.6673H33V42.1673H36.6667V36.6673H42.1667V33.0007H36.6667V27.5007" fill="white" />
                    </svg>
                </a>
                <p>Generate Seller Account</p>
            </div>
        </div>
    </div>

    <!-- Table  -->
    <div class="container">
        <h2 class="title">Seller Account List</h2>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Registered Date</th>
                        <th>Revenue</th>
                        <th>Rating</th>
                        <th>Status</th>
                        <th>Contact Info</th>
                        <th>Buttons</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rowNumber = (($currentPage - 1) * $rowsPerPage) + 1;
                    for ($i = 0; $i < count($result); $i++) { ?>
                        <tr>
                            <td><?= $rowNumber++ ?></td>
                            <td><?= $result[$i]['shop_id'] ?></td>
                            <td><?= $result[$i]['shop_name'] ?></td>
                            <td><?= $result[$i]['create_date'] ?></td>
                            <td><?= '$ ' . $result[$i]['total_revenue'] ?></td>

                            <form action="./adminSellerRatingDetails.php" method="post">
                                <td><button style="border: none; text-decoration: underline; color: blue;" class="reviewBtn" type="submit"><?= $ratingResult[$i]['rating_percentage'] . '%' ?></button></td>
                                <input type="hidden" name="shopId" value=<?= $result[$i]['shop_id'] ?>>
                                <input type="hidden" name="ratingPercentage" value=<?= $ratingResult[$i]['rating_percentage'] ?>>
                                <input type="hidden" name="shopName" value=<?= $result[$i]['shop_name'] ?>>
                            </form>

                            <td><?= $result[$i]['del_flg'] == 0 ? 'Active' : 'Disabled' ?></td>
                            <td><?= $contactResult[$i]['seller_phone'] ?><br />
                                <?= $contactResult[$i]['email'] ?>
                            </td>
                            <td data-label="Buttons" class="buttons">
                                <form method="post" action="../Controller/activateSellerController.php?page=<?= $currentPage ?>">
                                    <input type="hidden" name="shopId" value="<?= $result[$i]['shop_id'] ?>">
                                    <button class="btn activate">Activate</button>
                                </form>

                                <form method="post" action="../Controller/disableSellerController.php?page=<?= $currentPage ?>">
                                    <input type="hidden" name="shopId" value="<?= $result[$i]['shop_id'] ?>">
                                    <button class="btn disable">Disable</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <!-- <div class="moveToCorner">
        <ul class="pagination">
            <li class="page-item"><a class="page-link arrowToRed" href="#">&lt;</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">...</a></li>
            <li class="page-item"><a class="page-link arrowToRed" href="#">&gt;</a></li>
        </ul>
    </div> -->

    <div class="moveToCorner">
        <ul class="pagination">
            <li style="display:<?php if ($currentPage <= 1) {
                                    echo "none";
                                } ?>"><a class="page-link arrowToRed" href="?page=<?= $currentPage - 1 ?>">&lt;</a></li>

            <?php
            for ($i = 1; $i <= $buttonNumber; $i++) { ?>

                <li><a class="<?php if ($currentPage == $i) echo "current"; ?>" href="?page=<?= $i ?>"><?= $i ?></a></li>

            <?php } ?>

            <li style="display:<?php if ($currentPage == $buttonNumber) {
                                    echo "none";
                                } ?>"><a class="page-link arrowToRed" href="?page=<?= $currentPage + 1 ?>">&gt;</a></li>
        </ul>
    </div>



</body>

</html>