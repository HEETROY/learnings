<?php
if (isset($_POST['Submit'])){
    $username = $_POST['UserName'];
    $password = $_POST['PassWord'];
    if (!$username || !$password){
        die("Username or password not entered");
    }
    $connectloginfo = mysqli_connect('localhost','root','','loginfo');
    if (!$connectloginfo){
        die("connection to database failed");
    }
    $insert = "INSERT INTO users(username,password) VALUES ('$username','$password')";
    $result = mysqli_query($connectloginfo,$insert);
    if ($result){
        echo "successfully registered $username to the database";
    }

}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> read from sql database</title>
</head>
<body>
<form action="readform.php" method="post">
    <div>
    <label>Username</label>
    <input type="text" name="UserName">
        <br>
    </div>
    <div>
        <label>Password</label>
        <input type="password" name="PassWord">
    </div>
    <div>
        <input type="submit" name="Submit">
    </div>

</form>
</body>
</html>