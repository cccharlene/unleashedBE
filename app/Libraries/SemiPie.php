<?php namespace App\Libraries;

class SemiPie
{

  function randomHealth(){
		$g = rand(0, 50); //half pie
		$r = rand(0, 100);
		$y = rand(0, 100);

		return $status = array("green"=>$g, "red"=>$r, "yellow"=>$y);
	}

	function generate(){
		$finalArr = $this->randomHealth();
		echo json_encode($finalArr);
	}

}//SemiPie
