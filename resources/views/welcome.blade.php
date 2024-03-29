<!DOCTYPE html>
<html lang="id">


@include('layouts.head')


<body>
    <header>
        @include('partials.navbar')
        <div id="corousel">
            <div id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{ asset('images/carousel1.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('images/carousel2.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/carousel3.png') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>




        <div id="about" style="background-color: #F5F7F8;  >
            <div class="container mt-5 mb-4">
                <div class="row align-items-md-stretch">
                    <div class="col-md-5">
                        <div class="h-100 p-2">
                            <img src="https://media.istockphoto.com/id/1325914490/id/foto/toko-obat-farmasi-modern-dengan-rak-penuh-paket-penuh-obat-modern-obat-obatan-kotak-vitamin.jpg?s=612x612&w=0&k=20&c=7q9o8wOR4gU61jz5AEy218bADAMT1xgZ6-1y24b-pjs="
                                class="img-thumbnail" alt="...">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col">
                                        <img src="https://media.istockphoto.com/id/1502427908/id/foto/rak-dengan-obat-obatan-di-apotek.jpg?s=612x612&w=0&k=20&c=1yS7bhlzdM5eJMnBGWY_x9AvrwXa1lD2nPAvrNOVWQo="
                                            class="img-thumbnail" alt="...">
                                    </div>
                                    <div class="col">
                                        <img src="https://media.istockphoto.com/id/1053043226/id/foto/pemasok-kebutuhan-medis-anda.jpg?s=612x612&w=0&k=20&c=kSPZHzEfApzQEZKj-sfUApT15adCpaP2D-8I2Lfk2cw="
                                            class="img-thumbnail" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7" style="color: #554931">
                        <div class="h-100 p-3">
                            <h5>About Us</h5>
                            <h3>Apa sebernanya sistem obat pintar itu?</h3>
                            <p>
                                Sistem obat pintar adalah solusi modern yang memberikan informasi terkini tentang data dan lokasi apotek. Dengan teknologi canggih, sistem ini mempermudah akses ke informasi yang dibutuhkan untuk mendapatkan obat dengan cepat dan efisien.
                            </p>
                            <div class="col-md-7" style="color: #554931">
                                <h5>Nama Kelompok:</h5>
                                <ul class="list-group">
                                    <li class="list-group-item member-item">
                                        <span class="member-name">Ardian Wahyu Saputra</span>
                                        <span class="member-nim">NIM: 12345678</span>
                                    </li>
                                    <li class="list-group-item member-item">
                                        <span class="member-name">Muhammad Rayhan</span>
                                        <span class="member-nim">NIM: 23456789</span>
                                    </li>
                                    <li class="list-group-item member-item">
                                        <span class="member-name">Fitra Wahyudi</span>
                                        <span class="member-nim">NIM: 34567890</span>
                                    </li>
                                    <li class="list-group-item member-item">
                                        <span class="member-name">Muhammad Rendi Syahputra</span>
                                        <span class="member-nim">NIM: 45678901</span>
                                    </li>
                                    <li class="list-group-item member-item">
                                        <span class="member-name">Muhammad Hafizh Fadhillah</span>
                                        <span class="member-nim">NIM: 56789012</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <style>
                        .member-item {
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                            padding: 10px;
                            margin-bottom: 10px;
                            background-color: #f8f9fa; /* Optional: Add a light background color for better visibility */
                            border-radius: 5px;
                        }
                        .member-name {
                            font-weight: bold;
                        }
                        .member-nim {
                            color: #6c757d;
                        }
                    </style>

                </div>
            </div>
        </div>

    </header>

    <main>


        <section id="apotek" class="py-4" >
            <div class="row text-center">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Lokasi Apotek di Sistem Kami</h1>
                    <p class="lead text-body-secondary">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus commodi necessitatibus quo
                        deserunt magni tempora voluptatem voluptatum. Ut repellendus recusandae assumenda molestias,
                        autem expedita, sed laudantium excepturi, aut sit odio?
                    </p>
                    <p>
                        <a href="{{ url('/apotek') }}" class="btn text-light btn-lg" type="button"
                            style="background-color: #BBAB8C">Cari Apotek </a>
                    </p>
                </div>
            </div>
            <div class="album">
                <div class="container">

                    <div class="row row-cols-1 row-cols-md-2 g-4 mt-2">
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
                                <a href="{{ url('apotek/detail') }}" class="btn btn-dark">Read More</a>
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

    @include('layouts.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
