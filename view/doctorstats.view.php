<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Statistics</title>
</head>
<body>
<h1>[Doctor Statostics]</h1>
    <?php include("navbar.componrnt.html") ?>
    <?php require("../controller/doctorstats.controller.php") ?>
    <br>
    <br>

    <?php
        echo "<table border = 1>";
        echo  '<th>Patent</th><th>Doctor</th> <th>Fee</th> <th>Date</th>';
       foreach($doctorsStat as $user) {
        echo "<form>";
        echo "<tr>";
        echo "<td>".$user['patent']."</td>";
        echo "<td>".$user['doctor']."</td>";
        echo "<td>".$user['fee']."</td>";
        echo "<td>".$user['date']."</td>";
        echo "</tr>";
        echo "</form>";
       
    }
    echo "</table>";
    ?>


</body>
</html>