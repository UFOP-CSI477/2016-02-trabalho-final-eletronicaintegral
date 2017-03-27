<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>

        .content {
            height: 1100px;
        }

    </style>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body>

    <div id="app">
        <nav class="w3-bar w3-white w3-wide w3-padding w3-card-2">
            <a href="/" class="w3-bar-item w3-button"><b>Eletronica Integral</b></a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-left w3-hide-small">
                <a href="{{url('sobre')}}" class="w3-bar-item w3-button">Sobre</a>
                @if(Auth::check())
                    @if(Auth::user()->type == 2)
                        <a href="{{ route('register') }}" class="w3-bar-item w3-button" > Registrar Usuário </a>
                        <a href="/ordems/create" class="w3-bar-item w3-button" > Registrar Ordem</a>
                        <a href="/search" class="w3-bar-item w3-button" > Pesquisar Ordem</a>
                    @endif
                @endif
            </div>

            <div class="w3-right w3-hide-small">
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}" class="w3-bar-item w3-button" >Entrar</a></li>

                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle w3-bar-item w3-button" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->nome }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Sair
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif

            </div>
        </nav>

        <div class="col-sm-10 text-left">
        <div class="content">
            @if(Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
            @endif

            @if(Session::has('info'))
                <div class="alert alert-info">{{ Session::get('info') }}</div>
            @endif

            @if(Session::has('warning'))
                <div class="alert alert-warning">{{ Session::get('warning') }}</div>
            @endif

            @yield('conteudo')
        </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

<footer class="w3-center w3-black w3-padding-16 navbar navbar-fixed-bottom ">
    <p>Sistema Web</p>
</footer>

</html>
