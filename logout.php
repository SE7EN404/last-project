<?php
session_start();
// remove all session variables
session_unset();
//destroy the seeion

session_destroy();
header("location:login_form.php");
?>