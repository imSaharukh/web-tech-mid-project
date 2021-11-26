<?php


require("../model/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['email'])) {
    // $string = file_get_contents("../model/admin.model.json");
    // $admins = json_decode($string, true);


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



    // foreach ($admins as $key => $admin) {
    //     if ($admin['email'] == $_POST['email']) {
    //      $admin =    ($admins[$key]);
    //      break;
    //     }

    // }
}
else{
    throw new ErrorException("unknown request");
}

?>