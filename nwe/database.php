<?php
echo "started";
class Connecttodb {
    var $connect;
    static $door = 4;

   function connectnow ()
   {
      $this->connect = mysqli_connect('localhost','root','','data');
   }

    function testconnection()
    {
        //$this->connectnow();
       if ($this->connect)
       {
           echo "yesss did it finally ". "<br>";
       }
    }
}

$connecttodb = new Connecttodb();
$connecttodb->connectnow();
echo "<br>";
$connecttodb->testconnection();
echo Connecttodb::$door;
?>