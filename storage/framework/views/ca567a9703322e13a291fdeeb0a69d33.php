<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>


</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color: #EFE2DA;height: 80px">
            <div class="container">
                
                <a href="<?php echo e(route('home')); ?>">
                    <img class="" src="<?php echo e(asset('/images/logo_infacare_header.png')); ?>">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php if(auth()->guard()->guest()): ?>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link border rounded border-dark text-body"
                                        style="height:40px; width:100px; text-align:center;"
                                        href="<?php echo e(route('register')); ?>"><?php echo e(__('Sign up')); ?></a>
                                </li>

                                <?php if(Route::has('login')): ?>
                                    <li class="nav-item">
                                        <a class="nav-link border rounded border-dark bg-dark text-white"
                                            style="margin-left: 10px; height:40px; width:100px; text-align:center;"
                                            href="<?php echo e(route('login')); ?>"><?php echo e(__('Log in')); ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php else: ?>
                        <a id="userDropdown" class="nav-link dropdown-toggle rounded-circle"
                        style="width: 30px; height: 30px; background-color: #FFFFFF" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="bi bi-person"></i> <!-- Menggunakan ikon person dari Bootstrap Icons -->
                    </a>
                    <?php endif; ?>

                            <li class="nav-item dropdown ">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">
                                        <?php echo e(__('Profile')); ?>

                                    </a>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>


                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>

</html>
<?php /**PATH C:\xampp3\htdocs\rbpl-project-infagrowth\resources\views/components/headerbaru.blade.php ENDPATH**/ ?>