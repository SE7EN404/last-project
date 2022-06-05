<?php 
include_once("decoBeverage.php");
include_once("Student.php");

class Gym extends deco
{
public $b;
    
function __construct($b)
{
    $this->b=$b;

}
	function ishtrak() 
    {
        return $this->b->ishtrak().",Gym";
	}
}
/*$obj=new Student();
$obj=new Gym($obj);
echo $obj->ishtrak()*/
/*$obj=new Gym($obj);
$arrayAdons=$obj->ishtrak();

echo $arrayAdons;
echo"<br>";

$arrayline=explode("~",$arrayAdons);
for($i=0;$i<count($arrayline);$i++)
{
  echo $arrayline[$i];
  echo"<br>";
}
*/

?>