<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedbacks</title>
    <?php require("../controller/feedback.controller.php") ?>

</head>
<body>

<h1>[Feedbacks]</h1>
<?php include("navbar.componrnt.html") ?>



<?php 

foreach($feedback as $user) {

    // echo "<td>".$user['firstName']."</td>";
    // echo "<td>".$user['lastName']."</td>";
    // echo "<td>".$user['username']."</td>";
    // echo "<td>".$user['email']."</td>";

    echo "<hr>";
    echo "<h3>Doctor: $user[doctorName]</h3>";
    echo "<h3>Patient: $user[patientName]</h3>";
    echo "<h4>Feedback: $user[feedbackMessage]</h4>";
    echo "<button type='submit'>✅ checked</button>";
    echo "<hr>";

   
}


?>
    
</body>
</html>