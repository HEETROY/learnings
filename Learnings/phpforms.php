<?php
print_r($_POST);
"<br>";
if (isset($_POST['submit'])) {

    echo "it works but understand it well before you progress ahead";
}


?>


<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>

    </title>
</head>
<body>


<form action="phpforms.php" method="post">

    <input type="text" placeholder="username" name="username" value=""/*put text here*/ >
    <br>
    <input type="text" placeholder="password" name="password">
    <br>
    <input type="submit" name="submit">
    <textarea readonly="readonly">heet roy</textarea>
</form>


</body>
</html>