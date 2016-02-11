<?php
session_start();
include_once('Connector.php');
$error = false;
$success = false;
if(@$_POST['signup']){
    if(!$_POST['firstn']){
        $error .= '<p>First name is required!</p>';
    }
    if(!$_POST['lastn']){
        $error .= '<p>Last name is required!</p>';
    }
    if(!$_POST['username']){
        $error .= '<p>Username is required!</p>';
    }
    if(!$_POST['pass']){
        $error .= '<p>Password is required!</p>';
    }
    $query = $dbh->prepare("INSERT INTO Accounts (id, firstname, lastname, username, password) VALUES (:id, :firstname, :lastname, :username, :password)");
    $result = $query->execute(
        array(
            'id' => NULL,
            'firstname' => $_POST['firstn'],
            'lastname' => $_POST['lastn'],
            'username' => $_POST['username'],
            'password' => $_POST['pass']
        )
    );
    if($result) {
        $success = "firstname, " . $_POST['username'] . " was successfully created";
        $_SESSION['registered'] = 1;
        header("Location: signin.php");
    } else{
        $success = "There was an error creating the account!";
    }
}
echo($item['firstname']);

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
<h2 style="text-align: center">Sign up</h2>
<div id="signup" style="text-align: center">
<form method="post" name="form">
    <p>First name</p>
    <input type="text" name="firstn" required>
    <p>Last name</p>
    <input type="text" name="lastn" required>
    <p>Username</p>
    <input type="text" name="username" required>
    <p>password</p>
    <input type="text" name="pass" required>
    <br>
    <button type="submit" name="signup">Sign up</button>
    </form>
    <br>
    <?php
    if($error){
        echo $error;
    }
    if($success){
        echo $success;
    }
    ?>

</div>




</div>
</div>
</body>
</html>