<nav class="navbar navbar-expand-lg text-white  bg-red-700 drop-shadow-xl">
  <div class="container">
    <a class="navbar-brand text-2xl font-normal" href="/">SIABSEN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navbar-toggler" id="navbarNav">
      <ul class="navbar-nav ms-auto">
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