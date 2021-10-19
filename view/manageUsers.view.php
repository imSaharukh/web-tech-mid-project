<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <h1>[Users]</h1>
    <?php include("navbar.componrnt.html") ?>
    <?php include("../controller/users.controller.php") ?>
    <br>
    <br>
    <h2>ADMINs</h2>
    <?php
    echo "<table border = 1>";
    
    foreach($adminData as $user) {
        echo "<tr>";
        echo "<td>".$user['firstName']."</td>";
        echo "<td>".$user['lastName']."</td>";
        echo "<td>".$user['email']."</td>";
    
        echo "</tr>";
       
    }
    
echo "</table>";
    ?>
</body>
</html>