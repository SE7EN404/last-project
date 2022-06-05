<?php
include_once("header.php");
?>



<?php
echo "<br>";
echo "<br>";
echo "<br>";
include_once("Student.php");
include_once("PayCash.php");
$st=new Student(new paycash());
echo $st->dopay();
?>

<?php
include_once("footer.php");
?>