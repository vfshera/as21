<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AcademiaSteph21') }}</title>

    <!-- Scripts -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js', 'resources/js/chart.min.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body>

    @props(['navs'])

    @php
        $user = request()->routeIs('admin.*') ? Auth::guard('admin')->user() : Auth::user();
    @endphp


    <main class="dashboard ">

        <aside class="sidebar">

            <div class="banner ">
                <img src="/storage/images/as21logo.png" alt="academiasteph21 logo"></img>
                <span>academiasteph21</span>
            </div>

            <x-dashboard.sidebar :navs="$navs" />

        </aside>

        <section class="nav-content">

            <header class="dashboard-header">

                <nav class="header-links">
                    <ul>
                        <li>
                            <a href="">Notifications</a>
                        </li>
                        <li>
                            <a href="">Profile</a>
                        </li>
                    </ul>
                </nav>

                <section class="auth-profile">
                    <span class="username">Hi {{ $user->name }}</span>
                    <div class="photo">
                        <img src="/storage/images/as21logo.png" alt="profile photo"></img>
                    </div>
                </section>
            </header>

            <div class="dashboard-content">
                {{ $slot }}
            </div>

        </section>

    </main>

    @stack('scripts')

    @stack('modals')

    @livewireScripts
</body>

</html>
