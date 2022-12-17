@extends('layouts.master')
@section('content')

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
  <link href="{{asset('/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="main.css" rel="stylesheet">




<body>

  <!-- ======= Header ======= -->


<main id="main" data-aos="fade" data-aos-delay="1500" class="pt-3">
  <h3 class="mt-3" style="margin-left: 25px" ><i class="fa-solid fa-table"></i> Input Informasi Kompetisi </h3>
    <form action="{{route('proses.update.kompetisi',['id_news'=>$update->id_news])}}" method="POST" enctype="multipart/form-data">
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
                        <input class="form-control" type="text" name="judul" class="form-control"  value="{{$update->judul}}">
                        @error('judul')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- Tingkat Kompetisi --}}
                    <div class="m-2">
                      <label class="form-label" for="tingkatKompetisi">Tingkat Kompetisi</label>
                      <select class="selectpicker form-control" name="tingkatKompetisi" id="tingkatKompetisi" data-live-search="true">
                        <option value="Umum">Umum</option>
                        <option value="SMP/Sederajat">SMP/Sederajat</option>
                        <option value="SMA/SMK/MA/Sederajat">SMA/SMK/MA/Sederajat</option>
                        <option value="D1/D2/D3/D4/S1">D1/D2/D3/D4/S1</option>
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
                    <input class="form-control" type="date" name="tanggalPembukaan" aria-label="With textarea" value="{{$update->tanggalPembukaan}}">
                    @error('PembukaanPendaftaran')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-md-6">
                    <input class="form-control" type="date" name="tanggalPenutupan" aria-label="With textarea" value="{{$update->tanggalPenutupan}}">
                    @error('PenutupanPendaftaran')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                </div>
                {{-- Tangal Pengumuman --}}
                  <div class="m-2">
                    <label class="form-label" for="tanggalPengumuman">Pengumuman Pemenang</label>
                    <input class="form-control" type="date" name="tanggalPengumuman" aria-label="With textarea" value="{{$update->tanggalPengumuman}}">
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
                      <input class="form-control" type="text" name="linkPendaftaran" placeholder="www.example.com" value="{{$update->linkPendaftaran}}">
                      @error('linkPendaftaran')
                      <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>
                  {{-- Deskripsi --}}
                  <div class="m-2">
                    <label class="form-label" for="deskripsi">Deskripsi</label>
                    <textarea class="form-control summernote" type="text-field" name="deskripsi" aria-label="With textarea" value="{{$update->deskripsi}}"></textarea>
                    @error('deskripsi')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <center>
                <button class="btn mb-3 mt-3 text-white" style="background-color:#102744;" type="submit" name="tambah">Upload</button>
                </center>
                </div>
              </div>
            </div>
        </div>
    </div>

  </form>

  <!-- Vendor JS Files -->
  <script src="{{asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('/assets/js/main.js')}}"></script>
  <script src="{{asset('/https://code.jquery.com/jquery-3.6.0.js')}}" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="{{asset('/https://code.jquery.com/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('/https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js')}}"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="{{asset('/https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js')}}"></script>
<script>
  $(document).ready(function() {
      $('#summernote').summernote();
  });
</script>

</body>
</html>
