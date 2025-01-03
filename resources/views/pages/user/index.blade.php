@extends('layouts.user.main')
@section('content')
<style>
    /* Styling the cards to create uniformity */
.card {
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    margin: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
}

.card-img-top {
    border-radius: 10px;
    height: 200px;
    object-fit: cover;
    width: 100%;
}

.card-title {
    font-size: 1.2rem;
    font-weight: bold;
    color: #333;
    text-align: center;
}

/* Styling the "Latest Products" section */
.section_gap {
    padding: 60px 0;
}

.section-title h1 {
    font-size: 2rem;
    font-weight: bold;
    color: #333;
}

.section-title p {
    color: #777;
    font-size: 1rem;
}

/* For responsive layout */
@media (max-width: 768px) {
    .card {
        margin: 10px 0;
    }
    .card-title {
        font-size: 1rem;
    }
}

</style>
<!-- Start Banner Area -->
<section class="banner-area">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-start">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="banner-content">
                            <h1>Nasdwd <br>Collection!</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="banner-img">
                            <img class="img-fluid" src="{{ asset('assets/templates/user/img/banner/banner-img.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!-- Start Product Area -->
<section class="section_gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h1>Latest Products</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Add cards for organizations here -->
            <div class="col-md-4">
                <a href="/daftar-ormawa/badan-perwakilan-mahasiswa-bpm-km" class="card-link">
                    <div class="card">
                        <img src="https://myjourney-api.atmajaya.ac.id/storage/202205000123/3bad3887b59d9f005959fc8913402c19d921920c.jpg" class="card-img-top" alt="BPM KM">
                        <div class="card-body text-center">
                            <h5 class="card-title">Badan Perwakilan Mahasiswa (BPM KM)</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/daftar-ormawa/badan-eksekutif-mahasiswa-bem-km" class="card-link">
                    <div class="card">
                        <img src="https://myjourney-api.atmajaya.ac.id/storage/bkk/eacdeed40f4ba9762f7e2fb08bd559f3f795b419.jpeg" class="card-img-top" alt="BEM KM">
                        <div class="card-body text-center">
                            <h5 class="card-title">Badan Eksekutif Mahasiswa (BEM KM)</h5>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Repeat similar blocks for other items -->
        </div>
    </div>
</section>
<!-- End Product Area -->

@endsection
