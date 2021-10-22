<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Admin</title>
</head>
<body>

<?php require("../controller/editadmin.controller.php"); ?>

<!-- <?php var_dump($admin); ?> -->
<h1>[Update Admin]</h1>

<?php include("../view/navbar.componrnt.php"); ?>

<br>


<form action="../controller/handeleditadmin.controller.php" style="display: inline-block;" method="POST">
        <fieldset>
            <legend>Update Admin</legend>
            <label for="firstName">First Name:</label>
            <input type="text" name="firstName" value = '<?php echo $admin["firstName"] ?>'  id="firstName"><br><br>
            <label for="lastName">Last Name:</label>
            <input type="text" name="lastName" value = '<?php echo $admin["lastName"] ?>'  id="lastName"><br><br>
            <label for="username">Username :</label>
            <input readonly="true" type="text" name="username" value = '<?php echo $admin["username"] ?>'  id="username" ><br><br>
            <label for="email">Email             :</label>
            <input type="text" name="email" value = '<?php echo $admin["email"] ?>'  id="email"><br><br>
            <label for="password">Password: </label>
            <!-- <label for="password">(upper/local case mix with num)</label><br> -->
            <input type="password" value = '<?php echo $admin["password"] ?>'  name="password" id="password"><br>
        </fieldset><br>
        <input type="submit" value="Confirm">
    </form>



    <?php include ('../view/footer.php'); ?>
</body>
</html>