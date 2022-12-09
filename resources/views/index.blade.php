@extends('layouts.master')
@section('content')
@section('menuHome','active')
      <div class="py-7 py-sm-8 py-lg-10 py-xxl-9 py-xxl-11" style="background-color:#10203F;"></div>
      <section class="mb-n9 mb-lg-n11 p-0" style="transform: translateY(calc(-50% - 25px));">
        <div class="container-fluid">
          <div class="position-relative hero-carousel-container" id="heroCarouselContainer">
            <div class="position-absolute translate-middle d-none d-xxl-block"><img src="assets/img/illustrations/bg-circle.png" alt="" /></div>
            <div class="position-absolute top-0 d-none d-lg-block" style="right: -16px;">
              <div class="bg-carousel-soft-primary position-relative" id="heroSlidercounterContainer">
                <div class="hero-slider-counter" id="heroSlidercounter"> 01 </div>
              </div>
            </div>
            <div class="carousel slide" id="hero-carousel" data-bs-ride="carousel">
              <div class="slider-rectangle z-index-2 d-none d-xxl-block"><img src="assets/img/gallery/rectangle-s.png" alt="" /></div>
              <div class="position-relative">
                <div class="hero-social-icons d-none d-lg-block">
                  <ul class="list-unstyled list-inline">
                    <li class="list-inline-item mr-2"><a class="text-decoration-none" href="#!"><img class="list-social-icon" src="assets/img/icons/instagram.png" width="30" alt="..." /></a></li>
                    <li class="list-inline-item mr-2"><a class="text-decoration-none" href="#!"><img class="list-social-icon" src="assets/img/icons/facebook.png" width="30" alt="..." /></a></li>
                    <li class="list-inline-item mr-2"><a class="text-decoration-none" href="#!"><img class="list-social-icon" src="assets/img/icons/twitter.png" width="30" alt="..." /></a></li>
                  </ul>
                </div>
                <div class="carousel-inner" id="heroCarouselInner">
                  <div class="carousel-item active"><img class="d-block w-100" src="assets/img/gallery/header-slider-1.png" height="500" alt="..." />
                    <div class="carousel-caption d-none d-sm-block">
                      <h1 class="display-4 text-light text-start fw-light fs-2 fs-md-3 fs-lg-4 fs-xl-5">Jika mimpimu <strong>BELUM TERCAPAI </strong>, jangan ubah mimpimu, tapi <strong>ubahlah strategimu.</strong>
                      <br class="" style="align-right">-Bj.Habibie </h1>
                    </div>
                  </div>
                  <div class="carousel-item"><img class="d-block w-100" src="assets/img/gallery/beasiswa.jpg" height="500" alt="..." />
                    <div class="carousel-caption d-none d-sm-block">
                      <h1 class="display-4 text-light text-start fw-light fs-2 fs-md-3 fs-lg-4 fs-xl-5">Temukan beasiswa impianmu di <strong>NSC</strong><br class="d-none d-xxl-block" />eksplor banyak beasiswa yang ada di Indonesia</h1>
                    </div>
                  </div>
                  <div class="carousel-item"><img class="d-block w-100" src="assets/img/gallery/kompetisi.jpg" height="500" alt="..." />
                    <div class="carousel-caption d-none d-sm-block">
                      <h1 class="display-4 text-light text-start fw-light fs-2 fs-md-3 fs-lg-4 fs-xl-5"><strong>Tantang dirimu</strong> dengan mengikuti <strong>KOMPETISI</strong><br />agar mimpimu semakin mudah dicapai</h1>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row g-0">
                <div class="col-3 position-relative">
                  <div class="carousel-indicators justify-content-start custom-indicators">
                    <button class="active" type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"> </button>
                  </div>
                </div>
                <div class="col-9 position-relative">
                  <div class="card" style="background-color:#10203F;">
                    <div class="card-body border-bottom border-primary p-2 px-md-4 py-md-3 py-xl-4 p-sm-3">
                      <div class="d-md-flex flex-between-center">
                        <p class="mb-0 text-primary fs-2"><strong>250,998 </strong>Bersama Mencari Beasiswa dan Kompetisi</p>
                        <a class="text-decoration-none text-end mt-3 text-light fw-bold" href="#!" role="button">Read More
                          <svg class="bi bi-arrow-right text-primary ms-2" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                          </svg></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
        </div>
      </section>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section class="pt-0 pb-5">

          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="mb-4">
                  <h1 class="header-title display-4 fw-bold text-primary font-sans-serif header text-center">RECENT POST</h1>
                </div>
                <div class="row">

                  @foreach ( $berita as $beritas )
                  <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card border-100 h-100 shadow">
                      <div class="card-body p-4 h-100"><img class="w-100" src="{{$beritas->gambar}}" alt="" />
                        <div class="d-flex justify-content-between mt-3 border-bottom border-100 py-2"><span class="badge bg-soft-info rounded-1 text-info fw-normal p-2">Essay</span>
                          <p class="mb-0 text-500">{{$beritas->created_at}}</p>
                        </div>
                        <h3 class="fw-normal fs-lg-1 fs-xxl-2 lh-sm mt-3">{{$beritas->judul}}</h3><a class="text-secondary stretched-link" href="{{route('news.show',$beritas->id_news)}}">Read More</a>
                      </div>
                    </div>
                  </div>
                  @endforeach
          </div>
          <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

      <!-- ============================================-->
      <!-- Beasiswa Content di Home ============================-->
      <section class="py-5 bg-primary">

        <div class="container">
          <div class="row">
            <h1 class="display-4 lh-lg fw-bold text-light font-sans-serif text-start mb-3">BEASISWA POPULER</h1>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card p-2 h-100">
                <div class="position-relative"><img class="w-100" src="assets/img/logos/s1.jpeg" alt="courses" />
                </div>
                <div class="card-body px-0 py-3">
                  <h5 class="mb-0 ms-1 font-sans-serif fw-bold fs-md-0 fs-lg-1">Beasiswa S1</h5>
                  <a class="ms-1 text-muted fs--1 stretched-link text-decoration-none" href="#!">Ikuti Informasi Beasiswa S1</a>
                </div>
                <a class="text-decoration-none text-end mt-3 text-primary mb-2" href="#!" role="button">Read More
                  <svg class="bi bi-arrow-right text-primary ms-1 me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg></a>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card p-2 h-100">
                <div class="position-relative"><img class="w-100" src="assets/img/logos/s2.jpeg" alt="courses" />
                </div>
                <div class="card-body px-0 py-3">
                  <h5 class="mb-0 ms-1 font-sans-serif fw-bold fs-md-0 fs-lg-1">Beasiswa S2</h5>
                  <a class="ms-1 text-muted fs--1 stretched-link text-decoration-none" href="#!">Ikuti Informasi Beasiswa S2</a>
                </div>
                <a class="text-decoration-none text-end mt-3 text-primary mb-2" href="#!" role="button">Read More
                  <svg class="bi bi-arrow-right text-primary ms-1 me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg></a>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card p-2 h-100">
                <div class="position-relative"><img class="w-100" src="assets/img/logos/s3.jpeg" alt="courses" />
                </div>
                <div class="card-body px-0 py-3">
                  <h5 class="mb-0 ms-1 font-sans-serif fw-bold fs-md-0 fs-lg-1">Beasiswa S3</h5>
                  <a class="ms-1 text-muted fs--1 stretched-link text-decoration-none" href="#!">Ikuti Informasi Beasiswa S3</a>
                </div>
                <a class="text-decoration-none text-end mt-3 text-primary mb-2" href="#!" role="button">Read More
                  <svg class="bi bi-arrow-right text-primary ms-1 me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg></a>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card p-2 h-100">
                <div class="position-relative"><img class="w-100" src="assets/img/logos/ln.jpeg" alt="courses" />
                </div>
                <div class="card-body px-0 py-3">
                  <h5 class="mb-0 ms-1 font-sans-serif fw-bold fs-md-0 fs-lg-1">Beasiswa Luar Negeri</h5>
                  <a class="ms-1 text-muted fs--1 stretched-link text-decoration-none" href="#!">Ikuti Informasi Beasiswa Luar Negeri</a>
                </div>
                <a class="text-decoration-none text-end mt-3 text-primary mb-2" href="#!" role="button">Read More
                  <svg class="bi bi-arrow-right text-primary ms-1 me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg></a>
              </div>
            </div>

        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- Kompetisi Content di Home ============================-->
      <section class="py-5 bg-light">

        <div class="container">
          <div class="row">
            <h1 class=" display-4 lh-lg fw-bold text-primary font-sans-serif text-end mb-3">KOMPETISI POPULER</h1>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card p-2 h-100">
                <div class="position-relative"><img class="w-100" src="assets/img/logos/umum.jpeg" alt="courses" />
                </div>
                <div class="card-body px-0 py-3">
                  <h5 class="mb-0 ms-1 font-sans-serif fw-bold fs-md-0 fs-lg-1">Kompetisi Umum</h5>
                  <a class="ms-1 text-muted fs--1 stretched-link text-decoration-none" href="#!">Artistic</a>
                </div>
                <a class="text-decoration-none text-end mt-3 text-primary mb-2" href="#!" role="button">Read More
                  <svg class="bi bi-arrow-right text-primary ms-1 me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg></a>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card p-2 h-100">
                <div class="position-relative"><img class="w-100" src="assets/img/logos/mhs.jpeg" alt="courses" />
                </div>
                <div class="card-body px-0 py-3">
                  <h5 class="mb-0 ms-1 font-sans-serif fw-bold fs-md-0 fs-lg-1">Kompetisi Mahasiswa</h5>
                  <a class="ms-1 text-muted fs--1 stretched-link text-decoration-none" href="#!">Mathematic</a>
                </div>
                <a class="text-decoration-none text-end mt-3 text-primary mb-2" href="#!" role="button">Read More
                  <svg class="bi bi-arrow-right text-primary ms-1 me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg></a>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card p-2 h-100">
                <div class="position-relative"><img class="w-100" src="assets/img/logos/nasional.jpeg" alt="courses" />
                </div>
                <div class="card-body px-0 py-3">
                  <h5 class="mb-0 ms-1 font-sans-serif fw-bold fs-md-0 fs-lg-1">Kompetisi Nasional</h5>
                  <a class="ms-1 text-muted fs--1 stretched-link text-decoration-none" href="#!">Electric</a>
                </div>
                <a class="text-decoration-none text-end mt-3 text-primary mb-2" href="#!" role="button">Read More
                  <svg class="bi bi-arrow-right text-primary ms-1 me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg></a>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card p-2 h-100">
                <div class="position-relative"><img class="w-100" src="assets/img/logos/inter.jpeg" alt="courses" />
                </div>
                <div class="card-body px-0 py-3">
                  <h5 class="mb-0 ms-1 font-sans-serif fw-bold fs-md-0 fs-lg-1">Kompetisi Internasional</h5>
                  <a class="ms-1 text-muted fs--1 stretched-link text-decoration-none" href="#!">Chemistry</a>
                </div>
                <a class="text-decoration-none text-end mt-3 text-primary mb-2" href="#!" role="button">Read More
                  <svg class="bi bi-arrow-right text-primary ms-1 me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg></a>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section class="bg-primary py-0">
            <div class="container">
              <div class="row">
                <div class="col-2 col-sm-2 col-lg-2 mt-3 mb-2 d-flex justify-content-start">
                  <a class="text-decoration-none" href="/">
                    <img src="./assets/img/logos/tubes.png" height="150" alt="..." />
                  </a>
                </div>
                <div class="col-6 col-sm-6 col-lg-6 mb-5 mt-5 ">
                  <p class="text-light">NSC merupakan platform yang berisi kumpulan berita <br class="d-none d-sm-block" />atau informasi mengenai beasiswa maupun kompetisi <br class="d-none d-sm-block" />yang akan diselenggarakan kedepannya di seluruh Indonesia<br class="d-none d-sm-block" /></p>
                </div>
                <div class="col-2 col-sm-2 col-lg-2 mt-3 mb-3">
                  <h3 class="lh-lg fw-bold mb-1 text-light font-sans-serif">Information</h3>
                  <ul class="list-unstyled mb-md-4 mb-lg-0">
                    <li class="lh-lg"><a class="text-light" href="#!">About us</a></li>
                    <li class="lh-lg"><a class="text-light" href="#!">Instagram</a></li>
                    <li class="lh-lg"><a class="text-light" href="#!">Twitter</a></li>
                    <li class="lh-lg"><a class="text-light" href="#!">Facebook</a></li>
                  </ul>
                </div>
                <div class="col-2 col-sm-2 col-lg-2 mt-3 mb-3">
                  <h3 class="lh-lg fw-bold text-light mb-1 font-sans-serif">Help</h3>
                  <ul class="list-unstyled mb-md-4 mb-lg-0">
                    <li class="lh-lg"><a class="text-light" href="#!">Services</a></li>
                    <li class="lh-lg"><a class="text-light" href="#!">Supports</a></li>
                    <li class="lh-lg"><a class="text-light" href="#!">Terms & Condition</a></li>
                    <li class="lh-lg"><a class="text-light" href="#!">Privacy Policy</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end of .container-->
          </section>
@endsection
          <!-- <section> close ============================-->
          <!-- ============================================-->
