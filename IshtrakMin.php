<?php
session_start();
if(!isset( $_SESSION["Email"]))
{
   header("location:login_Form.php");
}
include_once("header.php");
include_once("Student.php");
$studentObj=new Student();
$id=$_SESSION["id"];
$studentObj->getById($id);
?>
<body>  
   <?php
   echo "welcome ".$_SESSION["Name"]."#".$_SESSION["id"];
   ?>

<br>
<br>
<form action="school_Is_CTRL.php"> <div>
<button  class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Ishtrak SCHOOL </button>
</form>
<br>
<br>
<br>
<?php
if($studentObj->schoolFees!="None")
{
    
 ?>
    <form action="Gym_Is_CTRL.php"> <div>
<button  class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Ishtrak Gym </button>
</form>

<?php
}
?>

<br>
<br>
<br>
<form action="IshtrakMin.php"> <div>
<button  class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Ishtrak bus </button>
</form>
<br>
<br>
<br>

</body>


<?php
include_once("footer.php");
?>