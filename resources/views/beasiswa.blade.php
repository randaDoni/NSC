@extends('layouts.master')
@section('content')
@section('menuBeasiswa','active')
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<style>
  .besiswa1:hover {
  -ms-transform: scale(1.0); /* IE 9 */
  -webkit-transform: scale(1.0); /* Safari 3-8 */
  transform: scale(1.2);
}
</style>
      <!-- ============================================-->
      <!-- Beasiswa Content di Home ============================-->
      <section class="py-6 bg-primary">

        <div class="container">
          <div class="row">
            <h1 class="display-4 lh-lg fw-bold text-light text-center font-sans-serif text-start mb-3">BEASISWA</h1>
            <div class="col-sm-6 besiswa1 gambar1 col-lg-4 mb-4">
              <div class="card  p-2 h-100">
                <div class="position-relative"><img class="w-100" src="assets/img/logos/s1.jpeg" alt="courses" />
                </div>
                <div class="card-body  gambar1 px-0 py-3">
                  <h5 class="mb-0 ms-1 font-sans-serif fw-bold fs-md-0 fs-lg-1">Beasiswa S1</h5>
                  <a class="ms-1 text-muted fs--1 stretched-link text-decoration-none" href="{{url('/beasiswaS1')}}">Ikuti Informasi Beasiswa S1</a>
                </div>
                <a class="text-decoration-none text-end mt-3 text-primary mb-2" href="{{url('/beasiswaS1')}}" role="button">Read More
                  <svg class="bi bi-arrow-right text-primary ms-1 me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg></a>
              </div>
            </div>
            <div class="col-sm-6 besiswa1 col-lg-4 mb-4">
              <div class="card p-2 h-100">
                <div class="position-relative"><img class="w-100" src="assets/img/logos/s2.jpeg" alt="courses" />
                </div>
                <div class="card-body px-0 py-3">
                  <h5 class="mb-0 ms-1 font-sans-serif fw-bold fs-md-0 fs-lg-1">Beasiswa S2</h5>
                  <a class="ms-1 text-muted fs--1 stretched-link text-decoration-none" href="{{url('/beasiswaS2')}}">Ikuti Informasi Beasiswa S2</a>
                </div>
                <a class="text-decoration-none text-end mt-3 text-primary mb-2" href="{{url('/beasiswaS2')}}" role="button">Read More
                  <svg class="bi bi-arrow-right text-primary ms-1 me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg></a>
              </div>
            </div>
            <div class="col-sm-6 besiswa1 col-lg-4 mb-4">
              <div class="card p-2 h-100">
                <div class="position-relative"><img class="w-100" src="assets/img/logos/s3.jpeg" alt="courses" />
                </div>
                <div class="card-body px-0 py-3">
                  <h5 class="mb-0 ms-1 font-sans-serif fw-bold fs-md-0 fs-lg-1">Beasiswa S3</h5>
                  <a class="ms-1 text-muted fs--1 stretched-link text-decoration-none" href="{{url('/beasiswaS3')}}">Ikuti Informasi Beasiswa S3</a>
                </div>
                <a class="text-decoration-none text-end mt-3 text-primary mb-2" href="{{url('/beasiswaS3')}}" role="button">Read More
                  <svg class="bi bi-arrow-right text-primary ms-1 me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg></a>
              </div>
            </div>



