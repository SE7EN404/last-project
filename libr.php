<?php 
include_once("filema.php");
include_once("user1.php");
include_once("book.php");

class libr extends user1
{
   public $book;
    function __construct()
    {
      $this->book=new book();
      $this->fileMa=new Filemanage();
      $this->fileMa->Separator="~";
      $this->fileMa->filename="libr.txt";


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
                  return true;
              }
              $i++;
      }
    }

    function addBook($name,$type,$amount,$img)
    {
        $this->book->name=$name;
        $this->book->img=$img;
        $this->book->Tybe=$type;
        $this->book->amount=$amount;
        $this->book->store();

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
    function store()
    {
      $t=new libr();
      $rec=$this->id=$this->fileMa->getLastId()+74;
      $rec=$this->id.$this->fileMa->Separator.$this->name.$this->fileMa->Separator.$this->Email.$this->fileMa->Separator.$this->password;
      $this->fileMa->storeRecordinFile($rec);
    }
    function getById($id)
    {
      $t=new libr;
      $rec=$this->fileMa->getrecordById($id);
      $arrayline=explode($this->fileMa->Separator,$rec);
      $t->id=$arrayline[0];
      $t->name=$arrayline[1];
      $t->Email=$arrayline[2];
      $t->password=$arrayline[3];
      return $t;
    }
    function Delete($id)
    {
        $rec=$this->fileMa->getrecordById($id);
        $this->fileMa->delet($rec);
  
    }
    
}

$obj=new libr();
/*$obj->name="memo";  
$obj->Email="memo@yahho.com";
$obj->password="4586";
$obj->store();
echo $obj->Email;*/

/*$obj=$obj->getById(74);
echo $obj->name;*/
/*
$array=$obj->listAll();
echo $array[3]->name;
*/
?>