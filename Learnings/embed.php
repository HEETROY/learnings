<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> embed </title>
</head>
<body>

<?php

echo "hello world" . "<br>";

$x = 3;
$y = 5;
$z = 0;
$sum = false;

if ($z == 0) {
    $sum = $x + $y;
    echo $sum . "<br>";
} else {
    echo "he";
}


switch ($z) {
    case 1:
        echo "wrong answer";
        break;
    case 2 :
        echo "wrong answer";
        break;
    case 0:
        echo $sum . "<br>";
        break;
    default:
        echo "wrong input";
        break;
}

for ($x = 0; $x < 10; $x++) {
    echo $x;
}

?>

</body>
</html>
