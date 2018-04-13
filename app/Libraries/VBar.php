<?php namespace App\Libraries;

class VBar
{

  function randomNum(){
    $temp = rand(1,12);
    return $temp;
  }

  function generate(){
    $finalArr = [];
    for($i=0; $i<12; $i++){
      $temp = $this->randomNum();
      array_push($finalArr, $temp);
    }

    echo json_encode($finalArr);
  }

}//VBar
