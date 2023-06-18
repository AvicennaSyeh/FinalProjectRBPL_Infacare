@extends('components.header')
<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-pUA-Compatible" content="ie=edge" />

    <title>Nurse Review Page</title>

    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="rating.js" defer></script>

    <!-- Include the header component -->

</head>

<body>




    @section('content')

        <body>
            <div class="container">
                <div class="rating-box">
                    <header>How Was Your Experience With This Nurse?</header>
                    <div class="Nurse">
                        <img class="" src="{{ asset('/images\ryujin.jpeg ') }}">
                    </div>
                    <h5>Ajeng Riyustina</h5>
                    <div class="Keterangan">
                        <i class="fa-sharp fa-solid fa-location-dot"></i>
                        <h3>Sidoarjo</h3>
                        <i class="fa-sharp fa-regular fa-star"></i>
                        <h3>New Born</h3>
                    </div>
                </div>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h2>Click the stars to rate us!</h2>
                <div class="rating-box1">
                    <textarea>share your feedback</textarea>
                </div>
                <div class="btn">
                    <button type="submit">Submit</button>
                </div>
        </body>

        </html>

    </body>



    <style>
        /* Import Google font - Poppins */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #F0CDC4;
        }

        .container {
            display: flex;
            flex-direction: column;
        }

        .rating-box {
            margin: 40px;
            background: #fff;
            padding: 25px 50px 35px;
            border-radius: 25px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);
            width: 700px;
            height: 350px;
        }

        .rating-box header {
            font-size: 20px;
            color: #000000;
            font-weight: 500;
            margin-bottom: 20px;
            text-align: center;
        }

        .Keterangan {
            text-align: center;
            /* Memposisikan tulisan di tengah secara horizontal */
        }

        .Keterangan i,
        .Keterangan h3 {
            display: inline-block;
            /* Mengatur elemen menjadi inline block */
            margin: 0;
            /* Menghapus margin bawaan */
        }

        .Keterangan h3+i {
            margin-left: 50px;
            margin-top: 15px;
        }

        .rating-box1 {
            margin: 40px;
            background: #fff;
            padding: 25px 50px 35px;
            border-radius: 25px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);
            width: 700px;
            height: 200px;
        }

        .rating-box1 header {
            font-size: 22px;
            color: #dadada;
            font-weight: 500;
            margin-bottom: 20px;
            text-align: center;
        }

        .Nurse {
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 140px;
            margin: 0 auto;
        }

        .Nurse img {
            border-radius: 50%;
            max-width: 100%;
        }

        .rating-box .stars {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .stars {
            display: flex;
            justify-content: center;
            /* Memposisikan isi flex container di tengah secara horizontal */
            align-items: center;
            /* Memposisikan isi flex container di tengah secara vertical */
        }

        .stars i {
            color: #e6e6e6;
            font-size: 50px;
            cursor: pointer;
            transition: color 0.2s ease;

        }

        .stars i.active {
            color: #ff9c1a;
        }

        h2 {

            font-size: 15px;
            color: #5A5A5A;
            font-weight: 500;
            margin-top: 10px;
            text-align: center;
        }

        h5 {
            margin-top: 20px;
            text-align: center;
            font-size: 24px;
        }

        .btn {
            display: block;

            margin: 15px auto;
            text-align: center;
            background-color: #28a745;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
@endsection
