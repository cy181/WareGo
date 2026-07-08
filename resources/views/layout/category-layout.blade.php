<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon" />
    <link href='{{ asset('bootstrap/css/bootstrap.min.css') }}' rel="stylesheet" />
    <link rel="stylesheet" href='{{ asset('css/common.css') }}' />
    <link rel="stylesheet" href='{{ asset('css/category.css') }}' />
    @yield('page-title')
</head>

<body>
    <div class="background"></div>
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
            <div class="search-wrapper">
                <input type="text" id="type-search" class="type-search" placeholder="Type to Search..."
                    autocomplete="off" />
                <button class="search-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 50 50">
                        <path
                            d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z">
                        </path>
                    </svg>
                </button>
            </div>
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
    <div class="category-wrapper">

        <aside class="category-sidebar">
            <h3>Categories</h3>
            <ul>
                @stack('sidebar-items')
            </ul>
        </aside>

        <div class="category-content">
            @yield('page-content')
        </div>

    </div>

    <!-- FOOTER -->
    <footer>
        <div class="footer-about">
            <h3>About</h3>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima,
                quasi quaerat eaque commodi dolor blanditiis. Doloremque eaque
                deserunt repellat consectetur eos, doloribus saepe omnis dolore a
                magni porro ad quidem. <br />
                <a href="{{ route('about') }}">Learn more about us here</a>
            </p>
        </div>
        <div class="footer-contact">
            <h3>Contact</h3>
            <p>email@example.com</p>
            <p>@groupname</p>
        </div>
    </footer>

    <div class="watermark">COPYRIGHT © 2026 WAREGO</div>

    <button onclick="backToTop()" id="top-btn" class="top-btn" title="Go to top">↑</button>

    <script src='{{ asset('js/common.js') }}?v=2'></script>
    <script src='{{ asset('js/category.js') }}?v=2'></script>
    <script src='{{ asset('bootstrap/js/bootstrap.min.js') }}'></script>
    @yield('custom-js')

</body>

</html>
