<?php
if (isset($_POST['submit']))
{
    $username = $_POST['Username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    if (!$username || !$password || !$email){
        die("please enter username, password & email id to continue");
    }
    /*if ($username && $password){
       echo $username . " ";
       echo $password . "<br>";
       }else{
        //echo "Please Enter username and password";
        die("Please enter username and password");
    }*/
    $data = mysqli_connect('localhost','root','','data');
if (!$data){
    die("Connection to Database Failed");
}
$insert = "INSERT INTO /*this is the*/info/*name of the table we want to insert into*/ (username,password,email)";//putting sql queries into a variable
$insert .= "VALUES ('$username','$password','$email')";//concatenating the same query to mak it look clean
$result = mysqli_query($data,$insert);
//$result = mysqli_query($loginfo,$insert);// my sql inbuilt function to use queries in php
if (!$result){
    die('insertion failed'. mysqli_error());
}
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>   </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <body>
<div class="container">
    <div class="col-sm-6">
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="Username">Username</label>
                <input type="text"  name="Username" class="form-control">
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="Email-Id">Email-Id</label>
                <input type="email" name="email" class="form-control">
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            <a class="btn btn-primary" href="http://localhost/Learnings/read.php">Read data</a>
        </form>
    </div>

</div>




</body>
</head>
</html>