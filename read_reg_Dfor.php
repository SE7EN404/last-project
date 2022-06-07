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
     include_once("reg.php");
     $id= $_GET["Id"];
     echo $id;
     $obj=new reg();
     $obj=$obj->getById($id);
   //echo "objjjjjj";
   //echo $obj->studentId;
   $regArray=$obj->Details;
   //echo "course";
      //echo $regArray[0]->courseid;
     for($i=0;$i<count($obj->Details);$i++)
     {
        echo "<tr> 
        <td>".$obj->Details[$i]->id."</td>
        <td>". $obj->Details[$i]->regid."</td>
        <td>". $obj->Details[$i]->courseid."</td></tr>";



     }

    ?>

</body>
</table>

</html>
<?php
echo $_SESSION["mmail"];
include_once("footer.php");
?>