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

    <h1>Admin Login</h1>

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


    <script>
    function login() {


        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        let message = "";
        var verified = true;
        // if (username == "" || password == "") {
        //     alert("Please fill all the fields");
        //     return false;
        // }
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


        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
           console.log(this.responseText);
            const response = JSON.parse(this.responseText);

            console.log(response["status"]);
           if (response["status"] == "true") {

                window.location.replace("../view/admin.view.php");
           } else {
                alert("username or password is incorrect");
           }
        }
        xhttp.open("POST", '../controller/login.controller.php');
        xhttp.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        xhttp.send(JSON.stringify({ "username": username, "password": password}));
    }
</script>
</body>
</html>