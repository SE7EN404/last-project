<?php
session_start();
if(!isset( $_SESSION["Email"]))
{
   header("location:login_Form.php");
}
include_once("Student.php");
include_once("ishtrakM.php");

$id=$_SESSION["id"];


//exit(0);
$student=new Student();
$student=new madrasa($student);



$studentObj=new Student();
$studentObj=$studentObj->getById($id);
$studentObj->Adons=$student->ishtrak();
$studentObj->ubdate();

header("location:IshtrakMin.php");


?>