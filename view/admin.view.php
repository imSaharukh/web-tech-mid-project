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
   
    <h1>Admin Home</h1>
    <!-- <h2>Welcome <?php echo $_SESSION['username']; ?></h2> -->
 <?php include("navbar.componrnt.php") ?>

 <?php 
  $user =  json_decode($_COOKIE["user"]);
//   echo $user->username;
  
  ?>
    <br>
<form action="../controller/updateProfile.controller.php" method="post">

<label for="fname">First name:</label><br>
  <input type="text" id="fname" name="firstName" value = '<?php echo $user->firstName;?>'><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lastName" value = '<?php echo $user->lastName;?>'><br>

  <!-- <?php echo $username=  $user->username;?> -->

  <label for="lname">Email:</label><br>
  <input type="text" id="lname" name="email" value = '<?php echo $user->email;?>' ><br>

  <label for="lname">username:</label><br>
  <input type="text" id="lname" name="username" value = '<?php echo $user->username;?>'><br>


  <label for="lname">password:</label><br>
  <input type="password" id="lname" name="password" value = '<?php echo $user->password;?>'><br><br>
  
  <input type="submit" value="Update">
</form>

</body>

</html>