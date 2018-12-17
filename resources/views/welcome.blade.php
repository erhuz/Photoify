<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main>
            <div class="landing-page">
                <div class="header">
                    <div class="content-container">
                        <div class="content">
                            <div class="title m-b-md">
                                {{ config('app.name', 'Laravel') }}
                            </div>

                            <div class="under-title">
                                <p>
                                    A social media for aesthetic photographers of all shapes and sizes.
                                </p>
                            </div>

                            <nav>
                                <div class="links">
                                    <a href="{{ route('register') }}">Register</a>
                                    <a href="{{ route('login') }}">Login</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="btn-container">
                        <div class="scroll-down-btn">
                            <i class="down"></i>
                        </div>
                    </div>
                </div>
                <div class="app-content">
                    <!-- Load top 10 most recent posts or so... -->
                </div>
            </div>
        </main>
    </div>
</body>
</html>
