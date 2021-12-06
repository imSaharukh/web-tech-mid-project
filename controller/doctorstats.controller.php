<?php



 

        require("../model/db.php");

        $sql = 'SELECT * from doctorstats;';
        if (isset($_GET['q'])) {
            
            $sql = "SELECT * from doctorstats where doctorName LIKE '%$_GET[q]%';";
        }





    

    
        //get feedback from database sql
        
        $result = $conn->query($sql);
    
    
    
        $stats = array();
        //return feedback to view
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $trx = array( 
                    "id" => $row["id"],
                    "doctorName" => $row["doctorName"],
                    "revenueLastYear" => $row["revenueLastYear"],
                    "revenueLastMounth" => $row["revenueLastMounth"],
                    "totalPatentVisit" => $row["totalPatentVisit"]
                );
                array_push($stats, $trx);
            }
        } else {
            echo "0 results";
        }
    
        echo json_encode($stats);
    
        
    



?>