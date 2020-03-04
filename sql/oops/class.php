<?php

class Car{
    var $wheels = 0;
    var $doors = 0;
    var $engine = 0;

    function createdoors($x){
        $this->doors = $x;
    }
}

$bmw = new Car();
$bmw->createdoors(4);
echo "created ".$bmw->doors ." doors"."<br>";
echo 'created '.$bmw->engine =1 . ' engine'.'<br>';
?>