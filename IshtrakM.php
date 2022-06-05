<?php 
include_once("beverage.php");   
include_once("Student.php");

class madrasa extends beveragee
{
    public $b;
    
function __construct($b)
{
    $this->b=$b;

}
	
	function ishtrak()
     {
        return $this->b->ishtrak()."School";

	}
}
/*$obj=new Student();
$obj=new madrasa($obj);

/*for($i=0;$i<count($arrayline);$i++)
{
  echo $arrayline[$i];
}*/

?>