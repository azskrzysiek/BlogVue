<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BlogVue') }}</title>

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar has-shadow">
            <div class="container">
                <div class="navbar-brand">
                <a class="navbar-item" href="{{route('home')}}">
                    <img src="{{asset('images/logo-dev.png')}}" alt="Blog">
                </a>
                <a href="" class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
                <a href="" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
                <a href="" class="navbar-item is-tab is-hidden-mobile">Share</a> 
                </div>
                <div class="navbar-end" style="overflow: visible;">
                    @if(Auth::guest())
                        <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
                        <a href="{{route('register')}}" class="navbar-item is-tab">Join Our Community</a>
                    @else
                        <button class="dropdown is-aligned-right navbar-item is-tab">
                            Hey Alex <span class="icon"><i class="fa fa-caret-down"></i></span>
                            <ul class="dropdown-menu">
                                <li><a href=""><span claass="icon"><i class="fa fa-fw m-r-10 fa-user-circle-o"></i></span>Profile</a></li>
                                <li><a href=""><span claass="icon"><i class="fa fa-fw m-r-10 fa-bell"></i></span>Norification</a></li>
                                <li><a href=""><span claass="icon"><i class="fa fa-fw m-r-10 fa-cog"></i></span>Settings</a></li>
                                <li class="seperator"></li>
                                <li><a href=""><span claass="icon"><i class="fa fa-fw m-r-10 fa-sign-out"></i></span>Logout</a></li>
                            </ul>
                        </button>
                    @endif
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

    @yield('scripts')
</html>
