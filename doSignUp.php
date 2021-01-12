<!-- Lek Qiu Rong 19036308 -->
<?php

include("dbFunctions.php");

$username = $_POST['username'];
$password = $_POST['password'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$dateOfBirth = $_POST['dateOfBirth'];
$activeLvl = $_POST['activeLvl'];

//echo $person_name;
//echo $district;
//print_r($_POST);

$query = "INSERT INTO account (username,password, height, weight, dateOfBirth, activeLvl) 
          VALUES 
          ('$username',SHA1('$password'),'$height','$weight', STR_TO_DATE('$dateOfBirth', '%m/%d/%Y'),'$activeLvl')";


$status = mysqli_query($link, $query) or die(mysqli_error($link));

if ($status) {
    $msg = "You have signed up successfully.<br/>";
} else {
    $msg = "sign up failed.<br/>";
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <title>Sign Up</title>
    </head>
    <body style="background-color:#D4D4D4;">
        <?php include "navbar.php" ?>
        <h1 align="center"><b>Yishun Community Hospital</b></h1>
        <div align="center">
        <?php
        echo $msg;
        ?>
        </div>
    </body>
</html>
<!-- Lek Qiu Rong 19036308 -->