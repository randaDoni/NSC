@extends('layouts.master')
@section('content')

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="main.css" rel="stylesheet">




<body>

  <!-- ======= Header ======= -->


  <main id="main" data-aos="fade" data-aos-delay="1500" class="pt-3">
<form action="{{url('/prosesUploadNews')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- ======= Start Page Header ======= -->
    <div style="background-color: rgb(36, 126, 199);" class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>UNGGAH ARTIKEL</h2>
            <input type="text" name="judul" placeholder="Judul" class="form-control"  style="font-size: 28px; background-color:transparent !important; color:white">
          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Gallery Single Section ======= -->
    <section id="gallery-single" class="gallery-single">
      <div class="container">
        <div class="row justify-content-between gy-4 mt-4">
          <div class="col-lg-8">
            <div class="portfolio-description">
              <h2>Unggah Gambar</h2>
              <input type="file" class="form-control-file mb-3" style="background-color:transparent !important; color: black;" name="gambar" id="gambar">
              <h2>Caption</h2>
              <div class="input-group mt">
                <textarea name="caption" style="background-color:transparent !important; color:black; height: 1cm;" class="form-control" aria-label="With textarea"></textarea>
              </div>
              <h2>Deskripsi</h2>
              <div class="input-group mt">
                <textarea name="deskripsi" style="background-color:transparent !important; color:black; height: 6cm;" class="form-control" aria-label="With textarea"></textarea>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3 style="color: black;">Informasi Artikel</h3>
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-beasiswa-tab" data-bs-toggle="tab" data-bs-target="#nav-beasiswa" type="button" role="tab" aria-controls="nav-beasiswa" aria-selected="true">Beasiswa</button>
                  {{-- <button class="nav-link" id="nav-lomba-tab" data-bs-toggle="tab" data-bs-target="#nav-lomba" type="button" role="tab" aria-controls="nav-lomba" aria-selected="false">Lomba</button> --}}
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-beasiswa" role="tabpanel" aria-labelledby="nav-beasiswa-tab">
                  <ul>
                    <li class="mt-1">Kategori Beasiswa <span>
                      <select class="selectpicker form-control" name="kategoriBeasiswa" id="countries" data-live-search="true">
                        <option value="S1">Beasiswa Kuliah S1</option>
                        <option value="S2">Beasiswa Kuliah S2</option>
                        <option value="S3">Beasiswa Kuliah S3</option>
                    </select>
                    </span>
                    </li>
                    <li>Tanggal Pendaftaran<span>
                      <input name="tanggal" type="date"class="form-control mt-1">
                    </span></li>
                    <li>Link Pendaftaran <span>
                      <input type="text" name="linkPendaftaran"  class="form-control mt-1">
                    </span></li>
                    <li>Region<span>
                      <select class="selectpicker form-control" name="region" id="countries" data-live-search="true">
                        <option value="Beasiswa Dalam Negeri">Beasiswa Dalam Negeri</option>
                        <option value="Beasiswa Luar Negeri">Beasiswa Luar Negeri </option>
                    </select>
                    </span></li>
                    <li><input type="submit" class="btn-visit align-self-start"></li>
                  </ul>
                </div>
                <div class="tab-pane fade" id="nav-lomba" role="tabpanel" aria-labelledby="nav-lomba-tab">
                  <ul>
                    <li class="mt-1">Kategori Lomba <span>
                      <input placeholder="Contoh : Lomba Qiroah" class="form-control mt-1" type="text" name="" id="">
                    </span></li>
                    <li>Jenjang <span>
                      <input placeholder="Contoh : SMA" class="form-control mt-1" type="text" name="" id="">
                    </span></li>
                    <li>Tanggal Pendaftaran<span>
                      <input type="date"class="form-control mt-1">
                    </span></li>
                    <li>Link Pendaftaran <span>
                      <input type="text"class="form-control mt-1">
                    </span></li>
                    <li><input type="submit" class="btn-visit align-self-start">UNGGAH</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Single Section -->
</form>
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
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $('.delete_file').hide();
        $('#upload_costum').change(function(event) {
            let tmppath = URL.createObjectURL(event.target.files[0])
            $('.image > img').fadeIn('fast').attr('src',tmppath)
            $('.delete_file').show();
            $('.choose_file').hide();
            $('.delete_file').click(function() {
                $('.image > img').fadeIn('fast').attr('src','')
              $('.delete_file').hide();
            })
        })
    </script>

</body>

</html>
