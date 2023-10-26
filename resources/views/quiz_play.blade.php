@extends('layouts.master')
@section('title')
    {{ isset($title) ? $title : env('APP_NAME')." Home Page" }}
@endsection

@section('content')
    <div class="quiz-content">
        <p class="grid-heading">Choose Subject</p>
        <div class="grid-subject">
            <div class="subject">Mathematics</div>
            <div class="subject">Computer</div>
            <div class="subject">Aptitude</div>
            <div class="subject">Current Affair</div>
        </div>

        <p class="grid-quiz-heading">Today's Quizzes</p>
        <div class="grid-quiz-today">
            <div class="quiz">
                <div class="first-row">
                    <i class="fa-solid fa-calculator"></i>
                    <div class="subject-tag">
                        <p>Mathematics</p>
                    </div>
                </div>
                <p class="tittle">
                    DSA & Algorithm
                </p>
                <div class="second-row">
                    <div class="attendance">
                        <i class="fa-solid fa-users"></i>
                        <p>500</p>
                    </div>
                    <div class="full-marks">
                        <i class="fa-solid fa-star"></i>
                        <p>120</p>
                    </div>
                </div>
            </div>
            <div class="quiz">
                <div class="first-row">
                    <i class="fa-solid fa-computer"></i>
                    <div class="subject-tag">
                        <p>Computer</p>
                    </div>
                </div>
                <p class="tittle">
                    DSA & Algorithm
                </p>
                <div class="second-row">
                    <div class="attendance">
                        <i class="fa-solid fa-users"></i>
                        <p>500</p>
                    </div>
                    <div class="full-marks">
                        <i class="fa-solid fa-star"></i>
                        <p>120</p>
                    </div>
                </div>
            </div>
            <div class="quiz">
                <div class="first-row">
                    <i class="fa-solid fa-head-side-virus"></i>
                    <div class="subject-tag">
                        <p>Aptitude</p>
                    </div>
                </div>
                <p class="tittle">
                    DSA & Algorithm
                </p>
                <div class="second-row">
                    <div class="attendance">
                        <i class="fa-solid fa-users"></i>
                        <p>500</p>
                    </div>
                    <div class="full-marks">
                        <i class="fa-solid fa-star"></i>
                        <p>120</p>
                    </div>
                </div>
            </div>
            <div class="quiz">
                <div class="first-row">
                    <i class="fa-solid fa-calendar-week"></i>
                    <div class="subject-tag">
                        <p>Current Affair</p>
                    </div>
                </div>
                <p class="tittle">
                    DSA & Algorithm DSA & Algorithm
                </p>
                <div class="second-row">
                    <div class="attendance">
                        <i class="fa-solid fa-users"></i>
                        <p>500</p>
                    </div>
                    <div class="full-marks">
                        <i class="fa-solid fa-star"></i>
                        <p>120</p>
                    </div>
                </div>
            </div>
        </div>

        <p class="grid-quiz-heading">Active Quizzes</p>
        <div class="grid-quiz-active">
            <div class="quiz">
                <div class="first-row">
                    <i class="fa-solid fa-computer"></i>
                    <div class="subject-tag">
                        <p>Computer</p>
                    </div>
                </div>
                <p class="tittle">
                    DSA & Algorithm
                </p>
                <div class="second-row">
                    <div class="attendance">
                        <i class="fa-solid fa-users"></i>
                        <p>500</p>
                    </div>
                    <div class="full-marks">
                        <i class="fa-solid fa-star"></i>
                        <p>120</p>
                    </div>
                </div>
            </div>
            <div class="quiz">
                <div class="first-row">
                    <i class="fa-solid fa-computer"></i>
                    <div class="subject-tag">
                        <p>Computer</p>
                    </div>
                </div>
                <p class="tittle">
                    DSA & Algorithm
                </p>
                <div class="second-row">
                    <div class="attendance">
                        <i class="fa-solid fa-users"></i>
                        <p>500</p>
                    </div>
                    <div class="full-marks">
                        <i class="fa-solid fa-star"></i>
                        <p>120</p>
                    </div>
                </div>
            </div>
            <div class="quiz">
                <div class="first-row">
                    <i class="fa-solid fa-computer"></i>
                    <div class="subject-tag">
                        <p>Computer</p>
                    </div>
                </div>
                <p class="tittle">
                    DSA & Algorithm
                </p>
                <div class="second-row">
                    <div class="attendance">
                        <i class="fa-solid fa-users"></i>
                        <p>500</p>
                    </div>
                    <div class="full-marks">
                        <i class="fa-solid fa-star"></i>
                        <p>120</p>
                    </div>
                </div>
            </div>
            <div class="quiz">
                <div class="first-row">
                    <i class="fa-solid fa-computer"></i>
                    <div class="subject-tag">
                        <p>Computer</p>
                    </div>
                </div>
                <p class="tittle">
                    DSA & Algorithm
                </p>
                <div class="second-row">
                    <div class="attendance">
                        <i class="fa-solid fa-users"></i>
                        <p>500</p>
                    </div>
                    <div class="full-marks">
                        <i class="fa-solid fa-star"></i>
                        <p>120</p>
                    </div>
                </div>
            </div>
            <div class="quiz">
                <div class="first-row">
                    <i class="fa-solid fa-computer"></i>
                    <div class="subject-tag">
                        <p>Computer</p>
                    </div>
                </div>
                <p class="tittle">
                    DSA & Algorithm
                </p>
                <div class="second-row">
                    <div class="attendance">
                        <i class="fa-solid fa-users"></i>
                        <p>500</p>
                    </div>
                    <div class="full-marks">
                        <i class="fa-solid fa-star"></i>
                        <p>120</p>
                    </div>
                </div>
            </div>
            <div class="quiz">
                <div class="first-row">
                    <i class="fa-solid fa-computer"></i>
                    <div class="subject-tag">
                        <p>Computer</p>
                    </div>
                </div>
                <p class="tittle">
                    DSA & Algorithm
                </p>
                <div class="second-row">
                    <div class="attendance">
                        <i class="fa-solid fa-users"></i>
                        <p>500</p>
                    </div>
                    <div class="full-marks">
                        <i class="fa-solid fa-star"></i>
                        <p>120</p>
                    </div>
                </div>
            </div>
            <div class="quiz">
                <div class="first-row">
                    <i class="fa-solid fa-computer"></i>
                    <div class="subject-tag">
                        <p>Computer</p>
                    </div>
                </div>
                <p class="tittle">
                    DSA & Algorithm
                </p>
                <div class="second-row">
                    <div class="attendance">
                        <i class="fa-solid fa-users"></i>
                        <p>500</p>
                    </div>
                    <div class="full-marks">
                        <i class="fa-solid fa-star"></i>
                        <p>120</p>
                    </div>
                </div>
            </div>
            <div class="quiz">
                <div class="first-row">
                    <i class="fa-solid fa-computer"></i>
                    <div class="subject-tag">
                        <p>Computer</p>
                    </div>
                </div>
                <p class="tittle">
                    DSA & Algorithm DSA & Algorithm
                </p>
                <div class="second-row">
                    <div class="attendance">
                        <i class="fa-solid fa-users"></i>
                        <p>500</p>
                    </div>
                    <div class="full-marks">
                        <i class="fa-solid fa-star"></i>
                        <p>120</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="grid-next-page">
            Next Page
            <i class="fa-solid fa-angle-right"></i>
        </p>

        <p class="grid-quiz-heading">Completed Quizzes</p>
        <div class="grid-quiz-today">
            <div class="quiz">
                <div class="first-row">
                    <i class="fa-solid fa-calculator"></i>
                    <div class="subject-tag">
                        <p>Mathematics</p>
                        <i class="fa-solid fa-circle-check" id="completed-icon"></i>
                    </div>
                    
                </div>
                <p class="tittle">
                    DSA & Algorithm
                </p>
                <div class="second-row">
                    <div class="attendance">
                        <i class="fa-solid fa-users"></i>
                        <p>500</p>
                    </div>
                    <div class="full-marks">
                        <i class="fa-solid fa-star"></i>
                        <p>120</p>
                    </div>
                </div>
            </div>
            <div class="quiz">
                <div class="first-row">
                    <i class="fa-solid fa-computer"></i>
                    <div class="subject-tag">
                        <p>Computer</p>
                        <i class="fa-solid fa-circle-check" id="completed-icon"></i>
                    </div>
                </div>
                <p class="tittle">
                    DSA & Algorithm
                </p>
                <div class="second-row">
                    <div class="attendance">
                        <i class="fa-solid fa-users"></i>
                        <p>500</p>
                    </div>
                    <div class="full-marks">
                        <i class="fa-solid fa-star"></i>
                        <p>120</p>
                    </div>
                </div>
            </div>
            <div class="quiz">
                <div class="first-row">
                    <i class="fa-solid fa-head-side-virus"></i>
                    <div class="subject-tag">
                        <p>Aptitude</p>
                        <i class="fa-solid fa-circle-check" id="completed-icon"></i>
                    </div>
                </div>
                <p class="tittle">
                    DSA & Algorithm
                </p>
                <div class="second-row">
                    <div class="attendance">
                        <i class="fa-solid fa-users"></i>
                        <p>500</p>
                    </div>
                    <div class="full-marks">
                        <i class="fa-solid fa-star"></i>
                        <p>120</p>
                    </div>
                </div>
            </div>
            <div class="quiz">
                <div class="first-row">
                    <i class="fa-solid fa-calendar-week"></i>
                    <div class="subject-tag">
                        <p>Current Affair</p>
                        <i class="fa-solid fa-circle-check" id="completed-icon"></i>
                    </div>
                </div>
                <p class="tittle">
                    DSA & Algorithm DSA & Algorithm
                </p>
                <div class="second-row">
                    <div class="attendance">
                        <i class="fa-solid fa-users"></i>
                        <p>500</p>
                    </div>
                    <div class="full-marks">
                        <i class="fa-solid fa-star"></i>
                        <p>120</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection
