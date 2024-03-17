<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/03-navbar.css">
    <link rel="stylesheet" href="/css/content.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title')</title>
</head>

<body>
    {{-- START OF HEADER --}}
    <header>
        <nav>
            <div class="brand-logo_text"><a href="/">Brand</a></div>
            <!-- <div class="brand-logo_img"></div> -->
            <ul class="menu">
                <li><a href="/">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Sevices</a></li>
                <li><a href="#">Features</a></li>
            </ul>
            <div class="right-side-nav">

                {{-- START OF LOGIN REGISTER TRANSFER --}}
                {{-- @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                    <a href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Dashboard
                    </a>
                    @else
                    <a href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Log in
                    </a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Register
                    </a>
                    @endif
                    @endauth
                </nav>
                @endif --}}

                {{-- END OF LOGIN REGISTER TRANSFER --}}
                @if (Route::has('login'))
                @auth
                <div>{{ Auth::user()->name }}</div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ url('/logout') }}" class="login-btn" onclick="event.preventDefault();
                        this.closest('form').submit();">Logout</a>
                </form>


                @else
                <a href="/login" class="login-btn">Login</a>

                <a href="/create-account" class="register-btn">Register</i></a>
                @endauth
                @endif
            </div>
            <div class="right-side-nav_mobile">
                @if (Route::has('login'))
                @auth
                <div>{{ Auth::user()->name }}</div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ url('/logout') }}" class="login-btn" onclick="event.preventDefault();
                        this.closest('form').submit();">Logout</a>
                </form>


                @else
                <a href="/login" class="login-btn">Login</a>

                <a href="/create-account" class="register-btn">Register</i></a>
                @endauth
                @endif
                <button class="open-mobile-menu-btn"><i class="fa-solid fa-bars"></i></button>

            </div>

        </nav>
    </header>
    <section class="mobile-nav_container">
        <div class="mobile-nav">
            <div class="mobile-nav_header">
                <div class="brand-logo_text"><a href="#">Brand</a></div>
                <!-- <div class="brand-logo_img"></div> -->
                <button class="close-mobile-menu-btn"><i class="fa-solid fa-xmark"></i></button>
            </div>
        </div>
        <ul class="mobile-nav_menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Sevices</a></li>
            <li><a href="#">Features</a></li>
        </ul>
    </section>
    {{-- END OF HEADER --}}

    {{-- START OF CONTENT --}}
    @yield('content')
    {{-- START OF CONTENT --}}
    <script src="/js/app.js"></script>
</body>

</html>