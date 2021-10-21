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
    <h2>Welcome <?php echo $_SESSION['username']; ?></h2>
 <?php include("navbar.componrnt.php") ?>
</body>

</html>