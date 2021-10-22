<link href="<?php echo e(asset('css/dashboard.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/default.css')); ?>" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


<div id="header">
    <ul>
        <?php if(Auth::check()): ?>
        <li><a href="dashboard">Inicio</a></li>
            <li><a href="">Gastos</a></li>
            <li><a href="">Ingresos</a></li>

            <li><a href="logout">Cerrar Sesión</a></li>
        <?php endif; ?>
    </ul>

    <div id="profile-container">
        <?php if(Auth::check()): ?>
            <a href="user">
                <div class="name"><?php echo e(Auth::user()->name); ?></div>
                <div class="photo">

                    <i class="material-icons">account_circle</i>



                </div>
            </a>
        <?php endif; ?>
        <div id="submenu">
            <ul>

                <li><a href="user">Mi Perfil</a> </li>
                <li class='divisor'></li>
                <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                    <?php echo e(__('Cerrar sesión')); ?>

                </a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
                

            </ul>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\financiapp\resources\views/dashboard/header.blade.php ENDPATH**/ ?>