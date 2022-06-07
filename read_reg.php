<?php
include_once("header.php");
if( $_SESSION["Email"]!="Admin")
{
   header("location:login_Form.php");
}
?>

<h1> registrations LIST </h1>
<body>
     


<table border=3>
    <tr>
  
         <td>id</td>
         <td>Admin id</td>
         <td>student id </td>
         <td>date</td>
         <td>time</td>

    </tr>

    <?php
     include_once("reg.php");
     $obj=new reg;
     $regArray=[];
     $regArray=$obj->listAll();
     for($i=0;$i<count($regArray);$i++)
     {
         echo "<tr> 
         <td>". $regArray[$i]->id."</td>
         <td>". $regArray[$i]->adminId."</td>
         <td>". $regArray[$i]->studentId."</td>
         <td>". $regArray[$i]->date."</td>
         <td>". $regArray[$i]->time."</td></tr>";
     }

    ?>

</body>
</table>

</html>
<?php
echo $_SESSION["mmail"];
include_once("footer.php");
?>