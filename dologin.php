<?php 
include_once("libr.php");
include_once("Student.php");
include_once("Admin.php");
session_start();
$Email=$_REQUEST["Email"];
$password=$_REQUEST["password"];
$studentObj=new Student($ID);
$state=$studentObj->login($Email,$password);
$admin=new Admin1;
$stateA=$admin->login($Email,$password);
$libr=new libr;
$statelibr=$libr->login($Email,$password);
if($statelibr==true)
{
    $_SESSION["mmail"]=$Email;
    $_SESSION["Email"]="libr";
    header("location:librMin.php");
}
 
if($state==true)
{
    $array=$studentObj->listAll();
    for($i=0;$i<count($array);$i++)
    {
        if($array[$i]->Email==$Email)
        {
               $_SESSION["id"]=$array[$i]->id;
               $_SESSION["Name"]=$array[$i]->name;
        }
    }
    $_SESSION["Email"]="student";
    header("location: StudentMin.php");
}
if($stateA==true)
{
    $_SESSION["mmail"]=$Email;
    $_SESSION["Email"]="Admin";
    header("location: adminMin.php");
}
if($stateA==false&&$state==false&&$statelibr==false)
{
    header("Location:login_form.php");
}



?>