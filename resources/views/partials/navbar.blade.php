<nav class="navbar navbar-expand-lg text-white  bg-navbarColour drop-shadow-md">
  <div class="container">
    <div class="hamburger xl:hidden">
      <div class="burger">
        <button class="w-fit h-fit">
          <i class="fa-solid fa-bars hamburger-button text-xl transition-all duration-100 ease-linear active:scale-75 text-black px-4 "
            id="hamburger"></i>
        </button>
      </div>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon transition ease-out duration-75 hover:scale-150 grid content-center"><i
          class="fa-solid fa-ellipsis-vertical text-black"></i></span>
    </button>
    <div class="collapse navbar-collapse navbar-toggler transition-all ease-in-out duration-100" id="navbarNav">
      <ul class="navbar-nav ms-auto flex flex-row justify-end">
        @auth
        <li class="me-1">
          <div class=" dropdown w-full ">
            <a href="#" class="flex gap-x-6 align-items-center  link-dark text-decoration-none dropdown-toggle"
              id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://github.com/mdo.png" alt="" width="56" height="56" class="rounded-circle me-2">
              <div class="users">
                <p class="uppercase text-sm font-bold">{{ auth()->user()->name }}</p>
                <p class="uppercase text-xs font-semibold">Kelas {{ auth()->user()->kelas }}</p>
              </div>
            </a>
            <ul class="dropdown-menu  text-white shadow" aria-labelledby="dropdownUser2 ">
              <li><a class="dropdown-item" href="/profil-{{ Auth::user()->role }}">Profil</a></li>
              <li><a class="dropdown-item" href="{{ route('dashboard.reset') }}">Ubah Password</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button class="dropdown-item">Sign out</button>
                </form>
              </li>
            </ul>
          </div>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>