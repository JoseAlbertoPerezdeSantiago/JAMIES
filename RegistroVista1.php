<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"> 
        <title>Login / REVI-REFI</title>
        <meta name="viewport" >
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-form">
            <div class="header">
                <div class="logo-title">
                    <img src="1.jpg" alt="">
                    <h2>REFI & REVI</h2>
                </div>
                <div class="menu">
                    <a href="login.php"><li class="module-login ">Login</li></a>
                    <a href="registro.php"><li class="module-registro active">Registro</li></a>
                </div>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form">  
                <div class="welcome-form"><h1>Bienvenido</h1><h2>REFI & REVI</h2></div>
                <div class="user line-input">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" name="correo" required>
                </div>
                <div class="user line-input">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Nombre de Usuario" name="usuario" minlength="10" maxlength="20" required pattern="[A-Za-z0]+">
                </div>
                <div class="password line-input">
                    
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Contraseña " name="clave" minlength="8" maxlength="20" required pattern="[A-Za-z0-9]+">
                </div>
                <div class="password line-input">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Confirmar Contraseña" name="clave2" minlength="8" maxlength="20" required pattern="[A-Za-z0-9]+">
                </div>
                <?php if(!empty($error)): ?>
                <div class="mensaje">
                    <?php echo $error; ?>
                </div>
                <?php endif; ?>
                <button type="submit">Registrar<label class=""lnr lnr-chevron-right></label></button>
            </form>
        </div>
    </body>
</html> 
