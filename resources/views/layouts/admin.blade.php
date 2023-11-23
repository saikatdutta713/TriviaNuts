<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
    <title>@yield('admin_title')</title>
</head>

<body id="body">
    <div class="container">
        <nav class="navbar">
            <div class="nav_icon" onclick="toggleSidebar()">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div class="navbar__left">
                {{-- <a href="#">Subscribers</a>
                <a href="#">Video Management</a>
                <a class="active_link" href="#">Admin</a> --}}
                @yield('admin__pageHeading')
            </div>
            <div class="navbar__right">
                {{-- <a href="#">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                </a> --}}
                <a href="#">
                    @if (auth()->user()->picture)
                    <div class="rounded-wrapper">
                        <img src="{{ Storage::url('avatars/').auth()->user()->picture }}"
                            alt="{{ env('APP_NAME').' '.ucwords(auth()->user()->name) }}" />
                    </div>
                    @else
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    @endif
                </a>
            </div>
        </nav>

        <main>
            @yield('admin__content')

            @isset ($success)
            <x-message-modal type="success" message="{{ $success }}" showCloseButton="true" />
            @endisset

            @isset ($error)
            <x-message-modal type="error" message="{{ $error }}" showCloseButton="true" />
            @endisset

            @isset ($warning)
            <x-message-modal type="warning" message="{{ $warning }}" buttonText="Confirm"
                buttonLink="{{ $redirect_link }}" showCloseButton="true" />
            @endisset

            @if (session()->has('success'))
            <x-message-modal type="success" message="{{ $success }}" showCloseButton="true" />
            @endif

            @if (session()->has('error'))
            <x-message-modal type="error" message="{{ $error }}" showCloseButton="true" />
            @endif

            @if (session()->has('warning'))
            <x-message-modal type="warning" message="{{ session()->get('warning') }}"
                buttonText="{{ session()->get('buttonText') }}" buttonLink="{{ session()->get('redirect_link') }}"
                showCloseButton="true" closeButtonText="{{ session()->get('closeButtonText') }}" />
            @endif

            @if(session()->has('success_notification'))
            <x-notification type="success" message="{{ session()->get('success_notification') }}" />
            @endif
            @if(session()->has('error_notification'))
            <x-notification type="error" message="{{ session()->get('error_notification') }}" />
            @endif
            @if(session()->has('warning_notification'))
            <x-notification type="warning" message="{{ session()->get('warning_notification') }}" />
            @endif
        </main>

        <div id="sidebar">
            <div class="sidebar__title">
                <div class="sidebar__img">
                    {{-- <img src="assets/logo.png" alt="logo" /> --}}
                    <img src="{{ asset('images/TriviaNuts_Logo.svg') }}" alt="logo" />
                    {{-- <h1>{{ env('APP_NAME') }}</h1> --}}
                </div>
                <i onclick="closeSidebar()" class="fa fa-times" id="sidebarIcon" aria-hidden="true"></i>
            </div>

            <div class="sidebar__menu">
                <a href="{{ route('admin.home') }}">
                    <div class="sidebar__link active_menu_link">
                        <i class="fa fa-home"></i>
                        Dashboard
                    </div>
                </a>
                <h2>Quizzes</h2>
                <a href="{{ route('admin.quiz') }}">
                    <div class="sidebar__link">
                        <i class="fas fa-file-alt" aria-hidden="true"></i>
                        All Quizzes
                    </div>
                </a>
                {{-- @if (auth()->user()->isSuperAdmin())
                <div class="sidebar__link">
                    <i class="fas fa-file-alt" aria-hidden="true"></i>
                    <a href="#">Approve Quizzes</a>
                </div>
                @endif --}}
                <a href="{{ route('admin.quiz.add.view') }}">
                <div class="sidebar__link">
                    <i class="fas fa-file-alt"></i>
                    Add New
                </div>
                </a>
                <h2>Questions</h2>
                <a href="{{ route('admin.question') }}">
                    <div class="sidebar__link">
                        <i class="fa fa-question"></i>
                        All Questions
                    </div>
                </a>
                {{-- @if (auth()->user()->isSuperAdmin())
                <div class="sidebar__link">
                    <i class="fa fa-question"></i>
                    <a href="#">Approve Questions</a>
                </div>
                @endif --}}
                <a href="{{ route('admin.question.add.view') }}">
                <div class="sidebar__link">
                    <i class="fa fa-question"></i>
                    Add Questions
                </div>
                </a>
                <h2>Users</h2>
                <a href="{{ route('admin.user') }}">
                    <div class="sidebar__link">
                        <i class="fa fa-users"></i>
                        All Users
                    </div>
                </a>
                <a href="{{ route('admin.user.add.view') }}">
                <div class="sidebar__link">
                    <i class="fa fa-user"></i>
                    Add User
                </div>
                </a>
                {{-- <div class="sidebar__link">
                    <i class="fa fa-user"></i>
                    <a href="#">Profile</a>
                </div> --}}
                <h2>Setting</h2>
                <a href="{{ route('admin.settings') }}">
                <div class="sidebar__link">
                    <i class="fa-solid fa-gear"></i>
                    Settings
                </div>
                </a>
                
                {{-- <h2>Announcements</h2>
                <a href="{{ route('admin.announcement') }}">
                    <div class="sidebar__link">
                        <i class="fa fa-bullhorn"></i>
                        Create Announcements
                    </div>
                </a> --}}
                {{-- <h2>Analytics & Reports</h2>
                <div class="sidebar__link">
                    <i class="fa fa-chart-bar"></i>
                    <a href="#">Analytics & Reports</a>
                </div>
                <a href="{{ route('admin.logout') }}">
                    <div class="sidebar__logout">
                        <i class="fa fa-sign-out-alt"></i>
                        Sign Out
                    </div>
                </a> --}}
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
    <script src="{{ asset('js/kit.fontawesome.com_1cad59c07c.js') }}"></script>
</body>

</html>