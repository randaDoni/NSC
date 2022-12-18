@extends('layouts.master')
@section('content')

  {{-- <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{URL::asset('/dashboard/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('/dashboard/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{URL::asset('/dashboard/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('/dashboard/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('/dashboard/aos/aos.css" rel="stylesheet')}}">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- Template Main CSS File -->
  <link href="{{URL::asset('/assets/css/main.css')}}" rel="stylesheet"> --}}

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="rounded-4 card_profile shadow-lg">
                <div class="d-flex justify-content-center ">
                                <img class="foto_profil rounded-circle border border-light border-4" src="@if(!empty(Auth::user()->foto_profile)) {{asset(Auth::user()->foto_profile)}} @else https://avatars.dicebear.com/api/initials/{{ Auth::user()->name  ?? null}}.svg?margin=10 @endif" width="200px" height="200px">
                  </div>
          <div class="detail_profil d-flex justify-content-center">
            <div class="detail_profil_wrap text-center">
              <a href="/dashboarduser/edit"><h4><b class="title_nama" style="font-family: 'Merriweather', serif; font-size:30px;">{{$profile->name}}</b></h4>
                <p><i class="title_email">{{$profile->email}}</i></p>
                <p><i class="title_email">{{Auth::user()->getRoleNames()->implode(", ")}}</i></p></a>
            </div>
          </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid   container">
{{-- col-xl-6 col-sm-6 col-lg-6 mb-5 mt-5 --}}
        <div class="row gy-4 justify-content-center">
          @if(count($null) >= 1)
          <h1 class="header-title display-4 fw-bold text-primary font-sans-serif header text-center">WAITING RESPONSE</h1>
          @endif
          @foreach ($null as $nulls => $row)
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card border-100 h-100 shadow">
              <div class="card-body p-4 h-100"><img class="w-100" src="{{$row->gambar}}" alt="" />
                <div class="d-flex justify-content-between mt-3 border-bottom border-100 py-2"><span class="badge bg-soft-info rounded-1 text-info fw-normal p-2">{{$row->jenisBerita}}</span>
                  <p class="mb-0 text-500">{{$row->created_at}}</p>
                </div>

                <h3 class="fw-normal fs-lg-1 fs-xxl-2 lh-sm mt-3">{{$row->judul}}</h3><a class="text-secondary" href="{{route('news.show',$row->id_news)}}">Read More</a>
              </div>
              <div class="row">
                 <div class="col-4 m-3">
                    <a href="{{route('update.berita',$row->id_news)}}">
                       @csrf
                       <button type="submit" class="btn btn-success">Update</button>
                    </a>
                 </div>
                 <div class="col-4 m-3">
                    <form action="{{route('delete.news',['id_news'=>$row->id_news])}}" method="POST">
                        @method('delete')
                        @csrf
                       <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                 </div>
              </div>
            </div>
          </div>
          @endforeach
          {{-- <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="card gallery-item h-100">
              <img src="{{$row->gambar}}" class="img-fluid" alt="">
              <div class="card-body">
                <h5 style="color:black" class="card-title">{{$row->judul}}</h5>
              </div>
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{route('update.berita',$row->id_news)}}" class="details-link"><i class="bi bi-arrow-up-circle"></i></a>
                    <form action="{{route('delete.news',['id_news'=>$row->id_news])}}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit"><i class="bi bi-trash details-link"></i></button>
                    </form>
              </div>
            </div>
          </div> --}}


          @if(count($approve) >= 1)
          <h1 class="header-title display-4 fw-bold text-primary font-sans-serif header text-center">APPROVED</h1>
          @endif

          @foreach ($approve as $approves => $row)
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card border-100 h-100 shadow">
              <div class="card-body p-4 h-100"><img class="w-100" src="{{$row->gambar}}" alt="" />
                <div class="d-flex justify-content-between mt-3 border-bottom border-100 py-2"><span class="badge bg-soft-info rounded-1 text-info fw-normal p-2">{{$row->jenisBerita}}</span>
                  <p class="mb-0 text-500">{{$row->created_at}}</p>
                </div>

                <h3 class="fw-normal fs-lg-1 fs-xxl-2 lh-sm mt-3">{{$row->judul}}</h3><a class="text-secondary" href="{{route('news.show',$row->id_news)}}">Read More</a>
              </div>
              <div class="row">
                <div class="col-4 m-3">
                    <a href="{{route('update.berita',$row->id_news)}}">
                       @csrf
                       <button type="submit" class="btn btn-success">Update</button>
                    </a>
                 </div>
                <div class="col-4 m-3">
                    <form action="{{route('delete.news',['id_news'=>$row->id_news])}}" method="POST">
                        @method('delete')
                        @csrf
                       <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                 </div>
              </div>
            </div>
          </div>
          @endforeach

          @if(count($decline) >= 1)
          <h1 class="header-title display-4 fw-bold text-primary font-sans-serif header text-center">DECLINED</h1>
          @endif
          <div class="row justify-content-center">
          @foreach ($decline as $declines => $row)
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card border-100 h-100 shadow">
              <div class="card-body p-4 h-100"><img class="w-100" src="{{$row->gambar}}" alt="" />
                <div class="d-flex justify-content-between mt-3 border-bottom border-100 py-2"><span class="badge bg-soft-info rounded-1 text-info fw-normal p-2">{{$row->jenisBerita}}</span>
                  <p class="mb-0 text-500">{{$row->created_at}}</p>
                </div>

                <h3 class="fw-normal fs-lg-1 fs-xxl-2 lh-sm mt-3">{{$row->judul}}</h3><a class="text-secondary" href="{{route('news.show',$row->id_news)}}">Read More</a>
              </div>
              <div class="row container-sm">
                <div class="col-4 m-3">
                    <a href="{{route('update.berita',$row->id_news)}}">
                       @csrf
                       <button type="submit" class="btn btn-success">Update</button>
                    </a>
                 </div>
                <div class="col-4 m-3">
                    <form action="{{route('delete.news',['id_news'=>$row->id_news])}}" method="POST">
                        @method('delete')
                        @csrf
                       <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                 </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->

  {{-- <!-- ======= Footer ======= -->
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
  </footer><!-- End Footer --> --}}

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>



  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

