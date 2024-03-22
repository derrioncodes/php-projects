<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- START OF CSS --}}
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/create-account.css">
    <link rel="stylesheet" href="/css/jobs.css">

    {{-- END OF CSS --}}

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONT AWESOME -->

    <!-- START OF FONT STYLES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <!-- END OF FONT STYLES -->

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <title>@yield('title')</title>
</head>
<body>
    @if (Route::has('login'))
    @auth
        <header class="app-header">
            <form method="POST" action="{{ route('logout') }}" style="height: 100%;">
                @csrf
                    <a class="logout" :href="route('logout')" onclick="event.preventDefault();
                    this.closest('form').submit();">Logout</a>
            </form>
            @endauth
        </header>
    @endif
    {{-- END OF HEADER --}}

    {{-- START OF CONTENT --}}
    @yield('content')
    {{-- END OF CONTENT --}}

    <script src="/js/jobs.js"></script>
</body>
</html>