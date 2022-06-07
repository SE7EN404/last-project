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
         <td>registration id</td>
         <td>Course ID</td>
    </tr>
    <?php
     include_once("reg_details.php");
     $obj=new regdetails();
     $regArray=[];
     $regArray=$obj->listAll();
     for($i=0;$i<count($regArray);$i++)
     {
         echo "<tr> 
         <td>". $regArray[$i]->id."</td>
         <td>". $regArray[$i]->regid."</td>
         <td>". $regArray[$i]->courseid."</td></tr>";
     }

    ?>

</body>
</table>

</html>
<?php
echo $_SESSION["mmail"];
include_once("footer.php");
?>