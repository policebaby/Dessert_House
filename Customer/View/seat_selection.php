<?php





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seat Selection</title>
    <!--css link start-->
    <link href="../View/resources/css/seat_selection.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <link href="../View/resources/css/root.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
    <!--css link end-->
    <script src="./lib/jquery3.6.0.js"></script>
    <script src="./resources/js/seat_selection.js" defer></script>
    <!--font link start-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Public+Sans&display=swap" rel="stylesheet" />
    <!--font link end-->
    <!-- bootstrap link start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- bootstrap link end -->

</head>

<body>
    <!--navbar start-->
    <?php  include "./nav.php" ?>
    <!--navbar end-->
    <div class="seat_selection_frame">
        <div class="row">
            <button class="btn stage_btn">STAGE</button>
        </div>
        <!---->
        <div class="row">
            <!---->
            <div class="col first_col">
                <div class="A_table">
                    <button id="a4" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)"  class="tables a">A4</button>
                    <button id="a2" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tables a">A2</button>
                    <button id="a1" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tbl a">A1</button> <br>
                    <button id="a5" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tables a">A5</button>
                    <button id="a3" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tables a">A3</button>
                </div>

                <div class="B_table">
                    <button id="b4" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tables b">B4</button>
                    <button id="b2" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tables b">B2</button>
                    <button id="b1" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tbl b">B1</button> <br>
                    <button id="b5" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tables b">B5</button>
                    <button id="b3" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tables b">B3</button>
                </div>
            </div>
            <!---->
            <div class="col second_col">
                <button id="" class="btn shop_btn">SHOP</button>

                <div class="low_tbl">
                    <div class="C_table">
                        <button id="c1" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tbl_1 c">C1</button> <br>
                        <div class="c2c3">
                            <button id="c2" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tables c">C2</button>
                            <button id="c3" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tables c">C3</button>
                        </div> <br>
                        <div class="c4c5">
                            <button id="c4" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tables c">C4</button>
                            <button id="c5" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tables c">C5</button>
                        </div>
                    </div>

                    <div class="D_table">
                        <button id="d1" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tbl_1 d">D1</button> <br>
                        <div class="d2d3">
                            <button id="d2" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tables d">D2</button>
                            <button id="d3" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tables d">D3</button>
                        </div> <br>
                        <div class="d4d5">
                            <button id="d4" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tables d">D4</button>
                            <button id="d5" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tables d">D5</button>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col third_col">
                <div class="F_table">
                    <button id="f1" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tbl_2 f">F1</button>
                    <button id="f2" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tables f">F2</button>
                    <button id="f3" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tables f">F3</button> <br>
                    <button id="f4" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tables f">F4</button>
                    <button id="f5" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tables f">F5</button>
                </div>

                <div class="E_table">
                    <button id="e1" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tbl_2 e">E1</button>
                    <button id="e2" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tables e">E2</button>
                    <button id="e3" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tables e">E3</button> <br>
                    <button id="e4" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tables e">E4</button>
                    <button id="e5" data="<?=$booking[$i]["booking_id"]?>" onclick="fun(this)" class="tables e">E5</button>
                </div>
                <br>
                <div class="guide">
                    <div class="tone">
                        <div class="green"></div>
                        <p>Green buttons are available</p>
                    </div>

                    <div class="tone">
                        <div class="red"></div>
                        <p>Red buttons are taken</p>
                    </div>

                    <div class="tone">
                        <div class="grey"></div>
                        <p>Grey buttons are pending</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="guide_none">
            <div class="tone">
                <div class="green"></div>
                <p>Green buttons are available</p>
            </div>

            <div class="tone">
                <div class="red"></div>
                <p>Red buttons are taken</p>
            </div>

            <div class="tone">
                <div class="grey"></div>
                <p>Grey buttons are pending</p>
            </div>
        </div>
    </div>
    <!--footer start-->
    <?php  include "./footer.php" ?>
    <!--footer end-->
</body>
</html>