@guest
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded" >
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                aria-label="Alterna navegação">
            <span class="navbar-brand">Menu</span>
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo01" >
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('webindex')}}"><font color="#fffff" ;=""><b>HOME</b></font></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}"><font color="#fffff" ;=""><b>CADASTRO</b></font></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('pagina')}}"><font color="#fffff" ;=""><b>DOWNLOAD</b></font></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('pagina')}}" data-target="A"><font color="#fffff" ;=""><b>RANKING</b></font></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('pagina')}}"><font color="#fffff" ;=""><b>DOAÇÕES</b></font></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('regras')}}"><font color="#fffff" ;=""><b>REGRAS</b></font></a>
                </li>
            </ul>
        </div>
    </nav>
@else
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
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
    </nav>
@endguest


