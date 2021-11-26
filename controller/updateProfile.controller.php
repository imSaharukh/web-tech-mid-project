<?php
$username = $password = $firstName = $lastName = $email = "";
// var_dump($_POST);


function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // takes raw data from the request 
    $json = file_get_contents('php://input');
    // Converts it into a PHP object 
    $data = json_decode($json, true);
    // var_dump($data);

    // var_dump($_POST);
    $username = sanitize($data["username"] ?? "");
    $password = sanitize($data["password"]?? "");
    $firstName = sanitize($data["firstName"]?? "");
    $lastName = sanitize($data["lastName"]?? "");
    $email = sanitize($data["email"]?? "");

    $isValidate = true;
    if ($username == "") {
    echo "username is required <br>";
    $isValidate = false;
    }

    if ($password == "") {
    echo "password is required <br>";
    $isValidate = false;
    }
    if ($firstName == "") {
    echo "firstName is required <br>";
    $isValidate = false;
    }
    if ($lastName == "") {
    echo "lastName is required <br>";
    $isValidate = false;
    }
    if ($email == "") {
    echo "email is required <br>";
    $isValidate = false;
    }


if ($isValidate) {




    $existingData = json_decode(file_get_contents("../model/admin.model.json",true));
  


    foreach ($existingData as $key => $value) {
        if ($value->username == $username) {
            $existingData[$key]->firstName = $firstName;
            $existingData[$key]->lastName = $lastName;
            $existingData[$key]->password = $password;
            $existingData[$key]->email = $email;
        }
    }
    //  var_dump($existingData);
    // array_push($existingData, $array);
    
    $fp = fopen('../model/admin.model.json', 'w');
    fwrite($fp, json_encode($existingData, JSON_PRETTY_PRINT));  
    fclose($fp);

    echo "success";
    // header("refresh:3; url= logout.controller.php");

  




}else{
    echo "Please fill all the fields";
      // sleep(2);
    // header("Location: ../view/admin.view.php");

}
}else{
    header("Location: ../index.php");
    }


?>
