<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/kit.fontawesome.com_1cad59c07c.js') }}" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>@yield('title')</title>
</head>

<body>

    <header class="header">
        <div class="logo">
            <img src="{{ asset('images/TriviaNuts_Logo.svg') }}" alt="logo" />
        </div>
        <div class="navbar">
            <a href="{{ route('home_page') }}">
                <div class="navbutton">
                    Home
                </div>
            </a>
            <a href="{{ route('community') }}">
                <div class="navbutton">
                    Community
                </div>
            </a>
            <a href="{{ route('trends') }}">
                <div class="navbutton">
                    Trends
                </div>
            </a>
            <a href="{{ route('quiz_play') }}">
                <div class="navbutton">
                    Quiz
                </div>
            </a>
        </div>
        
        <div class="notifications-container" id="notifications-container">
            <div class="notifications-header">
                <h3>Notifications</h3>
                <button class="close-button">
                    <i class="fa-solid fa-xmark" id="closeIcon"></i>
                </button>
            </div>
            <div class="notification-body" id="notification-body">
                <div class="notification-div" id="unread">
                    <div class="notiImage">
                        <img src="{{ asset('images/avatar-blue.png') }}" alt="Notification Image" />
                    </div>
                    <div class="notification-content">
                    <div class="notification-header">
                        <div class="notification-title"> A message from John Doe: </div>
                        <div class="notification-time">
                            50 min ago
                        </div>
                    </div>
                    <div class="notification-message">
                        "Hey, how are you doing today?"
                    </div>
                    </div>
                </div>
                <div class="notification-div">
                    <div class="notiImage">
                        <img src="{{ asset('images/avatar-blue.png') }}" alt="Notification Image" />
                    </div>
                    <div class="notification-content">
                    <div class="notification-header">
                        <div class="notification-title">Mathematics: Quiz no 10</div>
                        <div class="notification-time">1 hr ago</div>
                    </div>
                    <div class="notification-message">
                        <button class="notification-button" id="verify">Verify Now</button>
                    </div>
                    </div>
                </div>
                <div class="notification-div">
                    <div class="notiImage">
                        <img src="{{ asset('images/avatar-blue.png') }}" alt="Notification Image" />
                    </div>
                    <div class="notification-content">
                    <div class="notification-header">
                        <div class="notification-title">Today's new quiz is live</div>
                        <div class="notification-time">2 hrs ago</div>
                    </div>
                    <div class="notification-message">
                        <button class="notification-button">Play Now</button>
                    </div>
                    </div>
                </div>
            </div>
            
            <div class="notification-body1" id="notification-body1">
                <div class="modal-content">
                    <div class="modal-header">
                        <i class="fa-solid fa-left-long" id="backIcon"></i>
                        <p>Mathematics: Quiz no 10</p>
                        
                    </div>
                    <div class="modal-body">
                    <div class="content" id="content">
                        <!-- Your scrollable content goes here -->
                        <p class="quizQuestion">1. What is the sum of 5 and 3?</p>
                        <p>A.7  / B.8  / C.6  / D.9   => Answer: A. 7</p>
                        <p class="quizQuestion">2. Which shape has six equal sides and six equal angles?</p>
                        <p>A.Rectangle  / B.Triangle  / C.Hexagon  / D.Circle   => Answer: C. Hexagon</p>
                        <p class="quizQuestion">3. In the equation 3x - 7 = 20, what is the value of 'x'?</p>
                        <p>A.9  / B.6  / C.7  / D.8  => Answer: A. 9</p>
                        <p class="quizQuestion">1. What is the sum of 5 and 3?</p>
                        <p>A.7  / B.8  / C.6  / D.9   => Answer: A. 7</p>
                        <p class="quizQuestion">1. What is the sum of 5 and 3?</p>
                        <p>A.7  / B.8  / C.6  / D.9   => Answer: A. 7</p>
                        <p class="quizQuestion">1. What is the sum of 5 and 3?</p>
                        <p>A.7  / B.8  / C.6  / D.9   => Answer: A. 7</p>
                        <p class="quizQuestion">1. What is the sum of 5 and 3?</p>
                        <p>A.7  / B.8  / C.6  / D.9   => Answer: A. 7</p>
                        <p class="quizQuestion">1. What is the sum of 5 and 3?</p>
                        <p>A.7  / B.8  / C.6  / D.9   => Answer: A. 7</p>
                        <p class="quizQuestion">1. What is the sum of 5 and 3?</p>
                        <p>A.7  / B.8  / C.6  / D.9   => Answer: A. 7</p>
                        <p class="quizQuestion">1. What is the sum of 5 and 3?</p>
                        <p>A.7  / B.8  / C.6  / D.9   => Answer: A. 7</p>
                        <p class="quizQuestion">1. What is the sum of 5 and 3?</p>
                        <p>A.7  / B.8  / C.6  / D.9   => Answer: A. 7</p>
                        <p class="quizQuestion">1. What is the sum of 5 and 3?</p>
                        <p>A.7  / B.8  / C.6  / D.9   => Answer: A. 7</p>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button class="accept-button">Approve</button>
                    <button class="reject-button">Reject</button>
                    <button class="expand-button" id="expand-button">Expand</button>
                    </div>
                </div>
            </div>

        </div>
        
        <div class="notificationIcon">
            <i class="fa-solid fa-bell" id="Icon"></i>
        </div>  

        <div class="login__container">
            @auth
            <div class="profile-container">
                <div class="profile-dropdown">
                    <div class="avatar-container">
                        @if (auth()->user()->picture)
                        <img src="{{ Storage::url('avatars/').auth()->user()->picture }}"
                                alt="{{ env('APP_NAME').' '.ucwords(auth()->user()->name) }}" class="avatar"/>
                        
                        @else
                        <img src="{{ asset('images/avatar-blue.png') }}" alt="User Avatar" class="avatar">
                        @endif  
                    </div>
                    <i class="fa-solid fa-caret-down dropdown-icon"></i>
                    <ul class="dropdown-menu">
                        <li><a href="{{ Route('profile') }}">Profile</a></li>
                        <li><a href="{{ Route('logout') }}">Sign Out</a></li>
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
        <div class="logo">
            <img src="{{ asset('images/TriviaNuts_Logo.svg') }}" alt="logo" />
        </div>
        <button class="toggle-menu">
            <span class="menu-icon"></span>
        </button>
    </header>

    <nav class="mobile_sidebar">
        <i class="fa-solid fa-square-xmark" id="close-toggle-menu"></i>
        <ul class="menu">
            <li><a href="{{ Route('home_page') }}">Home</a></li>
            <li><a href="{{ Route('community') }}">Community</a></li>
            <li><a href="{{ Route('trends') }}">Trends</a></li>
            <li><a href="{{ Route('quiz_play') }}">Quiz</a></li>
            @auth
            <li><a href="{{ Route('profile') }}">Profile</a></li>
            <li><a href="{{ Route('logout') }}">Sign Out</a></li>
             @else
            <li><a href="{{ Route('login') }}">Sign in</a></li>
            @endauth
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
                <a href="{{ Route('contactUs') }}" class="links">
                    Contact Us
                </a>
                <a href="{{ Route('aboutUs') }}" class="links">
                    About Us
                </a>
                <a href="{{ Route('privacy') }}" class="links">
                    Privacy Policy
                </a>
                <a href="{{ Route('terms') }}" class="links">
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
            const closeToggleMenuBtn = document.querySelector('#close-toggle-menu');

            toggleMenuBtn.addEventListener('click', function() {
                sidebar.classList.toggle('active');
                toggleMenuBtn.classList.toggle('active');
            });  

            closeToggleMenuBtn.addEventListener('click', function() {
                sidebar.classList.remove('active');
                toggleMenuBtn.classList.remove('active');
            });
        });

        console.log($('document'));
    </script>

</body>

</html>