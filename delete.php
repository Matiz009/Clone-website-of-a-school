<?php

include ('connection.php');

$Registration= $_POST['delReg'];


$query= "Delete from studentwing where studentRg= '$Registration'";

$send = mysqli_query($linker,$query);

if($send){
    echo "<br> Record Deleted.";
}else{
    echo "<br>Record not Deleted.";
}