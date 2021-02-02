<?php

$Name= $_POST['Name'];
$fName=$_POST['fName'];
$Date=$_POST['Date'];
$Address=$_POST['Address'];
$radio_value=$_POST['radio'];
$radio1_value=$_POST['age'];
$radio2_value=$_POST['class'];
$name=$_POST['program'];
$admission=$_POST['admission'];
$answer=$_POST['ans'];


echo "Full name is : "." ".$Name;
echo "<br>Father name is : "." ".$fName;
echo "<br>Date of birth is : "." ".$Date;
echo "<br>Address is : "." ".$Address;
echo "<br>Gender is : "." ".$radio_value;
echo "<br>Age is : "." ".$radio1_value;
echo "<br>Class is : "." ".$radio2_value;
foreach ($name as $input){
    echo "<br>Grade is"." ".$input."<br>";
}
echo "<br>Applied in class"." ".$admission;
echo"<br>Answer is :"." ".$answer;








