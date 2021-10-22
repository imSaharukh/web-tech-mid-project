<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Stats</title>
</head>
<body>
<h1>[Doctor Stats]</h1>
<?php include("navbar.componrnt.php") ?>

<?php require("../controller/doctorstats.controller.php") ?>




<?php

foreach ($doctorstats as $key => $value) {
    echo "<hr>";
    echo "<h2>".$value['doctorName']."</h2>";
    echo "<h3>Last Year Revenue: ".$value['revenueLastYear']." TK</h3>";
    echo "<h3>Last Mounth Revenue: ".$value['revenueLastMounth']." TK</h3>";
    echo "<h3>Total Patent visited: ".$value['totalPatentVisit']."</h3>";
    // echo "<h3>".$value['email']."</h3>";


    echo "<hr>";
}


?>
    <?php include ('../view/footer.php'); ?>
</body>
</html>