<?php

// Start the session
session_start();

$username = $password = "";
// var_dump($_POST);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = validate($_POST["username"]);
  $password = validate($_POST["password"]);
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
    echo "Login Successful <br>";

    $user = $result->fetch_assoc();


    echo "<h1>successfully loggedin</h1> <br>";
    setcookie("user", json_encode($value), time() + (86400 * 30) , "/",); 
    // var_dump($value);
    $_SESSION["username"] = $user['username'];


    header("location: ../view/admin.view.php");


    }else{
      echo "username or password is incorrect";
    }
    $conn->close();







  // $string = file_get_contents("../model/admin.model.json");
  // $json_a = json_decode($string, true);
  // // var_dump($json_a);
  // $isLogin = false;
  // // var_dump($json_a["password"]);
  // foreach ($json_a as  $value) {
  //   if ($value["username"] == $username && $value["password"] == $password) {
  //     echo "<h1>successfully loggedin</h1> <br>";
  //     setcookie("user", json_encode($value), time() + (86400 * 30) , "/",); 
  //     // var_dump($value);
  //     $isLogin = true;
  //     break;
  //   }
  // }

  // if (!$isLogin) {
  //   echo "username or password is incorrect";
  // } else {
  //   $_SESSION["username"] = $username;


  //   header("location: ../view/admin.view.php");
  // }
}
