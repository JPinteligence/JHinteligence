<html>
<head>
<title>User registration system DEALER </title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
         <h2>Registrar</h2>  
    </div>

    <form method="post" action="registrar.php">
<div class="input-group">
     <label>Username</label>
     <input type="text" name="Username">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="text" name="Email">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
    </div>
       <div class="input-group">
    <label>confirmar Password</label>
    <input type="password" name="password_2">
    </div>
    <div class="input-group">
    <button type="submit" name="https://jpjovic.app/server/registration/registrar.php" class="btn">Registrar</button>
       </div>
       <p>
        Ya eres usuario? <a href="login.php">Iniciar sesión</a>
       </p>
    </form>

</body>
</html>
