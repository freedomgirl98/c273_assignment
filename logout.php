<!-- Lek Qiu Rong 19036308 -->
<?php
session_start();
if (isset($_SESSION['username'])) {
    session_destroy();
    $_SESSION = array();
}
$message = "You have logged out.";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
        <title>Yishun Community Hospital</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/jquery-ui.min.css"> 
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </head>
    <body style="background-color:#D4D4D4;">
        <div align="center">
        <?php include "navbar.php" ?>
            <h1><b>Yishun Community Hospital - Logout</b></h1>
        <?php
        echo $message;
        ?>
        </div>
    </body>
</html>
<!-- Lek Qiu Rong 19036308 -->
