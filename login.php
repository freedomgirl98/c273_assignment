<!-- Lek Qiu Rong 19036308 -->

<?php
session_start();
// php file that contains the common database connection code
include "dbFunctions.php";
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <title>Login</title>
    </head>
    <body style="background-color:#D4D4D4;">
        <?php
        include("navbar.php");
        ?>

        <div class="container">
            <br/>
            <h2 align="center"><b>Login</b></h2>

            <form id="defaultForm" method="post" action="doLogin.php">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" required/>
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="text" class="form-control" name="password" required />
                </div>
                <input type="submit" class="btn btn-block btn-light" value="Login"/>
            </form>
        </div>
    </body>
</html>
<!-- Lek Qiu Rong 19036308 -->