<?php
include_once("header.php");
?>

<?php
include_once("Student.php");
include("payvisa.php");

echo "<br>";
echo "<br>";
echo "<br>";

$St=new Student(new payvisa());

echo $St->dopay();

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>


<?php
include_once("footer.php");
?>