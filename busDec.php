<?php
include_once("decoBeverage.php");
include_once("Student.php");
class bus extends deco
{
	public $b;
    function __construct($b)
    {
     $this->b=$b;
    }

	function ishtrak() 
    {

      return $this->b->ishtrak().",Bus";

	}
}
/*$obj=new Student();
$arrayAdons=$obj->ishtrak();
echo $arrayAdons;
echo"<br>";
echo"<br>";
$obj=new bus($obj);
echo $obj->ishtrak();
echo"<br>";*/

?>