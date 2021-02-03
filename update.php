<?php

include "connection.php";

$Registration=$_REQUEST['stdReg'];
$Name=$_REQUEST['stdName'];

$query= "update studentwing set studentRg='$Registration' where stdName='$Name'";

$update= mysqli_query($linker,$query);

if($update){
    echo "Record Updated";
}else{
    echo "Record not updated";
}
