<?php
include 'db.php';
if (isset($_POST['submit'])) {
    $databasename = $_POST['databasename'];
    connecttodatabase($databasename);
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $insertinfo = "INSERT INTO info(username,password,email)";
    $insertinfo .=" VALUES ('$username','$password','$email')";
    $insertusers = "INSERT INTO users(username,password)";
    $insertusers .=" VALUES ('$username','$password')";
    if ($databasename == "data"){
        $resultinfo = mysqli_query($connect,$insertinfo);
        if ($resultinfo){
            echo "posted data to $databasename";
        }
    }elseif ($databasename == "loginfo"){
        $resultusers = mysqli_query($connect,$insertusers);
        if ($resultusers){
            echo "posted data to $databasename";
    }else{
            echo "error here";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>

    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="col-sm-6">
<form action="experiment.php" method="post">
    <label>USERNAME</label>
    <input type="text" name="username" placeholder="username">
    <label>PASSWORD</label>
    <input type="password" name="password" >
    <label>email</label>
    <input type="email" name="email">
    <label>NAME OF DATABASE</label>
    <input type="text" name="databasename" >
    <input type="submit" name="submit" value="Submit">
</form>
    </div>
</div>
</body>
</html>