<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'OIT') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container-fluid border-bottom py-2">
          <div class="container text-primary">
            <div class="float-left mr-3">
              <img src="{{ asset('img/phone-1.webp') }}" width="25" height="25" alt="" class="mr-1">
              <strong>
                +977 1 44449094
              </strong>
            </div>
            <div class="float-left">
              <img src="{{ asset('img/email-1.png') }}" width="25" height="25" alt="" class="mr-1">
              <strong>
                info@oit.com.np
              </strong>
            </div>
            <div class="clearfix">
            </div>
          </div>
        </div>
        </div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel for OIT') }}
                </a>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo_1.png') }}" width="30" height="30" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('ofin') }}">Web Development</a>
                          <a class="dropdown-item" href="{{ route('lms') }}">Bulk SMS</a>
                          <a class="dropdown-item" href="{{ route('onix') }}">IT Hardware Sales</a>
                        </div>
                      </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Products
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('ofin') }}">OFin</a>
                          <a class="dropdown-item" href="{{ route('lms') }}">OSchool</a>
                        </div>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                      </li>

                    </ul>

                </div>
            </div>
        </nav>

        <main class="py-4-rm">
            @yield('content')
        </main>

        <footer class="border-top pt-4">
            @include('footer')
        </footer>
    </div>

</body>
</html>
