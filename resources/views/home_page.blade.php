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
                <a href="{{ route('quiz') }}">
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

<p id="content-heading">Badges</p>
<div class="grid-quiz-badge">
    <div class="badge-design" id="badge-design">
        <div class="first-row">
            <img src="{{ asset('images/badge1.svg') }}" alt="">
            <p class="tittle">
                Gold
            </p>
        </div>

        <div class="second-row">
            Unlock at 10 points
        </div>
    </div>
    <div class="badge-design" id="badge-design">
        <div class="first-row">
            <img src="{{ asset('images/badge2.svg') }}" alt="">
            <p class="tittle">
                Platinum
            </p>
        </div>

        <div class="second-row">
            Unlock at 50 points
        </div>
    </div>
    <div class="badge-design" id="badge-design">
        <div class="first-row">
            <img src="{{ asset('images/badge3.svg') }}" alt="">
            <p class="tittle">
                Ruby
            </p>
        </div>
        <div class="second-row">
            Unlock at 100 points
        </div>
    </div>
    <div class="badge-design" id="badge-design">
        <div class="first-row">
            <img src="{{ asset('images/badge4.svg') }}" alt="">
            <p class="tittle">
                Diamond
            </p>
        </div>
        <div class="second-row">
            Unlock at 160 points
        </div>
    </div>
    <div class="badge-design" id="badge-design">
        <div class="first-row">
            <img src="{{ asset('images/badge5.svg') }}" alt="">
            <p class="tittle">
                Eagle
            </p>
        </div>
        <div class="second-row">
            Unlock at 240 points
        </div>
    </div>
    <div class="badge-design" id="badge-design">
        <div class="first-row">
            <img src="{{ asset('images/badge6.svg') }}" alt="">
            <p class="tittle">
                Wolf
            </p>
        </div>
        <div class="second-row">
            Unlock at 320 points
        </div>
    </div>
    <div class="badge-design" id="badge-design">
        <div class="first-row">
            <img src="{{ asset('images/badge7.svg') }}" alt="">
            <p class="tittle">
                Lion
            </p>
        </div>
        <div class="second-row">
            Unlock at 410 points
        </div>
    </div>
    <div class="badge-design" id="badge-design">
        <div class="first-row">
            <img src="{{ asset('images/badge8.svg') }}" alt="">
            <p class="tittle">
                Pirate
            </p>
        </div>
        <div class="second-row">
            Unlock at 500 points
        </div>
    </div>
    <div class="badge-design" id="badge-design">
        <div class="first-row">
            <img src="{{ asset('images/badge9.svg') }}" alt="">
            <p class="tittle">
                Samurai
            </p>
        </div>
        <div class="second-row">
            Unlock at 650 points
        </div>
    </div>
    <div class="badge-design" id="badge-design">
        <div class="first-row">
            <img src="{{ asset('images/badge10.svg') }}" alt="">
            <p class="tittle">
                Ninja
            </p>
        </div>
        <div class="second-row">
            Unlock at 800 points
        </div>
    </div>
</div>
<div class="quote">
    <div class="quote_container">
        <div class="the_quote">
            @php
            $quote = \App\Http\Controllers\QuoteController::getQuote();
            @endphp
            <div class="the_quote">
                <h2>{{ ($quote[0]['q']) }}</h2>
                <h3>{{ $quote[0]['a'] }}</h3>
            </div>
        </div>
    </div>
</div>
<p id="content-heading">Leader Board</p>
<div class="leaderview">
    @php
    use App\Models\Score;
    $scores= Score::orderBy('score_value', 'desc')->limit(6)->get();
    @endphp
    @foreach ($scores as $key => $score)
    @php
    $user = \App\Models\User::find($score->user_id);
    $medalColor = ($key == 0) ? '#ffd700' : (($key == 1) ? '#808080' : (($key == 2) ? '#CD7F32' : ''));
    @endphp
    <div class="leader1">
        <div class="dp">
            <div id="medel">
                @if ($key == 0||$key==1||$key==2)
                <i class="fas fa-medal" style="color: {{ $medalColor }}"></i>
                @else
                <p>{{ $key }}</p>
                @endif
                @if ($user->picture!=null)
                <img src="{{ Storage::url('avatars/').$user->picture }}" alt="">
                @else
                <img src="{{ asset('images/avatar-blue.png') }}" alt="">
                @endif
            </div>
        </div>
        <div class="leaderDetails">
            <div id="name">{{ ucwords($user->name) }}</div>
            <p id="points">Points: {{ $score->score_value }}</p>
        </div>
    </div>
    @endforeach
</div>

@endsection

@isset($status_mailid_verify)
<x-notification type="{{ $status_mailid_verify }}" message="{{ $message_mailid_verify }}" />
@endisset