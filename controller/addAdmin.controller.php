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

    require("../model/db.php");

        // takes raw data from the request 
    $json = file_get_contents('php://input');
    // Converts it into a PHP object 
    $data = json_decode($json, true);



    // var_dump($_POST);
    $username = sanitize($data["username"] ?? "");
    $password = ($data["password"]?? "");
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


    //add admin with sql premared statement
    $sql = "INSERT INTO admin (firstName, lastName, username, password, email) VALUES (?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $firstName, $lastName, $username, $password, $email);
    $stmt->execute();
    $stmt->close();
    echo "success";


  




}else{
    echo "Please fill all the fields";
      // sleep(2);
    // header("Location: ../view/admin.view.php");

}
}else{
    header("Location: ../index.php");
    }


?>
