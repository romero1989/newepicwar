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
    <link href="css/site/bootstrap.min.css" rel="stylesheet">
    <script src="js/site/jquery.min.js"></script>
    <script src="js/site/jquery-3.4.1.slim.min.js"></script>
    <script src="js/site/popper.min.js"></script>
    <script src="js/site/bootstrap.min.js"></script>

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
    <link href="css/site/cover.css" rel="stylesheet">

</head>

<!--<body class="text-center">-->
<body>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v7.0"></script>

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        <div class="header">

        </div>
    </header>

    <main role="main" class="inner cover">
        <div class="row row-grid">
            <div class="col-md-12">
                @include('layouts.componentes.site.menu')
            </div>
        </div>

        <div class="row row-grid">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>

    </main>

    <footer class="mastfoot mt-auto">
        <div class="row row-grid">
            <div class="col-md-12">
                @include('layouts.componentes.site.rodape')
            </div>
        </div>
    </footer>

</div>

<script>window.jQuery || document.write('<script src="js/site/jquery-3.4.1.slim.min.js"><\/script>')</script>

</body>
</html>
