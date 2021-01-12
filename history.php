<!-- Lek Qiu Rong 19036308 -->
<?php
include("dbFunctions.php");
session_start();


$accId = $_SESSION['acc_id'];
// create query
$query = "SELECT * FROM account, exercise 
          WHERE $accId = exercise.acc_id
          ORDER BY exercise.acc_id";

// execute query
$result = mysqli_query($link, $query) or
        die("Error in query: $query. " . mysqli_error($link));


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Book List</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {


                $("#exTypes").change(function () {
                    if ($(this).val() === "0") {
                        $(tr).show();
                    } else {
                        $("tr").hide();
                        $(".header").show();
                        var type = "." + $("#exTypes").val();
                        $(type).show();

                    }

                });

                $("#historyTable").change(function () {
                    if ($type === "Walk" && $duration <= 30) {
                        $("tr").css('background-color', 'yellow');
                    } else if ($type === "Run" && $duration <= 10) {
                        $("tr").css('background-color', 'yellow');
                    } else if ($type === "Cycle" && $duration <= 20) {
                        $("tr").css('background-color', 'yellow');
                    }

                });


            });
        </script>
    </head>
    <body>

        <!-- Navigational Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav a">
            <a class="navbar-brand" href="#">Yishun Community Hospital</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="exercises.php">Exercises</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>

                </ul>
            </div>
        </nav>
        <br/>
        <?php
        if (isset($_SESSION['username'])) {
            ?>
            <div class="container">
                <h3>Yishun Community Hospital: Exercise History</h3>
                <form>
                    <div class="form-group">
                        <label for="exTypes">Show:</label>
                        <select id="exTypes" class="form-control">
                            <option value="0">
                                all types
                            </option>
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
                </form>
                <table id="historyTable" class="table table-hover table-bordered">
                    <tr class="header">
                        <th>Exercise Types</th>
                        <th>Duration</th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $type = $row['type'];
                        $duration = $row['duration'];
                        ?>
                        <tr class="<?php echo $type; ?>">
                            <td>
                                <?php echo $type; ?>
                            </td>
                            <td>
                                <?php echo $duration; ?>
                            </td>
                        </tr>
                        <?php
                    } // end while loop
                    ?>    
                </table>
            </div>
            <?php
        }
        ?>
    </body>
</html>
<!-- Lek Qiu Rong 19036308 -->