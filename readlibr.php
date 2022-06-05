<?php
include_once("header.php");
if( $_SESSION["Email"]!="Admin")
{
   header("location:login_Form.php");
}
?>

<h1> libr LIST </h1>
<body>
    <form action="Deletlibr.php" method="post">  


<table border=3>
    <tr>
    <td>selcet Del</td> 
         <td>id</td>
         <td>name</td>
         <td>Email </td>
         <td>password</td>
    </tr>

    <?php
     include_once("libr.php");
     $obj=new libr;
     $librArray=[];
     $librArray=$obj->listAll();
     for($i=0;$i<count($librArray);$i++)
     {
         echo "<tr> <td> <input type=checkbox name =libr[] value=".$librArray[$i]->id."> </td>
         <td>". $librArray[$i]->id."</td>
         <td>". $librArray[$i]->name."</td>
         <td>". $librArray[$i]->Email."</td>
         <td>". $librArray[$i]->password."</td></tr>";
     }

    ?>
<tr>
    <td>
     <a href="Add_libr_Form.php">add libr</a>
     <input type="submit" value=" Delet Selected">
    </td>
</tr>
</body>
</table>
</form>
</html>
<?php
echo $_SESSION["mmail"];
include_once("footer.php");
?>