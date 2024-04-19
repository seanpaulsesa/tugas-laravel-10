<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center fw-bolder" href="#">
      <img src="https://scontent.fupg5-1.fna.fbcdn.net/v/t39.30808-1/437882454_1490739371798130_4967959696637259820_n.jpg?stp=cp0_dst-jpg_p60x60&_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_ohc=90cKZo_6W5IAb7Rj9eR&_nc_ht=scontent.fupg5-1.fna&cb_e2o_trans=q&oh=00_AfCJLrJ014oTz2uFI186itKIstiT_KisygM2VWP3gPx08A&oe=6628AEF8" alt="Logo" height="35" class="me-2" style="width: 35px; height: 35px;">
      <span>PAULUS SESA</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="vr"></div>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        @role(['Super Admin', 'Admin'])
          <li class="nav-item">
            <a @class([
                'nav-link',
                'active text-primary fw-semibold' => Request()->is('siswa*'),
            ]) aria-current="page" href="{{ route('siswa') }}">Data Siswa</a>
          </li>

          <li class="nav-item">
            <a @class([
                'nav-link',
                'active text-primary fw-semibold' => Request()->is('guru*'),
            ]) aria-current="page" href="{{ route('guru') }}">Data Dosen</a>
          </li>

          <li class="nav-item">
            <a @class([
                'nav-link',
                'active text-primary fw-semibold' => Request()->is('pelajaran*'),
            ]) aria-current="page" href="{{ route('pelajaran') }}">Data Pelajaran</a>
          </li>

          <li class="nav-item">
            <a @class([
                'nav-link',
                'active text-primary fw-semibold' => Request()->is('kurikulum*'),
            ]) aria-current="page" href="{{ route('kurikulum') }}">Data Kurikulum</a>
          </li>

          <li class="nav-item">
            <a @class([
                'nav-link',
                'active text-primary fw-semibold' => Request()->is('jadwal*'),
            ]) aria-current="page" href="{{ route('jadwal') }}">Data Jadwal</a>
          </li>

          <li class="nav-item">
            <a @class([
                'nav-link',
                'active text-primary fw-semibold' => Request()->is('user*'),
            ]) aria-current="page" href="{{ route('user') }}">Data User</a>
          </li>
        @endrole
      </ul>

      <div class="btn-group">
        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          {{ Auth::user()->name }}
        </button>
        <ul class="dropdown-menu dropdown-menu-lg-end">
          <li>
            <a href="{{ route('profile.show') }}" class="dropdown-item">Profil</a>
          </li>
          <li>
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <button class="dropdown-item" type="submit">Logout</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
