@extends('layouts.master')
@section('title')
    {{ isset($title) ? $title : env('APP_NAME')." Home Page" }}
@endsection

@section('content')
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
    <section class="quote_motivation">
        <div class="quote">
            <div class="quote_container">
                <div class="the_quote">
                    <h2>{{ "The greatest glory in living lies not in never falling, but in rising every time we fall" }}
                    </h2>
                    <h3>{{ "Nelson Mandela" }}</h3>
                </div>
            </div>
        </div>
        <div class="leaderboard">
            <div class="leaderview">
                <p>Leader Board</p>
                <div class="leader1">
                    <div class="dp">
                        <i id="medel" class="fas fa-medal" style="color: #ffd700"></i>
                        <i class="fa-solid fa-circle-user" id="leaderDp"></i>
                    </div>
                    <div class="leaderDetails">
                        <div id="name">Uday_Krishna_Pal</div>
                        <i class="fa-solid fa-gem" id="badgeDp"></i>
                        <div id="points">7000</div>
                    </div>
                </div>
                <div class="leader1">
                    <div class="dp">
                        <i id="medel" class="fas fa-medal" style="color: #C0C0C0"></i>
                        <i class="fa-solid fa-circle-user" id="leaderDp"></i>
                    </div>
                    <div class="leaderDetails">
                        <div id="name">Subhankar_$inha </div>
                        <i class="fa-solid fa-gem" id="badgeDp"></i>
                        <div id="points">6890</div>
                    </div>
                </div>
                <div class="leader1">
                    <div class="dp">
                        <i id="medel" class="fas fa-medal" style="color: #CD7F32"></i>
                        <i class="fa-solid fa-circle-user" id="leaderDp"></i>
                    </div>
                    <div class="leaderDetails">
                        <div id="name">Saikat_Dutta35 </div>
                        <i class="fa-solid fa-star-half-stroke" id="badgeDp"></i>
                        <div id="points">5742</div>
                    </div>
                </div>
                <div class="leader1">
                    <div class="dp">
                        <div id="noId">4</div>
                        <i class="fa-solid fa-circle-user" id="leaderDp"></i>
                    </div>
                    <div class="leaderDetails">
                        <div id="name">Hacker_Win</div>
                        <i class="fa-solid fa-shield-virus" id="badgeDp"></i>
                        <div id="points">5342</div>
                    </div>
                </div>
                <div class="leader1">
                    <div class="dp">
                        <div id="noId">5</div>
                        <i class="fa-solid fa-circle-user" id="leaderDp"></i>
                    </div>
                    <div class="leaderDetails">
                        <div id="name">Ronit$ingh</div>
                        <i class="fa-solid fa-shield-cat" id="badgeDp"></i>
                        <div id="points">5742</div>
                    </div>
                </div>
                <div class="leader1">
                    <div class="dp">
                        <div id="noId">6</div>
                        <i class="fa-solid fa-circle-user" id="leaderDp"></i>
                    </div>
                    <div class="leaderDetails">
                        <div id="name">Pritam_Bag002</div>
                        <i class="fa-solid fa-shield-heart" id="badgeDp"></i>
                        <div id="points">5000</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@isset($status_mailid_verify)
    <x-notification type="{{ $status_mailid_verify }}" message="{{ $message_mailid_verify }}" />
 @endisset