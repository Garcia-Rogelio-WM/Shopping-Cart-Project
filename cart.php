<?php
session_start();

if (isset($_GET['item1'])) {
    $_SESSION['checkout']++;
    header("location: cart.php");
    $_SESSION['total']+= 800;
}
if (isset($_GET['item2'])) {
    $_SESSION['checkout']++;
    header("location: cart.php");
    $_SESSION['total']+= 500;
}
if (isset($_GET['item3'])) {
    $_SESSION['checkout']++;
    header("location: cart.php");
    $_SESSION['total']+= 100;
}
if (isset($_GET['item4'])) {
    $_SESSION['checkout']++;
    header("location: cart.php");
    $_SESSION['total']+= 800;
}
if (isset($_GET['item5'])) {
    $_SESSION['checkout']++;
    header("location: cart.php");
    $_SESSION['total']+= 300;
}
if (isset($_GET['item6'])) {
    $_SESSION['checkout']++;
    header("location: cart.php");
    $_SESSION['total']+= 5;
}
if (isset($_GET['item7'])) {
    $_SESSION['checkout']++;
    header("location: cart.php");
    $_SESSION['total']+= 300;
}
if (isset($_GET['item8'])) {
    $_SESSION['checkout']++;
    header("location: cart.php");
    $_SESSION['total']+= 5;
}
if (isset($_GET['item9'])) {
    $_SESSION['checkout']++;
    header("location: cart.php");
    $_SESSION['total']+= 50;
}
if (isset($_GET['del'])) {
    $_SESSION['checkout'] = 0;
    $_SESSION['total'] = 0;
    header("location: cart.php");
    $_SESSION['total']+= 00;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="styleSheet.css">
    <script src="script.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Buy stuff</title>
</head>

<body style="background-color: lightgray">

<h1 id="storeName">Buy Stuff</h1>
<ul>
    <li><a class="active" href="index.php">Home</a></li>
    <li><a href="#news"><?php
            echo $_SESSION['uname']
            ?></a></li>
    <li><a href="#contact">Contact</a></li>
    <ul style="float:right;list-style-type:none;">
        <li><a href="">In Cart:<?php
                echo $_SESSION['checkout']
                    ?></a></li>
        <li><a href="signin.php">Sign in</a></li>
        <li><a href="cart.php"><img src="http://www.graphicsbeam.com/wp-content/uploads/2012/04/Shopping-Cart-Icon-with-PSD-and-PNG-Format.png" style="height: 13px;width: 20px;"></a></li>
    </ul>
</ul>
<table id="tablef">
    <tr>
        <td><img src="http://techwelike.com/wp-content/uploads/2014/03/TCL-48-inch-1080P-LED-HDTV-Sams-Club-TechWeLike-Cruz-2.png" style="height: 100px;width: 150px;"><p>48 inch 1080P</p><p>Price:$800</p><a href="cart.php?item1=true"> <button class="btn btn-success">Add to cart</button></a></td>
        <td><img src="http://pngimg.com/upload/computer_pc_PNG7713.png" style=" height: 100px;width: 150px;"><p>hp desktop</p><p>Price:$500</p><a href="cart.php?item2=true"> <button class="btn btn-success">Add to cart</button></a></td>
        <td><img src="http://assets.razerzone.com/eeimages/products/752/razer-ouroboros-gallery-1.png" style="height:100px; width: 150px;"><p>Gaming mouse</p><p>Price:$100</p><a href="cart.php?item3=true"> <button class="btn btn-success">Add to cart</button></a></td>
        <td><img src="http://image.alienware.com/images/landings/desktops/alienware-x51-right-fx-lime-green-2x500x500.png" style="height: 100px; width: 150px;"><p>Alienware x51</p><p>Price:$800</p><a href="cart.php?item4=true"> <button class="btn btn-success">Add to cart</button></a></td>
        <td><img src="https://upload.wikimedia.org/wikipedia/commons/4/4a/Wii_U_Console_and_Gamepad.png" style=" height: 100px;width: 150px;"><p>Wii u</p><p>Price:$300</p><a href="cart.php?item5=true"> <button class="btn btn-success">Add to cart</button></a></td>
        <td><img src="http://icons.iconarchive.com/icons/firstline1/movie-mega-pack-2/512/Shrek-icon.png" style="height: 100px; width: 150px;"><p>Shrek</p><p>Price:$5</p><a href="cart.php?item6=true"> <button class="btn btn-success">Add to cart</button></a></td>
        <td><img src="http://pngimg.com/upload/tablet_PNG8593.png" style="height: 100px; width: 150px;"><p>Sony Tablet</p><p>Price:$300</p><a href="cart.php?item7=true"> <button class="btn btn-success">Add to cart</button></a></td>
        <td><img src="http://www.com-www.briteklight.com/upload/12775441697113.png" style="height: 100px; width: 150px;"><p>HDMI Cable</p><p>Price:$5</p><a href="cart.php?item8=true"> <button class="btn btn-success">Add to cart</button></a></td>
        <td><img src="http://www.perixx.com/en/products/kb/design/photo/px-1000.png" style="height: 100px; width: 150px;"><p>Gaming Keyboard</p><p>Price:$50</p><a href="cart.php?item9=true"> <button class="btn btn-success">Add to cart</button></a></td>
    </tr>
</table>
<br>
<p >Total:$<?php
    echo $_SESSION['total']
    ?></p>

    <br>
<a href="Checkout.php" ><button class="btn btn-warning">Proceed to check out</button></a>
<br>









<div id="footer" style="margin-top: 100%;">
<a href="cart.php?del=true"> <button class="btn btn-danger">del</button></a>
</div>
</body>
</html>