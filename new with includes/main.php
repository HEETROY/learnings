<?php
include "form.php";
include "connectiondb.php";

    if (isset($_POST['submit']))
    {
    $username = $_POST["Username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $dataBasename = $_POST["databasename"];
    connectionincludes($dataBasename);

    echo $username . "<br>" . $password . "<br>" . $email . "<br>" . $dataBasename ;

    }
?>