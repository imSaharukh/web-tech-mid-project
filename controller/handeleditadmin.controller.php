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
    $password = sanitize($data["password"]?? "");
    $firstName = sanitize($data["firstName"]?? "");
    $lastName = sanitize($data["lastName"]?? "");
    $email = sanitize($data["email"]?? "");

    $isValidate = true;
    if ($username == "") {
    echo "username is required \n";
    $isValidate = false;
    }

    if ($password == "") {
    echo "password is required  \n";
    $isValidate = false;
    }
    if ($firstName == "") {
    echo "firstName is required  \n";
    $isValidate = false;
    }
    if ($lastName == "") {
    echo "lastName is required  \n";
    $isValidate = false;
    }
    if ($email == "") {
    echo "email is required  \n";
    $isValidate = false;
    }


if ($isValidate) {


    //update to database prepare statement
    $sql = "UPDATE admin SET username = ?, password = ?, firstName = ?, lastName = ? WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $username, $password, $firstName, $lastName, $email);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    echo "success";

  




}else{
    echo "Please fill all the fields";
      // sleep(2);
    // header("Location: ../view/admin.view.php");

}
}elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    //GET admin from DB prepared statement

    if (!isset($_GET["username"])) {
        die ("username is required");
    }

    $username = $_GET["username"];




    require("../model/db.php");

    $sql = "SELECT * FROM admin where username = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $username);


    $stmt->execute();
    $result = $stmt->get_result();
    $isLogin = false;
    if ($result->num_rows > 0) {

    $user = $result->fetch_assoc();



 

    echo json_encode($user);


    }else{

      echo '{"status": "false", "message":"username or password is incorrect"}';

    }
    $conn->close();
}


else{
    header("Location: ../index.php");
    }


?>
