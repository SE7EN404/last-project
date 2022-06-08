<?php
include_once("libr.php");
$name=$_REQUEST["Name"];
$type=$_REQUEST["type"];

var_dump($_FILES);
$target_dir="img/";
$target_file=$target_dir . basename($_FILES["IMG"]["name"]);
if(move_uploaded_file($_FILES["IMG"]["tmp_name"],$target_file))
{
    echo "the file has uploaded .";
}
if($name==''||$type=='')
{

header("location: Add_Book_Form.php");



}
$libr=new libr();
$amount=4;
$libr->addBook($name,$type,$amount,$target_file);
header("location:readBook.php");
?>