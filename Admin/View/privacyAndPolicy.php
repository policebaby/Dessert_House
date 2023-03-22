<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link with CSS root, rating coin page-->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/privacyAndPolicy.css">

    <!-- Import google fonts: public display & dm sen serif -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Public+Sans&display=swap" rel="stylesheet">

    <title>About System</title>
</head>

<body onload="hidePic()">

    <!-- include nav bar and systmen management dashboard  -->
    <?php include_once "./dashBoardAndNavForSystemManagement.php" ?>


    <!-- Rules For Customer -->
    <div class="rulesContainer">
        <div class="rulesTitle">1.Rules For Customer</div>

        <!-- Rule Lists -->
        <ul class="rulesList">
            <li class="ruleText">
                <span>If customer use rude words in feedback to the Shop, The customer account will be banned for one week.</span>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </li>

            <li class="ruleText">
                <span>If customer use rude words in feedback to the Shop, The customer account will be banned for one week.</span>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </li>

            <li class="ruleText">
                <span>If customer use rude words in feedback to the Shop, The customer account will be banned for one week.</span>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </li>
        </ul>

        <!-- Wriet Rule Titles -->
        <div class="writeRulesTitle">1-01. Write new rules for customer</div>

        <textarea class="newRulesBox" placeholder="Write new rules" name="" id="" cols="30" rows="10"></textarea>

        <!-- Pagination -->
        <div class="moveToRight">
            <ul class="pagination">
                <li class="page-item"><a class="arrowToRed" href="#">&lt;</a></li>
                <li class="page-item"><a href="#">1</a></li>
                <li class="page-item"><a href="#">2</a></li>
                <li class="page-item"><a href="#">3</a></li>
                <li class="page-item"><a href="#">...</a></li>
                <li class="page-item"><a class="arrowToRed" href="#">&gt;</a></li>
            </ul>
        </div>

        <!-- Buttons -->
        <div class="buttons">
            <button class="btn add">Add</button>
            <button class="btn cancel">Cancel</button>
        </div>

    </div>



    <!-- Seller compliance BUT same CSS with rules -->
    <div class="complianceContainer">
        <div class="rulesTitle">2.Seller compliance</div>

        <!-- Rule Lists -->
        <ul class="rulesList">
            <li class="ruleText">
                <span>If customer use rude words in feedback to the Shop, The customer account will be banned for one week.</span>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </li>

            <li class="ruleText">
                <span>If customer use rude words in feedback to the Shop, The customer account will be banned for one week.</span>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </li>

            <li class="ruleText">
                <span>If customer use rude words in feedback to the Shop, The customer account will be banned for one week.</span>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </li>
        </ul>

        <!-- Wriet Rule Titles -->
        <div class="writeRulesTitle">1-01. Write new rules for customer</div>

        <textarea class="newRulesBox" placeholder="Write new rules" name="" id="" cols="30" rows="10"></textarea>

        <!-- Pagination -->
        <div class="moveToRight">
            <ul class="pagination">
                <li class="page-item"><a class="arrowToRed" href="#">&lt;</a></li>
                <li class="page-item"><a href="#">1</a></li>
                <li class="page-item"><a href="#">2</a></li>
                <li class="page-item"><a href="#">3</a></li>
                <li class="page-item"><a href="#">...</a></li>
                <li class="page-item"><a class="arrowToRed" href="#">&gt;</a></li>
            </ul>
        </div>

        <!-- Buttons -->
        <div class="buttons">
            <button class="btn add">Add</button>
            <button class="btn cancel">Cancel</button>
        </div>

    </div>









</body>

</html>