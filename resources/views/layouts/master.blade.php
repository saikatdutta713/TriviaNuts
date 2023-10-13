<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/kit.fontawesome.com_1cad59c07c.js') }}" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>

    <header class="header">
        <div class="logo">
            Logo
        </div>
        <div class="navbar">
            <a href="{{ route('home') }}">
                <div class="navbutton">
                    Home
                </div>
            </a>
            <a href="{{ route('community') }}">
                <div class="navbutton">
                    Community
                </div>
            </a>
            <div class="navbutton">
                Trends
            </div>
            <a href="{{ route('category') }}">
                <div class="navbutton">
                    Category
                </div>
            </a>
        </div>
        <div class="login__container">
            @auth
            <div class="profile-container">
                <div class="profile-dropdown">
                    <div class="avatar-container">
                        <img src="{{ asset('images/avatar-blue.png') }}" alt="User Avatar" class="avatar">
                    </div>
                    <i class="fa-solid fa-caret-down dropdown-icon"></i>
                    <ul class="dropdown-menu">
                        <li><a href="{{ Route('profile') }}">Profile</a></li>
                        <li><a href="{{ Route('logout') }}">Logout</a></li>
                    </ul>
                </div>
            </div>
            @else
            <div class="login">
                <a href="{{ Route('login') }}">Sign in</a>
            </div>
            @endauth
        </div>
    </header>
    <header class="mobile_header">
        <div class="logo">Logo</div>
        <button class="toggle-menu">
            <span class="menu-icon"></span>
        </button>
    </header>

    <nav class="mobile_sidebar">
        <ul class="menu">
            <li><a href="{{ Route('home') }}">Home</a></li>
            <li><a href="#">Community</a></li>
            <li><a href="#">Trends</a></li>
            <li><a href="#">Category</a></li>
            <li><a href="{{ Route('login') }}">Login</a></li>
        </ul>
    </nav>


    <article class="content">
        @yield('content')

        @isset ($success)
        <x-message-modal type="success" message="{{ $success }}" showCloseButton="true" />
        @endisset

        @isset ($error)
        <x-message-modal type="error" message="{{ $error }}" showCloseButton="true" />
        @endisset

        @isset($success_notification)
        <x-notification type="success" message="{{ $success_notification }}" />
        @endisset

        @if(session()->has('success_notification'))
        <x-notification type="success" message="{{ session()->get('success_notification') }}" />
        @endif
        @if(session()->has('error_notification'))
        <x-notification type="error" message="{{ session()->get('error_notification') }}" />
        @endif
    </article>

    <footer class="footer">
        <div class="row1">
            <div class="company_tab">
                <a href="#" class="links">
                    Contact Us
                </a>
                <a href="#" class="links">
                    About Us
                </a>
                <a href="#" class="links">
                    Privacy Policy
                </a>
                <a href="#" class="links">
                    Terms and Conditions
                </a>
            </div>
            <div class="social_tab">
                <div class="media">
                    <i class="fa-brands fa-facebook"></i>
                </div>
                <div class="media">
                    <i class="fa-brands fa-twitter"></i>
                </div>
                <div class="media">
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <div class="media">
                    <i class="fa-brands fa-linkedin"></i>
                </div>
            </div>
        </div>
        <div class="row2">
            <p class="copyright">
                Copyright
            </p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleMenuBtn = document.querySelector('.toggle-menu');
            const sidebar = document.querySelector('.mobile_sidebar');
                
            toggleMenuBtn.addEventListener('click', function() {
                sidebar.classList.toggle('active');
                toggleMenuBtn.classList.toggle('active');
            });  
        });

        console.log($('document'));
    </script>

</body>

</html>