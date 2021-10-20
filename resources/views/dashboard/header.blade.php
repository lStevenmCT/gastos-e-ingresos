<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
<link href="{{ asset('css/default.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


<div id="header">
    <ul>
        @if (Auth::check())
        <li><a href="dashboard">Inicio</a></li>
            <li><a href="">Gastos</a></li>
            <li><a href="">Ingresos</a></li>

            <li><a href="logout">Cerrar Sesión</a></li>
        @endif
    </ul>

    <div id="profile-container">
        @if (Auth::check())
            <a href="user">
                <div class="name">{{ Auth::user()->name }}</div>
                <div class="photo">

                    <i class="material-icons">account_circle</i>



                </div>
            </a>
        @endif
        <div id="submenu">
            <ul>

                <li><a href="user">Mi Perfil</a> </li>
                <li class='divisor'></li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                    {{ __('Cerrar sesión') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                

            </ul>
        </div>
    </div>
</div>
