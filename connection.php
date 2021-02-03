<?php
$host= 'localhost';
$user= 'root';
$password= '';
$database= 'dcs';

$linker= mysqli_connect($host,$user,$password,$database);

 if($linker){
     echo "Record has been captured.<br>";
 }else{
     echo "U are a good Programmer";
 }

