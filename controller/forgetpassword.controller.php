<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  require("../model/db.php");

    $password = $email = $repassword = "";

    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $json = file_get_contents('php://input');
    // Converts it into a PHP object 
    $data = json_decode($json, true);
    // var_dump($data);

    $email = sanitize($data["email"]?? "");
    $password = sanitize($data["password"]?? "");
    $repassword = sanitize($data["repassword"]?? "");
    // echo $email;
    $isValidate = true;
    if ($email == "") {
    echo "email is required";
    $isValidate = false;
    }
    if ($password == "") {
    echo "password is required";
    $isValidate = false;
    }
    if ($repassword == "") {
    echo "repassword is required";
    $isValidate = false;
    }






    if ($password != $repassword) {
        echo "Password and Re-Password are not same";
        $isValidate = false;
    } 
    if ($isValidate) {
    //update to database prepare statement
    $sql = "UPDATE admin SET password = ? WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $password, $email);
    $stmt->execute();
    
      if ($stmt->affected_rows > 0) {
        echo "success";
      } else {
        echo "email not found";
      }
    $stmt->close();
    $conn->close();
    
    }


  }else{
    throw new ErrorException("unknown request");
  }
?>