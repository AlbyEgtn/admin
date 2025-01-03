@extends('layouts.user.main')
@section('content')

<!-- Start Banner Area -->
<section class="banner-area">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-start">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="banner-content">
                            <h1>DAFTAR KEGIATAN</h1>
                            <p>Temukan berbagai kegiatan menarik yang dapat Anda ikuti untuk mengembangkan diri, keterampilan, dan wawasan Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!-- Start Search and Filter Area -->
<section class="search-filter-area py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <input type="text" class="form-control" placeholder="Cari Kegiatan">
            </div>
            <div class="col-lg-2">
                <select class="form-control">
                    <option>Semua Tahun</option>
                    <option>2024</option>
                    <option>2025</option>
                </select>
            </div>
            <div class="col-lg-2">
                <select class="form-control">
                    <option>Semua Pilar</option>
                    <option>Kompetensi Interpersonal</option>
                    <option>Keunggulan Intelektual</option>
                </select>
            </div>
        </div>
    </div>
</section>
<!-- End Search and Filter Area -->

<!-- Start Activities Section -->
<section class="section_gap">
    <div class="container">
        <div class="row">
            <!-- Activity Card -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('assets/templates/user/img/i3.jpg') }}" class="card-img-top" alt="Men Minds Matter 2024">
                    <div class="card-body">
                        <span class="badge bg-success text-white mb-2">Gratis</span>
                        <h5 class="card-title">Men Minds Matter 2024</h5>
                        <p class="card-text">Hall KW, Kampus 1 Unika Atma Jaya Semanggi</p>
                        <p class="text-muted">30 Nov 2024</p>
                    </div>
                </div>
            </div>
            <!-- Activity Card -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('assets/templates/user/img/i2.jpg') }}" class="card-img-top" alt="Photo Shoot Talent Hunt Batch 2">
                    <div class="card-body">
                        <span class="badge bg-danger text-white mb-2">Berbayar</span>
                        <h5 class="card-title">Photo Shoot Talent Hunt Batch 2</h5>
                        <p class="card-text">Unika Atma Jaya</p>
                        <p class="text-muted">14 Nov 2024</p>
                    </div>
                </div>
            </div>
            <!-- Activity Card -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('assets/templates/user/img/i1.jpg') }}" class="card-img-top" alt="Jaga Kesehatan Gigi & Mulut">
                    <div class="card-body">
                        <span class="badge bg-success text-white mb-2">Gratis</span>
                        <h5 class="card-title">Jaga Kesehatan Gigi & Mulut</h5>
                        <p class="card-text">Zoom Meeting</p>
                        <p class="text-muted">13 Des 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Activities Section -->

@endsection
