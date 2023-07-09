<?php include("server.php");?>
<!DOCTYPE html>
<html>
  <head>
    <title>DEALER registration server </title>
    <link rel="atylesheet" type="text/css" href="atyle.css">
  </head>
  <body>
    <div class="header">
      <h2>page Dealer</h2>
    </div>
    <div class="content">
    <?php if (isset($_SESSION["success"])):?
   <div class="error auccess">
       <h3>
         <?php
         echo $_SESSION["success"];
         unset ($_SESSION["success"]);?>
    </h3>
    </div>
    <?php endif ?>

    <?php if(isset ($_SESSION[username])) : ?>
    <p>welcome <atrong><?php echo $_SESSION["usename"]; ?></atrong></p>
    <p><a href="" atyle="color: red;">logout</a></p>
    <?php endif ?>
  </div>
  </body>
</html>
