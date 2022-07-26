<<<<<<< HEAD
<div class="d-flex flex-column flex-shrink-0  bg-gray-700 text-white h-screen" style="width: 280px; ">
    @auth
    <div class="dropdown bg-gray-600 px-3 py-3 w-full">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="64" height="64" class="rounded-circle me-2">
            <strong class="text-white">{{ auth()->user()->name }}</strong>
        </a>
        <ul class="dropdown-menu  text-white shadow" aria-labelledby="dropdownUser2 ">
            <li><a class="dropdown-item" href="/profil-{{ Auth::user()->role }}">Profil</a></li>
            <li><a class="dropdown-item" href="{{ route('dashboard.reset') }}">Ubah Password</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
                <form action="/logout" method="post">
                    @csrf
                    <button class="dropdown-item">Sign out</button>
                </form>
            </li>
        </ul>
    </div>
    <hr>
    @if(Auth::user()->role === 'siswa')
    <ul class="nav nav-pills flex-column mb-auto my-5">
      <li class="nav-item">
        <a href="{{ route('dashboard.index') }}" class="nav-link mt-2 text-white  {{ $active === "dashboard" ? "active" : "" }}" >
          Dashboard
        </a>
      </li>
        <a href="{{route('dashboard.profile')  }}" class="nav-link mt-2 text-white  {{ $active === "profil-siswa" ? "active" : "" }}" >
          Profil Siswa
        </a>
      </li>
      <li>
        <a href="{{route('dashboard.attendances')  }}" class="nav-link mt-2 text-white   {{ $active === "kehadiran-siswa" ? "active" : "" }}">
          Kehadiran hari ini
        </a>
      </li>
    </ul>
    @endif
    @if(Auth::user()->role === 'guru')
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="{{ route('dashboard.index') }}" class="nav-link link-dark {{ $active === "dashboard" ? "active" : "" }}" >
          Dashboard
        </a>
      </li>
        <a href="{{route('dashboard.profile')  }}" class="nav-link link-dark{{ $active === "profil-guru" ? "active" : "" }}" >
          Profil Guru
        </a>
      </li>
      <li>
        <a href="{{route('dashboard.attendances')  }}" class="nav-link link-dark  {{ $active === "kehadiran-guru" ? "active" : "" }}">
          Kehadiran hari ini
        </a>
      </li>
    </ul>
    @endif
    @if(Auth::user()->role === 'admin')
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="{{ route('dashboard.admin') }}" class="nav-link link-dark {{ $active === "dashboard-admin" ? "active" : "" }}" >
          Dashboard
        </a>
      </li>
        <a href=" {{ route('dashboard.edit.student') }}" class="nav-link link-dark {{ $active === "edit-siswa" ? "active" : "" }}" >
          Edit Students
        </a>
      </li>
      <li>
        <a href="{{ route('dashboard.edit.teacher') }}" class="nav-link link-dark  {{ $active === "edit-guru" ? "active" : "" }}">
          Edit Teachers
        </a>
=======
<div
  class=" flex-column transition-transform ease-out  -translate-x-full absolute xl:translate-x-0 xl:static w-72 flex-shrink-0 bg-gray-700 text-white h-full">
  @auth
  <div class=" dropdown bg-gray-600 px-3 py-3 w-full">
    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2"
      data-bs-toggle="dropdown" aria-expanded="false">
      <img src="https://github.com/mdo.png" alt="" width="64" height="64" class="rounded-circle me-2">
      <strong class="text-white">{{ auth()->user()->name }}</strong>
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
>>>>>>> 84d7f058281557fd851d3693cacb5c304fe49a22
      </li>
    </ul>
  </div>
  <hr>
  @if(Auth::user()->role === 'siswa')
  <ul class="nav nav-pills flex-column mb-auto ">
    <li class="nav-item">
      <a href="{{ route('dashboard.index') }}" class="nav-link mt-2 text-white  {{ $active === " dashboard" ? "active"
        : "" }}">
        Dashboard
      </a>
    </li>
    <a href="{{route('dashboard.profile')  }}" class="nav-link mt-2 text-white  {{ $active === " profil-siswa"
      ? "active" : "" }}">
      Profil Siswa
    </a>
    </li>
    <li>
      <a href="{{route('dashboard.attendances')  }}" class="nav-link mt-2 text-white   {{ $active === " kehadiran-siswa"
        ? "active" : "" }}">
        Kehadiran hari ini
      </a>
    </li>
  </ul>
  @endif
  @if(Auth::user()->role === 'guru')
  <ul class="nav nav-pills  flex-column mb-auto">
    <li class="nav-item">
      <a href="{{ route('dashboard.index') }}" class="nav-link text-white {{ $active === " dashboard" ? "active" : ""
        }}">
        Dashboard
      </a>
    </li>
    <a href="{{route('dashboard.profile')  }}" class="nav-link text-white{{ $active === " profil-guru" ? "active" : ""
      }}">
      Profil Guru
    </a>
    </li>
    <li>
      <a href="{{route('dashboard.attendances')  }}" class="nav-link text-white  {{ $active === " kehadiran-guru"
        ? "active" : "" }}">
        Kehadiran hari ini
      </a>
    </li>
  </ul>
  @endif
  @if(Auth::user()->role === 'admin')
  <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
      <a href="{{ route('dashboard.admin') }}" class="nav-link link-dark {{ $active === " dashboard-admin" ? "active"
        : "" }}">
        Dashboard
      </a>
    </li>
    <a href=" {{ route('dashboard.edit.student') }}" class="nav-link link-dark {{ $active === " edit-siswa" ? "active"
      : "" }}">
      Edit Students
    </a>
    </li>
    <li>
      <a href="{{ route('dashboard.edit.teacher') }}" class="nav-link link-dark  {{ $active === " edit-guru" ? "active"
        : "" }}">
        Edit Teachers
      </a>
    </li>
  </ul>
  @endif
  @endauth
</div>