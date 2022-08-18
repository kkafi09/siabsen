<div
  class="flex-column top-0 left-0 rounded-none h-full transition-transform ease-out navbar-toggler p-0 z-50 -translate-x-full absolute xl:translate-x-0 xl:relative w-72 flex-shrink-0 bg-navbarColour text-gray-600  drop-shadow-md">
  @auth
  <div class="topBar justify-center flex flex-row closer">
    <div class="text-center mt-3 text-purpleDark title">
      <p class="text-2xl font-bold">siAbsen</p>
      <p class="text-xs mt-0">Improve ur alpha quality</p>
    </div>
    <div class=" absolute hidden-button hidden text-2xl top-3 right-3">
      <i class="fa-solid fa-xmark closer-button hidden hover:cursor-pointer"></i>
    </div>
  </div>
  @if(Auth::user()->role === 'siswa')
  <ul class="nav nav-pills flex-column mb-auto text-sm font-semibold">
    <li class="nav-item">
      <a href="{{ route('dashboard.index') }}" class="nav-link mt-2 text-inherit  {{ $active === " dashboard"
        ? "text-black" : "" }}">
        Dashboard
      </a>
    </li>
    <a href="{{route('dashboard.profile')  }}" class="nav-link mt-2 text-inherit  {{ $active === " profil-siswa"
      ? "active" : "" }}">
      Profil Siswa
    </a>
    </li>
    <li>
      <a href="{{route('dashboard.attendances')  }}" class="nav-link mt-2 text-inherit   {{ $active === "
        kehadiran-siswa" ? "active" : "" }}">
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