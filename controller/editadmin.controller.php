<?php




if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['email'])) {
    $string = file_get_contents("../model/admin.model.json");
    $admins = json_decode($string, true);
    // $admin;
    foreach ($admins as $key => $admin) {
        if ($admin['email'] == $_POST['email']) {
         $admin =    ($admins[$key]);
         break;
        }

    }
// var_dump($admin);
// echo $admin['email'];
    // $admin = json_decode($admin, true);


}
else{
    throw new ErrorException("unknown request");
}

?>