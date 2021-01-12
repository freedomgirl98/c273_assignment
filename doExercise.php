<!-- Lek Qiu Rong 19036308 -->
<?php
session_start();

include("dbFunctions.php");

$type = $_POST['exTypes'];
$duration = $_POST['duration'];
$accId = $_SESSION['acc_id'];



//echo $accId;
//print_r($accId);
//echo $district;
//print_r($_POST);

$query = "INSERT INTO exercise(type,duration,acc_id) 
          VALUES 
          ('$type',$duration, $accId)";
$status = mysqli_query($link, $query) or die(mysqli_error($link));

if ($status) {
    $msg = "Exercise inserted successfully.<br/>";
} else {
    $msg = "Exercise insertion failed.<br/>";
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php echo $msg; 
        header("location: history.php");
        ?>
    </body>
</html>
<!-- Lek Qiu Rong 19036308 -->