<!-- Lek Qiu Rong 19036308 -->
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
        <title>Sign Up</title>
        <link rel="stylesheet" href="css/jquery-ui.min.css"> 
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/moment.min.js"></script> <!-- Moment needed for datetimepicker -->
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <style>
            form .error {
                color: #ff0000;
            }
        </style>
        <script>
            $(document).ready(function () {

                $("#dateOfBirth").datepicker({format: "mm/dd/yyyy", startDate: "0d"});


                $("form").validate({
                    rules: {
                        username: {
                            required: true,
                            pattern: /^[0-9a-zA-Z]{6,}$/
                        },
                        password: {
                            required: true,
                            pattern: /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,8}?/
                        },
                        height: {
                            required: true
                        },
                        weight: {
                            required: true
                        },
                        dateOfBirth: {
                            required: true
                        },
                        activeLvl: {
                            required: true
                        }
                    },
                    messages: {
                        username: {
                            required: "Username is required.",
                            pattern: "Username must contain at least 6 letters or digits"
                        },
                        password: {
                            required: "Password is required.",
                            pattern: "Password must contain at least 6 characters and not exceeding 20 characters including both uppercase and lowercase with at least one number included."
                        },
                        height: {
                            required: "Please enter your height"
                        },
                        weight: {
                            required: "Please enter your weight."
                        },
                        dateOfBirth: {
                            required: "Please enter your date of birth"
                        },
                        activeLvl: {
                            required: "Please select your active level."
                        }
                    },
                    submitHandler: function () {
                        return true;
                    }
                });
            });
        </script>
    </head>
    <body style="background-color:#D4D4D4;">
        <?php
        include("navbar.php");
        ?>
        <div class="container">
            <br/>
            <h2>Sign Up</h2>
            <br/>

            <form id="defaultForm" method="post" action="doSignUp.php">
                <div class="form-group">
                    <label >Username</label>
                    <input type="text" class="form-control" name="username" placeholder="username" required/>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" name="password" placeholder="password" required/>
                </div>
                <div class="form-group">
                    <label>Height</label>
                    <input type="text" class="form-control" name="height" placeholder="height in m" required/>
                </div>
                <div class="form-group">
                    <label >Weight</label>
                    <input type="text" class="form-control" name="weight" placeholder="weight in kg" required/>
                </div>
                <!--                <div class="form-group">
                                    <label >Date of Birth</label>
                                    <input type="text" class="form-control" name="dateOfBirth" required/>
                                </div>-->
                <div class="form-group">
                    <label for="dateOfBirth">Date of Birth:</label>
                    <input class="form-control datepicker" id="dateOfBirth" name="dateOfBirth" data-date-format="mm/dd/yyyy">

                </div>
                <div class="form-group">
                    <div class="row">
                        <label>Active Level: </label> &nbsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="activeLvl" id="activeLvl1" value="Sedentary">
                            <label class="form-check-label" for="activeLvl1">
                                Sedentary&nbsp;
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="activeLvl" id="activeLvl2" value="Moderate">
                            <label class="form-check-label" for="activeLvl2">
                                Moderate&nbsp;
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="activeLvl" id="activeLvl3" value="Active">
                            <label class="form-check-label" for="activeLvl3">
                                Active&nbsp;
                            </label>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-block btn-light" value="Sign up"/>
            </form>
        </div>
    </body>
</html>
<!-- Lek Qiu Rong 19036308 -->