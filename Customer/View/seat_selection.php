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
                    <button id="a4" class="tables">A4</button>
                    <button id="a2" class="tables">A2</button>
                    <button id="a1" class="tbl">A1</button> <br>
                    <button id="a5" class="tables">A5</button>
                    <button id="a3" class="tables">A3</button>
                </div>

                <div class="B_table">
                    <button id="b4" class="tables">B4</button>
                    <button id="b2" class="tables">B2</button>
                    <button id="b1" class="tbl">B1</button> <br>
                    <button id="b5" class="tables">B5</button>
                    <button id="b3" class="tables">B3</button>
                </div>
            </div>
            <!---->
            <div class="col second_col">
                <button id="" class="btn shop_btn">SHOP</button>

                <div class="low_tbl">
                    <div class="C_table">
                        <button id="c1" class="tbl_1">C1</button> <br>
                        <div class="c2c3">
                            <button id="c2" class="tables">C2</button>
                            <button id="c3" class="tables">C3</button>
                        </div> <br>
                        <div class="c4c5">
                            <button id="c4" class="tables">C4</button>
                            <button id="c5" class="tables">C5</button>
                        </div>
                    </div>

                    <div class="D_table">
                        <button id="d1" class="tbl_1">D1</button> <br>
                        <div class="d2d3">
                            <button id="d2" class="tables">D2</button>
                            <button id="d3" class="tables">D3</button>
                        </div> <br>
                        <div class="d4d5">
                            <button id="d4" class="tables">D4</button>
                            <button id="d5" class="tables">D5</button>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col third_col">
                <div class="F_table">
                    <button id="f1" class="tbl_2">F1</button>
                    <button id="f2" class="tables">F2</button>
                    <button id="f3" class="tables">F3</button> <br>
                    <button id="f4" class="tables">F4</button>
                    <button id="f5" class="tables">F5</button>
                </div>

                <div class="E_table">
                    <button id="e1" class="tbl_2">E1</button>
                    <button id="e2" class="tables">E2</button>
                    <button id="e3" class="tables">E3</button> <br>
                    <button id="e4" class="tables">E4</button>
                    <button id="e5" class="tables">E5</button>
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