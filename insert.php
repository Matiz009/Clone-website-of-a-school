<?php

include ('connection.php');

$stdName= $_POST['studentName'];
$stdReg= $_POST['studentRegistration'];
$stdProgram= $_POST['studentProgram'];

$query="insert into studentwing(stdName,studentRg,studentProgram) values ('$stdName','$stdReg','$stdProgram')";

$send_query= mysqli_query($linker,$query);

if($send_query){
    echo "Record Inserted.";
}else{
    echo "Record not inserted";
}


