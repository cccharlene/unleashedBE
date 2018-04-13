<?php namespace App\Libraries;

class Combi
{

  function randomCol(){
    $temp = rand(49,216);
    return $temp;
  }

  function randomSpl(){
    $temp = rand(7,26);
    return $temp;
  }

  function generate(){
    //for column data
    $col = [];
    $spl = [];
    $finalArr = array("col"=>"", "spl"=>"");

    for($i=0; $i<12; $i++){
      $temp = $this->randomCol();
      array_push($col, $temp);
    }

    for($j=0; $j<12; $j++){
      $temp = $this->randomSpl();
      array_push($spl, $temp);
    }

    $finalArr["col"] = $col;
    $finalArr["spl"] = $spl;

     echo json_encode($finalArr);
  }

}//Combi
