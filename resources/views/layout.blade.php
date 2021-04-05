<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="has-navbar-fixed-top">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@yield('title') - Professional Pills</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
</head>
<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="{{ route('home') }}">
                    Home
                </a>

                @auth
                    <a class="navbar-item" href="{{ route('signup') }}">
                        Sign up
                    </a>

                    <a class="navbar-item" href="{{ route('status') }}">
                        Status
                    </a>

                    @if (Auth::user()->role == App\Models\User::ROLE_ADMIN)
                        <a class="navbar-item" href="{{ route('admin.home') }}">
                            Admin
                        </a>
                    @endif
                @endauth
            </div>

            @auth
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary" href="{{ route('auth.logout') }}">@lang('layout.header.logout')</a>
                        </div>
                    </div>
                </div>
            @else
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary" href="{{ route('auth.login') }}">@lang('layout.header.login')</a>
                            <a class="button is-light" href="{{ route('auth.register') }}">@lang('layout.header.register')</a>
                        </div>
                    </div>
                </div>
            @endauth
        </div>
    </nav>

    <div class="section">
        <div class="container">
            @yield('content')
        </div>
    </div>
</body>
</html>
