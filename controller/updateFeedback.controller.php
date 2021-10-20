<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $id = validate($_POST["username"]);
    // $password = validate($_POST["password"]);
    // var_dump($_POST);

    $existingData = json_decode(file_get_contents("../model/feedback.model.json",true),true);
      $updated = false;
    foreach($existingData as $feedback => $x){
        if($x["id"] == $_POST["id"]) {
            echo "found";

            // $existingData[$x]["checked"] = true;
            //update the checked value
            $existingData[$feedback]["checked"] = true;
            
            $updated = true;
            break;
    }

 

}


var_dump($existingData);
$fp = fopen('../model/feedback.model.json', 'w');
fwrite($fp, json_encode($existingData, JSON_PRETTY_PRINT));  
fclose($fp);

if($updated){
    header("Location: ../view/feedback.view.php");
}else{
    echo "Error";

}
    // array_push($existingData, $array);
    



  }else{
    header("Location: ../../index.php");
  }

?>