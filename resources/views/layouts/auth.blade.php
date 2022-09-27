<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AcademiaSteph21') }}</title>

    <!-- Scripts -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body>



    <main class="dashboard ">

        <aside class="sidebar">

            <div class="banner ">
                <img src="/storage/images/as21logo.png" alt="academiasteph21 logo"></img>
                <span>academiasteph21</span>
            </div>

            <x-dashboard.sidebar :navs="$adminNavs" />


            <div class="logout bg-blue-50 p-5 rounded shadow">
                <form method="POST"
                    action="{{ request()->routeIs('admin.*') ? route('admin.logout') : route('logout') }}" x-data>
                    @csrf

                    <button class="bg-red-500 w-full text-white rounded text-center py-1" type="submit">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>

        </aside>

        <section class="nav-content">

            <header class="dashboard-header">

                <nav class="header-links">
                    <ul>
                        @foreach ($headerLinks as $link)
                            <li @class([
                                'active' => url()->current() === $link->url,
                            ])>
                                <a href="{{ $link->url }}">{{ $link->title }}</a>
                            </li>
                        @endforeach

                    </ul>
                </nav>

                <section class="auth-profile">
                    <span class="username" @class(['text-red-500' => $user->status === 0])>Hi {{ $user->name }}</span>
                    <div class="photo">
                        <img src="{{ $user->profile_photo_url }}" alt="profile photo"></img>
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
