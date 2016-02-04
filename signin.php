<?php
mysql_connect("localhost","root","root") or die(mysql_error());
//echo"connected to mysql<br>";
mysql_select_db("Shoping cart") or die(mysql_error());
$result = mysql_query("SELECT * FROM Accounts")
    or die(mysql_error());
$row = mysql_fetch_array($result) or die(mysql_error());
echo "firstname: ".$row['firstname'];
echo "username: ".$row['username'];
//echo "Connected to Database";
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
    <li><a href="#contact">Contact</a></li>
    <ul style="float:right;list-style-type:none;">
        <li><a href="signin.php">Sign in</a></li>
        <li><a href="cart.php"><img src="http://www.graphicsbeam.com/wp-content/uploads/2012/04/Shopping-Cart-Icon-with-PSD-and-PNG-Format.png" style="height: 13px;width: 23px;"></a></li>
    </ul>
</ul>
<h2 style="text-align: center">Sign in</h2>
<div id="sign" style="text-align: center">
<p>User name</p>
<input type="text">
    <p>Password</p>
    <input type="text">
    <br>
    <button type="submit">Sign in</button>

</div>




</div>
</div>
</body>
</html>
