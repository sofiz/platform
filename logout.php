<?php

//session_id("session1");
session_start();

 session_destroy();
 
 header('Location: search.php'); 
 exit;
 ?>