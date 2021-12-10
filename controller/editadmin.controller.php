<?php


require("../model/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['email'])) {
   

    $sql = "SELECT * FROM user where username = '" . $_POST['username'] . "'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $admin = $row;
        }
    } else {
        echo "0 results";
    }
}
else{
    throw new ErrorException("unknown request");
}

?>