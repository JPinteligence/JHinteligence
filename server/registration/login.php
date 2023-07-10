<html>
<head>
<title>User bienvenido system  DEALER</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
         <h2>Iniciar sesión</h2>  
    </div>

    <form method="post" action="https://jpjovic.app/server/registration/login.php">
    <div class="input-group">
     <label>Username</label>
     <input type="text" name="Username">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
    <button type="submit" name="login" class="btn">login</button>
       </div>
       <p>
        Todavía no eres miembro?  <a href="https://jpjovic.app/server/registration/registrar.php">Regístrate</a>
       </p>
    </form>

</body>
</html>
