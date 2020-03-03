<?php
function connecttodatabase($data)
{
    global $connect;
    $connect = mysqli_connect('localhost', 'root', '', $data);
    if (!$connect){
        die("error connecting to database");
    }
}
?>