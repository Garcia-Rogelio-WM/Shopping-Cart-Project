<?php
require('Connector.php');
?>
<?php
session_start();
$_SESSION['wallet'] = 0.00;

if (isset($_GET['item1'])) {
    $_SESSION['checkout']++;
    header("location: cart.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="styleSheet.css">
    <meta charset="UTF-8">
    <title>Buy stuff</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body style="background-color: lightgray">

<h1 id="storeName">Buy Stuff</h1>
<ul>
    <li><a class="active" href="index.php">Home</a></li>
    <li><a href="#news"><?php
            echo $_SESSION['uname']
            ?></a></li>
    <li><a href="http://mactroubleshoot.com/eng/int/nphny.php?osversion=OS%20X%2010.10%20Yosemite&voluumdata=vid..00000004-b381-4c1f-8000-000000000000__vpid..76c03000-cf78-11e5-8ffc-62a61507a7c9__caid..3902884a-6526-4c1a-8059-1d6ce3a27c2f__rt..DJ__lid..9b3899a8-fb62-4c16-965d-69f130c32cfa__oid1..c892c423-dad6-4110-be13-869ecdd66c9c__var1..15658191__rd..rdsa2012%5C.%5Ccom__aid..__sid..&SOURCE=15658191&CAMPAIGN-KEYWORD=&CLICKID=015658191032160579963">Contact</a></li>
    <ul style="float:right;list-style-type:none;">
        <li><a href="">In Cart:<?php
                echo $_SESSION['checkout']
                ?></a></li>
        <li><a href="signin.php">Sign in</a></li>
        <li><a href="cart.php"><img src="http://www.graphicsbeam.com/wp-content/uploads/2012/04/Shopping-Cart-Icon-with-PSD-and-PNG-Format.png" style="height: 13px;width: 23px;"></a></li>
    </ul>
</ul>
<h2 id="weeklyDeals">Check out</h2>
<div>
<p>Total:$<?php
    echo $_SESSION['total']
    ?></p>
    <p>Wallet:$<?php
        echo $_SESSION['wallet']
        ?></p>
    <br>
    <a href="AddfundWallet.php"><button>Add fund to wallet</button></a>


</div>
</body>
</html>
