<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <link href="<?php echo e(asset('css/login.css')); ?>" rel="stylesheet">


    
    <title>Iniciar Sesión</title>
 
</head>

<body>
  
<?php echo $__env->make('dashboard.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    <div id="login-main">
        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
            
            <h2>Iniciar sesión</h2>

            <p>
                <label for="username">Usuario</label>
                <input type="text" name="username" id="username" autocomplete="off">
            </p>
            <p>
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" autocomplete="off">
            </p>
            <p>
                <input type="submit" value="Iniciar sesión" />
            </p>

            <p>
                ¿No tienes cuenta? <a href="signup">Registrarse</a>
            </p>
        </form>
    </div>
</body>

</html>
<?php /**PATH C:\laragon\www\financiapp\resources\views/welcome.blade.php ENDPATH**/ ?>