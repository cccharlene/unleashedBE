<?php namespace App\Libraries;

class Radar
{

  function windDirection(){
		$windDirection = [];

		for($i=0; $i<15; $i++){
			$num = rand(1,300);
			array_push($windDirection, $num);
		}

		return $windDirection;
	}

	function windSpeed(){
		$windSpeed = [];

		for($i=0; $i<15; $i++){
			$num = rand(1,20);
			array_push($windSpeed, $num);
		}

		return $windSpeed;
	}


	function generate(){
		$wD = $this->windDirection();
		$wS = $this->windSpeed();
		$windDataJson = [];

		for($i=0; $i<sizeof($wD); $i++){
			array_push($windDataJson, [$wD[$i], $wS[$i]]);
		}

		echo json_encode($windDataJson);
	}

}//Radar
