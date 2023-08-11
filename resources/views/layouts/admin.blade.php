<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
    <title>CSS GRID DASHBOARD</title>
</head>

<body id="body">
    <div class="container">
        <nav class="navbar">
            <div class="nav_icon" onclick="toggleSidebar()">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div class="navbar__left">
                <a href="#">Subscribers</a>
                <a href="#">Video Management</a>
                <a class="active_link" href="#">Admin</a>
            </div>
            <div class="navbar__right">
                <a href="#">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </a>
                <a href="#">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                </a>
                <a href="#">
                    {{-- <img width="30" src="{{ asset('images/avatar.svg') }}" alt="" /> --}}
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </a>
            </div>
        </nav>

        <main>
            @yield('admin__content')
        </main>

        <div id="sidebar">
            <div class="sidebar__title">
                <div class="sidebar__img">
                    <img src="assets/logo.png" alt="logo" />
                    <h1>{{ env('APP_NAME') }}</h1>
                </div>
                <i onclick="closeSidebar()" class="fa fa-times" id="sidebarIcon" aria-hidden="true"></i>
            </div>

            <div class="sidebar__menu">
                <div class="sidebar__link active_menu_link">
                    <i class="fa fa-home"></i>
                    <a href="#">Dashboard</a>
                </div>
                <h2>Quizzes</h2>
                <div class="sidebar__link">
                    {{-- <i class="fa fa-user-secret" aria-hidden="true"></i> --}}
                    <i class="fas fa-file-alt" aria-hidden="true"></i>
                    <a href="#">Manage Quizzes</a>
                </div>
                <div class="sidebar__link">
                    <i class="fas fa-file-alt"></i>
                    <a href="#">Add New</a>
                </div>
                <h2>Questions</h2>
                <div class="sidebar__link">
                    <i class="fa fa-question"></i>
                    <a href="#">Manage Questions</a>
                </div>
                <div class="sidebar__link">
                    <i class="fa fa-question"></i>
                    <a href="#">All Questions</a>
                </div>
                <h2>Users</h2>
                <div class="sidebar__link">
                    <i class="fa fa-users"></i>
                    <a href="#">All Users</a>
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
                <div class="sidebar__link">
                    <i class="fa-solid fa-gears"></i>
                    <a href="#">maintenance Mode</a>
                    <label class="maintenance_mode_switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
                <h2>Announcements</h2>
                <div class="sidebar__link">
                    <i class="fa fa-bullhorn"></i>
                    <a href="#">Create Announcements</a>
                </div>
                <h2>Analytics & Reports</h2>
                <div class="sidebar__link">
                    <i class="fa fa-chart-bar"></i>
                    <a href="#">Analytics & Reports</a>
                </div>
                <div class="sidebar__logout">
                    <i class="fa fa-sign-out-alt"></i>
                    <a href="#">Log out</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
    <script src="{{ asset('js/kit.fontawesome.com_1cad59c07c.js') }}"></script>
</body>

</html>