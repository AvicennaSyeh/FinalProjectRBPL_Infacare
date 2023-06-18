<?php $__env->startSection('content'); ?>
    <html>

    <head>
        <title>

        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
            integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Grape+Nuts&family=Montserrat:wght@100&family=Nunito+Sans&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Staatliches&display=swap"
            rel="stylesheet">

        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-sm navbar-light bg-light-brown shadow-sm" style="height: 40px;">
                <div class="container">
                    <img src="images\logo_infacare_header.png" class="navbar-brand py-0"
                        alt=""style="margin-top:-25px;">
                    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse d-flex justify-content-end" id="collapsibleNavId"
                        style="margin-top:-25px">
                        <ul class="nav justify-content-center">
                            <a href="/register" class="btn btn-outline-dark mx-3">Sign Up</a>
                            <a href="<?php echo e(route('login')); ?>" class="btn btn-dark mx-3"><?php echo e(__('Sign In')); ?></a>
                        </ul>
                    </div>
                </div>
            </nav>

            <form method="POST" action="<?php echo e(route('register')); ?>">
                <?php echo csrf_field(); ?>

                <div class="row d-flex align-items-center justify-content-center h-100">
                    <img src="images/Group 1119.png"
                        style="position: absolute;width: 1110px;height: 929px; margin-left:350px; margin-top:230px">
                    <div class="" style="position: relative;">
                        <section class="vh-100">
                            <div class="container py-5 h-100">
                                <div class="row d-flex align-items-center justify-content-center h-100">
                                    <div class="col-md-8 col-lg-7 col-xl-6">
                                        <div class="greeting">
                                            <div class="greeting-title"
                                                style="font-size: 60px; font-weight: bold; font-family: Telex; margin-top: 80px;">
                                                <span style="letter-spacing: 9.5%;">Sign up to</span> <br>
                                                <span style="letter-spacing: 9.5%;">Infacare</span>
                                            </div>
                                        </div>


                                        <img src="images\Signup.png" class="img-fluid" alt="Phone image"
                                            style="margin-top: -150px;">
                                    </div>
                                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1" style="font-family: Nunito;">
                                        <div class="text-center">
                                            <h2 style="font-size: 36px; font-weight: bold;">Sign Up</h2>
                                        </div>
                                        <br>
                                        <h3 style="text-align: center; font-size: 14px;">Fill in your credentials and click
                                            on
                                            the Sign Up Button</h3>
                                        <form>
                                            <!--
                                                <div class="row" style="margin-top: 28px;">
                                                    <div class="col-md-6 mb-4">
                                                        <div class="form-outline">
                                                            <label class="form-label" for="firstName">First Name</label>
                                                            <input type="text" id="firstName"
                                                                class="form-control form-control-lg" />

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-4">
                                                        <div class="form-outline">
                                                            <label class="form-label" for="lastName">Last Name</label>
                                                            <input type="text" id="lastName"
                                                                class="form-control form-control-lg" />
                                                        </div>
                                                    </div>
                                                </div>-->
                                            <!-- Email input -->
                                            <div class="form-outline mb-4" style="margin-top: 28px;">
                                                <label class="form-label" for="name"><?php echo e(__('Full Name')); ?></label>
                                                <input type="name" id="name"
                                                    class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name"
                                                    value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                            </div>
                                            <!-- Email input -->
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="email"><?php echo e(__('Email Address')); ?></label>
                                                <input type="email" id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                            </div>

                                            <!-- Password input -->
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="password"><?php echo e(__('Password')); ?></label>
                                                <input type="password" id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">

                                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                            </div>

                                            <!-- Password input -->
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="password-confirm"><?php echo e(__('Confirm Password')); ?></label>
                                                <input type="password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>

                                            <!-- Submit button -->
                                            <div class="text-center" style="margin-top: 37px">
                                                <button type="submit" class="btn btn-primary btn-lg btn-block w-100"><?php echo e(__('Sign Up')); ?></button>
                                            </div>
                                            <div class="d-flex justify-content-around align-items-center mb-4"
                                                style="margin-top: 30px">
                                                <p>Already have an account? <a href="<?php echo e(route('login')); ?>" style="color: #F57876;"><?php echo e(__('Sign In')); ?></a></p>
                                            </div>

                                        </form>
                                    </div>

                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </form>
    </body>

    </html>

    <style>
        /* Import Google font - Poppins */
        @import url("https://fonts.googleapis.com/css2?family=Telex:wght@200;300;400;500;600;700&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Lexend:wght@200;300;400;500;600;700&display=swap");
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp3\htdocs\rbpl-project-infagrowth\resources\views/auth/register.blade.php ENDPATH**/ ?>