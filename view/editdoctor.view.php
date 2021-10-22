<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Doctor</title>
</head>
<body>

<?php require("../controller/editdoctor.controller.php"); ?>

<!-- <?php var_dump($admin); ?> -->
<h1>[Update Doctor]</h1>

<?php include("../view/navbar.componrnt.php"); ?>

<br>


<form action="../controller/handeleditdoctor.controller.php" style="display: inline-block;" method="POST">
        <fieldset>
            <legend>Update Doctor</legend>
            <label for="firstName">First Name:</label>
            <input type="text" name="firstName" value = '<?php echo $doc["firstName"] ?>'  id="firstName"><br><br>
            <label for="lastName">Last Name:</label>
            <input type="text" name="lastName" value = '<?php echo $doc["lastName"] ?>'  id="lastName"><br><br>



            <label for="Dept">Dept:</label>
            <input type="text" name="department" value = '<?php echo $doc["department"] ?>'  id="department"><br><br>


            <label for="fee">Fee: </label>

            <input type="fee" value = '<?php echo $doc["visitingFee"] ?>'  name="visitingFee" id="fee"><br>
        </fieldset><br>
        <input type="submit" value="Confirm">
    </form>



    
</body>
</html>