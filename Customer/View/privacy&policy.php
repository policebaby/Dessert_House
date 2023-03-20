<?php



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Privacy and Policy</title>
    <!--css link start-->
    <link href="../View/resources/css/privacy&policy.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <link href="../View/resources/css/root.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <!--css link end-->
    <!-- js link start -->
    <!-- js link end -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Public+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <!--navbar start-->
    <?php include "../View/nav.php" ?>
    <!--navbar end-->
    <!--P&P start-->
    <div class="pp_mainbody">
        <div class="pp_herosection">
    <h4 class="pp_title">Privacy Policy</h4>
            <img src="../View/resources/img/p&p (3).png" alt="" class="pp_img">
            </div>
            <div class="pp_paragraph">
            <p>Your Privacy Policy will contain a variety of clauses depending on your business type and applicable             
                law.Accordingly, there are certain clauses that every website, which collects personal data from           
                visitors, should include in their Privacy Policies.</p>
            <br>
            <p>A website might collect information such as a user's address and name in order to ship products          
                purchased online. This information is essential and is not collected more than necessary.This is        
                very different from a website that collects users' names and addresses and then sells it to a  third        
                party for marketing purposes.
            </p>
        </div>
    </div>
        <!--P&P end-->
        <!--footer start-->
        <?php include "../View/footer.php"?>
        <!--footer end-->
</body>

</html>
