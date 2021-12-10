<?php

    require('../model/db.php');

    $users = array();



    //admin
    $sql = "SELECT * FROM admin;";
    $result = mysqli_query($conn, $sql);
    $result = $conn->query($sql);

    $admins = array();
    while($row = $result->fetch_assoc()) {
        $admin = array( 
            "firstName" => $row["firstName"], 
            "lastName" => $row["lastName"],
            "username" => $row["username"],
            "password" => $row["password"],
            "email" => $row["email"],
        );
        array_push($admins, $admin);
    }
    array_push($users, array("admins" => $admins));


    //Doctors
    $sql = "SELECT * FROM doctor;";
    $result = mysqli_query($conn, $sql);
    $result = $conn->query($sql);

    $doctors = array();
    while($row = $result->fetch_assoc()) {
        $doctor = array( 
            "firstName" => $row["firstName"],
            "lastName" => $row["lastName"],
            "gender" => $row["gender"],
            "address" => $row["address"],
            "degree" => $row["degree"],
            "visitingFee" => $row["visitingFee"],
            "department" => $row["department"],
            "regnumber" => $row["regnumber"],
            "id" => $row["id"],

        );
        array_push($doctors, $doctor);
    }
    array_push($users, array("doctors" => $doctors));


    //supershop
    $sql = "SELECT * FROM shopmanager;";
    $result = mysqli_query($conn, $sql);
    $result = $conn->query($sql);

    $shopmanager = array();
    while($row = $result->fetch_assoc()) {
        $supershop = array( 
            "firstName" => $row["firstName"],
            "lastName" => $row["lastName"],
            "address" => $row["address"],
            "phone" => $row["phone"],
            "licenseNumber" => $row["licenseNumber"],
        );
        array_push($shopmanager, $supershop);
    }
    array_push($users, array("shopmanager" => $shopmanager));


    //Patients
    $sql = "SELECT * FROM patient;";
    $result = mysqli_query($conn, $sql);
    $result = $conn->query($sql);

    $patients = array();
    while($row = $result->fetch_assoc()) {
        $patient = array( 
            "id" => $row["id"],
            "firstName" => $row["lastName"],
            "age" => $row["age"],
            "address" => $row["address"],
            "phone" => $row["phone"],
            "email" => $row["email"],
        );
        array_push($patients, $patient);
    }
    array_push($users, array("patients" => $patients));


    echo json_encode($users);

?>