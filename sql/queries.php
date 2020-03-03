<?php
include 'experiment.php';
$insertinfo = "INSERT INTO info(username,password,email)";
$insertinfo .=" VALUES ('$username','$password','$email')";
$insertusers = "INSERT INTO users(username,password)";
$insertusers .=" VALUES ('$username','$password')";
?>