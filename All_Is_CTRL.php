<?php
session_start();
if(!isset( $_SESSION["Email"]))
{
   header("location:login_Form.php");
}
include_once("Student.php");
include_once("ishtrakM.php");
include_once("GymDec.php");
include_once("busDec.php");
$id=$_SESSION["id"];
$studentX=new Student();
$studentX=$studentX->getById($id);
$student=new Student();

$student=new madrasa($student);

$studentX->Adons=$student->ishtrak();

$student=new bus($student);
$studentX->Adons=$student->ishtrak();

$student=new Gym($student);
$studentX->Adons=$student->ishtrak();


$studentX->ubdate();
header("location:IshtrakMin.php");
?>