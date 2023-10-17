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
                <a href="#">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                </a>
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

            @isset($success_notification)
            <x-notification type="success" message="{{ $success_notification }}" />
            @endisset

            @if(session()->has('success_notification'))
            <x-notification type="success" message="{{ session()->get('success_notification') }}" />
            @endif
            @if(session()->has('error_notification'))
            <x-notification type="error" message="{{ session()->get('error_notification') }}" />
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
                <div class="sidebar__link active_menu_link">
                    <i class="fa fa-home"></i>
                    <a href="{{ route('admin.home') }}">Dashboard</a>
                </div>
                <h2>Quizzes</h2>
                <div class="sidebar__link">
                    <i class="fas fa-file-alt" aria-hidden="true"></i>
                    <a href="{{ route('admin.quiz') }}">All Quizzes</a>
                </div>
                @if (auth()->user()->isSuperAdmin())
                <div class="sidebar__link">
                    <i class="fas fa-file-alt" aria-hidden="true"></i>
                    <a href="#">Approve Quizzes</a>
                </div>
                @endif
                <div class="sidebar__link">
                    <i class="fas fa-file-alt"></i>
                    <a href="#">Add New</a>
                </div>
                <h2>Questions</h2>
                <div class="sidebar__link">
                    <i class="fa fa-question"></i>
                    <a href="{{ route('admin.question') }}">All Questions</a>
                </div>
                @if (auth()->user()->isSuperAdmin())
                <div class="sidebar__link">
                    <i class="fa fa-question"></i>
                    <a href="#">Approve Questions</a>
                </div>
                @endif
                <div class="sidebar__link">
                    <i class="fa fa-question"></i>
                    <a href="#">All Questions</a>
                </div>
                <h2>Users</h2>
                <div class="sidebar__link">
                    <i class="fa fa-users"></i>
                    <a href="{{ route('admin.user') }}">All Users</a>
                </div>
                <div class="sidebar__link">
                    <i class="fa fa-user"></i>
                    <a href="#">Add User</a>
                </div>
                <div class="sidebar__link">
                    <i class="fa fa-user"></i>
                    <a href="#">Profile</a>
                </div>
                <h2>Setting</h2>
                <div class="sidebar__link">
                    <i class="fa-solid fa-gear"></i>
                    <a href="#">Settings</a>
                </div>
                {{-- @if (auth()->user()->isSuperAdmin())
                <form method="GET" action="{{ route('maintenance.toggle') }}">
                    @csrf
                    <div class="sidebar__link">
                        <i class="fa-solid fa-gears"></i>
                        <a href="#">Maintenance Mode</a>
                        <label class="maintenance_mode_switch">
                            <button type="submit" class="{{ app()->isDownForMaintenance() ? 'red' : '' }}">
                                {{ app()->isDownForMaintenance() ? 'Off' : 'On' }}
                            </button>
                        </label>
                    </div>
                </form>
                @endif --}}
                <h2>Announcements</h2>
                <div class="sidebar__link">
                    <i class="fa fa-bullhorn"></i>
                    <a href="{{ route('admin.announcement') }}">Create Announcements</a>
                </div>
                <h2>Analytics & Reports</h2>
                <div class="sidebar__link">
                    <i class="fa fa-chart-bar"></i>
                    <a href="#">Analytics & Reports</a>
                </div>
                <div class="sidebar__logout">
                    <i class="fa fa-sign-out-alt"></i>
                    <a href="{{ route('admin.logout') }}">Log out</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
    <script src="{{ asset('js/kit.fontawesome.com_1cad59c07c.js') }}"></script>
</body>

</html>