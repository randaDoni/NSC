@extends('layouts.master')
@section('content')
@section('menuBeasiswa','active')
<section class="pt-0 pb-5">

          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="mb-4">
                  <h1 class="header-title display-4 fw-bold text-primary font-sans-serif header text-center">RECENT POST</h1>
                </div>
                <div class="row justify-content-center">
        @foreach ( $berita as $beritas )
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card border-100 h-100 shadow">
                <div class="card-body p-4 h-100"><img class="w-100" src="{{$beritas->gambar}}" alt="" />
                <div class="d-flex justify-content-between mt-3 border-bottom border-100 py-2"><span class="badge bg-soft-info rounded-1 text-info fw-normal p-2">{{$beritas->jenisBerita}}</span>
                    <p class="mb-0 text-500">{{$beritas->created_at}}</p>
                </div>
                <h3 class="fw-normal fs-lg-1 fs-xxl-2 lh-sm mt-3">{{$beritas->judul}}</h3><a class="text-secondary stretched-link" href="{{route('news.show',$beritas->id_news)}}">Read More</a>
                </div>
            </div>
            </div>
        @endforeach
                </div>
            </section>
@endsection
