<?php
include "main.php";

class  Connectionincludes
{

    function connectionincludes($databasename)
    {
        $connectincludes = mysqli_connect("localhost",'root','',$databasename);
        if ($connectincludes)
        {
            echo "connected to $databasename" . "<br>";
        }
    }
}
$data = $_POST['databasename'];
$connect = new Connectionincludes($data);
$connect->connectionincludes($data);

?>