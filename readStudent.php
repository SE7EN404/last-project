<?php
include_once("header.php");
if( $_SESSION["Email"]!="Admin")
{
   header("location:login_Form.php");
}
?>

<h1> Student LIST </h1>
<body>
    <form action="DeletStu.php" method="post">  


<table border=3>
    <tr>
    <td>selcet Del</td> 
        <td>id</td>
<td> student  name</td>
<td>religion</td>
<td>level</td>
<td>class</td>

    </tr>

<?php
include_once("Student.php");
   $obj=new Student;
   $array=[]; 
   $array=$obj->listAll();
   for($i=0;$i<count($array);$i++)
   {
    echo"<tr> <td> <input type=checkbox name =STUSELC[] value=".$array[$i]->id."> </td>
       <td>". $array[$i]->id."</td> 
      <td><a href=ActDetails.php?Id=".$array[$i]->id.">".$array[$i]->name.
      "</a></td> <td>".$array[$i]->religion.
      "</td> <td>".$array[$i]->level.
      "</td>  <td>".$array[$i]->className."</td> </tr>";
   }
?>
<tr>
    <td>
     <a href="Add_student_Form.php">add Student</a>
     <input type="submit" value=" Delet Selected">
    </td>
</tr>
</body>
</table>
</form>
</html>


<?php

include_once("footer.php");
?>