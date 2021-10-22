<?php


// var_dump($_POST);

if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['email'])) {
    $string = file_get_contents("../model/doctor.model.json");
    $docs = json_decode($string, true);
    // $admin;
    $doc;
    // echo "email: " . $_POST['email'];
    foreach ($docs as $key => $d) {
        if ($d['email'] == $_POST['email']) {
         $doc =    ($docs[$key]);
         break;
        }

    }
// var_dump($doc);
// echo $admin['email'];
    // $admin = json_decode($admin, true);


}
else{
    throw new ErrorException("unknown request");
}

?>