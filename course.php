<?php
include_once("filema.php");
class course 
{
  public $fileMa;
    public $id;
    public $name;
    public $courseWork;
    public $FinalExam;

    function __construct()
    {
        $this->fileMa=new Filemanage();
        $this->fileMa->Separator="~";
        $this->fileMa->filename="course.txt";

    }
    function listAll()
    {
      //btrga3 array every cell in it mn no3 objict elly rage3 mn getbyId
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
  
    function getById($id)
    {
       $t=new course;
       $rec=$this->fileMa->getrecordById($id);
       $arrayline=explode($this->fileMa->Separator,$rec);
       $t->id=$arrayline[0];
       $t->name=$arrayline[1];
       $t->courseWork=$arrayline[2];
       $t->FinalExam=$arrayline[3];
       return $t;
    }
    function store()
    {
       //addd
  
       $this->id=$this->fileMa->getLastId()+1;
       $rec=$this->id.
       $this->fileMa->Separator.$this->name.
       $this->fileMa->Separator.$this->courseWork.
       $this->fileMa->Separator.$this->FinalExam;
       $this->fileMa->storeRecordinFile($rec);
    }
    function Delete($id)
    {
        $rec=$this->fileMa->getrecordById($id);
        $this->fileMa->delet($rec);
  
    }

}
/*$new= new course();
$newArray=$new->listAll();
echo $newArray[2]->FinalExam;*/
?>  