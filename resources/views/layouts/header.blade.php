<!-- ===============================================-->
<!--    Navbar Content                     -->
<!-- ===============================================-->
<section class="py-2">
  <nav class="navbar navbar-expand-lg fixed-top shadow-sm" style="background-color: rgb(255, 255, 255)">
      <div class="col-auto">
        <a class="navbar-brand ms-2" href="index.blade.php">
          <img src="assets/img/logos/NSC.gif" width="50" alt="logo" />
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link @yield('menuHome')" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @yield('menuBeasiswa')" href="/beasiswa">Beasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @yield('menuKompetisi')" href="/kompetisi">Kompetisi</a>
              </li> 
            </ul>
          </div>
        </ul>
        <form class="d-flex">
          <input class="form-control  form-eduprixsearch-control rounded-pill" id="formGroupExampleInput" type="search" placeholder="Cari Berita" aria-label="Search">
          <button class="btn rounded-pill"  type="submit" >
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" style="color:#132851;" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
          </button>
        </form>
        <form class="d-flex" action="{{ url('/register') }}">
           
        <button class="btn rounded-pill" type="signin">

          <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" style="color:#132851;" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>
        </button>

        </form>
      </div>
    </div>
  </nav>
</section>
