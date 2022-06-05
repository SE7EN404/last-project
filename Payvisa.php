<?php

include_once("Ipay.php");
class payvisa implements Ipay
{
 public $paymethod;

 function __construct()
 {
     $this->paymethod="pay by visa";
 }

	function dopay()
    {

      return $this->paymethod;
	}
}

?>