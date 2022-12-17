@extends('layouts.master')
@section('content')
{{-- <title>Detail Beasiswa</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="{{URL::asset('/style1.css')}}" media="screen" />
<link rel="stylesheet" href="{{URL::asset('/dashboard/bootstrap/css/bootstrap.min.css')}}"> --}}
<br>
<div id="site">
  <div class="center-wrapper">

    <div class="main" id="main-two-columns">
      <div class="left" id="main-left">
          <div class="post">
            <br>
            <br>
            <br>
            <br>
            <div class="post-title">
              <h1>{{$berita->judul}}</h1>
            </div>
                <div class="card mt-3 mb-3" style="width: 42 rem;">
                    <img src="{{asset($berita->gambar)}}" class="card-img-top" alt="...">
                </div>

          </div>
          <div class="post-body">
            <h6>Upload by : {{$uploader->name}}</h6>
            <h6>Tanggal Pendaftaran : {{$berita->tanggalPembukaan}} s/d {{$berita->tanggalPenutupan}}</h6>
            <h6>Kategori : {{$berita->kategoriBeasiswa}}</h6>
            <h6>Jenis : {{$berita->jenisBeasiswa}}</h6>
            <h6>Region : {{$berita->region}}</h6>
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
    <div class= "d-none d-xl-block d-xxl-none">
      <div class="right sidebar" id="sidebar">
        <div class="section">
            <br>
            <br>
            <br>
            <br>
          <div class="section-title">
            <div class="left">Latest News</div>
            <div class="clearer">&nbsp;</div>
          </div>

            <div class="section-content">
            <ul class="nice-list">
              @foreach ($latest as $latests)
                <li>
                    <div class="left"><a href="{{route('news.show',['id_news'=>$latests->id_news])}}">{{$latests->judul}}</a></div>
                    <div class="right">{{$latests->tanggal}}</div>
                    <div class="clearer">&nbsp;</div>
                  </li>
              <li>
              @endforeach
            </ul>
          </div>
          </div>

        </div>
      </div>
      <div class="clearer">&nbsp;</div>
</div>
</div>
<br>
<br>
</body>
</html>
