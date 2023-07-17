<div class="header">
    <div class="logo">
        Logo
    </div>
    <div class="navbar">
        <div class="navbutton">
            Home
        </div>
        <div class="navbutton">
            Community
        </div>
        <div class="navbutton">
            Trends
        </div>
        <div class="navbutton">
            Category
        </div>
    </div>
    <div class="login">
        Login
    </div>
</div>
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleMenuBtn = document.querySelector('.toggle-menu');
        const sidebar = document.querySelector('.mobile_sidebar');
        
        toggleMenuBtn.addEventListener('click', function() {
            sidebar.classList.toggle('active');
            toggleMenuBtn.classList.toggle('active');
        });

        
    });
</script>