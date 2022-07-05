<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height:100vh">
    <div class="dropdown ">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>John Doe</strong>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
            <li><a class="dropdown-item" href="#">Profil</a></li>
            <li><a class="dropdown-item" href="#">Ubah Password</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="/" class="nav-link {{ $active === "dashboard" ? "active" : "" }}" >
          Dashboard
        </a>
      </li>
      <li>
        <a href="/attendances" class="nav-link link-dark  {{ $active === "attendances" ? "active" : "" }}">
          Kehadiran hari ini
        </a>
      </li>
    </ul>
</div>
