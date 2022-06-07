<?php 
session_start();
if( $_SESSION["Email"]!="Admin")
{
   header("location:login_Form.php");
}
include_once("Student.php");
include_once("Admin.php");
include_once("reg.php");
include_once("reg_details.php");

include_once("course.php");
$selected=$_REQUEST["courseSELC"];
/*foreach($selected as $item)
{
    $k=new course;
    $k->Delete($item);
}
//exit(0);*/

////////////
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

$OBJJ=new Student();
$IDD=$OBJJ->fileMa->getLastId();
$reg = new reg;
$reg->adminId= $_SESSION["id"];
$reg->date=date("Y/m/d");
$reg->time= date("h:i:sa");
$reg->studentId=$IDD;
$AdminX->addReg($reg);
//////////Addding reegdetailsssssssss
$regObjj=new reg();
$regIDD=$regObjj->fileMa->getLastId();
foreach($selected as $item)
{
$regDetailsObj=new regdetails();
$regDetailsObj->regid=$regIDD;
$regDetailsObj->courseid=$item;
$AdminX->addReg($regDetailsObj);
}

 header("location: readStudent.php");

}
else
{ 
   echo " Theeeeeeeeeeeeeeee student already exist";
   header("location:readStudent.php");
}


?>