<?php

class Car{
    var $wheels = 0;
    var $doors = 0;
    var $engine = 0;

    function createdoors($x){
        $this->doors = $x;
    }
}
class Plane extends Car{
    //we inherited the properties of class car to class plane using the keyword extends
}

$bmw = new Car();
$jet = new Plane();
$bmw->createdoors(4);
echo "created ".$bmw->doors ." doors"."<br>";
echo 'created '.$bmw->engine =1 . ' engine'.'<br>';
$jet->createdoors(2);
echo " created " . $jet->doors . " doors in plane using inheritance"."<br>";
?>