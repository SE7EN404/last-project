<?php
  class Filemanage
  {
      public $filename;
      public $Separator;
  
  
      function delet($record)
      {
        
          $contents=file_get_contents($this->filename);
          $contents=str_replace($record,'',$contents);
          file_put_contents($this->filename,$contents);
          
      }
      function ubdate($record1,$record2)
      {
  //  echo $record1;
    //echo "<br>";
     //echo $record2;
     
        $contents=file_get_contents($this->filename);
        $contents=str_replace($record1,$record2,$contents);
        file_put_contents($this->filename,$contents);
      }
  
     
         function storeRecordinFile($rec)
         {
             
             $myfile=fopen($this->filename,"a+");
              $rec="\r\n".$rec;
             fwrite($myfile,$rec);
             fclose($myfile);
         }
  
  
  
      function read()
      {
      $myfile=fopen($this->filename,"r+");
      while(!feof($myfile))
      {
          $line=fgets($myfile);
          $x=explode($this->Separator,$line);
          echo "<tr>";
          for($i=0;$i<count($x);$i++)
          {
              echo "<td>".$x[$i]."</td>";
          }
          echo "</tr>";
      }
      
      fclose($myfile);
      }
  
  
  
      function getrecordById($ID)
      {
          if (!file_exists($this->filename))
          {
            return 0;
         }
    
        $myfile = fopen($this->filename, "r+") or die("Unable to open file!");
        
        while (!feof($myfile))
         {
            $line = fgets($myfile);
            $ArrayLine = explode($this->Separator, $line);
    
            if ($ArrayLine[0] ==$ID) 
            {
               return $line; 
            }
         }
        return "";
           
      }
      
      function getLastId()
      {
      
          if (!file_exists($this->filename))
            {
              return 0;
          }
      
          $myfile = fopen($this->filename, "r+") or die("Unable to open file!");
          $LastId = 0;
          while (!feof($myfile)) {
              $line = fgets($myfile);
              $ArrayLine = explode($this->Separator, $line);
      
              if ($ArrayLine[0] != "") 
              {
                  $LastId = $ArrayLine[0];
              }
      
          }
          return $LastId;
      }
  
  
  
  }
  /*  <?php
class user1
{    
    public $id;
    public $name;
    public $password;
    public $Email;
    public $fileMa;
	
}
?>  */
?>