<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Obat Pintar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('images/logo.png') }}">
    <style>
    .img {
        background-image: url('https://media.istockphoto.com/id/1135284188/id/foto/jika-anda-membutuhkan-itu-di-sini.jpg?s=612x612&w=0&k=20&c=R3bFJz3fpjOgWeHZ5XYTJfrN8GbKflsTtkXKngimtdA=');
        background-size: 100% 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-blend-mode: overlay;
        background-color: rgba(0, 0, 0, 0.397);
    }
</style>

</head>

<body>
    <header>
        @include('partials.navbar')
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center img text-white">
            <div class="col-md-6 p-lg-5 mx-auto my-5">
                <h1 class="display-3 fw-bold">Contact Us</h1>
                <h3 class="fw-normal mb-3 text-light">Get in Contact</h3>

            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
    </header>
    <main>
    <div class="px-4 pt-5 my-5 text-center border-bottom">
        <h1 class="fw-bold" style="color: #332941">Contact Info</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap.</p>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
            <div class="container px-5">
                <img src="https://media.istockphoto.com/id/1135284188/id/foto/jika-anda-membutuhkan-itu-di-sini.jpg?s=612x612&w=0&k=20&c=R3bFJz3fpjOgWeHZ5XYTJfrN8GbKflsTtkXKngimtdA="
                    class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
            </div>
        </div>
    </div>

    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7979.409315588318!2d101.40352176177888!3d0.43248474856650676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1704726224439!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Contact Our Team</h1>
                <ul class="list-group list-group-flush mb-3 ">
                    <li class="list-group-item">
                        <a class=" text-decoration-none text-body-secondary p-2 fs-6"
                            href="#">Ardian Wahyu Saputra - 12345678</a>
                    </li>
                    <li class="list-group-item"><a class=" text-decoration-none text-body-secondary p-2 fs-6"
                            href="#">muhammad rayhan - 23456789</a>
                    </li>
                    <li class="list-group-item">
                        <a class=" text-decoration-none text-body-secondary p-2 fs-6"
                            href="#">Muhammad Rendi Syahputra - 34567890</a>
                    </li>
                    <li class="list-group-item"><a class=" text-decoration-none text-body-secondary p-2 fs-6"
                            href="#">Fitra Wahyudi - 45678901</a>
                    </li>
                    <li class="list-group-item">
                        <a class=" text-decoration-none text-body-secondary p-2 fs-6"
                            href="#">Muhammad Hafizh Fadhillah - 56789012</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>



    @include('layouts.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
