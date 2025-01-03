@extends('layouts.user.main')
@section('content')

<!-- Start Banner Area -->
<section class="banner-area" style="background-image: url('{{ asset('assets/templates/user/img/banner/banner-ukm.jpg') }}'); background-size: cover; background-position: center;">
  <div class="container">
      <div class="row fullscreen align-items-center justify-content-start">
          <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-12 text-center">
                  <div class="banner-content">
                      <h1>DAFTAR ORMAWA</h1>
                      <p>Organisasi kemahasiswaan di tingkat universitas dan fakultas sebagai wadah pengembangan diri, keterlibatan dan partisipasi mahasiswa Unika Atma Jaya sejak menjadi mahasiswa baru hingga lulus.</p>
                  </div>
              </div>
              <div class="col-lg-7">
                <div class="banner-img">
                  <img class="img-fluid" src="" alt="">
                </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- End Banner Area -->

<!-- Start ORMAWA Section -->
<section class="section_gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h1>Universitas</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="single-ormawa">
                    <img src="{{ asset('assets/templates/user/img/bem.jpg') }}" alt="BPM KM">
                    <h4>Badan Perwakilan Mahasiswa (BPM KM)</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="single-ormawa">
                    <img src="{{ asset('assets/templates/user/img/hmti.jpg') }}" alt="BEM KM">
                    <h4>Badan Eksekutif Mahasiswa (BEM KM)</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="single-ormawa">
                    <img src="{{ asset('assets/templates/user/img/ormawa/adc.png') }}" alt="ADC">
                    <h4>Atma Jaya Debating Club (ADC)</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="single-ormawa">
                    <img src="{{ asset('assets/templates/user/img/ormawa/fodim.png') }}" alt="Fodim">
                    <h4>Forum Diskusi Ilmiah Mahasiswa (Fodim)</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End ORMAWA Section -->

@endsection