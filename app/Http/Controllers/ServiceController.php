<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\Area;
use App\Libraries\Pie;
use App\Libraries\AreaSpline;
use App\Libraries\Bar;
use App\Libraries\Combi;
use App\Libraries\Line;
use App\Libraries\Logs;
use App\Libraries\Radar;
use App\Libraries\SemiPie;
use App\Libraries\Stack;
use App\Libraries\VBar;

class ServiceController extends Controller
{

  function generateArea()
    {
        try
        {
           $area = new Area();
           return $area->generate();
        }
        catch(Exception $e)
        {
            return array("status"=>"500 Internal Server Error","message"=>$e);
        }
    }

    function generatePie()
    {
        try
        {
           $pie = new Pie();
           return $pie->generate();
        }
        catch(Exception $e)
        {
            return array("status"=>"500 Internal Server Error","message"=>$e);
        }
    }

    function generateAreaSpline()
    {
        try
        {
           $areaSpline = new AreaSpline();
           return $areaSpline->generate();
        }
        catch(Exception $e)
        {
            return array("status"=>"500 Internal Server Error","message"=>$e);
        }
    }

    function generateBar()
    {
        try
        {
           $bar = new Bar();
           return $bar->generate();
        }
        catch(Exception $e)
        {
            return array("status"=>"500 Internal Server Error","message"=>$e);
        }
    }

    function generateCombi()
    {
        try
        {
           $combi = new Combi();
           return $combi->generate();
        }
        catch(Exception $e)
        {
            return array("status"=>"500 Internal Server Error","message"=>$e);
        }
    }

    function generateLine()
    {
        try
        {
           $line = new Line();
           return $line->generate();
        }
        catch(Exception $e)
        {
            return array("status"=>"500 Internal Server Error","message"=>$e);
        }
    }

    function generateLogs()
    {
        try
        {
           $logs = new Logs();
           return $logs->randomLog();
        }
        catch(Exception $e)
        {
            return array("status"=>"500 Internal Server Error","message"=>$e);
        }
    }

    function generateRadar()
    {
        try
        {
           $radar = new Radar();
           return $radar->generate();
        }
        catch(Exception $e)
        {
            return array("status"=>"500 Internal Server Error","message"=>$e);
        }
    }

    function generateSemiPie()
    {
        try
        {
           $semiPie = new SemiPie();
           return $semiPie->generate();
        }
        catch(Exception $e)
        {
            return array("status"=>"500 Internal Server Error","message"=>$e);
        }
    }

    function generateStack()
    {
        try
        {
           $stack = new Stack();
           return $stack->generate();
        }
        catch(Exception $e)
        {
            return array("status"=>"500 Internal Server Error","message"=>$e);
        }
    }

    function generateVBar()
    {
        try
        {
           $vbar = new VBar();
           return $vbar->generate();
        }
        catch(Exception $e)
        {
            return array("status"=>"500 Internal Server Error","message"=>$e);
        }
    }

}
