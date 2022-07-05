<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="/">Siakad Clone</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome, {{ auth()->user()->username  }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse me-2"></i>My Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button class="dropdown-item"><i class="bi bi-box-arrow-right me-2"></i>Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link {{ ($active === "login") ? "active" : " " }}" href="/login"><i class="bi bi-box-arrow-in-right"></i>Login</a>
            </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
