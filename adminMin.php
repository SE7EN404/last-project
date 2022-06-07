<?php
include_once("header.php");
?>


<form action="readStudent.php"> <div><button  class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Students </button> </div>
</form>
<br>
<br>    
<form action="readlibr.php"> <div><button  class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">librarian </button> </div>
</form>
<br>
<br>
<form action="read_reg.php"> <div><button  class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">registrations LIST </button> </div>
</form>
<br>
<br>
<form action="read_reg_D.php"> <div><button  class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">registrations Details LIST </button> </div>
</form>

<?php
include_once("footer.php");
?>