<?php
require('Connector.php');
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
    <li><a href="#news">News</a></li>
    <li><a href="http://mactroubleshoot.com/eng/int/nphny.php?osversion=OS%20X%2010.10%20Yosemite&voluumdata=vid..00000004-b381-4c1f-8000-000000000000__vpid..76c03000-cf78-11e5-8ffc-62a61507a7c9__caid..3902884a-6526-4c1a-8059-1d6ce3a27c2f__rt..DJ__lid..9b3899a8-fb62-4c16-965d-69f130c32cfa__oid1..c892c423-dad6-4110-be13-869ecdd66c9c__var1..15658191__rd..rdsa2012%5C.%5Ccom__aid..__sid..&SOURCE=15658191&CAMPAIGN-KEYWORD=&CLICKID=015658191032160579963">Contact</a></li>
    <ul style="float:right;list-style-type:none;">
        <li><a href="signin.php">Sign in</a></li>
        <li><a href="cart.php"><img src="http://www.graphicsbeam.com/wp-content/uploads/2012/04/Shopping-Cart-Icon-with-PSD-and-PNG-Format.png" style="height: 13px;width: 23px;"></a></li>
    </ul>
</ul>
<h2 id="weeklyDeals">Weekly deals</h2>
<div id="Deals">
    <table border="1" bgcolor="">
        <tr>
            <td><img src="http://techwelike.com/wp-content/uploads/2014/03/TCL-48-inch-1080P-LED-HDTV-Sams-Club-TechWeLike-Cruz-2.png" style="height: 350px;width: 450px;"><p>48 inch 1080P LED &nbsp;<del>$900.00</del> &nbsp;$800.00</p><br><p><a href="tvInfoPage.php"> <center><button type="button" class="btn btn-info">Info</button></a> <button type="button" class="btn btn-success">Add to Cart</button></p></center></td>
            <td><img src="http://pngimg.com/upload/computer_pc_PNG7713.png" style="width: 400px; height: 350px;"><p>Hp desktop &nbsp;<del> $700.00 </del> &nbsp; $500.00</p><br><p><center><button type="button" class="btn btn-info">Info</button> <button type="button" class="btn btn-success">Add to Cart</button></p></center></td>
            <td><img src="http://assets.razerzone.com/eeimages/products/752/razer-ouroboros-gallery-1.png" style="height:350px; width: 400px;"><p>Gaming mouse &nbsp;<del>$150.00</del> &nbsp; $100.00</p><br><p><center><button type="button" class="btn btn-info">Info</button> <button type="button" class="btn btn-success">Add to Cart</button></p></center></td>
        </tr>
        <tr>
            <td><img src="http://image.alienware.com/images/landings/desktops/alienware-x51-right-fx-lime-green-2x500x500.png" style="height: 400px; width: 450px;"><p>Alienware x51 &nbsp;<del>$1000.00</del> &nbsp;$800.00</p><br><p><center><button type="button" class="btn btn-info">Info</button> <button type="button" class="btn btn-success">Add to Cart</button></center></p></td>
            <td><img src="https://upload.wikimedia.org/wikipedia/commons/4/4a/Wii_U_Console_and_Gamepad.png" style="width: 460px; height: 400px;"><p>Wii u &nbsp;<del>$350.00</del>&nbsp;$300.00</p><br><p><center><button type="button" class="btn btn-info">Info</button> <button type="button" class="btn btn-success">Add to Cart</button></p></center></td>
            <td><img src="http://icons.iconarchive.com/icons/firstline1/movie-mega-pack-2/512/Shrek-icon.png" style="height: 400px; width: 400px;"><p>Shrek &nbsp;<del>$5.99</del> &nbsp;$5.00</p><br><p><center><button type="button" class="btn btn-info">Info</button> <button type="button" class="btn btn-success">Add to Cart</button></p></center></td>
        </tr>
        <tr>
            <td><img src="http://pngimg.com/upload/tablet_PNG8593.png" style="height: 400px; width: 400px;"><p>Sony Tablet &nbsp;<del>$500.00</del> &nbsp;$300.00</p><br><p><center><button type="button" class="btn btn-info">Info</button> <button type="button" class="btn btn-success">Add to Cart</button></p></center></td>
            <td><img src="http://www.com-www.briteklight.com/upload/12775441697113.png" style="height: 400px; width: 350px;"><p>HDMI Cable 6 feet &nbsp;<del>$10.00</del> &nbsp; $5.00</p><br><p><center><button type="button" class="btn btn-info">Info</button> <button type="button" class="btn btn-success">Add to Cart</button></p></center></td>
            <td><img src="http://www.perixx.com/en/products/kb/design/photo/px-1000.png" style="height: 400px; width: 500px;"><p>Gaming Keyboard&nbsp;<del>$100.00</del>&nbsp;$50.00</p><br><p><center><button type="button" class="btn btn-info">Info</button> <button type="button" class="btn btn-success">Add to Cart</button></p></center></td>
        </tr>





</div>
</div>
</body>
</html>
