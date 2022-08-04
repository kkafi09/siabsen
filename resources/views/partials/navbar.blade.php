<nav class="navbar navbar-expand-lg text-white  bg-red-700 drop-shadow-xl">
  <div class="container">
    <div class="hamburger lg:hidden">
      <div class="burger">
        <button>
          <i class="fa-solid fa-bars"></i>
        </button>
      </div>
      <div class="back"></div>
    </div>
    <a class="navbar-brand text-2xl font-normal text-center" href="/">SIABSEN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon transition ease-out duration-75 hover:scale-150 grid content-center"><i
          class="fa-solid fa-ellipsis-vertical"></i></span>
    </button>
    <div class="collapse navbar-collapse navbar-toggler transition-all ease-in-out duration-100" id="navbarNav">
      <ul class="navbar-nav ms-auto flex flex-row justify-end">
        @auth
        <li class="me-1">
          <span class="btn bg-white  ">2021/2022</span>
        </li>
        <li>
          <span class="btn bg-white ">{{ auth()->user()->kelas }}</span>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>