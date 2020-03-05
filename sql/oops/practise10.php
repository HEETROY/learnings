<?php
/*
class Dog{
    var $eyecolour = "blue";
    var $furcolour = "white";
    var $nose = 1;

    function ShowAll(){
        echo $this->eyecolour . "<br>". $this->furcolour . "<br>" . $this->nose;
    }
}

$pitbull = new Dog();

echo $pitbull->ShowAll();
*/
class Databaseconnection
{
    function __construct()
    {

    }
    function connection($x)
    {
        global  $connectnow;
       $connectnow = mysqli_connect("localhost",'root','', $x);
       if ($connectnow){
           echo "connected to database ". $x . "<br>" ;
       }
    }
}

class Insertquery extends Databaseconnection {
   // public $inserttodata = "INSERT INTO info (username,password,email) VALUES($username,$password,$email)";
 //   public $inserttologinfo = "INSERT INTO users (username,password) VALUES($username,$password)";

    function insert()
    {
      if ($this->connection($_POST['databasename'])){
           $inserttodata = "INSERT INTO info (username,password,email) VALUES($username,$password,$email)";
          $w = mysqli_query($this->connection($_POST['databasename']), $inserttodata);
          echo 'dss'.$w;
      }
    }
}

if (isset($_POST['submit'])){
    $databaseconnectionstatus = new Databaseconnection();
    $insertquery = new Insertquery();

    $databasename = $_POST['databasename'];
    $username = $_POST['Username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $databaseconnectionstatus->connection($databasename);
    $insertquery->insert($databasename);

   //  $inserttodata = "INSERT INTO info (username,password,email) VALUES($username,$password,$email)";
   //  $inserttologinfo = "INSERT INTO users (username,password) VALUES($username,$password)";

   //  $insertquery->insert($insertquery->connection($databasename), $inserttodata);


}
/*$x = $_POST['databasename'];
$connecttodata = new Databaseconnection();
$connecttologinfo = new Databaseconnection();
$connecttodata->connection($x);
$connecttologinfo->connection('loginfo');
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>   </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="col-sm-6">
        <form action="practise10.php" method="post">
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
            <div class="form-group">
                <label for="database">databasename</label>
                <input type="text" name="databasename" class="form-control">
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            <a class="btn btn-primary" href="http://localhost/Learnings/read.php">Read data</a>
        </form>
    </div>

</div>





</body>
</html>
