<?php

include 'linker.php';

$user=$_POST['userName'];
$password=$_POST['userPassword'];

$send= "insert into user(userName,userPassword) values ('$user','$password')";

$create_account= mysqli_query($linker,$send);

if($create_account){
    echo"<br> Your account has been created. Go to main page to login.";
}else{
    echo "<br> TRY AGAIN in a few minutes.";
}