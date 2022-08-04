<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../css/style.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5.11.0/main.min.css,npm/fullcalendar@5.11.0/main.min.css">
  {{-- Bootstrap icon --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  {{-- Tailwind css --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  {{-- google fonts --}}
  @vite('resources/css/app.css')
  <title>SIAKAD | {{ $title }}</title>
</head>

<body>
  <div class="container-full flex flex-row">
    <div class="top-nav ">
      @include('partials.sidebar')
    </div>
    <div class="flex flex-col w-full">
      <div class="sidebar   ">
        @include('partials.navbar')
      </div>
      <div class="contents w-full h-screen transition-all ease-out">
        @yield('container')
      </div>
    </div>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->

  <script
    src="https://cdn.jsdelivr.net/combine/npm/sweetalert2@11.4.19,npm/fullcalendar@5.11.0,npm/fullcalendar@5.11.0/main.min.js">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <script src="https://kit.fontawesome.com/b8dbbcbd36.js" crossorigin="anonymous"></script>
  @vite("resources/js/app.js")

</body>

</html>