<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <script src="{{ asset('js/kit.fontawesome.com_1cad59c07c.js') }}"></script>
</head>

<body>
    <header class="header">
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
    </header>
    <section class="greeting">
        <div class="polygon"></div>
        <div class="content">
            <div class="left">
                <div class="tagline-container">
                    <h1 class="tagline">Unlock Your Knowledge: Dive into the World of Quizzing!</h1>
                </div>
                <div class="button">
                    <a href="#">
                        <span>Play Quiz!</span>
                        <i class="fa-solid fa-up-right-from-square"></i>
                    </a>
                </div>
            </div>
            <div class="right">
                <img src="{{ asset('images/12297523_4913580.svg') }}" alt="gyguv">
            </div>
        </div>
    </section>
    <section class="quote">
        <img src="{{ asset('images/flower.jpg') }}" alt="quotes background">
        <div class="quote_container">
            <div class="the_quote">

                <h2>{{ ($quote[0]['q']) }}</h2>
                <h3>{{ $quote[0]['a'] }}</h3>
            </div>
        </div>
    </section>
</body>

</html>