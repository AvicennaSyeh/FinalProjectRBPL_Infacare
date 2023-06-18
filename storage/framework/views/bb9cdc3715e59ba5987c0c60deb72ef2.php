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
    <div class="card" style="align-items: center; background-color: #F0CDC4;">
        <div class="card-body" style="align-items:center; background-color:#F0CDC4;">
            <form action="/reviewnurse/{id}" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                  <label for="nurse">ENTER ID NURSE:</label>
                  <input type="text" class="form-control" placeholder="Enter ID Nurse" id="nurse" name="nurse">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER NITRO\Documents\Perkuliahan duniawi\Semester 4\Rancang Bangun Perangkat Lunak\rbpl-project-infagrowth\resources\views/reviewNurse.blade.php ENDPATH**/ ?>