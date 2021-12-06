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
    $email = sanitize($_POST["email"]?? "");
    $password = sanitize($_POST["password"]?? "");
    $repassword = sanitize($_POST["repassword"]?? "");
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
    if (isValidate) {
    //update to database prepare statement
    $sql = "UPDATE admin SET password = ? WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $password, $email);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    echo "success";
    }

//     $existingData = json_decode(file_get_contents("../model/admin.model.json",true),true);
//       $updated = false;
//     foreach($existingData as $feedback => $x){
//         if($x["email"] == $email) {
//             // echo "found";
//             $existingData[$feedback]["password"] = $password;
            
//             $updated = true;
//             break;
//     }

 

// }


// var_dump($existingData);


if($updated){
    $fp = fopen('../model/admin.model.json', 'w');
    fwrite($fp, json_encode($existingData, JSON_PRETTY_PRINT));  
    fclose($fp);
    echo "Password Updated redirecteing to login page";
    header("refresh:3; url= logout.controller.php");
}else{
    echo "Email not found";

}
  }else{
    throw new ErrorException("unknown request");
  }
?>