<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>New Epic War</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="/public/css/site/bootstrap.min.css" rel="stylesheet">
    <script src="/public/js/site/jquery.min.js"></script>
    <script src="/public/js/site/jquery-3.4.1.slim.min.js"></script>
    <script src="/public/js/site/popper.min.js"></script>
    <script src="/public/js/site/bootstrap.min.js"></script>

    {{--    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">--}}
    {{--    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>--}}


    <meta name="theme-color" content="#563d7c">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>
    <!-- Custom styles for this template -->
    <link href="/public/css/site/cover.css" rel="stylesheet">

</head>

<!--<body class="text-center">-->
<body>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v7.0"></script>

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        {{--        <div class="inner">--}}
        {{--            <h3 class="masthead-brand">Wyd</h3>--}}
        {{--            <nav class="nav nav-masthead justify-content-center">--}}
        {{--                <a class="nav-link active" href="#">Home</a>--}}
        {{--                <a class="nav-link" href="#">Features</a>--}}
        {{--                <a class="nav-link" href="#">Contact</a>--}}
        {{--            </nav>--}}
        {{--        </div>--}}
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </header>

    <main role="main" class="inner cover">
        <!-- Corpo da Pagina -->
        <br>

        <div class="row">
            <div class="col-md-12">
                <!-- Menu -->
                <div class="inner">
                    <div id="menu_bar">
                        <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded ">

                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                                    aria-label="Alterna navegação">
                                <span class="navbar-brand">Menu</span>
                                <span class="navbar-toggler-icon"></span>

                            </button>
                            <div class="collapse navbar-collapse " id="navbarTogglerDemo01">

                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#"><font color="#fffff" ;=""><b>HOME</b></font></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}"><font
                                                color="#fffff" ;=""><b>CADASTRO</b></font></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://medium.astarothwyd.com.br/site/load/download"><font
                                                color="#fffff" ;=""><b>DOWNLOAD</b></font></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-target="A"><font color="#fffff" ;=""><b>RANKING</b></font></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://medium.astarothwyd.com.br/site/load/donate"><font
                                                color="#fffff" ;=""><b>DOAÇÕES</b></font></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://medium.astarothwyd.com.br/site/load/regras"><font
                                                color="#fffff" ;=""><b>REGRAS</b></font></a>
                                    </li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

        </div>

        <br>

        <div class="row inner">
            <div class="col-md-8">

                <!-- Banner -->
                <div class="inner">
                    <div class="bd-example">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                            </ol>
                            <div class="carousel-inner rounded">
                                <div class="carousel-item active">
                                    <img class="d-block w-100"
                                         data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide"
                                         alt="First slide [800x400]"
                                         src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_171f70f597a%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_171f70f597a%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.9140625%22%20y%3D%22217.7%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                         data-holder-rendered="true">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100"
                                         data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide"
                                         alt="Second slide [800x400]"
                                         src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_171f70f597b%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_171f70f597b%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3125%22%20y%3D%22217.7%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                         data-holder-rendered="true">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100"
                                         data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide"
                                         alt="Third slide [800x400]"
                                         src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_171f70f597d%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_171f70f597d%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22276.9921875%22%20y%3D%22217.7%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                         data-holder-rendered="true">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Fim Banner -->

                <br>

                <!-- Notícias -->
                <div class="card bg-dark">
                    <div class="card-header font-weight-bold font-size-titulo">
                        Últimas Notícias
                    </div>

                    <div class="card-body">
                        <div class="alert alert-secondary" role="alert">
                            <span class="badge badge-warning" style="background-color: yellou;">P</span>
                            <a href="https://medium.astarothwyd.com.br/site/load/news/32">
                                Manutenção Periódica Finalizada - Patch list - [04/05/2020]
                            </a>
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            <span class="badge badge-warning" style="background-color: yellou;">P</span>
                            <a href="https://medium.astarothwyd.com.br/site/load/news/32">
                                Manutenção Periódica Finalizada - Patch list - [04/05/2020]
                            </a>
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            <span class="badge badge-warning" style="background-color: yellou;">P</span>
                            <a href="https://medium.astarothwyd.com.br/site/load/news/32">
                                Manutenção Periódica Finalizada - Patch list - [04/05/2020]
                            </a>
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            <span class="badge badge-warning" style="background-color: yellou;">P</span>
                            <a href="https://medium.astarothwyd.com.br/site/load/news/32">
                                Manutenção Periódica Finalizada - Patch list - [04/05/2020]
                            </a>
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            <span class="badge badge-warning" style="background-color: yellou;">P</span>
                            <a href="https://medium.astarothwyd.com.br/site/load/news/32">
                                Manutenção Periódica Finalizada - Patch list - [04/05/2020]
                            </a>
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            <span class="badge badge-warning" style="background-color: yellou;">P</span>
                            <a href="https://medium.astarothwyd.com.br/site/load/news/32">
                                Manutenção Periódica Finalizada - Patch list - [04/05/2020]
                            </a>
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            <span class="badge badge-warning" style="background-color: yellou;">P</span>
                            <a href="https://medium.astarothwyd.com.br/site/load/news/32">
                                Manutenção Periódica Finalizada - Patch list - [04/05/2020]
                            </a>
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            <span class="badge badge-warning" style="background-color: yellou;">P</span>
                            <a href="https://medium.astarothwyd.com.br/site/load/news/32">
                                Manutenção Periódica Finalizada - Patch list - [04/05/2020]
                            </a>
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            <span class="badge badge-warning" style="background-color: yellou;">P</span>
                            <a href="https://medium.astarothwyd.com.br/site/load/news/32">
                                Manutenção Periódica Finalizada - Patch list - [04/05/2020]
                            </a>
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            <span class="badge badge-warning" style="background-color: yellou;">P</span>
                            <a href="https://medium.astarothwyd.com.br/site/load/news/32">
                                Manutenção Periódica Finalizada - Patch list - [04/05/2020]
                            </a>
                        </div>
                        <a href="#" class="btn btn-primary col-md-3 offset-sm-9">Mais notícias</a>
                    </div>
                </div>
                <!-- Notícias -->
            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card bg-dark">
                            <div class="card-header text-center font-weight-bold">
                                Login
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <svg class="bi bi-at" width="1em" height="1em" viewBox="0 0 16 16"
                                                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                  d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"
                                                                  clip-rule="evenodd"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <input id="login" type="text"
                                                       class="form-control{{ $errors->has('name') || $errors->has('email') ? ' is-invalid' : '' }}"
                                                       name="login" value="{{ old('name') ?: old('email') }}" required autofocus>

                                                @if ($errors->has('name') || $errors->has('email'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('name') ?: $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <svg class="bi bi-lock-fill" width="1em" height="1em" viewBox="0 0 16 16"
                                                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="11" height="9" x="2.5" y="7" rx="2"/>
                                                            <path fill-rule="evenodd"
                                                                  d="M4.5 4a3.5 3.5 0 117 0v3h-1V4a2.5 2.5 0 00-5 0v3h-1V4z"
                                                                  clip-rule="evenodd"/>
                                                        </svg>
                                                    </div>
                                                </div>

                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    {{--                                    <div class="form-group row">--}}
                                    {{--                                        <div class="col-md-12">--}}
                                    {{--                                            <div class="form-check">--}}
                                    {{--                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}
                                    {{--                                                <label class="form-check-label" for="remember">--}}
                                    {{--                                                    {{ __('Lembrar-me') }}--}}
                                    {{--                                                </label>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary col-sm-6 offset-sm-3">
                                                {{ __('Acessar') }}
                                            </button>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Esqueceu sua senha?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-12">
                        <div class="fb-page" data-href="https://www.facebook.com/NewEpicWar" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/NewEpicWar" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/NewEpicWar">New Epic War 7.73</a></blockquote></div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-md-12">
                        <iframe src="https://discordapp.com/widget?id=706361795883040789&theme=dark" width="330" height="500" allowtransparency="true" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div id="A">
            <div class="row inner">
                <div class="col-md-6">
                    <div class="card bg-dark">
                        <div class="card-header text-center font-weight-bold font-size-titulo">
                            Top Players
                        </div>

                        <div class="card-body">

                            <table class="table table-bordered table-dark rounded">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Score</th>
                                    <th scope="col">Nickname</th>
                                    <th scope="col">Level</th>
                                    <th scope="col">Evolução</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>800</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>750</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>699</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                        </div></div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-dark">
                        <div class="card-header text-center font-weight-bold font-size-titulo">
                            Top Guilds
                        </div>

                        <div class="card-body">

                            <table class="table table-bordered table-dark rounded">
                                <thead>
                                <tr>
                                    <th scope="col">Canal</th>
                                    <th scope="col">Cidade</th>
                                    <th scope="col">Emblema</th>
                                    <th scope="col">Tempo</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Armia</td>
                                    <td><img width="16" height="16" src="http://1.bp.blogspot.com/-WgqO13PLoUY/UMsgnLdHhrI/AAAAAAAAAGI/ex-Ey6AYwAg/s1600/los2.jpg"></td>
                                    <td>02:00</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Thornton</td>
                                    <td><img width="16" height="16" src="http://2.bp.blogspot.com/-s-GrPZAbNhM/UMsgf6hONpI/AAAAAAAAAGA/9iRYETH5Yds/s1600/los2preto.jpg"></td>
                                    <td>03:00</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Erion</td>
                                    <td><img width="16" height="16" src="http://1.bp.blogspot.com/-WgqO13PLoUY/UMsgnLdHhrI/AAAAAAAAAGI/ex-Ey6AYwAg/s1600/los2.jpg"></td>
                                    <td>07:00</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div class="text-center">
            <span class="font-weight-bold font-size-titulo">Screenshots </span>
        </div>

        <div class="row inner">

            <div class="col-md-4">
                <figure class="figure">
                    <svg class="bd-placeholder-img figure-img img-fluid rounded" width="400" height="300" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 400x300"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">400x300</text></svg>
                </figure>
            </div>
            <div class="col-md-4">
                <figure class="figure">
                    <svg class="bd-placeholder-img figure-img img-fluid rounded" width="400" height="300" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 400x300"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">400x300</text></svg>
                </figure>
            </div>
            <div class="col-md-4">
                <figure class="figure">
                    <svg class="bd-placeholder-img figure-img img-fluid rounded" width="400" height="300" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 400x300"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">400x300</text></svg>
                </figure>
            </div>
        </div>

        <div class="row inner">
            <div class="col-md-4">
                <figure class="figure">
                    <svg class="bd-placeholder-img figure-img img-fluid rounded" width="400" height="300" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 400x300"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">400x300</text></svg>
                </figure>
            </div>
            <div class="col-md-4">
                <figure class="figure">
                    <svg class="bd-placeholder-img figure-img img-fluid rounded" width="400" height="300" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 400x300"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">400x300</text></svg>
                </figure>
            </div>
            <div class="col-md-4">
                <figure class="figure">
                    <svg class="bd-placeholder-img figure-img img-fluid rounded" width="400" height="300" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 400x300"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">400x300</text></svg>
                </figure>
            </div>
        </div>

    </main>

    <footer class="mastfoot mt-auto">
        <div class="inner">
            <p> Copyright @ 2020 | Todos os direitos reservados a <a href="#">{{ config('app.name', 'New Epic War') }}</a> <br>
                Desenvolvido por <a href="#">@rgs</a> e impulsionado por <a href="https://getbootstrap.com/">Bootstrap </a> e <a href="https://laravel.com/"> Laravel</a>
            </p>

        </div>
    </footer>

</div>

<script>window.jQuery || document.write('<script src="/public/js/site/jquery-3.4.1.slim.min.js"><\/script>')</script>
<script>
    $( '.searchbychar' ).click(function() {

        $('html, body').animate({
            scrollTop: $('.searchbychar').attr('id').offset().top
        }, 2000);

    });
</script>

</body>
</html>
