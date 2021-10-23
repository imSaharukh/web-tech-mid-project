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
    // var_dump($_POST);
    $username = sanitize($_POST["username"] ?? "");
    $password = ($_POST["password"]?? "");
    $firstName = sanitize($_POST["firstName"]?? "");
    $lastName = sanitize($_POST["lastName"]?? "");
    $email = sanitize($_POST["email"]?? "");

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
  
  
    $array = array('firstName' => $firstName,'lastName' => $lastName,'username'=>$username,'password'=>$password,"email" => $email);
    array_push($existingData, $array);
    
    $fp = fopen('../model/admin.model.json', 'w');
    fwrite($fp, json_encode($existingData, JSON_PRETTY_PRINT));  
    fclose($fp);

    echo "Successfully added";

  




}else{
    echo "Please fill all the fields";
      // sleep(2);
    // header("Location: ../view/admin.view.php");

}
}else{
    header("Location: ../index.php");
    }


?>
