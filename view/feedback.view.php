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
<?php include("navbar.componrnt.php") ?>


<form action="../controller/updateFeedback.controller.php" method="POST">
<?php 

foreach($feedback as $user) {


    echo "<hr>";
    echo "<h3>Doctor: $user[doctorName]</h3>";
    echo "<h3>Patient: $user[patientName]</h3>";
    echo "<h4>Feedback: $user[feedbackMessage]</h4>";
    echo $user["checked"]? "<button disabled='disabled'>Already Checked</button>"  :"<button name='id' type='submit' value='$user[id]'>✅ checked</button>";
    echo "<hr>";

   
}
?>
</form>
<?php include ('../view/footer.php'); ?>
</body>
</html>