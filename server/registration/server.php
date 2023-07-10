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
  $password_1 = mysql_real_escape_string($_post("password_1"]);
  $password_2 = mysql_real_escape_string($_post("password_2"]);

  //ensure the form fields are filied properly
  if (empty($usurname)) {
     array_push($errors, "username is requiered");
}
if(empty(&email)) {
        array_push ($errors, "email is required");
}
if (empty($pasword_1)) {
   array_push($errors, "pasword is required");
}
if ($password_1 != $pasword_2) {
   array_push($errors, "the two password do not match");
}  
 // if there a no errors, save user to database
  if(count($errors) == 0=) {
     $
  

  
  
