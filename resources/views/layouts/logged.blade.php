<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Album') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
<div id="mySidenav" class="sidenav closed">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-times"></i></a>
    <img src="{{ url('img/timelaps-logo.png') }}" >
    <a href="javascript:void(0)" class="openbtn" onclick="openNav()"><i class="fas fa-bars"></i></a>
    <br>
    <a href="#"><i class="fas fa-tachometer-alt"></i>&nbsp;<span>Dashboard</span></a>
    <a href="#"><i class="fas fa-car-crash"></i>&nbsp;<span>Karts</span></a>
    <a href="#"><i class="fab fa-accessible-icon"></i>&nbsp;<span>Pilotes</span></a>
    <a href="#"><i class="fas fa-cogs"></i>&nbsp;<span>Paramètres</span></a>
    <a href="#"><i class="fas fa-flag-checkered"></i>&nbsp;<span>Démarrer</span></a>
    <a id="logout" class="nav-link" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i>&nbsp;<span>@lang('Déconnexion')</span></a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide">
        {{ csrf_field() }}
    </form>
</div>

<div id="main">
<!--<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name', 'Album') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            @guest
                <li class="nav-item{{ currentRoute(route('login')) }}"><a class="nav-link"
                                                                          href="{{ route('login') }}">@lang('Connexion')</a>
                </li>
                <li class="nav-item{{ currentRoute(route('register')) }}"><a class="nav-link"
                                                                             href="{{ route('register') }}">@lang('Inscription')</a>
                </li>
            @else
                <li class="nav-item">
                    <a id="logout" class="nav-link" href="{{ route('logout') }}">@lang('Déconnexion')</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide">
                        {{ csrf_field() }}
                    </form>
                </li>
            @endguest
        </ul>
    </div>
</nav>-->
@yield('content')

</div>
<script src="{{ asset('js/app.js') }}"></script>
@yield('script')
<script>
    $(() => {
        $('#logout').click((e) => {
            e.preventDefault()
            $('#logout-form').submit()
        })
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>
</html>