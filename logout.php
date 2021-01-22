<?php
 session_start();
 unset($_SESSION['Username']);
 //session_destroy (); 
 header('Location: search.php'); 
 exit;
 ?>