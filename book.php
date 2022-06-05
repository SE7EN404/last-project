<?php
include_once("filema.php");
class book
{
 public $id;
 public $name;
 public $amount;
 public $Tybe;
 public $img;
 public $fileMa;
  function __construct()
  {

    $this->fileMa=new Filemanage();
    $this->fileMa->Separator="~";
    $this->fileMa->filename="book.txt";
    
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
    $rec=$this->id.$this->fileMa->Separator.$this->name.$this->fileMa->Separator.$this->Tybe.$this->fileMa->Separator.$this->amount.$this->fileMa->Separator.$this->img;
    $this->fileMa->storeRecordinFile($rec);

  }
  function getById($id)
  {
    $t=new book();
    $rec=$this->fileMa->getrecordById($id);
    $arrayline=explode($this->fileMa->Separator,$rec);
    $t->id=$arrayline[0];
    $t->name=$arrayline[1];
    $t->Tybe=$arrayline[2];
    $t->amount=$arrayline[3];
    $t->img=$arrayline[4];
    return $t;
  }
  function Delete($id)
  {
      $rec=$this->fileMa->getrecordById($id);
      $this->fileMa->delet($rec);

  }
 
}

/*$new=new book();
$new->name="alktaya";
$new->amount=10;
$new->Tybe="historical";
$new->img="dsadas";
$new->store();



/*$my=$new->getById(1);
echo $my->name;
*/
/*$array=$new->listAll();
echo $array[1]->id*/
?>