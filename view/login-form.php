<?php
session_start();
if (isset($_SESSION["username"] )) {
    # code...
    header("location: ../view/admin.view.php");
}

// var_dump($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
<form action="../controller/login.controller.php" method="POST" style="display: inline-block;">  
    <h1>Admin Login</h1>
    <fieldset>
        <legend>Login:</legend>

        <label for="email">Username:</label><br>
        <input type="text" id="username" name="username" >
       
            </input><br>


       <br> <label for="password">password:</label><br>
        <input type="password" id="password" name="password" >
    
            </input><br>

      </fieldset> 
      <br>
      <input type="submit" value="Login"><br>
        <br>
      <a href="forget-password.html">forgot password?</a>

    </form>
     
</body>
</html>