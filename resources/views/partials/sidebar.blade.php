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
  <ul class="nav px-2 mt-3 nav-pills flex-column mb-auto text-sm font-semibold">
    <li class="nav-item">

      <a href="{{ route('dashboard.index') }}" class="nav-link link-dark gap-x-10 flex flex-row  {{ Request::is('/') ? "
        bg-white drop-shadow-xl text-fontColor" : "" }}">
        <span class="material-symbols-rounded">
          grid_view
        </span>
        <p>
          Dashboard
        </p>
      </a>
    </li>
    <a href="{{route('dashboard.profile')  }}"
      class="nav-link link-dark gap-x-10 flex flex-row  {{ Request::is('profile*') ? " bg-white drop-shadow-xl
      text-fontColor" : "" }}">
      <span class="material-symbols-rounded">
        person
      </span>
      <p>
        Profil Siswa
      </p>
    </a>
    </li>
    <li>
      <a href="{{route('dashboard.attendances')  }}"
        class="nav-link link-dark gap-x-10 flex flex-row  {{ Request::is('attendances') ? " bg-white drop-shadow-xl
        text-fontColor" : "" }}">
        <span class="material-symbols-rounded">
          touch_app
        </span>
        <p>
          Kehadiran hari ini
        </p>
      </a>
    </li>
  </ul>
  @endif
  @if(Auth::user()->role === 'guru')
  <ul class="nav px-2 w-full mt-3 nav-pills flex-column mb-auto text-sm font-semibold">
    <li class="nav-item">
      <a href="{{ route('dashboard.index') }}" class="nav-link text-white {{ Request::is('/') ? " active" : "" }}">
        Dashboard
      </a>
    </li>
    <a href="{{route('dashboard.profile')  }}" class="nav-link text-white{{ Request::is('profile*') ? " active" : ""
      }}">
      Profil Guru
    </a>
    </li>
    <li>
      <a href="{{route('dashboard.attendances')  }}" class="nav-link text-white  {{ Request::is('attendances') }}">
        Kehadiran hari ini
      </a>
    </li>
  </ul>
  @endif
  @if(Auth::user()->role === 'admin')
  <ul class="nav px-2 mt-3 nav-pills flex-column mb-auto text-sm font-semibold">
    <li class="nav-item">
      <a href="{{ route('dashboard.admin') }}"
        class="nav-link link-dark gap-x-10 flex flex-row{{ Request::is('dashboard-admin') ? " bg-white drop-shadow-xl
        text-fontColor" : "" }}">
        <span class="material-symbols-rounded">
          grid_view
        </span>
        <p class=" grid place-content-center">Dashboard</p>
      </a>
    </li>
    <a href=" {{ route('dashboard.student') }}"
      class="nav-link link-dark gap-x-10 flex flex-row{{ Request::is('student*') ? " bg-white drop-shadow-xl
      text-fontColor" : "" }}">
      <span class="material-symbols-rounded">
        person
      </span>
      <p class=" grid place-content-center">Data Students</p>
    </a>
    </li>
    <li>
      <a href="{{ route('dashboard.teacher') }}"
        class="nav-link link-dark gap-x-10 flex flex-row  {{ Request::is('teacher*') ? " bg-white drop-shadow-xl
        text-fontColor" : "" }}">
        <span class="material-symbols-rounded">
          person
        </span>
        <p class=" grid place-content-center">Data Teachers</p>
      </a>
    </li>
  </ul>
  @endif
  @endauth
</div>