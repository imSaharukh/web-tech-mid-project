<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/input.css">
    <link rel="stylesheet" href="css/auth.css">
</head>

<body>
    <?php require("../controller/adminHome.controller.php") ?>

    <?php include("navbar.componrnt.php") ?>

    <?php 
      $user =  json_decode($_COOKIE["user"]);
  
  ?>
    <br>

<div class "inputDiv center" style="padding: 3% 30%;">
<label for="fname">First name:</label><br>
  <input type="text" id="fname" name="firstName" value = '<?php echo $user->firstName;?>'><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lastName" value = '<?php echo $user->lastName;?>'><br>

  <!-- <?php echo $username=  $user->username;?> -->

  <label for="lname">Email:</label><br>
  <input type="text" id="email" name="email" value = '<?php echo $user->email;?>' ><br>

  <label for="lname">username:</label><br>
  <input type="text" id="username" name="username" value = '<?php echo $user->username;?>'><br>


  <label for="lname">password:</label><br>
  <input type="password" id="password" name="password" value = '<?php echo $user->password;?>'><br><br>
  
  <button class="button" onclick="update()" >Submit</button>


</div>

<?php include ('../view/footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="js/request.js"></script>

<script>
function update() {
  //TODO validation
  // console.log("update called");
  var data = {
    firstName: $("#fname").val(),
    lastName: $("#lname").val(),
    email: $("#email").val(),
    username: $("#username").val(),
    password: $("#password").val()
  };
  data  = JSON.stringify(data);

  const url = "../controller/updateProfile.controller.php";
  const request = $.post(url, data, function fun(data) {
    if (data == "success") {
      window.location.replace("../controller/logout.controller.php");

    } else {
      console.log(data);
      alart(data);
    }
  });



  // postRequest("../controller/updateProfile.controller.php", {
  //   firstName: document.getElementById("fname").value,
  //   lastName: document.getElementById("lname").value,
  //   email: document.getElementById("email").value,
  //   username: document.getElementById("username").value,
  //   password: document.getElementById("password").value
  // },function fun(data) {
  //   if (data == "success") {
  //     // console.log("successssss");
  //     window.location.replace("../controller/logout.controller.php");

  //   } else {
  //     console.log("failed");
  //   }
  // });
  

}

</script>
</body>

</html>