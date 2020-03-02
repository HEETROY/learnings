<?php
print_r($_POST);

$username = @$_POST['Usernam'];
$password = @$_POST['Password'];

$names = ["heet", "rakshit", "siddharth"];
$passwords = ['heet' => '1234', 'rakshit' => '456'];
print_r($passwords);


if (in_array($username, $names)) {
        echo "welcome" . " " . $username;
}
else {
    echo "please enter username and password";
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>own form</title>
</head>
<body>
<form action="blank.php" method="post">

    <input type="text" placeholder="Username" name="Usernam">
    <input type="text" placeholder="Password" name="Password">
    <input type="submit" name="SUb">
</form>
</body>
</html>
