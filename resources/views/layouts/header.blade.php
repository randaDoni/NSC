<section class="py-2">
  <nav class="navbar navbar-expand-lg fixed-top shadow-sm" style="background-color: rgb(255, 255, 255)">
      <div class="col-auto">
        <a class="navbar-brand ms-2" href="{{url('/')}}">
          <img src="{{url('/assets/img/logos/NSC.gif')}}" width="50" alt="logo" />
        </a>
      </div>
      <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=" navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-dark @yield('menuHome')" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark @yield('menuBeasiswa')" href="/beasiswa">Beasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark  @yield('menuKompetisi')" href="/kompetisi">Kompetisi</a>
              </li>
            </ul>
          </div>
        </ul>


            <form class="d-flex" action="{{url('/dashboarduser') }}">
                <button class="btn rounded-pill" type="signin">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" style="color:#132851;" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
                </button>
            </form>

        @if (Auth::id() == 1)
        <a href="/dashboardadmin"><button class="btn mb-3 mt-3 text-white" style="background-color:#102744;" type="submit"name="tambah">Dashboard Admin</button></a>
        @endif

        @if (Auth::check())
        <div class="dropdown">
          <button class="btn rounded-pill" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24">
                <path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 13h-5v5h-2v-5h-5v-2h5v-5h2v5h5v2z"/></svg>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item text-dark d-flex" href="{{url('/uploadNews') }}" >Beasiswa</a>
            <a class="dropdown-item text-dark d-flex" href="{{url('/uploadKompetisi') }}">Kompetisi</a>
          </div>
        </div>
        @endif

        @if (Auth::check())
        <form class="d-flex" action="{{url('/logout') }}">
            <button class="btn rounded-pill" type="logout">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-log-out">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4">
                </path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
            </button>
        </form>
        @endif
      </div>
    </div>
  </nav>
</section>
