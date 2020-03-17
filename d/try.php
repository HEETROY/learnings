<?php

/*if (isset($_POST['submit'])){

    class Dataconnect {
public  $result;
        public function __construct()
        {
            $this->connectaas();
            $this->checkconnectionaas();
        }

        function connectaas (){
         $this->result = mysqli_connect('localhost','root','','data');
           return $this->result;
        }

        function checkconnectionaas (){
            if ($this->result){
                echo 'successfully conncted to database';
            }
        }
    }
    $dataconnect = new Dataconnect();

}*/
if (isset($_POST['submit'])){

    class Dataconnectass{
        var $connectas;

        function connectassss(){
           $this->connectas = mysqli_connect('localhost','root','','data');
           return $this->connectas;
        }
        function connecttest(){
            if ($this->connectas){
                echo "i failed";
            }
        }
    }
    $dataconnectass = new Dataconnectass();

}



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>

    </title>
</head>
<body>
<form action="try.php" method="post">
    <br>
    <label>Submit to connect database</label>
    <br> <br>
    <input type="submit" name="submit" value="Submit">
    <ul>
    <?php
    $query = "SELECT * FROM info";
    $connect = mysqli_connect('localhost','root','','data');
    $result = mysqli_query($connect,$query);
    //$result = mysqli_query($dataconnect->result,$query);
    while ($row = mysqli_fetch_assoc($result)){
         echo "<li>".$row['username'].' '. $row['password']."<br>".$row['email']."</li>";
    }
    ?>
    </ul>
</form>
</body>
</html>