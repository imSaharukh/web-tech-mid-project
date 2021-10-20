<?php
    $string = file_get_contents("../model/admin.model.json");
    $adminData = json_decode($string, true);





    $string = file_get_contents("../model/doctor.model.json");
    $doctorData = json_decode($string, true);




    $string = file_get_contents("../model/patient.model.json");
    $patentData = json_decode($string, true);



    $string = file_get_contents("../model/shopmanager.model.json");
    $shopManagerData = json_decode($string, true);
?>