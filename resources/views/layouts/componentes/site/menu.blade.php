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
                <li class="nav-item active" style="margin-right: 25px">
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
</div>
