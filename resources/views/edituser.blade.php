@extends('layouts.master')
@section('content')
<body>

  <!-- Favicons -->
  <link href="{{asset('/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="{{asset('/https://fonts.googleapis.com')}}">
  <link rel="preconnect" href="{{asset('/https://fonts.gstatic.com')}}" crossorigin>
  <link href="{{asset('/https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap')}}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  {{-- <link href="{{asset('/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/aos/aos.css')}}" rel="stylesheet"> --}}

  <!-- Template Main CSS File -->
  <link href="/main.css" rel="stylesheet">




  <!-- ======= Header ======= -->


<main id="main" data-aos="fade" data-aos-delay="1500" class="pt-3">
  <h3 class="mt-3" style="margin-left: 25px" ><i class="fa-solid fa-table"></i> Input Beasiswa </h3>
    <form action="{{route('update.user')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="pt-2 mb-5" style="margin-top: 10px;">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="card">
            <div class="card-header"style="background-color: #102744">
                <h3 class="text-white" style="text-align:center;">EDIT PROFIL</h3>
            </div>
             <div class="card-body">
              {{-- form pertama --}}
                    <div class="m-2">
                      {{-- Beasiswa --}}
                        <label class="form-label " for="judul">Nama</label>
                        <input class="form-control" type="text" name="name" class="form-control" value="{{Auth::user()->name}}">
                    </div>
                    <div class="m-2">
                        {{-- Beasiswa --}}
                          <label class="form-label " for="judul">Email</label>
                          <input class="form-control" type="text" name="email" class="form-control" value="{{Auth::user()->email}}">
                      </div>
                    <div class="m-2">
                        {{-- Beasiswa --}}
                          <label class="form-label " for="judul">Password Baru</label>
                          <input class="form-control" type="password" name="password" class="form-control" >
                          <p><i>Kosongkan jika tidak diubah</i></p>
                      </div>
                      <div class="m-2">
                        {{-- Beasiswa --}}
                          <label class="form-label " for="judul">Password Baru Konfirmasi</label>
                          <input class="form-control" type="password" name="password_confirmation" class="form-control" >
                          <p><i>Kosongkan jika tidak diubah</i></p>
                      </div>
                    <div class="m-2">
                      <label class="form-label" for="foto_profile">Foto Profil</label>
                      <input class="form-control" type="file" name="foto_profile" id="foto_profile">
                      @error('foto_profile')
                      <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>
                    {{-- Kategori Beasiswa --}}
                <center>
                <button class="btn mb-3 mt-3 text-white" style="background-color:#102744;" type="submit"name="tambah">Upload</button>
                </center>
                </div>
              </div>
            </div>
        </div>
    </div>

  </form>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
  $(document).ready(function() {
      $('#summernote').summernote();
  });
</script>

</body>
</html>
