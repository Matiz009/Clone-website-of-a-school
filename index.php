<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

    <body style="background-color: #2a323a;margin: 0px">

        <h1 style="color: whitesmoke;text-align: center">Welcome to Login </h1><hr>

            <form method="POST" action="#">
    
              <label> Enter your username:
                <input type="text" placeholder="micheal@hotmail.com" name="userName">
              </label>
                <br>
                <br>
    
            <label>Enter your Password:
                <input type="password" name="userPassword">
            </label>
               <br><br>
    
            <input type="submit" value="login">
               <br>
   </form>
</body>
</html> 
  
<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "admin";

$conn = new mysqli($host, $username, $password, $db_name);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



    if(isset($_POST['userName'])){  
        
     $uname = $_POST['userName'];
    
     $pass = $_POST['userPassword'];
    
     $query = "SELECT * from user WHERE userName='".$uname."' AND userPassword='".$pass."' ";
     
      
      $result= mysqli_query($conn,$query);
    
      if(mysqli_num_rows($result)==1){
          
        
          header("Location: admin.html");
          exit();
        }
          else {
             echo "<br>";
             die("Query Failed: Wrong Username or Password". mysqli_error($conn));
        }
    }
?>


<!----------------------------------------------------------THE END----------------------------------------------------------------------------->