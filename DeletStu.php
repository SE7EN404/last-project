<?php
session_start();
if( $_SESSION["Email"]!="Admin")
{
   header("location:login_Form.php");
}

include_once("Admin.php");
$k=$_REQUEST["STUSELC"];
foreach($k as $item)
{
    $AdminX=new Admin1;
    $AdminX->deletSt($item);
}
header("location: readStudent.php");
?>