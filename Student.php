<?php
include_once("user1.php");
include_once("filema.php");
include_once("Ipay.php");
include_once("ishtrakM.php");
include_once("GymDec.php");
include_once("busDec.php");
class Student   extends user1 
{
  //public $bus;
  //public $gym;
  //public $schoolFees;
  public $Adons;
   public $Ip;
    public $className;
    public $level;
    public $religion;
    public $SubjArray;
    public $gradesArray;

    function __construct($Ip)
   {  
     
     $this->Ip=$Ip;
     $this->gradesArray=[];
     $this->SubjArray=[];
     $this->fileMa=new Filemanage();
     $this->fileMa->Separator="~";
     $this->fileMa->filename="Student.txt";

  }
  function ishtrak ()
  {

   return $this->Adons;
  
  } 


 
   function dopay()
   {
       return $this->Ip->dopay();
   }
    
  function login($Email,$password)
  {
    $myfile=fopen($this->fileMa->filename,"r+") or die("ba7");
    $i=0;
    while(!feof($myfile))
    {
          $line=fgets($myfile);
            $ArrayLine = explode($this->fileMa->Separator,$line);
            if($ArrayLine[2]==$Email&&$ArrayLine[3]==$password)
            {
                return true;
            }
            $i++;
    }
  }
  
  
  function listAll()
  {
    /
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
 
     $this->id=$this->fileMa->getLastId()+75;
     $rec=$this->id.$this->fileMa->Separator.
     $this->name.$this->fileMa->Separator.$this->Email.
     $this->fileMa->Separator.$this->password.
     $this->fileMa->Separator.$this->level.
     $this->fileMa->Separator.$this->className.$this->fileMa->Separator.$this->Adons.$this->fileMa->Separator.$this->religion;
     $this->fileMa->storeRecordinFile($rec);
  }

  function getById($id)
  {
     $t=new Student;
     $rec=$this->fileMa->getrecordById($id);
     $arrayline=explode($this->fileMa->Separator,$rec);
     $t->id=$arrayline[0];
     $t->name=$arrayline[1];
     $t->Email=$arrayline[2];
     $t->password=$arrayline[3];
     $t->level=$arrayline[4];
     $t->className=$arrayline[5];
     $t->religion=$arrayline[7];
     $t->Adons=$arrayline[6];
     return $t;
  }
  function ubdate()
  {
    $rec=$this->fileMa->getrecordById($this->id);
   
   
    $rec2=$this->id.$this->fileMa->Separator.$this->name.
    $this->fileMa->Separator.$this->Email.
    $this->fileMa->Separator.$this->password.
    $this->fileMa->Separator.$this->level.
     $this->fileMa->Separator.
     $this->className.
     $this->fileMa->Separator.$this->Adons.$this->fileMa->Separator.$this->religion;
     //echo $rec;
     // echo "<br>";
     //echo $rec2;
     //exit(0);
    $this->fileMa->ubdate($rec,$rec2); 
     
  }
  function Delete($id)
  {
      $rec=$this->fileMa->getrecordById($id);
      $this->fileMa->delet($rec);

  }
  /*function ubdate($id)
  {
      $rec=$this->fileMa->getrecordById($id);
      $this->fileMa->ubdate($rec1,$rec2);

  }*/
	/**
	 *
	 * @return mixed
	 */
}









/*$my=$s->getById(2);
echo $my->religion;*/

/*$array=$s->listAll();
         
for($i=0;$i<count($array);$i++)
{
    echo $array[$i]->name;
    echo "<br>";
}*/
/*$s->name="tota";
$s->Email="tota@gmail.com";
$s->password="2565";
$s->level="4";
$s->className="3A";
$s->religion="Muslim";*/
//$new=new Student();
//$new=$new->getById(1051);
//echo $new->bus;
/*$far=new Student();
$far=new madrasa($far);
$far=new bus($far);
$arrayAdons=$far->ishtrak();
$st=new Student();
$st=$st->getById(1250);
$st->Adons=$st->Adons.$arrayAdons;
echo $st->Adons;
exit(0);
$st->ubdate();
*/
/*$st=new Student;
$st=$st->getById(1252);
$st->name="yosif";
$st->ubdate();*/

?>