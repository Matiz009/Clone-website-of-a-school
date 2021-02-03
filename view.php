<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Records</title>
</head>

<body style="background-color: #269abc">

<h1 style="text-align: center">Students Record</h1><br><hr>

<div>

<table border="2px" cellspacing="5px" cellpadding="5px" style="border-collapse: collapse">
    <tr>
        <th>Student Name</th>
        <th>Student Registration Number</th>
        <th>Student Program</th>
    </tr>

    <?php
          include "connection.php";//getting of php file in this php file

          $query= "select stdName,studentRg,studentProgram from studentwing";//studentwing is the name of column
          $result= mysqli_query($linker,$query);//query is added in it

          while ($record= mysqli_fetch_assoc($result)){?><!-- Using loop which is displaying the data and start of loop-->

              <tr>
               <td><?php  echo $record ['stdName']; ?></td>
               <td><?php  echo $record ['studentRg']; ?></td>
               <td><?php echo $record ['studentProgram'];?></td>
             </tr>


        <?php }//again starting and ending the php file
    ?>


</table>

</div>

</body>
</html>