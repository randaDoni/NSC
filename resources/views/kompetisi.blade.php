@extends('layouts.master')
@section('content')
@section('menuKompetisi','active')
<style>
  .beasiswa2:hover {
  -ms-transform: scale(1.0); /* IE 9 */
  -webkit-transform: scale(1.0); /* Safari 3-8 */
  transform: scale(1.2);
}
</style>

      <!-- ============================================-->
      <!-- Kompetisi Content di Home ============================-->
      <section class="py-5 bg-light">

        <div class="container">
          <div class="row">
            <h1 class=" display-4 lh-lg fw-bold text-primary text-center font-sans-serif text-end mb-3">KOMPETISI</h1>
            <div class="col-sm-6 beasiswa2 col-lg-3 mb-4">
              <div class="card p-2 h-100">
                <div class="position-relative"><img class="w-100" src="assets/img/logos/umum.jpeg" alt="courses" />
                </div>
                <div class="card-body px-0 py-3">
                  <h5 class="mb-0 ms-1 font-sans-serif fw-bold fs-md-0 fs-lg-1">Kompetisi Umum</h5>
                  <a class="ms-1 text-muted fs--1 stretched-link text-decoration-none" href="{{url('/kompetisiUmum')}}">Kompetisi untuk segala jenis kalangan</a>
                </div>
                <a class="text-decoration-none text-end mt-3 text-primary mb-2" href="{{url('/kompetisiUmum')}}" role="button">Read More
                  <svg class="bi bi-arrow-right text-primary ms-1 me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg></a>
              </div>
            </div>
            <div class="col-sm-6 beasiswa2 col-lg-3 mb-4">
              <div class="card p-2 h-100">
                <div class="position-relative"><img class="w-100" src="assets/img/logos/mhs.jpeg" alt="courses" />
                </div>
                <div class="card-body px-0 py-3">
                  <h5 class="mb-0 ms-1 font-sans-serif fw-bold fs-md-0 fs-lg-1">Kompetisi SMP/Sederajat </h5>
                  <a class="ms-1 text-muted fs--1 stretched-link text-decoration-none" href="{{url('/kompetisiSMP')}}">Kompetisi untuk siswa SMP dan sederajatnya </a>
                </div>
                <a class="text-decoration-none text-end mt-3 text-primary mb-2" href="{{url('/kompetisiSMP')}}" role="button">Read More
                  <svg class="bi bi-arrow-right text-primary ms-1 me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg></a>
              </div>
            </div>
            <div class="col-sm-6 beasiswa2 col-lg-3 mb-4">
              <div class="card p-2 h-100">
                <div class="position-relative"><img class="w-100" src="assets/img/logos/nasional.jpeg" alt="courses" />
                </div>
                <div class="card-body px-0 py-3">
                  <h5 class="mb-0 ms-1 font-sans-serif fw-bold fs-md-0 fs-lg-1">Kompetisi SMA/SMK/MA/ Sederajat</h5>
                  <a class="ms-1 text-muted fs--1 stretched-link text-decoration-none" href="{{url('/kompetisiSMA')}}">Kompetisi untuk siswa SMA dan sederajatnya</a>
                </div>
                <a class="text-decoration-none text-end mt-3 text-primary mb-2" href="{{url('/kompetisiSMA')}}" role="button">Read More
                  <svg class="bi bi-arrow-right text-primary ms-1 me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg></a>
              </div>
            </div>
            <div class="col-sm-6 beasiswa2 col-lg-3 mb-4">
              <div class="card p-2 h-100">
                <div class="position-relative"><img class="w-100" src="assets/img/logos/inter.jpeg" alt="courses" />
                </div>
                <div class="card-body px-0 py-3">
                  <h5 class="mb-0 ms-1 font-sans-serif fw-bold fs-md-0 fs-lg-1">Kompetisi D1/D2/D3/D4/S1</h5>
                  <a class="ms-1 text-muted fs--1 stretched-link text-decoration-none" href="{{url('/kompetisiS1')}}">Kompetisi untuk Mahasiswa nih coy!</a>
                </div>
                <a class="text-decoration-none text-end mt-3 text-primary mb-2" href="{{url('/kompetisiS1')}}" role="button">Read More
                  <svg class="bi bi-arrow-right text-primary ms-1 me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg></a>
              </div>
            </div>

        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->
@endsection
          <!-- <section> close ============================-->
          <!-- ============================================-->
