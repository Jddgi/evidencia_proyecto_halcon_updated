<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HALCON Order Management System</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">

    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body style="background:#f4f7f6;">

<div id="app">

    <nav
        class="navbar navbar-expand-md navbar-dark shadow-sm"
        style="background: linear-gradient(90deg, #13352a, #1f5543);"
    >

        <div class="container align-items-center">

            <a class="navbar-brand text-black" href="{{ url('/home') }}" style="padding:0;">

                <div style="font-size:28px;font-weight:bold;line-height:1;">
                    HALCON
                </div>

                <div style="font-size:12px; line-height:1;">
                    Logistics Management System
                </div>

            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div
                class="collapse navbar-collapse"
                id="navbarSupportedContent"
            >

                <ul class="navbar-nav me-auto">
                </ul>

                <ul class="navbar-nav ms-auto">

                    @guest

                        @if (Route::has('login'))

                            <li class="nav-item">

                                <a
                                    class="nav-link text-black"
                                    href="{{ route('login') }}"
                                >
                                    Login
                                </a>

                            </li>

                        @endif

                    @else

                        <li class="nav-item dropdown">

                            <a
                                id="navbarDropdown"
                                class="nav-link dropdown-toggle text-black fw-bold"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                                v-pre
                            >

                                {{ Auth::user()->name }}

                            </a>

                            <div
                                class="dropdown-menu dropdown-menu-end"
                                aria-labelledby="navbarDropdown"
                            >

                                <a
                                    class="dropdown-item"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                                >
                                    Logout
                                </a>

                                <form
                                    id="logout-form"
                                    action="{{ route('logout') }}"
                                    method="POST"
                                    class="d-none"
                                >
                                    @csrf
                                </form>

                            </div>

                        </li>

                    @endguest

                </ul>

            </div>

        </div>

    </nav>

    <main class="py-4">

        @yield('content')

    </main>

</div>

</body>

</html>