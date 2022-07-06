<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="/">Siakad Clone</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        @auth
            <li class="me-1">
                <span class="btn btn-secondary">2021/2022</span>
            </li>
            <li>
                <span class="btn btn-secondary">{{ auth()->user()->kelas }}</span>
            </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
