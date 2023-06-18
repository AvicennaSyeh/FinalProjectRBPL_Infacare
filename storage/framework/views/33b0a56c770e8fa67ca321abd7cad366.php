<?php $__env->startSection('content'); ?>
    <!DOCTYPE html>
    <html>


    <body style="background-color: #F0CDC4;">

        <thead>
            <div colspan="4" class="text-center">
                <div class="table-title">
                <h1 style="font-weight: bold;">Infagrowth</h1>
                </div>
            </div>

        </thead>
        <div class="justify-content-center">
            <div class="container-fluid col-5">
                <div class="table-container">
                    <table class="styled-table">

                        <thead>
                            <tr>
                                <th>Age</th>
                                <th>Kids Name</th>
                                <th>Height</th>
                                <th>Weight</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if(isset($growthData)): ?>
                                <?php $__currentLoopData = $growthData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($data->age); ?></td>
                                        <td><?php echo e($data->kids_name); ?></td>
                                        <td><?php echo e($data->height); ?></td>
                                        <td><?php echo e($data->weight); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>

                        </tbody>
                    </table>
                </div>
                <div class="edit-button-container">
                    <a href="<?php echo e(route('infagrowth')); ?>" class="edit-button">Add Data</a>
                </div>
            </div>
        </div>>

    </body>

    </html>
<?php $__env->stopSection(); ?>

<style>
    /* Import Google font - Telex */
    <link rel="dns-prefetch" href="//fonts.gstatic.com"><link href="https://fonts.bunny.net/css?family=Telex" rel="stylesheet">* {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .content {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0px;
        background: #f0cdc4;

    }

    .styled-table {
        border-collapse: collapse;
        align-items: center;
        justify-content: center;
        margin: 0px 0px;
        font-size: 1em;
        min-width: 550px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.15);
        border-radius: 5px;

    }

    .styled-table thead tr {
        background-color: #ed9e9e;
        color: #ffffff;
        text-align: left;
        border-radius: 5px;
    }

    .styled-table th,
    .styled-table td {
        padding: 13px 16px;
    }

    .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(odd) {
        background-color: #f3f1f1;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #ed9e9e;
        border-radius: 5px;
    }

    .styled-table tbody tr.active-row {
        font-weight: bold;
        color: #ed9e9e;
        border-radius: 5px;
    }

    .table-container {
        max-height: 500px;
        overflow-y: auto;
        overflow-x:hidden;
        border-radius: 5px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.15);

    }

    .table-title {
    margin-bottom: 30px;
}

.edit-button-container {
    text-align: center;
    margin-top: 20px;
}

.edit-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #FF6161;
    color: #ffffff;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
    transition: background-color 0.3s ease;
}

.edit-button:hover {
    background-color: #fc8a8a;
}

</style>

<?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER NITRO\Documents\Perkuliahan duniawi\Semester 4\Rancang Bangun Perangkat Lunak\rbpl-project-infagrowth\resources\views/showgrowthdata.blade.php ENDPATH**/ ?>