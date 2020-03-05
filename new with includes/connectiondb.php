<?php
function connectionincludes($databasename)
{
    $connectincludes = mysqli_connect("localhost",'root','',$databasename);
    if ($connectincludes)
    {
        echo "connected to $databasename" . "<br>";
    }
}

?>