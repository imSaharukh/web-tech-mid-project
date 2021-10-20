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
    <form action="../view/admin-form.html" method="post">
        <input type="submit" value="Add New Admin">
    </form>
    <hr>
    <h2>ADMINs</h2>
    <?php
    echo "<table border = 1>";
    echo  '<th>Fist Name</th><th>Last Name</th> <th>username</th> <th>Email</th>';
    foreach($adminData as $user) {
        echo "<form>";
        echo "<tr>";
        echo "<td>".$user['firstName']."</td>";
        echo "<td>".$user['lastName']."</td>";
        echo "<td>".$user['username']."</td>";
        echo "<td>".$user['email']."</td>";
        $email = $user['email'];
        echo "<td> <button type='submit' value='$email'> edit</button> </td>";
        echo "</tr>";
        echo "</form>";
       
    }
    
    echo "</table>";
        ?>

    <h2>Doctors</h2>
        <?php
        echo "<table border = 1>";
        echo  '<th>Fist Name</th><th>Last Name</th> <th>Email</th> <th>Age</th> <th>Degree</th> <th>Department</th> <th>Fee </th>';
        foreach($doctorData as $doc) {
            echo "<form>";
            echo "<tr>";
            echo "<td>".$doc['firstName']."</td>";
            echo "<td>".$doc['lastName']."</td>";
            echo "<td>".$doc['email']."</td>";
            echo "<td>".$doc['age']."</td>";
            echo "<td>".$doc['degree']."</td>";
            echo "<td>".$doc['department']."</td>";
            echo "<td>".$doc['visitingFee']."</td>";
            $email = $doc['email'];
            echo "<td> <button type='submit' value='$email'> edit</button> </td>";
            echo "</tr>";
            echo "</form>";
        
        }
        
        echo "</table>";
            ?>


<h2>Patients</h2>
        <?php
        echo "<table border = 1>";
        echo  '<th>First Name</th><th>Last Name</th> <th>email</th><td>Age</th><td>Gender</td><td>Address<td>';
        foreach($patentData as $doc) {
            echo "<form>";
            echo "<tr>";
            echo "<td>".$doc['firstName']."</td>";
            echo "<td>".$doc['lastName']."</td>";
            echo "<td>".$doc['email']."</td>";
            echo "<td>".$doc['age']."</td>";
            echo "<td>".$doc['gender']."</td>";
            echo "<td>".$doc['address']."</td>";
            $email = $doc['email'];
            echo "<td> <button type='submit' value='$email'> edit</button> </td>";
            echo "</tr>";
            echo "</form>";
        
        }
        
        echo "</table>";
            ?>


<h2>Shop Manager</h2>
        <?php
        echo "<table border = 1>";
        echo  '<th>First Name</th><th>Last Name</th> <th>email</th><td>phone</th><td>address</td><td>licenseNumber<td>';
        foreach($shopManagerData as $doc) {
            echo "<form>";
            echo "<tr>";
            echo "<td>".$doc['firstName']."</td>";
            echo "<td>".$doc['lastName']."</td>";
            echo "<td>".$doc['email']."</td>";
            echo "<td>".$doc['phone']."</td>";
            echo "<td>".$doc['address']."</td>";
            echo "<td>".$doc['licenseNumber']."</td>";
            $email = $doc['email'];
            echo "<td> <button type='submit' value='$email'> edit</button> </td>";
            echo "</tr>";
            echo "</form>";
        
        }
        
        echo "</table>";
            ?>

   
</body>
</html>