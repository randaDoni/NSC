@extends('layouts.master')
@section('content')
<title>Detail Kompetisi</title>

<div id="site" class="container">
  <div class="center-wrapper">
    <div class="main" id="main-two-columns">
      <div class="left" id="main-left">
          <div class="post">
            <br>
            <br>
            <br>
            <br>
            <div class="post-title text-dark">
              <h1>{{$berita->judul}}</h1>
            </div>
            <div>
              <a href="#">
                <img src="{{asset($berita->gambar)}}" class="card-img-top mx-10 px-10 w-75 p-3" alt="...">
              </a>
            </div>
          </div>
          <div class="post-body">
            <h6>Upload by : {{$uploader->name}}</h6>
            <h6>Tanggal Pendaftaran : {{$berita->tanggalPembukaan}} s/d {{$berita->tanggalPenutupan}} by {{$uploader->name}}</h6>
            <h6>Pengumuman : {{$berita->tanggalPengumuman}} </h6>
            <h6>Tingkat Kompetisi : {{$berita->tingkatKompetisi}}</h6>
            <hr>
            <h6>Deskripsi : </h6>
            <p>{!!$berita->deskripsi!!}</p>
          </div>
          <hr>
          <div class="post-body">
            <a href="http://{{$berita->linkPendaftaran}}"> Link Pendaftaran </a>
          </div>
          <hr>
        </div>


    {{-- iklan --}}
     {{-- <div class= "d-none d-lg-block d-xl-none">
      <div class="right sidebar" id="sidebar">
        <div class="section">
            <br>
            <br>
            <br>
            <br>
            <div class="section-title">
              <div class="left">Latest News</div>
              <div class="right"><img src="img/icon-time.gif" width="14" height="14" alt="" /></div>
              <div class="clearer">&nbsp;</div>
            </div>
            <div class="section-content">
                <ul class="nice-list">
                    @foreach ($latest as $latests)
                      <li>j
                          <div class="left"><a href="{{route('news.show',['id_news'=>$latests->id_news])}}">{{$latests->judul}}</a></div>
                          <div class="right">{{$latests->tanggal}}</div>
                          <div class="clearer">&nbsp;</div>
                        </li>
                    <li>
                    @endforeach
            </div>
        </div>
          </div>
      </div> --}}
      <div class="clearer">&nbsp;</div>
</div>
</div>
<br>
<br>
</body>
</html>
