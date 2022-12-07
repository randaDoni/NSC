@extends('layouts.master')
@section('content')
@section('menuHome','active')
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{URL::to('/dashboard/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL::to('/dashboard/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{URL::to('/dashboard/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{URL::to('/dashboard/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{URL::to('/dashboard/aos/aos.css')}}" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- Template Main CSS File -->
  <link href="{{URL::to('/assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: PhotoFolio - v1.1.1
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->



  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="rounded-4 card_profile shadow-lg">
                <div class="d-flex justify-content-center ">
                        <form action="{{url('/upload_foto_profil')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="d-flex flex-column text-center image-upload">
                            <label for="file-input">
                                <img class="foto_profil rounded-circle border border-light border-4" src="/img/profile.jpg" width="200px" height="200px">
                            </label>
                            <input id="file-input" type="file" />
                            </div>
                        </form>
                  </div>
          <div class="detail_profil d-flex justify-content-center">
            <div class="detail_profil_wrap text-center">
              <h4><b class="title_nama" style="font-family: 'Merriweather', serif; font-size:30px;">{{$profile->name}}</b></h4>
              <p><i class="title_email">{{$profile->email}}</i></p>
            </div>
          </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="row gy-4 justify-content-center">
          @foreach ($user as $index => $row)
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="card gallery-item h-100">
              <img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt="">
              <div class="card-body">
                <h5 style="color:black" class="card-title">Programming System</h5>
              </div>
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-1.jpg" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="{{route('dashboard.user.show',$row->id)}}" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>PhotoFolio</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="{{URL::to('dashboard/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{URL::to('dashboard/swiper/swiper-bundle.min.js"></script')}}"></script>
  <script src="{{URL::to('dashboard/glightbox/js/glightbox.min.js"></script')}}"></script>
  <script src="{{URL::to('dashboard/aos/aos.js"></script>')}}"></script>
  <script src="{{URL::to('dashboard/php-email-form/validate.js"></script')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{URL::to('/assets/js/main.js')}}"></script>

</body>

