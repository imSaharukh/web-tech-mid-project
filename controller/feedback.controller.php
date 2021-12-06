<?php

    require("../model/db.php");

    // $string = file_get_contents("../model/feedback.model.json");
    // $feedback = json_decode($string, true);

    //get feedback from database sql
    $sql = 'SELECT feedback.*, CONCAT(doctor.firstName ," ", doctor.lastName) as doctorName , CONCAT(patient.firstName ," ", patient.lastName) as patientName FROM feedback JOIN doctor ON doctor.id = feedback.doctorId JOIN patient ON patient.id = feedback.patientId;';
    $result = $conn->query($sql);



    $feedbacks = array();
    //return feedback to view
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $feedback = array( 
                "id" => $row["id"],
                "feedback" => $row["feedbackMessage"],
                "doctorName" => $row["doctorName"],
                "patientName" => $row["patientName"],
                "checked" => $row["checked"],
            );
            array_push($feedbacks, $feedback);
        }
    } else {
        echo "0 results";
    }

    echo json_encode($feedbacks);

    

?>