<?php
   $string = file_get_contents("../model/sales.model.json");
   $sales = json_decode($string, true);


$total = 0;
   foreach ($sales as $key => $value) {
      $total += $value['orderTotal'];
   
  }

?>