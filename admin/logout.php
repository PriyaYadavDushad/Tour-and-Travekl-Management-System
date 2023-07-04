<?php 
 
 include ("connection.php");

 session_start();
 
 session_destroy();

 header("Location: http://localhost/traveland1/admin/login.php");


?>