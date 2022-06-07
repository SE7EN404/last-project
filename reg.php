<?php 

include_once("filema.php");
include_once("reg_details.php");

class reg
{
    public $fileMa;
    public $id;
    public $studentId;
    public $adminId;
    public $date;
    public $time;
    public $Details;
    function __construct()
    {
        $this->Details=[];
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
     $t->adminId=$arrayline[1];
     $t->studentId=$arrayline[2];
     $t->date=$arrayline[3];
     $t->time=$arrayline[4];
   $d=new regdetails();
   $dy=[];
   $dy=$d->listAll();
   $k=0;

   for($i=0;$i<count($dy);$i++)
   {
      if($t->id==$dy[$i]->regid)
      {

        $t->Details[$k]=$dy[$i];
        $k++;
      }
            
   }
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
//$new=new reg();
//$new=$new->getById(11);
//echo $new->Details[0]->courseid;
?>