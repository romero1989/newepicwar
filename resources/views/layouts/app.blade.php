<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'New Epic War') }}</title>

    <!-- Scripts -->
    <script src="/public/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="/public/css/app.css" rel="stylesheet">
    <link href="/public/css/site/cover.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('app/home') }}">
                    {{ config('app.name', 'New Epic War') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('app.guildmark') }}">{{ __('Guild Mark') }}</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Administração
                            </a>
                            <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-light" href="{{ route('login') }}">{{ __('Notícias') }}</a>
{{--                                <div class="dropdown-divider"></div>--}}
                                <a class="dropdown-item text-light" href="{{ route('login') }}">{{ __('Cargo') }}</a>
                            </div>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Meus dados</a>
                                    <a class="dropdown-item" href="{{ route('password.update') }}">Atualizar senha</a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>



        <main class="py-4">


            @yield('content')



        </main>

        <footer class="mastfoot mb-auto navbar fixed-bottom ">
            <div class="container">
                <div class="col-md-12 text-center">
                    <div>
                        <p> Copyright @ 2019 | Todos os direitos reservados a <a href="#">{{ config('app.name', 'New Epic War') }}</a> <br>
                            Desenvolvido por <a href="#">@rgs</a> e impulsionado por <a href="https://getbootstrap.com/">Bootstrap </a> e <a href="https://laravel.com/"> Laravel</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
