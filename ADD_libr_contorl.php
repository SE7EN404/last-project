<?php
include_once("libr.php");  
include_once("Admin.php");
$name=$_REQUEST["Name"];
$password=$_REQUEST["Password"];
$Email=$_REQUEST["Email"];
$obj=new libr;
$array=[];
$array=$obj->listAll();
$flag=0;
for($i=0;$i<count($array);$i++)
{
   if($array[$i]->Email==$Email)
   {
    $flag=1;
   }
}
if($flag==0)
{
    $AdminX=new Admin1;
     $AdminX->addlibr($name,$password,$Email);
     header("location:readlibr.php");

}
?>