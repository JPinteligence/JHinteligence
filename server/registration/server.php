<?php>
  $username = "";
  $email ="";
  $errors = array();

///connet to the database
$db = mysql_connect ("localhost" , "root" , "", "registration" );

// if the registrar buttonn is clicked 
if (isset ($_post["register"])) {
  $username = mysql_real_escape_string($_post("username"]); 
  $email = mysql_real_escape_string($_post("email"]);
  $password_1 = mysql_real_escape_string($_post(password_1"]);
  $password_2 = mysql_real_escape_string($_post(password_2"]);
  

  
  
