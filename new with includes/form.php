<?php include "header.php"; ?>
<?php include "connectiondb.php"; ?>
<?php include "main.php"; ?>

<form action="main.php" method="post">
    <div class="form-group">
        <label for="Username">Username</label>
        <input type="text"  name="Username" class="form-control">
    </div>
    <div class="form-group">
        <label for="Password">Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="Email-Id">Email-Id</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="database">databasename</label>
        <input type="text" name="databasename" class="form-control">
       <?php
       $selectquery ="SELECT * FROM info";
       $temp = $_POST['databasename'];
       $temp2 = connectionincludes($temp);
      $databaseselect = mysqli_query($temp2,$selectquery);
       while ($row = mysqli_fetch_assoc($databaseselect)){
           echo $row;
       }
        //<ul>
           // <li></li>
       // </ul>
         ?>
    </div>
    <input class="btn btn-primary" type="submit" name="submit" value="Submit">
    <a class="btn btn-primary" href="http://localhost/Learnings/read.php">Read data</a>
</form>