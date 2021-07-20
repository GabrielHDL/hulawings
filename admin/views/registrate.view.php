<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registrarse</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/estilos.css" rel="stylesheet">
        <script src="https://use.fontawesome.com/cfd6e9df0a.js"></script>
    </head>
    <body>
        <div class="contenedor">
            <h1 class="titulo">Registrate</h1>
            <hr class="border">

            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
                <div class="form-group">
                    <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario" id="">
                </div>
                <div class="form-group">
                    <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password" placeholder="Contraseña" id="">
                </div>
                <div class="form-group">
                    <i class="icono izquierda fa fa-lock"></i><input type="password" name="password2" class="password_btn" placeholder="Confirmar contraseña" id="">
                    <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
                </div>
                
                <?php if(!empty($errores)): ?>
                    <div class="error">
                        <ul>
                            <?php echo $errores; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </form>
            <p class="texto-registrate">
                ¿Ya tienes cuenta?
                <a href="login.php">Iniciar Sesión</a>
            </p>
        </div>
    </body>
</html>