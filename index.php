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
               <br>
    
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
        
     $uname = $_POST['userName'];  //$uname aik variable declare kiya hai hum ne  jo ye $_POST['userName'] store kre ga.  ye                                                   $_POST['userName'] wo hai jo form se post ho rha hai
    
     $pass = $_POST['userPassword']; //same username ki trah
    
     $query = "SELECT * from user WHERE userName='".$uname."' AND userPassword='".$pass."' ";  // ye query ab check kre gi k db ka username or                                                                                             password POST waalon se match kr rha hai k nai.                                                                                             Match kre ga to wo select ho jaye ga
     
      
      $result= mysqli_query($conn,$query);             // $conn db ka connection variable hai. jo bhi result hum ne $query se fetch kiya hai wo                                                    yahan save hoga i.e. $result men
    
      if(mysqli_num_rows($result)==1){                 //mysqli_num_rows() num of rows return krta hai, yahan pe hum ye check kr rhe hein k                                                        $result mein hmari query k against koi row store hoi hai k nai
          
        
          header("Location: admin.html");               // if yes: to browser redirect kr de main.html pe
          exit();
        }
          else {
             echo "<br>";
             die("Query Failed: Wrong Username or Password". mysqli_error($conn));  //agar nai to error show ho ga
        }
    }
?>


<!----------------------------------------------------------THE END----------------------------------------------------------------------------->