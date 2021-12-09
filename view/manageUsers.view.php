<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="css/common.css">
</head>
<body>
    <?php include("navbar.componrnt.php") ?>
    <br>
    <br>

    <hr>
<h2 style = "text-align: center;">ADMIN</h2>

<div id = "admin"></div>





<h2 style = "text-align: center;">DOCTORS</h2>

<div id = "doctor"></div>


<h2 style = "text-align: center;">SHOP MANAGER</h2>

<div id = "shopmanager"></div>


<h2 style = "text-align: center;">PATIENTS</h2>


<div id = "patients"></div>


<?php include ('../view/footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/manageuser.js"></script>




</body>
</html>