<?php

include("config.php");
session_start();

$id = $_SESSION['userID'];

$sql = "SELECT progress FROM css WHERE userID = '$id'";;
$result = mysqli_query($GLOBALS['db'], $sql);

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$progress = json_decode($row['progress']);

$progress[$_GET['id']] =1;


$res = json_encode($progress);


$sql = "UPDATE css SET progress = '$res' WHERE userID = '$id'";
$result = mysqli_query($GLOBALS['db'], $sql);

$navigate= 'location: ' . $_GET['url'];
header($navigate);

?>