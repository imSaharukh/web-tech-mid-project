<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Admin</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/input.css">
    <link rel="stylesheet" href="css/auth.css">
</head>
<body>



<?php include("../view/navbar.componrnt.php"); ?>




<div class "inputDiv center" style="padding: 3% 30%;">
       <h1>Update DOCTOR</h1>
            <label for="firstName">First Name:</label>
            <input type="text" name="firstName"   id="firstName"><br><br>
            <label for="lastName">Last Name:</label>
            <input type="text" name="lastName"   id="lastName"><br><br>
            <label for="username">visitingFee :</label>
            <input readonly="true" type="text" name="visitingFee"   id="visitingFee" ><br><br>
            <label for="department">department             :</label>
            <input type="text" name="department"   id="department"><br><br>
            <label for="email">email: </label>
            <input type="text"   name="email" id="email"><br>
            <button class = "button" onclick= "editDoctor();">Update</button>
       </div>

  
     




    <?php include ('../view/footer.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/manageuser.js"></script>
    <script> getDoctor();</script>

</body>
</html>