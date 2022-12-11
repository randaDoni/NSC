@extends('layouts.master')
@section('content')
<title>Detail Kompetisi</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="{{URL::asset('/style1.css')}}" media="screen" />
<link rel="stylesheet" href="{{URL::asset('/dashboard/bootstrap/css/bootstrap.min.css')}}">
<br>
<body class="mt-6">
<div id="site">
  <div class="center-wrapper">
    <div class="main" id="main-two-columns">
      <div class="left" id="main-left">
          <div class="post">
            <div class="post-title text-dark">
              <h1>{{$berita->judul}}</h1>
            </div>
            <div class="card mt-3 mb-3" style="width: 42 rem;">
              <a href="#">
                <img src="{{asset($berita->gambar)}}" class="card-img-top" alt="...">
              </a>
            </div>
          </div>
          <div class="post-body">
            <h6>Tanggal Pendaftaran : {{$berita->PembukaanPendaftaran}} s/d {{$berita->PenutupanPendaftaran}}</h6>
            <h6>Pengumuman : {{$berita->tanggalPengumuman}} </h6>
            <h6>Tingkat Kompetisi : {{$berita->tingkatKompetisi}}</h6>
            <hr>
            <h6>Deskripsi : </h6>
            <p>{{$berita->deskripsi}}</p>
          </div>
          <hr>
          <div class="post-body">
            <a href="http://{{$berita->linkPendaftaran}}"> Link Pendaftaran </a>
          </div>
          <hr>
        </div>


    {{-- iklan --}}
      <div class="right sidebar" id="sidebar">
        <div class="section">
            <div class="section-title">
              <div class="left">Latest News</div>
              <div class="right"><img src="img/icon-time.gif" width="14" height="14" alt="" /></div>
              <div class="clearer">&nbsp;</div>
            </div>
            <div class="section-content">
              <ul class="nice-list">
                @foreach ($urutan as $urutans)
                <li>
                  <div class="left"><a href="#">{{$urutans->judul}}</a></div>
                  <div class="right">{{$urutans->tanggal}}</div>
                  <div class="clearer">&nbsp;</div>
                </li>
                <li><a href="#" class="more">Browse all &#187;</a></li>
                @endforeach
              </ul>
            </div>
          </div>
      </div>
      <div class="clearer">&nbsp;</div>
</div>
</div>
    {{-- <div id="dashboard">
      <div class="column left" id="column-1">
        <div class="column-content">
          <div class="column-title">About Simple Magazine</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a href="#">Learn more &#187;</a> </div>
      </div>
      <div class="column left" id="column-2">
        <div class="column-content">
          <div class="column-title">Follow Us (RSS)</div>
          <ul class="plain-list">
            <li><a href="#" class="feed">Lorem ipsum</a></li>
            <li><a href="#" class="feed">Dolor sit amet</a></li>
            <li><a href="#" class="feed">Consectetur</a></li>
            <li><a href="#" class="feed">Adipicing elit</a></li>
          </ul>
        </div>
      </div>
      <div class="column left" id="column-3">
        <div class="column-content">
          <div class="column-title">Help &amp; Support</div>
          <p>Quam velit dapibus quam, ornare suscipit tortor nisl ut tellus.</p>
          <a href="#">Frequently Asked Questions (FAQ) &#187;</a> </div>
      </div>
      <div class="column right" id="column-4">
        <div class="column-content">
          <div class="column-title">Get in touch</div>
          <p>Phone: +46 7152 5412<br/>
            Email: info@simplemagazine.com</p>
          <a href="#">Online contact form &#187;</a> </div>
      </div>
      <div class="clearer">&nbsp;</div>
    </div>
    <div id="footer">
      <div class="left">&copy; 2003-2009 Simple Magazine <span class="text-separator">&rarr;</span> <a href="#">Home</a> <span class="text-separator">|</span><a href="#">News</a> <span class="text-separator">|</span> <a href="#">Politics</a> <span class="text-separator">|</span> <a href="#">Culture</a> <span class="text-separator">|</span> <a href="#">Sport</a> <span class="text-separator">|</span> <a href="#">Debate</a> <span class="text-separator">|</span> <a href="#">Entertainment</a></div>
      <div class="right"><a href="http://templates.arcsin.se/">Website template</a> by <a href="http://arcsin.se/">Arcsin</a></div>
      <div class="clearer">&nbsp;</div>
    </div>
  </div>
</div> --}}
</body>
</html>
