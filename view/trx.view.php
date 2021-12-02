<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Statistics</title>
</head>
<body>
<!-- <h1>[Doctor Statostics]</h1> -->
    <?php include("navbar.componrnt.php") ?>
    <?php require("../controller/trx.controller.php") ?>
    <br>
    <br>

    <?php
        // echo "<table border = 1>";
        // echo  '<th>Patent</th><th>Doctor</th> <th>Fee</th> <th>Date</th>';
       foreach($doctorsStat as $user) {
        echo "<hr>";
        // echo "<form>";
        // echo "<tr>";
        echo "<h3>Patent: ".$user['patent']."</h3>";
        echo "<h3>Doctor: ".$user['doctor']."</h2>";
        echo "<h4>Fee: ".$user['fee']."TK</h4>";
        echo "<h5>DATE: ".$user['date']."</h5>";
        // echo "</tr>";
        // echo "</form>";
        echo "<hr>";
    }
    // echo "</table>";
    ?>

<?php include ('../view/footer.php'); ?>
</body>
</html>