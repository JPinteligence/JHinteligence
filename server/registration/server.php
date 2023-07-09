<?php>
  $username = "";
  $email ="";
  $errors = array();

///connet to the database
$db = mysql_connect ("localhost" , "root" , "", "registration" );

// if the registrar buttonn is clicked 
if (isset ($_post["register"])) {
  $username
