<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        Practis test2
    </title>
</head>
<body>

<?php

$number1 = 10;
$number2 = 20;
$sum = number1 + number2;

echo $sum;

$normalarray = [10, 20];
$associatearray = ['value1' => 10, 'value2' => 20];

echo $associatearray['value1'] /*concatenate using . */ . "<br>" /* new line using <br> tag of html */
; // displaying associate array on screen
echo $normalarray[0];


if (4 === '4' && 4 == 4) {
    echo "both the condition's are true";
} elseif (4 === '4' || 4 == 4) {
    echo "one of the condition is true";
}

switch ($number1) {
    case 1 :
        echo "it is 1";
        break;
    case 2 :
        echo "it is 2";
        break;
    case 10 :
        echo "it is 10";
        break;
    case 20 :
        echo "it is 20";
        break;

    default : /*always add default because there is a possiblity that none of the case is matched & executed*/
        echo "nothing compares to any of the case above";
        break;
}

// counter while loop
$counter = 0;
while ($counter == 0) {
    echo $counter;
    $counter++;
}

for ($x = 0 /*initializing variable*/; $x < 10/*testing condition here*/; $x++/*incrementing initialised variable by 1*/) {
    echo $x . "<br>";

}
//infite while loop
while (4 < 10) {
    echo "it is not equal";
}
?>


</body>
</html>