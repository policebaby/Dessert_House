<?php

ini_set("display_errors", "1");
// session_start();
include "../Controller/contactSviewController.php";

if (isset($_SESSION["username"])) {
    // already success login or sign up
    $name = $_SESSION["username"];
    // echo $name;
} else {
    header("Location: ./user_login.php");
}
// if (isset($_SESSION["shops"])) {
//     $shops = $_SESSION["homeshops"];
//     // echo "<pre>";
//     // print_r($shops);
// } else {
//     echo "error shop";
// }
if (isset($_SESSION["ratingTypes"])) {
    $rating = $_SESSION["ratingTypes"];
    // echo "ok";
} else {
    echo "error rating";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Seller</title>
    <!--css link start-->
    <link href="../View/resources/css/contact_seller.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
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
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>

<body>
    <?php include "./nav.php" ?>
    <!--contact seller start-->
    <div class="contactS-container">
        <div class="contactS_logo">
            <img src="../View/resources/img/logo.png" alt="logo" class="seller_logo">
        </div>
        <div class="main_frame">
            <div class="contact_seller_frame">
                <div>
                    <img src="../View/resources/img/Feedback-ai-1400x788 1.png" alt="" class="seller_pic">
                </div>
                <form action="../Controller/contact_sellerController.php" method="post">
                    <div class="contactS_box">
                        <!--username-->
                        <h5 class="contactS_text">User Name</h5>
                        <input type="text" class="contactS_input p-3" name="username" value='<?= $name ?>' readonly>
                        <!--shopname-->
                        <div class="form-floating choose my-4">
                            <select class="form-select" name="shopid" id="floatingSelect" aria-label="Floating label select example">
                                <?php for ($i = 0; $i < count($shops); $i++) { ?>
                                    <option value="<?= $shops[$i]["shop_id"] ?>"><?= $shops[$i]["shop_name"] ?></option>
                                <?php } ?>
                            </select>
                            <label for="floatingSelect">Select Shop</label>
                        </div>
                        <!--message-->
                        <h5 class="contactS_text">Your Message</h5>
                        <textarea name="message" id="" cols="40" rows="6" class="contactS_textarea" placeholder="Suggest or comment" required></textarea>
                        <br>
                        <!--icons-->
                        <div class="S_icons">
                            <input type="radio" name="rating" value="<?= $rating[3]["rating_id"] ?>" id="icon1" class="box" required>
                            <label for="icon1"><iconify-icon icon="ph:smiley-x-eyes-bold" id="i_1" required value="1"></iconify-icon></label>

                            <input type="radio" name="rating" value="<?= $rating[2]["rating_id"] ?>" id="icon2" class="box" required>
                            <label for="icon2"><iconify-icon icon="gg:smile-sad" id="i_2" required></iconify-icon></label>

                            <input type="radio" name="rating" value="<?= $rating[1]["rating_id"] ?>" id="icon3" class="box" required>
                            <label for="icon3"><iconify-icon icon="gg:smile-neutral" id="i_3" required></iconify-icon></label>

                            <input type="radio" name="rating" value="<?= $rating[0]["rating_id"] ?>" id="icon4" class="box" required>
                            <label for="icon4"><iconify-icon icon="gg:smile-mouth-open" id="i_4" required></iconify-icon></label>

                        </div>
                        <br>
                        <!--btn-->
                        <button type="submit" class="contactS_btn pt-2" name="submit_btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--footer start-->
    <?php include "./footer.php" ?>
    <!--footer end-->
</body>

</html>