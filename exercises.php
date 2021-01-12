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
        <title>Exercises</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/jquery-ui.min.css"> 
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function () {
                
//                $("form").submit(function () {
//                    var type = $("#exTypes").val(); //parseFloat($("[name=radius]").val());
//                    var duration = $("#duration").val();
//                    
//                    
//                    $.ajax({
//                        type: "GET",
//                        url: "http://localhost/C273/C273/Sa/getExercises.php",
//                        data:  "type=" + type + "&duration=" + duration,
//                        cache: false,
//                        dataType: "JSON",
//                        success: function (response) {
//                            $('#results').html(response.result);
//
//
//
//                        },
//                        error: function (obj, textStatus, errorThrown) {
//                            console.log("Error " + textStatus + ": " + errorThrown);
//                        }
//                    });
//                    
//                    return true;
//                });
                
                
                $("#slider").slider({
                    value: 0,
                    min: 5,
                    max: 120,
                    step: 1,
                    slide: function (event, ui) {
                        $("#duration").val(ui.value);
                    }
                });
                $("#duration").val($("#slider").slider("value"));

            });

        </script>
    </head>
    <body style="background-color:#D4D4D4;">
        <?php
        include("navbar.php");
        ?>
        <?php
        if(isset($_SESSION['username'])){
            ?>
        
        <div class="container">
            <form method="post" action="doExercise.php">
            <div class="form-group">
                    <label for="exTypes">Exercise Type:</label>
                    <select id="exTypes" name="exTypes" class="form-control">
                        <option value="Walk">
                            Walk
                        </option>
                        <option value="Run">
                            Run
                        </option>
                        <option value="Cycle">
                            Cycle
                        </option>
                    </select>
                </div>
            <div class="ui-widget">
                <label for="slider">Duration:<input type="text" id="duration" name="duration" readonly style="border:0; color:#f6931f; font-weight:bold; text-align:right" size="1"></label>
                <div id="slider"></div>
                <br/>
                <input type="submit" class="btn btn-block btn-light" value="Submit Exercise"/>
            </div>
        </form>
        </div>
        <?php
        }
        ?>
    </body>
</html>

<!-- Lek Qiu Rong 19036308 -->
