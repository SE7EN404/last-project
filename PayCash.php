<?php 
include_once("Ipay.php");
class paycash implements Ipay
{
   public $paymethod;
   function __construct()
   {

    $this->paymethod="pay caash";
   }
	function dopay()
    {
        return $this->paymethod;
	}
}
?>