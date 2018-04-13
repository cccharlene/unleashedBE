<?php namespace App\Libraries;


class Area
{

  function PHcompliance()
    {
        $edge = rand(1, 100);
        $ppmc = rand(1, 100);
        $alm = rand(1, 100);
        $ldsm = rand(1, 100);

        return $status = array("edge"=>$edge, "ppmc"=>$ppmc, "alm"=>$alm, "ldsm"=>$ldsm);
    }

  function POcompliance()
  {
        $edge = rand(1, 100);
        $ppmc = rand(1, 100);
        $alm = rand(1, 100);
        $ldsm = rand(1, 100);

        return $status = array("edge"=>$edge, "ppmc"=>$ppmc, "alm"=>$alm, "ldsm"=>$ldsm);
  }

  function generate()
  {
        $ph = $this->PHcompliance();
        $po = $this->POcompliance();

        $finalArr = array("PH"=> $ph, "PO"=> $po);
        echo json_encode($finalArr);
  }

}//Area
