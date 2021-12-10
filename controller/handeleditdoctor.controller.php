<?php
$visitingFee  = $department = $firstName = $lastName = $email = "";
// var_dump($_POST);


function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // var_dump($_POST);


    require("../model/db.php");

    // takes raw data from the request 
    $json = file_get_contents('php://input');
    // Converts it into a PHP object 
    $data = json_decode($json, true);

    $firstName = sanitize($data["firstName"]?? "");
    $lastName = sanitize($data["lastName"]?? "");

    $visitingFee = sanitize($data["visitingFee"]?? "");
    $department = sanitize($data["department"]?? "");
    $email = ($data["email"]?? "");
    $id = ($data["id"]?? "");


    $isValidate = true;

    // var_dump($_POST);

    if ($firstName == "") {
    echo "firstName is required <br>";
    $isValidate = false;
    }
    if ($lastName == "") {
    echo "lastName is required <br>";
    $isValidate = false;
    }

    if ($visitingFee == "") {
    echo "visitingFee is required <br>";
    $isValidate = false;
    }
    
    if ($department == "") {
        echo "department is required <br>";
        $isValidate = false;
        }
    
    if ($email == "") {
        echo "email is required <br>";
        $isValidate = false;
        }


if ($isValidate) {

    //update doctor to database prepare statement
    // $sql = "UPDATE admin SET username = ?, password = ?, firstName = ?, lastName = ? WHERE email = ?";
    $sql = "UPDATE doctor SET firstName = ?, lastName = ?, visitingFee = ?, department = ? ,email = ? WHERE id = ?";



    $stmt = $conn->prepare($sql);
    // $stmt->bind_param("sssssi", $username, $password, $firstName, $lastName, $email,$id);
    $stmt->bind_param("sssssi", $firstName, $lastName, $visitingFee, $department, $email,$id);
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        echo "success";
    }
    else{
        echo "ERROR: ";
        // echo $id;
        echo $stmt->error;
        // var_dump($stmt);
    }
    $stmt->close();
    $conn->close();
    
  




}else{
    echo "Please fill all the fields";
      // sleep(2);
    // header("Location: ../view/admin.view.php");

}
}elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    //GET admin from DB prepared statement

    if (!isset($_GET["id"])) {
        die ("id is required");
    }

    $id = $_GET["id"];




    require("../model/db.php");

    $sql = "SELECT * FROM doctor where id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);


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
