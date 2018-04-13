<?php namespace App\Libraries;

class AreaSpline
{

  function rOne(){
    $temp = rand(0,20);
    return $temp;
  }

  function rTwo(){
    $temp = rand(20,40);
    return $temp;
  }

  function rThree(){
    $temp = rand(40,60);
    return $temp;
  }

  function generate(){
    $one = [];
    $two = [];
    $three = [];

    for($i=0; $i<7; $i++){
      $temp1 = $this->rOne();
      $temp2 = $this->rTwo();
      $temp3 = $this->rThree();

      array_push($one, $temp1);
      array_push($two, $temp2);
      array_push($three, $temp3);
    }

    echo json_encode(array("one"=>$one, "two"=>$two, "three"=>$three));
  }

}//AreaSpline
