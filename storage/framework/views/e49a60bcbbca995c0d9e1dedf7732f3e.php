<?php $__env->startSection('content'); ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="page2.css">
        <title>Document</title>
        <style>
            body {
                background-color: #FFF1C7;
                justify-content: center;
            }

            .keranjang {
                display: flex;
                flex-direction: row;
                align-items: center;
            }

            .card {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
            }

            .bentuk-card {
                display: flex;
                flex-direction: column;
                padding: 10px;
                align-items: center;
                background-color: white;
                border-style: solid;
                border-color: white;
                height: 374px;
                width: 300px;
                border-radius: 10px;
                box-shadow: 0px 4px 6px #505050;
                margin-right: 47px;
                margin-bottom: 57px;
            }

            .bentuk-card img {
                width: 200px;
                height: 200px;
            }

            .detail-card {
                display: flex;
                flex-direction: row;
                align-items: center;
                margin-right: 10px;
                width: 176px;
                height: 45px;
                align-items: center;
                margin-left: 30px;
            }

            .detail-card p {
                font-size: 17px;
            }

            .lokasi-waktu p {
                font-weight: 800;
                color: #5A5A5A;
                font-size: 17px;
            }

            .detail-card img {
                width: 18px;
                height: 18px;
                margin-right: 5px;
            }

            .lokasi-waktu {
                display: flex;
                flex-direction: column;
                padding-bottom: 20px;
                column-gap: 10px;
                margin-top: 10px;
                margin-left: -20px;
            }

            .tambah-lokasi {
                display: flex;
                flex-direction: row;
                align-items: center;
                margin-top: -30px;
            }

            .iconbintang {
                display: flex;
                flex-direction: row;
                position: relative;
                top: -30px;
                left: 70px;
            }

            .iconbintang img {
                width: 22px;
                height: 22px;
                margin-right: 5px;
            }
        </style>
    </head>

    <body>
        <div class="header" style="display: flex; flex-direction: row;align-items: center; margin-left: 30px;">
            <p style="font-size: 96px; font-weight: 700;">Infarent</p>

            <div class="rent" style="margin-left: 20px;">
                <a href="/rentHistory">
                    <button type="button" class="btn btn-default btn-lg bg"
                        style="background-color:white;">Rent History</button>
                </a>
            </div>
            <div class="keranjang" style="margin-left: 400px">
                <form action="/search" method="GET">
                    <img src="images/search.png" type="submit">
                    <input type="text" name="query" placeholder="Search" img src="" type="submit" />
                </form>
                <a href="/rentCart">
                    <img src="images/keranjang.png" alt=""
                        style="width: 58px; height: 58px;margin-left: 10px;">
                </a>
            </div>
        </div>

        <div class="card">
            <?php
                $perlengkapanbayis = DB::table('perlengkapanbayis')->get();
                $chunks = $perlengkapanbayis->chunk(4);
            ?>

            <?php $__currentLoopData = $chunks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card-baris-1">
                    <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $rating = round($barang->rating);
                            $imagePath = 'images/barang/barang' . $barang->id . '.jpg';
                            $imageURL = file_exists(public_path($imagePath)) ? asset($imagePath) : asset('images/barang.jpg');
                            $url = route('rentCart', ['id' => $barang->id]);
                        ?>

                        <div id="<?php echo e($barang->id); ?>" class="bentuk-card">

                                <img src="<?php echo e($imageURL); ?>" alt="Profile Image" class="person-img"
                                    onclick="redirectToNurseRent(<?php echo e($barang->id); ?>)">

                                <p style="font-weight: bolder; font-size: 22px; font-family: 'Poppins';">
                                    <?php echo e($barang->namaBarang); ?></p>
                                <div class="tambah-lokasi">
                                    <div class="lokasi-waktu">
                                        <div class="detail-card">
                                            <img src="images/icon_lokasi.png" alt="">
                                            <p><?php echo e($barang->lokasi); ?></p>
                                        </div>
                                        <div class="detail-card" style="margin-top: -20px;">
                                            <img src="images/iconduit.png" alt="">
                                            <p><?php echo e($barang->hargaBarang); ?>/month</p>
                                        </div>
                                        <a href="<?php echo e($url); ?>" onclick="renCart()">
                                            <img src="images/keranjang-infarent.png" alt=""
                                                style="width: 23px;height: 23px;width: 37px; height: 37px;margin-left: 10px;">
                                        </a>
                                        <div class="iconbintang">
                                            <?php for($i = 1; $i <= 5; $i++): ?>
                                                <?php if($i <= $rating): ?>
                                                    <img src="<?php echo e(asset('images/icon_bintang_berisi.png')); ?>" alt="">
                                                <?php else: ?>
                                                    <img src="<?php echo e(asset('images/icon_bintang_kosong.png')); ?>" alt="">
                                                <?php endif; ?>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <script>
            function rentCart() {
                // Lakukan pengalihan ke halaman keranjang belanja
                window.location.href = "/rentCart/" + id;
            }
        </script>

        
    </body>

    </html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp3\htdocs\rbpl-project-infagrowth\resources\views/infarent2.blade.php ENDPATH**/ ?>