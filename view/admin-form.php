<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD ADMIN</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/input.css">
    <link rel="stylesheet" href="css/auth.css">
</head>

<body>
<?php include("navbar.componrnt.php") ?>

<div class "inputDiv center" style="padding: 3% 30%;">
<label for="fname">First name:</label><br>
  <input type="text" id="fname" name="firstName" ><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lastName" ><br>


  <label for="lname">Email:</label><br>
  <input type="text" id="email" name="email" ><br>

  <label for="lname">username:</label><br>
  <input type="text" id="username" name="username" ><br>


  <label for="lname">password:</label><br>
  <input type="password" id="password" name="password" ><br><br>
  
  <button class="button" onclick="addADMIN()" >ADD</button>


</div>

<?php include ('../view/footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="js/request.js"></script>

<script>
function addADMIN() {


  let message = "";
        var verified = true;
        if($("#fname").val() == ""){
            message += "First Name is required \n";
            verified = false;
        }
        if($("#lname").val() == ""){
            message += "Last Name is required \n";
            verified = false;
        }
        if($("#email").val() == ""){
            message += "Email is required \n";
            verified = false;
        }
        if($("#username").val() == ""){
            message += "Username is required \n";
            verified = false;
        }
        if($("#password").val() == ""){
            message += "Password is required \n";
            verified = false;
        }
        if (!verified) {
          return alert(message);
        }

  var data = {
    firstName: $("#fname").val(),
    lastName: $("#lname").val(),
    email: $("#email").val(),
    username: $("#username").val(),
    password: $("#password").val()
  };
  data  = JSON.stringify(data);

  const url = "../controller/addAdmin.controller.php";
  const request = $.post(url, data, function fun(data) {
    if (data == "success") {
        alert("Admin added successfully");
      window.location.replace("../view/manageUsers.view.php");

    } else {
      console.log(data);
      alart(data);
    }
  });
}

</script>
</body>

</html>