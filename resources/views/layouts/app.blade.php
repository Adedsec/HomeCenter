<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Home Center') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
</head>

<body>
<div id="app">
    <nav class="navbar navbar-expand  navbar-dark bg-dark shadow-sm" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                @lang('strings.Nav.title')
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @lang('strings.Nav.cases')
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item"
                               href="{{route('Estate.index','all')}}">@lang('strings.Nav.category_all')</a>
                            <a class="dropdown-item"
                               href="{{route('Estate.index','sell')}}">@lang('strings.Nav.category_sell')</a>
                            <a class="dropdown-item"
                               href="{{route('Estate.index','rent')}}">@lang('strings.Nav.category_rent')</a>
                            <a class="dropdown-item text-danger"
                               href="{{route('Estate.create')}}">@lang('strings.add case')</a>
                        </div>
                    </li>
                    <li class="navbar-item">
                        <a href="{{route('Customer.index')}}" class="nav-link">@lang('strings.Nav.order list')</a>
                    </li>
                    <li class="navbar-item">
                        <a href="{{route('Customer.index')}}" class="nav-link">@lang('strings.Nav.customers')</a>
                    </li>
                    <li class="navbar-item">
                        <a href="{{route('Owner.index')}}" class="nav-link">@lang('strings.Nav.owners')</a>
                    </li>
                    <li class="navbar-item">
                        <a href="{{route('Category.index')}}" class="nav-link">@lang('strings.Nav.categories')</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">@lang('strings.Nav.login')</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">@lang('strings.Nav.register')</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    @lang('strings.Nav.logout')
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="">
        @yield('content')
    </main>
</div>

<footer>
    @yield('footer')
</footer>
<script>
    @yield('javascript')
</script>

</body>

</html>
