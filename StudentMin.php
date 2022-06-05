<?php
session_start();
if(!isset( $_SESSION["Email"]))
{
   header("location:login_Form.php");
}
include_once("header.php");

?>
<body>  
   <?php

   echo "welcome ".$_SESSION["Name"]."#".$_SESSION["id"];
   ?>
<br>
<br>
<form action="PayvisaCtrl.php"> <div>
<button  class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Pay by Visa </button>
</form>
<br>
<br>
<form action="PayCashCtrl.php"> <div>
<button  class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Pay by cash </button>
</form>
<br>
<br>
<br>
<form action="IshtrakMin.php"> <div>
<button  class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Ishtrak </button>
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</body>


<?php
include_once("footer.php");
?>