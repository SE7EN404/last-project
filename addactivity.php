<?php
echo "the activity name you fill is ".$_REQUEST["activityName"];
include_once("function.php");
$actObj=new teacher();
$actObj->Name=$_REQUEST["usename"];
$actObj->email=$_REQUEST["email"];
$actObj->password=$_REQUEST["password"];
$actObj->activitysub=$_REQUEST["activitySub"];
$actObj->storeData();

header("location: learnn.php");


?>