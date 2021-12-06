<?php


        // $string = file_get_contents("../model/trx.model.json");
        // $doctorsStat = json_decode($string, true);
 

        require("../model/db.php");
    
        // $string = file_get_contents("../model/feedback.model.json");
        // $feedback = json_decode($string, true);
    
        //get feedback from database sql
        $sql = 'SELECT * from trx;';
        $result = $conn->query($sql);
    
    
    
        $trxs = array();
        //return feedback to view
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $trx = array( 
                    "id" => $row["id"],
                    "patent" => $row["patent"],
                    "doctor" => $row["doctor"],
                    "fee" => $row["fee"],
                    "date" => $row["date"]
                );
                array_push($trxs, $trx);
            }
        } else {
            echo "0 results";
        }
    
        echo json_encode($trxs);
    
        
    



?>