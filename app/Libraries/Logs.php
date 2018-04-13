<?php namespace App\Libraries;

class Logs
{

  function randomLog()
  {
    $xLabel = array("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia orci sed erat dignissim, at commodo neque dignissim.", "Pellentesque nec dui tempor, varius odio in, accumsan ante", "Integer iaculis eleifend laoreet. Fusce at convallis est, a rutrum tellus","Aliquam auctor interdum interdum","Vivamus laoreet, purus quis dignissim scelerisque, libero libero volutpat justo, non condimentum diam magna eu eros. Mauris condimentum tempus erat, sit amet pulvinar ex commodo ac.","Duis sollicitudin, ante a tempor efficitur, quam est sagittis nunc, quis ultricies sapien massa sollicitudin quam.");
    $x = array_rand($xLabel);

    return $xLabel[$x];
  }

}//Logs
