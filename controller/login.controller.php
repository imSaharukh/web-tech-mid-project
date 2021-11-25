<?php

// Start the session
session_start();

// var_dump($_POST);

$username = $password = "";
// var_dump($_POST);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // takes raw data from the request 
  $json = file_get_contents('php://input');
  // Converts it into a PHP object 
  $data = json_decode($json, true);



  $username = validate($data["username"]);
  $password = validate($data["password"]);
}

function validate($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$isValidate = true;
if ($username == "") {
  echo "username is required <br>";
  $isValidate = false;
}
if ($password == "") {
  echo "password is required <br>";
  $isValidate = false;
}

if ($isValidate) {
  require("../model/db.php") ;

    $sql = "SELECT * FROM admin where username = ? and password = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $username, $password);


    $stmt->execute();
    $result = $stmt->get_result();
    $isLogin = false;
    if ($result->num_rows > 0) {
    // echo "Login Successful <br>";

    $user = $result->fetch_assoc();


    // echo "<h1>successfully loggedin</h1> <br>";
    setcookie("user", json_encode($user), time() + (86400 * 30) , "/",); 
    // var_dump($value);
    $_SESSION["username"] = $user['username'];


    // header("location: ../view/admin.view.php");
    echo '{"status": "true", "message":""}';


    }else{

      echo '{"status": "false", "message":"username or password is incorrect"}';
      // echo "username or password is incorrect";
    }
    $conn->close();

}
