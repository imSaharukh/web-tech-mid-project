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
    <link rel="stylesheet" href="css/input.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/auth.css">
</head>
<body id = "center">

    <h1 style ="text-align: center;">Admin Login</h1>

 <div class = "inputDiv">       <label for="email">Username:</label><br>
        <input type="text" id="username" name="username" >
       
            </input><br>


       <br> <label for="password">password:</label><br>
        <input type="password" id="password" name="password" >
    
            </input><br></div>

      <br>

      <button class="button" style="width: 100%;" onclick="login()">Login</button>
      
      <br>
        <br>
      <a href="forget-password.html">forgot password?</a>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    function login() {

        const username = $("#username").val();
        const password = $("#password").val();

        let message = "";
        var verified = true;
        if(username == ""){
            message += "Please enter your username \n";
            verified = false;
        }
        if(password == ""){
            message += "Please enter your password";
            verified = false;
        }
        if(!verified){
            alert(message);
            return false;
        }


var data = JSON.stringify({ "username": username, "password": password});

        $.post("../controller/login.controller.php",data, function(response) {
             response = JSON.parse(response);
            console.log(response);

            console.log(response["status"]);
           if (response["status"] == "true") {

                window.location.replace("../view/admin.view.php");
           } else {
                alert("username or password is incorrect");
           }
        });
    }
</script>
</body>
</html>