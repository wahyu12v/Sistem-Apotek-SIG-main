<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Hotelku</title>
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
                <h1 class="display-3 fw-bold">Data Apotek</h1>
                <h3 class="fw-normal mb-3 text-light">Silahkan Cari Apotek Yang Anda Cari</h3>

            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
    </header>

    <main>

       <section id="blogs">
           
            <div class="album">
                <div class="container">

                    <div class="row row-cols-2 row-cols-md-2 g-4 mt-2">
                    <div class="col">
                        <div class="card">
                            <img src="https://media.istockphoto.com/id/1367797598/id/vektor/bangunan-vektor-etalase-toko-farmasi-atau-fasad-toko-apoteker-medis-di-ilustrasi-kartun.jpg?s=612x612&w=0&k=20&c=-NAWRvOoVGTYoG5M7gFURYFHssVnd0QlSxGgY2LWltY="
                                class="card-img-top" alt="...">
                            <div class="card-body" style="color: #5E454B">
                                <h5 class="card-title">Apotek Panam</h5>
                                <p class="card-text">Up to 30% room discount and 10% food discount at BATIQA Hotels with PARTNERSHIP DISCOUNT program.</p>
                                <a href="{{ url('detail') }}" class="btn btn-dark">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <img src="https://media.istockphoto.com/id/1367797598/id/vektor/bangunan-vektor-etalase-toko-farmasi-atau-fasad-toko-apoteker-medis-di-ilustrasi-kartun.jpg?s=612x612&w=0&k=20&c=-NAWRvOoVGTYoG5M7gFURYFHssVnd0QlSxGgY2LWltY="
                                class="card-img-top" alt="...">
                            <div class="card-body" style="color: #5E454B">
                                <h5 class="card-title">Apotek Panam</h5>
                                <p class="card-text">Up to 30% room discount and 10% food discount at BATIQA Hotels with PARTNERSHIP DISCOUNT program.</p>
                                <a href="{{ url('detail') }}" class="btn btn-dark">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <img src="https://media.istockphoto.com/id/1367797598/id/vektor/bangunan-vektor-etalase-toko-farmasi-atau-fasad-toko-apoteker-medis-di-ilustrasi-kartun.jpg?s=612x612&w=0&k=20&c=-NAWRvOoVGTYoG5M7gFURYFHssVnd0QlSxGgY2LWltY="
                                class="card-img-top" alt="...">
                            <div class="card-body" style="color: #5E454B">
                                <h5 class="card-title">Apotek Panam</h5>
                                <p class="card-text">Up to 30% room discount and 10% food discount at BATIQA Hotels with PARTNERSHIP DISCOUNT program.</p>
                                <a href="{{ url('detail') }}" class="btn btn-dark">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <img src="https://media.istockphoto.com/id/1367797598/id/vektor/bangunan-vektor-etalase-toko-farmasi-atau-fasad-toko-apoteker-medis-di-ilustrasi-kartun.jpg?s=612x612&w=0&k=20&c=-NAWRvOoVGTYoG5M7gFURYFHssVnd0QlSxGgY2LWltY="
                                class="card-img-top" alt="...">
                            <div class="card-body" style="color: #5E454B">
                                <h5 class="card-title">Apotek Panam</h5>
                                <p class="card-text">Up to 30% room discount and 10% food discount at BATIQA Hotels with PARTNERSHIP DISCOUNT program.</p>
                                <a href="{{ url('detail') }}" class="btn btn-dark">Read More</a>
                            </div>
                        </div>
                    </div>
             
                    </div>
                </div>
            </div>
        </section>




    </main>

    <footer class="container d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                <svg class="bi" width="30" height="24">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Company, Inc</span>
        </div>
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3">
                <a class="text-body-secondary" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-twitter-x" viewbox="0 0 16 16">
                        <path
                            d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z" />
                    </svg></a>
            </li>
            <li class="ms-3">
                <a class="text-body-secondary" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-instagram" viewbox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                    </svg></a>
            </li>
            <li class="ms-3">
                <a class="text-body-secondary" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-facebook" viewbox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                    </svg></a>
            </li>
        </ul>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
