<?php




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User login</title>
    <!--css link start-->
    <link href="../View/resources/css/user_signup.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <link href="../View/resources/css/root.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <!--css link end-->
    <!-- js link start -->
    <!-- js link end -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Public+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <!--bootstrap start-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--bootstrap end-->
</head>

<body class="container-fluid position-relative">
    <div class=" row bg_img">
        <!-- reservationForm start -->
        <div class="col-md-6  signup_bg">
            <div class="logo_border">
                <img src="../View/resources/img/logo.png" alt="logo" class="logo" />
                <div class="signup_form ">
                    <p class="text-center text-light fs-3 title">Sign Up</p>
                    <div class="p-3 signup_input">
                        <form>
                            <!-- input group start -->
                            <div class="mb-4 ">
                                <input type="text" class="form-control outlineColor" id="" placeholder="User Name">
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control outlineColor" id="" placeholder="Email">
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control outlineColor" id="" placeholder="Password">
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control outlineColor" id="" placeholder="Confirm Password">
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control outlineColor" id="" placeholder="Gender">
                            </div>
                            <!-- input group end -->
                            <div class="ask_bar">
                            <u>Already Account?</u>
                            <button type="submit" class="btn btn_signup">Sign Up</button>
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