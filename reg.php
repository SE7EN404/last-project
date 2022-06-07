<?php 

include_once("filema.php");

class reg
{
    public $fileMa;
    public $id;
    public $studentId;
    public $adminId;
    public $date;
    public $time;
    function __construct()
    {

        $this->fileMa=new Filemanage();
        $this->fileMa->Separator="~";
        $this->fileMa->filename="reg.txt";
    }


    function store()
  {
     //addd

     $this->id=$this->fileMa->getLastId()+1;
     $rec=$this->id.
     $this->fileMa->Separator.$this->adminId.
     $this->fileMa->Separator.$this->studentId.
     $this->fileMa->Separator.$this->date.
     $this->fileMa->Separator.$this->time;
    
     $this->fileMa->storeRecordinFile($rec);
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
     $t=new reg;
     $rec=$this->fileMa->getrecordById($id);
     $arrayline=explode($this->fileMa->Separator,$rec);
     $t->id=$arrayline[0];
     $t->studentId=$arrayline[1];
     $t->adminId=$arrayline[2];
     $t->date=$arrayline[3];
     $t->time=$arrayline[4];

     return $t;
  }
  function Delete($id)
  {
      $rec=$this->fileMa->getrecordById($id);
      $this->fileMa->delet($rec);

  }
}
/*$new=new reg;
$new->studentId='55';
$new->adminId="2145";
$new->date=date("Y/m/d");
$new->time= date("h:i:sa");
$new->store()*/
?>