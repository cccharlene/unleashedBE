<?php namespace App\Libraries;

class Bar
{

  function randomNov(){
		$dd = rand(1, 100);
		$prod = rand(1, 100);
		$sla = rand(1, 100);
		$av = rand(1, 100);

		$nov = array("dd"=> $dd, "prod"=> $prod, "sla"=>$sla, "avail"=>$av);
		return $nov;
	}

	function randomOct(){
		$dd = rand(1, 100);
		$prod = rand(1, 100);
		$sla = rand(1, 100);
		$av = rand(1, 100);

		$oct = array("dd"=> $dd, "prod"=> $prod, "sla"=>$sla, "avail"=>$av);
		return $oct;
	}

	function randomSep(){
		$dd = rand(1, 100);
		$prod = rand(1, 100);
		$sla = rand(1, 100);
		$av = rand(1, 100);

		$sep = array("dd"=> $dd, "prod"=> $prod, "sla"=>$sla, "avail"=>$av);
		return $sep;
	}

	function randomX(){
		$xLabel = array("Nov 2016", "Oct 2016", "Sep 2016");
		$x = array_rand($xLabel);

		return $xLabel[$x];
	}

	function generate(){
		$arr1 = $this->randomNov();
		$arr2 = $this->randomOct();
		$arr3 = $this->randomSep();

		$finalArr = array("Nov"=>$arr1, "Oct"=>$arr2, "Sep"=>$arr3);

		echo json_encode($finalArr);
		// return randomX();
	}

}//Pie
