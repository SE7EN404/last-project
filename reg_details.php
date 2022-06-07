<?php 
include_once("filema.php");

class regdetails
{
    public $filename;
    public $id;
    public $regid;
    public $courseid;    

    function __construct()
    {
        $this->fileMa=new Filemanage();
        $this->fileMa->Separator="~";
        $this->fileMa->filename="reg_details.txt";
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

    function store()
    {
       
  
       $this->id=$this->fileMa->getLastId()+1;
       $rec=$this->id.
       $this->fileMa->Separator.$this->regid.
       $this->fileMa->Separator.$this->courseid;
      
       $this->fileMa->storeRecordinFile($rec);
    }


    function getById($id)
  {
     $t=new reg;
     $rec=$this->fileMa->getrecordById($id);
     $arrayline=explode($this->fileMa->Separator,$rec);
     $t->id=$arrayline[0];
     $t->regid=$arrayline[1];
     $t->courseid=$arrayline[2];
     return $t;
  }
  function Delete($id)
  {
      $rec=$this->fileMa->getrecordById($id);
      $this->fileMa->delet($rec);

  }
}
?>