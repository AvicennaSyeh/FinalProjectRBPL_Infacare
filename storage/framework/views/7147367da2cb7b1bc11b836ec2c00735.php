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
    <link href="https://fonts.bunny.net/css?family=Telex" rel="stylesheet">

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
</head>

<body>

    <div class="header-container" >
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color: #EFE2DA; width: 100%; position:-webkit-sticky; position:sticky; top:0;" >
                <div class="container">




                <a href="/home"> <img class="" src="<?php echo e(asset('/images/logo_infacare_header.png ')); ?>"> </a>
                <?php if(auth()->guard()->check()): ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav justify-content-end me-0 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3 text-black"
                        href="/infasolution">Infasolution</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3 text-black"
                            href="/infagrowth">Infagrowth</a>
                            </li>

                            <li class="nav-item"><a class="nav-link me-lg-3 text-black" href="/infanurse">Infanurse</a>
                            </li>
                            <li class="nav-item"><a class="nav-link me-lg-3 text-black" href="/infarent">Infarent</a>
                            </li>

                        </ul>

                    </div>
                    <?php endif; ?>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>
                        <!--<form class="form-inline my-2 my-lg-0 " style="width: 449px">
                            <input class="form-control mr-sm-2" type="search" placeholder="What lesson do you want to find? " >
                            
                        </form>--!>


                        <!-- Right Side Of Navbar -->

                        

                        
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('register')): ?>
                                    <li class="nav-item">
                                        <a class="nav-link border rounded border-dark text-body" style="height:40px; width:100px; text-align:center;" href="<?php echo e(route('register')); ?>"><?php echo e(__('Sign up')); ?></a>
                                    </li>
                                <?php endif; ?>

                                <?php if(Route::has('login')): ?>
                                    <li class="nav-item">
                                        <a class="nav-link border rounded border-dark bg-dark text-white" style="margin-left: 10px; height:40px; width:100px; text-align:center;" href="<?php echo e(route('login')); ?>"><?php echo e(__('Log in')); ?></a>
                                    </li>
                                <?php endif; ?>

                            <?php else: ?>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" style="color: #000000" aria-haspopup="true"
                                        aria-expanded="false" v-pre>
                                        <img src="<?php echo e(asset('storage/profile_pictures/' . Auth::user()->profile_picture)); ?>" alt="Profile Picture " class="profile-picture">

                                        <?php echo e(Auth::user()->name); ?>

                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <!-- Existing dropdown menu items -->

                                        <a class="dropdown-item" href="<?php echo e(route('userprofile')); ?>">Profile</a>
                                        <!-- Modified dropdown menu item -->

                                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <?php echo e(__('Logout')); ?>

                                        </a>
                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                            class="d-none">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </div>



                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>

<style>
    .profile-picture {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        margin-right: 5px;
    }

</style>


</html>

<?php /**PATH C:\Users\ACER NITRO\Documents\Perkuliahan duniawi\Semester 4\Rancang Bangun Perangkat Lunak\rbpl-project-infagrowth\resources\views/components/header.blade.php ENDPATH**/ ?>