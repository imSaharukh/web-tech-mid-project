<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form-Admin</title>
</head>
<body>
    <form action="../controller/addAdmin.controller.php" style="display: inline-block;" method="POST">
        <fieldset>
            <legend>Add New Admin</legend>
            <label for="firstName">First Name:</label>
            <input type="text" name="firstName" id="firstName"><br><br>
            <label for="lastName">Last Name:</label>
            <input type="text" name="lastName" id="lastName"><br><br>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username"><br><br>
            <label for="email">Email             :</label>
            <input type="text" name="email" id="email"><br><br>
            <label for="password">Password: </label>
            <!-- <label for="password">(upper/local case mix with num)</label><br> -->
            <input type="password" name="password" id="password"><br>
        </fieldset><br>
        <input type="submit" value="Confirm">
    </form>

<?php include ('../view/footer.php'); ?>

</body>
</html>