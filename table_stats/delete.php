<?php
include("../config.php");
session_start();

$email = $_GET['email'];
$sql_del =" DELETE FROM user WHERE emailID = '$email' ";
$result1 = mysqli_query($db,$sql_del);
header("location: Course Stats.php");


?>