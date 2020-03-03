<?php
include 'db.php';

if (isset($_POST['submit']) || isset($_POST['update'])) {
    $databasename = $_POST['databasename'];
    connecttodatabase($databasename);
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $username = mysqli_escape_string($connect,$username);
    $password = mysqli_escape_string($connect,$password);
    // insert query
    $insertinfo = "INSERT INTO info(username,password,email)";
    $insertinfo .=" VALUES ('$username','$password','$email')";
    $insertusers = "INSERT INTO users(username,password)";
    $insertusers .=" VALUES ('$username','$password')";
    //update query
   $updateinfo = "UPDATE info SET username = '$username', passord = '$password' where id = $id ";
    // select query
    $selectfrominfo = "SELECT * FROM info";
    $selectfrominfoq = mysqli_query($connect,$selectfrominfo);
if (!$selectfrominfoq){
    die("selection failed" . mysqli_error($connect));
}
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
            echo "error posting database to $databasename";
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

    <div class="form-group">
        <label>USERNAME</label>
        <input type="text" name="username" placeholder="username" class="form-control">
    </div>
    <div class="form-group">
        <label>PASSWORD</label>
        <input type="password" name="password" class="form-control" >
    </div>
   <div class="form-group">
       <label>email</label>
       <input type="email" name="email" class="form-control">
   </div>
   <div class="form-group">
       <label>NAME OF DATABASE</label>
       <input type="text" name="databasename" class="form-control" >
   </div>
    <div class="form-group">
        <select name="id" id="">
            <?php
while ($row = mysqli_fetch_assoc($selectfrominfoq)){
   $id = $row ['id'];
    echo " <option value='$id'>$id</option>";
}
            ?>
        </select>
    </div>
    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    <input type="submit" class="btn btn-primary" name="update" value="Update">
</form>
    </div>
</div>
</body>
</html>