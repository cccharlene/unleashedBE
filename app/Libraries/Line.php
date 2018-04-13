<?php namespace App\Libraries;

class Line
{

  function randomDec()
  {
    $decimal = array(0,0.10,0.15,0.20,0.30,0.40,0.50,0.60,0.70,0.80,0.90,1,1.10,1.15,1.20,1.25,1.27,1.29,1.30,1.32,1.35,1.38,1.40,1.42,1.43,
      1.45,1.46,1.47,1.48,1.49,1.50);
    $index = array_rand($decimal, 1);
    return $decimal[$index];
  }

  function generate()
  {
    $finalArr = [];

    for($i=0; $i<31; $i++)
    {
      $temp = $this->randomDec();
      array_push($finalArr, $temp);
    }

    echo json_encode($finalArr);
  }

}//Line
