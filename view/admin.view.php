<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <?php require("../controller/adminHome.controller.php") ?>
   
    <!-- <h1>Admin Home</h1> -->
    <!-- <h2>Welcome <?php echo $_SESSION['username']; ?></h2> -->
 <?php include("navbar.componrnt.php") ?>

 <?php 
  $user =  json_decode($_COOKIE["user"]);
//   echo $user->username;
  
  ?>
    <br>
<!-- <form action="../controller/updateProfile.controller.php" method="post" onsubmit="update(this); return false;"> -->

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
  
  <button onclick="update()" >Submit</button>
  <!-- <input type="submit" value="Update"> -->
<!-- </form> -->

<?php include ('../view/footer.php'); ?>


<script src="js/request.js"></script>

<script>
function update() {
  //TODO validation
  // console.log("update called");
  postRequest("../controller/updateProfile.controller.php", {
    firstName: document.getElementById("fname").value,
    lastName: document.getElementById("lname").value,
    email: document.getElementById("email").value,
    username: document.getElementById("username").value,
    password: document.getElementById("password").value
  },function fun(data) {
    if (data == "success") {
      console.log("successssss");
    } else {
      console.log("failed");
    }
  });
  
  // return false;

}

</script>
</body>

</html>