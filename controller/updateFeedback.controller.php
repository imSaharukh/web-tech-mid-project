<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  include("../model/db.php");



    //get post request
    $json = file_get_contents('php://input');
      // Converts it into a PHP object 
    $data = json_decode($json, true);

    if(!isset($data["id"])){
        echo "id is not set";
    }
    // echo $data["id"];

    //update feedback in the database with prepared statement
    $sql = "UPDATE feedback SET checked = 1 WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $data["id"]);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    echo "success";
}
else{
    echo "error";
}




?>