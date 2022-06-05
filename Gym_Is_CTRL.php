<?php
session_start();
if(!isset( $_SESSION["Email"]))
{
   header("location:login_Form.php");
}
$id=$_SESSION["id"];
include_once("Student.php");
include_once("school_Is_CTRL.php");
include_once("GymDec.php");
$id=$_SESSION["id"];
$studentObj=$studentObj->getById($id);
echo $studentObj->id;

?>