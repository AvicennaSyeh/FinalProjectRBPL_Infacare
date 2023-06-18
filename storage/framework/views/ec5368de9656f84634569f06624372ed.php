<?php $__env->startSection('content'); ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Review Page</title>
    </head>

    <body style="background-color: #F0CDC4">
        <div class="container">
            <div class="rating-box">
                <header>How Was Your Experience With This Nurse?</header>
                <div class="Nurse">
                    <?php
                        $imagePath = 'images/nurse/nurse' . $id . '.jpg';
                        $imageURL = file_exists(public_path($imagePath)) ? asset($imagePath) : asset('images/nurse.jpg');
                    ?>

                    <img src="<?php echo e($imageURL); ?>" alt="Nurse Image">
                </div>
                <h5><?php echo e($nurse->namaNurse); ?></h5>
                <div class="Keterangan">
                    <i class="fas fa-location-dot"></i>
                    <h3><?php echo e($nurse->tahunPengalaman); ?> Tahun Pengalaman</h3>
                </div>
            </div>
            <div class="rating-box1">
                <form action="<?php echo e(route('reviewnurse', ['id' => $id])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <textarea name="review" style="width: 600px; height:150px;">Share your feedback</textarea>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </body>

    </html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER NITRO\Documents\Perkuliahan duniawi\Semester 4\Rancang Bangun Perangkat Lunak\rbpl-project-infagrowth\resources\views/reviewNurse2.blade.php ENDPATH**/ ?>