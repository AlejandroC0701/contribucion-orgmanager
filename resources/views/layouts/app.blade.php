<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ url(mix('css/app.css')) }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/join.css')}}">
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/octicons/4.4.0/font/octicons.min.css" rel="stylesheet">
    @yield('header')
    <script src="{{ mix('js/app.js') }}"></script>
    <!-- Scripts -->
    @include('layouts.code.head')
</head>
<body>
<div id="app">
    <nav id="nav-app" class="navbar navbar-default" style="margin-bottom: 0px;

        ">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                                <li><a href="{{ url('sync') }}">Sync Organizations</a></li>
                                @foreach (Auth::user()->orgs as $org)
                                    <li><a href="{{ url('org/'.$org->id)}}">{{ $org->name }}{{ "'" }}s settings</a>
                                @endforeach
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
                </ul>
            </div>
        </div>
    </nav>

     <style>
        
        #nav-app{
            background: rgba(221,228,230,1);
background: -moz-linear-gradient(top, rgba(221,228,230,1) 0%, rgba(221,228,230,1) 11%, rgba(102,107,110,1) 68%, rgba(155,160,163,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(221,228,230,1)), color-stop(11%, rgba(221,228,230,1)), color-stop(68%, rgba(102,107,110,1)), color-stop(100%, rgba(155,160,163,1)));
background: -webkit-linear-gradient(top, rgba(221,228,230,1) 0%, rgba(221,228,230,1) 11%, rgba(102,107,110,1) 68%, rgba(155,160,163,1) 100%);
background: -o-linear-gradient(top, rgba(221,228,230,1) 0%, rgba(221,228,230,1) 11%, rgba(102,107,110,1) 68%, rgba(155,160,163,1) 100%);
background: -ms-linear-gradient(top, rgba(221,228,230,1) 0%, rgba(221,228,230,1) 11%, rgba(102,107,110,1) 68%, rgba(155,160,163,1) 100%);
background: linear-gradient(to bottom, rgba(221,228,230,1) 0%, rgba(221,228,230,1) 11%, rgba(102,107,110,1) 68%, rgba(155,160,163,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#dde4e6', endColorstr='#9ba0a3', GradientType=0 );
        }

    </style>

    @yield('content')
</div>
<!-- Scripts -->
@if (count($errors) > 0)
    <script>
        swal("Oops...", "{{ $errors->first() }}", "error");
    </script>
@endif
@if (session('success'))
    <script>
        swal("Good job!", "{{ session('success') }}", "success")
    </script>
@endif
@yield('footer')
@include('layouts.code.footer')
</body>
</html>
