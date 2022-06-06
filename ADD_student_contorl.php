<?php 
include_once("Student.php");
include_once("Admin.php");

$name=$_REQUEST["Name"];
$password=$_REQUEST["Password"];
$religion=$_REQUEST["Religion"];
$class=$_REQUEST["ClassName"];
$level=$_REQUEST["Level"];
$Email=$_REQUEST["Email"];
$obj=new Student;
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
     $AdminX->addST($name,$password,$Email,$level,$class,$religion);
     header("location:readStudent.php");

}
else
{ 
   echo " Theeeeeeeeeeeeeeee student already exist";
   header("location:readStudent.php");
}


?>