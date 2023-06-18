<title>Infagrowth Page</title>

<?php $__env->startSection('content'); ?>



    <body class="content">
        <p style="text-align: center; color: #000000; font-size: 30px; font-weight: bold; letter-spacing: 9.5%; margin-top:100px;">New Growth
        </p>
        <form method="POST" action="<?php echo e(route('save')); ?>" class="form">

            <?php echo csrf_field(); ?>
            <!-- Use PUT method -->
            <div class="label-select-box">
                <label for="month">Month</label>
            </div>
            <div class="select-box">
                <select name="month" id="month">
                    <option hidden>Your Baby Birth Month</option>
                    <option>January</option>
                    <option>February</option>
                    <option>March</option>
                    <option>April</option>
                    <option>May</option>
                    <option>June</option>
                    <option>July</option>
                    <option>August</option>
                    <option>October</option>
                    <option>November</option>
                    <option>December</option>
                </select>
            </div>

            <div class="input-box">
                <label for="kidsName">Kids Name</label>
                <input type="text" name="kids_name" id="kidsName" placeholder="Enter full name" required />
            </div>

            <div class="input-box">
                <label for="age">Age</label>
                <input type="text" name="age" id="age" placeholder="Enter Age in month" required />
            </div>

            <div class="input-box">
                <label for="height">Height</label>
                <input type="text" name="height" id="height" placeholder="Enter height in cm" required />
            </div>

            <div class="input-box">
                <label for="weight">Weight</label>
                <input type="text" name="weight" id="weight" placeholder="Enter weight in kg" required />
            </div>

            <!-- Submit Button -->
            <div class="text-center mt-4">
                <button type="submit" class="example-link">Save</button>
            </div>
        </form>
    </body>


    <!-- Styles -->
    <style>
        /* Import Google font - Telex */
        <link rel="dns-prefetch" href="//fonts.gstatic.com"><link href="https://fonts.bunny.net/css?family=Telex" rel="stylesheet">* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "", sans-serif;
        }

        .header-container {
            min-height: unset;
            display: unset;
            align-items: unset;
            justify-content: center;
            padding: unset;
            background: unset;
        }

        .header-container .navbar {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .header-container .navbar .navbar-collapse {
            flex-grow: 0;
        }

        .header-container .navbar-nav {
            margin-left: auto;
            margin-right: auto;
        }




        .content {
            /*min-height: 100vh;
                display: flex;*/
            align-items: center;
            justify-content: center;
            padding: 0px;
            background: #f0cdc4;
        }



        .example-link {
            max-width: 80px;
            max-height: 45px;
            display: inline-block;
            padding: 10px 2px;
            background-color: #FF6161;
            color: #fff;
            font-size: 16px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .example-link:hover {
            background-color: #ff8a8a;
        }



        .form .input-box {
            width: 100%;
            margin-top: 20px;
        }

        .form .input-box label {
            color: #333;

        }

        .form .input-box {
            display: flex;
            flex-direction: column;

        }

        .form .input-box label {
            margin-bottom: 4px;
            margin-left: 33%;
        }

        .form .input-box input {
            position: relative;
            height: 55px;
            width: 35%;
            /* Ubah nilai width sesuai kebutuhan Anda */
            margin-left: auto;
            margin-right: auto;
            outline: none;
            font-size: 1rem;
            color: #707070;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 0 15px;
            box-sizing: border-box;
        }



        .form .label-select-box label {
            margin-bottom: 4px;
            margin-left: 33%;

        }

        .form .select-box {
            position: relative;
            height: 50px;
            max-width: 470px;
            /* Ubah nilai max-width sesuai kebutuhan Anda */
            margin: 8px auto;
            /* Menggunakan margin:auto untuk memusatkan elemen */
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 0;
        }

        .form .select-box select {
            border-radius: 6px;
            padding: 0 10px;
            /* Menambahkan padding pada elemen select */
        }

        .form .select-box option {
            padding: 0 5px;
            /* Menambahkan padding pada teks opsi */
        }

        .input-box input:focus {
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
        }

        .form .column {
            display: flex;
            column-gap: 15px;
        }

        }

        .form :where(.gender input, .gender label) {
            cursor: pointer;
        }

        .gender label {
            color: #707070;
        }



        .select-box select {
            height: 100%;
            width: 100%;
            outline: none;
            border: none;
            color: #707070;
            font-size: 1rem;
        }

        .form button {
            height: 55px;
            width: 100%;
            color: #fff;
            font-size: 1rem;
            font-weight: 400;
            margin-top: 30px;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
            background: rgb(255, 97, 97);
        }

        .form button:hover {
            background: #fc8a8a;
        }

        /*Responsive*/
        @media screen and (max-width: 500px) {
            .form .column {
                flex-wrap: wrap;
            }

            .form :where(.gender-option, .gender) {
                row-gap: 15px;
            }
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER NITRO\Documents\Perkuliahan duniawi\Semester 4\Rancang Bangun Perangkat Lunak\rbpl-project-infagrowth\resources\views/infagrowth.blade.php ENDPATH**/ ?>