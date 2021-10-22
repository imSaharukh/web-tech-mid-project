<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seals Report</title>
</head>
<body>
<h1>[Sales Report]</h1>
    <?php include("navbar.componrnt.php") ?>
    <?php require("../controller/salesreport.controller.php") ?>
<br>
<br>
    <h2>Total Sales: <?php echo $total?> TK</h2>
    <br>
<br>
    <?php
    foreach ($sales as $key => $value) {
        echo "<hr>";
        echo "<h4>#".$value['orderId']."</h4>";
        echo "<h3>Date: ".$value['orderDate']." TK</h3>";
        echo "<h3>Order Status: ".$value['orderStatus']." TK</h3>";
        echo "<h3>Total Patent visited: ".$value['medName']."</h3>";
        echo "<h3>Medicine: ".$value['medQuantity']."</h3>";
        echo "<h3>Total: ".$value['orderTotal']." TK</h3>";
    
        // echo "<h3>".$value['email']."</h3>";


        echo "<hr>";
    }

?>
<?php include ('../view/footer.php'); ?>
</body>
</html>