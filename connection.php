<?php
$host= 'localhost';
$user= 'root';
$password= '';
$database= 'studentrecord';

$connect=mysqli_connect($host,$user,$password,$database);

if($connect){
    echo"Successfully connected";
}else{
    echo "You are a good programmer";
}