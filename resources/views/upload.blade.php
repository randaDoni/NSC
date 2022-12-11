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
  <h3 class="mt-3" style="margin-left: 25px" ><i class="fa-solid fa-table"></i> Input Informasi Kompetisi </h3>
    <form action="{{url('/prosesUploadKompetisi')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="pt-2 mb-5" style="margin-top: 10px;">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="card">
            <div class="card-header"style="background-color: #102744">
                <h3 class="text-white" style="text-align:center;">TAMBAH INFORMASI KOMPETISI</h3>
            </div>
             <div class="card-body">
              {{-- form pertama --}}
                    <div class="m-2">
                      {{-- Kompetisi --}}
                        <label class="form-label " for="judul">Judul</label>
                        <input class="form-control" type="text" name="judul" class="form-control" >
                        @error('judul')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- Kategori Kompetisi --}}
                    <div class="m-2">
                      <label class="form-label" for="tingkatKompetisi">Tingkat Kompetisi</label>
                      <select class="selectpicker form-control" name="tingkatKompetisi" id="tingkatKompetisi" data-live-search="true">
                        <option value="umum">Umum</option>
                        <option value="SD">SD/Sederajat</option>
                        <option value="SMP">SMP/Sederajat</option>
                        <option value="SMA">SMA/SMK/MA/Sederajat</option>
                        <option value="S1">D1/D2/D3/D4/S1</option>
                    </select>
                      @error('tingkatKompetisi')
                      <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>
                  {{-- Tanggal Kompetisi --}}
                  <div class="m-2">
                    <label class="form-label" for="date">Tanggal Pendaftaran</label>
                    <div class="row">
                    <div class="col-md-6">
                    <input class="form-control" type="date" name="PembukaanPendaftaran" aria-label="With textarea">
                    @error('PembukaanPendaftaran')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-md-6">
                    <input class="form-control" type="date" name="PenutupanPendaftaran" aria-label="With textarea">
                    @error('PenutupanPendaftaran')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                </div>
                  <div class="m-2">
                    <label class="form-label" for="tanggalPengumuman">Pengumuman Pemenang</label>
                    <input class="form-control" type="date" name="tanggalPengumuman" aria-label="With textarea">
                    @error('tanggalPengumuman')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                    {{-- Upload Gambar --}}
                    <div class="m-2">
                      <label class="form-label" for="gambar">Upload Gambar</label>
                      <input class="form-control" type="file" name="gambar" id="gambar">
                      @error('gambar')
                      <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="m-2">
                    {{-- Link Pendaftaran --}}
                      <label class="form-label" for="jenis">Link Pendaftaran</label>
                      <input class="form-control" type="text" name="linkPendaftaran">
                      @error('linkPendaftaran')
                      <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>
                  {{-- Deskripsi --}}
                  <div class="m-2">
                    <label class="form-label" for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" type="text-field" name="deskripsi" aria-label="With textarea"></textarea>
                    @error('deskripsi')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
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

</body>
</html>
