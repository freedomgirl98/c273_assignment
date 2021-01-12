<!-- Lek Qiu Rong 19036308 -->
<?php
session_start();
include "dbFunctions.php";
$msg = "";

//check whether session variable 'username' is set
//in other words, check whether the user is already logged in
if (isset($_SESSION['username'])) {
    $msg = "You are already logged in.";
} else { //user is not logged in
    //check whether form input 'username' contains value
    if (isset($_POST['username'])) {
//
        //retrieve form data
        $entered_username = $_POST['username'];
        $entered_password = $_POST['password'];
//
//        //connect to database
//        include ("dbFunctions.php");

        //match the username and password entered with database record
        $query = "SELECT id, username FROM account
                  WHERE username='$entered_username' AND 
                  password=SHA1('$entered_password')";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));

        //if record is found, store id and username into session
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $_SESSION['username'] = $row['username'];
            $_SESSION['acc_id'] = $row['id'];
            


            header("location: exercises.php");
        } else { //record not found
            $msg = "Sorry, you must enter a valid username 
                    and password to log in.";
        }
    }
}
//print_r($row);
//echo "<br/>".$_SESSION['acc_id'];
//echo $_SESSION['acc_id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <title>Exercise</title>
    </head>
    <body style="background-color:#D4D4D4;">
        <?php include "navbar.php" ?>
        <h1 align="center"><b>Yishun Community Hospital - Login</b></h1>
        <div align="center">
        <?php
        echo $msg;
        ?>
        </div>
        <?php
        echo '<div class="container">
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
        </div>';
        ?>
    </body>
</html>
<!-- Lek Qiu Rong 19036308 -->