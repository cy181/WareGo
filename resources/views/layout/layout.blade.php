<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon" />
    <link href='{{ asset('bootstrap/css/bootstrap.min.css') }}' rel="stylesheet" />
    <link rel="stylesheet" href='{{ asset('css/common.css') }}' />
    @yield('custom-css')
    @yield('page-title')
</head>

<body>
    <!-- NAVIGATION BAR -->
    <nav>
        <div class="left">
            <ul>
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo" />
                </a>
            </ul>
            <ul>
                <a href="{{ route('about') }}">ABOUT</a>
            </ul>
        </div>

        <div class="center">
            <form action="" method="GET" class="search-wrapper">
                <input type="text" name="search" id="type-search" class="type-search"
                    placeholder="Type to Search..." value="{{ request('search') }}" autocomplete="off" />
                <button class="search-btn" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 50 50">
                        <path
                            d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z">
                        </path>
                    </svg>
                </button>
            </form>
        </div>

        <div class="right">
            <div class="categories-wrapper">
                <ul class="categories-btn" id="categories-btn">
                    <a>CATEGORIES</a>
                </ul>
                <ul class="categories-dropdown" id="categories-dropdown">
                    <li><a href="{{ route('food') }}">Food</a></li>
                    <li><a href="{{ route('electronic') }}">Electronic</a></li>
                    <li><a href="{{ route('literature') }}">Literature</a></li>
                    <li><a href="{{ route('tool') }}">Tool</a></li>
                    <li><a href="{{ route('furniture') }}">Furniture</a></li>
                    <li><a href="{{ route('beauty-product') }}">Beauty Product</a></li>
                    <li><a href="{{ route('health-product') }}">Health Product</a></li>
                    <li><a href="{{ route('household') }}">Household</a></li>
                </ul>
            </div>
            <ul>
                <a href="">CART</a>
            </ul>
        </div>
    </nav>

    <!-- PAGE CONTENT -->

    @yield('page-content')

    <!-- FOOTER -->
    <footer>
        <div class="footer-about">
            <h3>About</h3>
            <p>
                WareGo is dedicated to simplifying warehouse inventory management through a reliable and user-friendly
                platform. Our mission is to help businesses organize, track, and restock their inventory with greater
                efficiency, making warehouse operations smarter and more productive. <br />
                <a href="{{ route('about') }}">Learn more about us here</a>
            </p>
        </div>
        <div class="footer-contact">
            <h3>Contact</h3>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-mail">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                    <path d="M3 7l9 6l9 -6" />
                </svg>
                warego.team@example.com</p>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                </svg>
                +81 90-1234-5678</p>
            <p><svg aria-hidden="true" class="valign-middle pr2" focusable="false" preserveAspectRatio="xMidYMid meet"
                    style="width:32px;height:32px;overflow:visible;fill:currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12,11.475 C10.5214286,11.475 9.32142857,10.299 9.32142857,8.85 C9.32142857,7.401 10.5214286,6.225 12,6.225 C13.4785714,6.225 14.6785714,7.401 14.6785714,8.85 C14.6785714,10.299 13.4785714,11.475 12,11.475 M12,1.5 C7.85357143,1.5 4.5,4.7865 4.5,8.85 C4.5,14.3625 12,22.5 12,22.5 C12,22.5 19.5,14.3625 19.5,8.85 C19.5,4.7865 16.1464286,1.5 12,1.5">
                    </path>
                </svg>
                Tokyo, Japan</p>
        </div>
    </footer>

    <div class="watermark">COPYRIGHT © 2026 WareGo. All rights reserved.</div>

    <button onclick="backToTop()" id="top-btn" class="top-btn" title="Go to top">↑</button>

    <script src="{{ asset('js/common.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    @yield('custom-js')

</body>

</html>
