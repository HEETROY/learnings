<?php
$db =  ['db_host' => 'localhost' , 'db_user' => 'root' , 'db_pass' => '' , 'db_name'=>'data'];
foreach ($db as $key => $value){
  define(strtoupper($key),$value);
}
foreach ($db as $key=>$value){
    echo $key. " = " . $value . "<br>";
}
$connects = mysqli_connect(DB_HOST,DB_USER,DB_PASS ,DB_NAME);
if ($connects){
    echo "yes it works ";
}else{
    echo "it does not work";
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
<ul>
    <?php
    $quer = "SELECT * FROM info";
    $selectionquery = mysqli_query($connects,$quer);
    while ($row = mysqli_fetch_assoc($selectionquery)){
        $username = $row['username'];
        echo "<li>{$username}</li>";
    }
   ?>
</ul>
</body>
</html>
