<?php namespace App\Libraries;

class Stack
{

  function randomDec()
  {
    $decimal = array(0.03,0.10,0.10,0.12,0.12,0.13,0.51,0.61,0.71,0.81,0.91,0.93,0.94,0.95,0.96,1.25,1.30,1.35,1.40,1.45,1.48,1.49,1.50,1.55,
      1.80,1.90,2,2.10,2.15,2.20,2.50);
    $index = array_rand($decimal, 1);
    return $decimal[$index];
  }

  function generate()
  {
    $finalArr = [];
    for($i=0; $i<25; $i++){
      $temp = $this->randomDec();
      array_push($finalArr, $temp);
    }

    echo json_encode($finalArr);
  }

}//Stack
