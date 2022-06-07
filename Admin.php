<?php
include_once("filema.php");
include_once("Student.php");
include_once("libr.php");
include_once("user1.php");
 class Admin1 extends user1
 {
   
    
  public $librObj;
  public $studentObj;
 function __construct()
 {
  $this->librObj= new libr;
   $this->studentObj= new Student;
  $this->fileMa=new Filemanage;
  $this->fileMa->Separator="~";
  $this->fileMa->filename="Admin1.txt";
 }
 function getById($id)
  {
     $t=new Admin1;
     $rec=$this->fileMa->getrecordById($id);
     $arrayline=explode($this->fileMa->Separator,$rec);
     $t->id=$arrayline[0];
     $t->name=$arrayline[1];
     $t->Email=$arrayline[2];
     $t->password=$arrayline[3];
     
     return $t;
  }
function listAll()
{
      $ArrayObjects=array ();
      $myfile=fopen($this->fileMa->filename,"r+") or die("mfeshhhhh");
      $i=0;
      while(!feof($myfile))
      {
   
       $line=fgets($myfile);
       $lineArray=explode($this->fileMa->Separator,$line);
        $ArrayObjects[$i]=$this->getById($lineArray[0]);
        $i++;
      }
      return $ArrayObjects;
}
 function addReg($reg)
 {
     $reg->store();
 }
 function addlibr($name,$password,$Email)
 {
       $this->librObj->name=$name;
       $this->librObj->password=$password;
       $this->librObj->Email=$Email;
       $this->librObj->store();

 }
 function deletlibr($id)
 {
     $this->librObj->Delete($id);
 }
 
 function addST($name,$password,$Email,$level,$classN,$Religion)
 {
       $this->studentObj->name=$name;
       $this->studentObj->password=$password;
       $this->studentObj->Email=$Email;
       $this->studentObj->level=$level;
       $this->studentObj->className=$classN;
       $this->studentObj->religion=$Religion;
       $this->studentObj->store();

 }


 function deletSt($id)
    {
        $this->studentObj->Delete($id);
    }
 

 function login($Email,$password)
 {

  
   $myfile=fopen($this->fileMa->filename,"r+") or die("ba7");
   $i=0;
   while(!feof($myfile))
   {
         $line=fgets($myfile);
         
           $ArrayLine = explode($this->fileMa->Separator,$line);
           
           
           if($ArrayLine[2]==$Email&&trim($ArrayLine[3])==$password)
           { 
            /*echo $ArrayLine[2].$Email.$ArrayLine[3].$password;
            exit(0);*/
             
              return true;
           }
           $i++;
           
   }
   return false;
   
 }
 }


// $obj=new Admin1();
 ////$objArray=$obj->listAll();
//echo $objArray[1]->Email;

?>