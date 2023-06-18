<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <div class="container">
        <div class="rating-box">
            <header>How Was Your Experience With This Nurse?</header>
            <div class="Nurse">
                <img class="" src="<?php echo e(asset('/images/ryujin.jpeg')); ?>" alt="Nurse Image">
            </div>
            <h5>Ajeng Riyustina</h5>
            <div class="Keterangan">
                <i class="fas fa-location-dot"></i>
                <h3>Sidoarjo</h3>
                <i class="far fa-star"></i>
                <h3>New Born</h3>
            </div>
        </div>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <h2>Click the stars to rate us!</h2>
        <div class="rating-box1">
            <textarea placeholder="Share your feedback"></textarea>
        </div>
        <div class="btn">
            <button type="submit">Submit</button>
        </div>
    </div>
</body>

</html>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp3\htdocs\rbpl-project-infagrowth\resources\views/infanurse.blade.php ENDPATH**/ ?>