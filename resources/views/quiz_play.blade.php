@extends('layouts.master')
@section('title')
{{ isset($title) ? $title : env('APP_NAME')." Home Page" }}
@endsection

@section('content')
{{-- {{ dd($activeQuizzes) }} --}}
<div class="quiz-content">
    <p class="grid-heading">Choose Subject</p>
    <div class="grid-subject">
        @foreach ($categories as $category)
        <form action="{{ route('select.category') }}" method="post">
            @csrf
            <input type="hidden" name="category"
                value="{{ $category->category_id }},{{ strtolower($category->category_title) }}">
            <button type="submit" class="subject"
                style="font-size: medium;width:100%;@if(session()->has('selectedCategory'))@if(strtolower($category->category_title) == $selectedCategory)background:#149d9b;color: #fff; @endif @endif">{{
                $category->category_title}}
            </button>
        </form>
        @endforeach
    </div>

    <p class="grid-quiz-heading">Today's Quizzes</p>
    <div class="grid-quiz-today">
        @forelse ($todayQuizzes as $quiz)
        <div class="quiz">
            <div class="first-row">
                <i class="fa-solid fa-calculator"></i>
                <div class="subject-tag">
                    <p>{{ $quiz->category_title }}</p>
                </div>
            </div>
            <p class="tittle">
                {{ $quiz->title }}
            </p>
            <div class="second-row">
                <div class="attendance">
                    <i class="fa-solid fa-users"></i>
                    <p>{{ $quiz->participants->count() }}</p>
                </div>
                <div class="full-marks">
                    <i class="fa-solid fa-star"></i>
                    <p>{{ $quiz->getQuestions()->count() }}</p>
                </div>
            </div>
        </div>
        @empty
        <div class="quiz">
            <p class="tittle" style="text-align: center;">No Quiz available!</p>
        </div>
        @endforelse
    </div>

    <p class="grid-quiz-heading">Active Quizzes</p>
    <div class="grid-quiz-active">
        @forelse ($activeQuizzes as $quiz)
        <a href="{{ route('quiz.start',['id'=>$quiz->quiz_id]) }}">
            <div class="quiz">
                <div class="first-row">
                    <i class="fa-solid fa-calculator"></i>
                    <div class="subject-tag">
                        <p>{{ $quiz->category_title }}</p>
                    </div>
                </div>
                <p class="tittle">
                    {{ $quiz->title }}
                </p>
                <div class="second-row">
                    <div class="attendance">
                        <i class="fa-solid fa-users"></i>
                        <p>{{ $quiz->participants->count() }}</p>
                    </div>
                    <div class="full-marks">
                        <i class="fa-solid fa-star"></i>
                        <p>{{ $quiz->getQuestions()->count() }}</p>
                    </div>
                </div>
            </div>
        </a>
        @empty
        <div class="quiz">
            <p class="tittle" style="text-align: center;">No Quiz available!</p>
        </div>
        @endforelse
    </div>
    @if ($activeQuizzes->hasPages())
    <br>
    <div class="link__container">
        <a class="grid-next-page" href="{{ $activeQuizzes->previousPageUrl() }}">
            <i class="fa-solid fa-angle-left"></i>
            &nbsp; Prev
        </a>
        <span> | </span>
        <a class="grid-next-page" href="{{ $activeQuizzes->nextPageUrl() }}">
            Next &nbsp; <i class="fa-solid fa-angle-right"></i>
        </a>
    </div>
    @endif

    <p class="grid-quiz-heading">Completed Quizzes</p>
    <div class="grid-quiz-today">
        @forelse ($completedQuizzes as $quiz)
        <div class="quiz" id="quiz">
            <div class="first-row">
                <i class="fa-solid fa-calculator"></i>
                <div class="subject-tag">
                    <p>{{ $quiz->category_title }}</p>
                    <i class="fa-solid fa-circle-check" id="completed-icon"></i>
                </div>

            </div>
            <p class="tittle">
                {{ $quiz->title }}
            </p>
            <div class="second-row">
                <div class="attendance">
                    <i class="fa-solid fa-users"></i>
                    <p>{{ $quiz->participants->count() }}</p>
                </div>
                <div class="full-marks">
                    <i class="fa-solid fa-star"></i>
                    <p>{{ $quiz->getQuestions()->count() }}</p>
                </div>
            </div>
        </div>
        @empty
        <div class="quiz">
            <p class="tittle" style="text-align: center;">No Quiz available!</p>
        </div>
        @endforelse
    </div>
    @if ($completedQuizzes->hasPages())
    <br>
    <div class="link__container">
        <a class="grid-next-page" href="{{ $completedQuizzes->previousPageUrl() }}">
            <i class="fa-solid fa-angle-left"></i>
            &nbsp; Prev
        </a>
        <span> | </span>
        <a class="grid-next-page" href="{{ $completedQuizzes->nextPageUrl() }}">
            Next &nbsp; <i class="fa-solid fa-angle-right"></i>
        </a>
    </div>
    @endif
    <br><br>
</div>
@if (session()->has('quizStart'))
<div id="rules-Modal" class="rules-Modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Rules & Regulations</h2>
        </div>
        <div class="modal-body">
            <i class="fa-solid fa-handshake"></i>
            <p>
                You have 10 minutes to solve 10 question. You can only choose 1 option out of 4 for each question.
                On the time of playing quiz if you click on back button your quiz will automatically submitted.
            </p>
        </div>
        <div class="modal-footer">
            <a href="{{ route('quiz.play',['id'=>session()->get('quizStart')]) }}">Start</a>
            <a href="{{ route('quiz_play') }}" id="closeRulesModalBtn">Cancel</a>
        </div>
    </div>
</div>
@endif
@endsection