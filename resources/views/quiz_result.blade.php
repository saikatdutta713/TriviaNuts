@extends('layouts.master')
@section('title')
    {{ isset($title) ? $title : env('APP_NAME')." Home Page" }}
@endsection

@section('content')
    <div class="reattempt">
        <p>Want to re-attempt ?</p>
        <button class="reattempt-button">Re - attempt</button>
    </div>
    <h1>Math quiz no - 1</h1>
    <div class="row-container-mobile">
        <div class="total-score">
            <p class="score">Score - 9/10</p>
            <p class="point">Total Points - 100</p>
        </div>
        <div class="timer">
            <p class="heading">
                Total time consumed
            </p>
            <p class="time">
                09:23
            </p>
            <p class="footer-heading">
                Minutes:Seconds
            </p>
        </div>
    </div>
    <div class="row-container">
        <div class="total-score">
            <p class="score">Score - 9/10</p>
            <p class="point">Total Points - 100</p>
        </div>
        <div class="container">
            <div class="question-answer">
                <div class="question-answer-container">
                    <div class="question">
                        <p>1.</p>
                        <p> What is the capital of France?</p>
                    </div>
                    <div class="answer-options">
                        <p>A. Paris</p>
                        <p>B. London</p>
                        <p>C. Berlin</p>
                        <p>D. Rome</p>
                        <p class="answer">Answer -- D. Rome</p>
                    </div>
                    <i class="fa-solid fa-circle-dot" id="wright"></i>
                </div>
                <div class="question-answer-container">
                    <div class="question">
                        <p>2.</p>
                        <p> What is the capital of France?</p>
                    </div>
                    <div class="answer-options">
                        <p>A. Paris</p>
                        <p>B. London</p>
                        <p>C. Berlin</p>
                        <p>D. Rome</p>
                        <p class="answer">Answer -- D. Rome</p>
                    </div>
                    <i class="fa-solid fa-circle-dot" id="not-answer"></i>
                </div>
                <div class="question-answer-container">
                    <div class="question">
                        <p>3.</p>
                        <p> What is the capital of France?</p>
                    </div>
                    <div class="answer-options">
                        <p>A. Paris</p>
                        <p>B. London</p>
                        <p>C. Berlin</p>
                        <p>D. Rome</p>
                        <p class="answer">Answer -- D. Rome</p>
                    </div>
                    <i class="fa-solid fa-circle-dot" id="wright"></i>
                </div>
                <div class="question-answer-container">
                    <div class="question">
                        <p>4.</p>
                        <p> What is the capital of France?</p>
                    </div>
                    <div class="answer-options">
                        <p>A. Paris</p>
                        <p>B. London</p>
                        <p>C. Berlin</p>
                        <p>D. Rome</p>
                        <p class="answer">Answer -- D. Rome</p>
                    </div>
                    <i class="fa-solid fa-circle-dot" id="wrong"></i>
                </div>
                <div class="question-answer-container">
                    <div class="question">
                        <p>5.</p>
                        <p> What is the capital of France?</p>
                    </div>
                    <div class="answer-options">
                        <p>A. Paris</p>
                        <p>B. London</p>
                        <p>C. Berlin</p>
                        <p>D. Rome</p>
                        <p class="answer">Answer -- D. Rome</p>
                    </div>
                    <i class="fa-solid fa-circle-dot" id="wright"></i>
                </div>
                <div class="question-answer-container">
                    <div class="question">
                        <p>6.</p>
                        <p> What is the capital of France?</p>
                    </div>
                    <div class="answer-options">
                        <p>A. Paris</p>
                        <p>B. London</p>
                        <p>C. Berlin</p>
                        <p>D. Rome</p>
                        <p class="answer">Answer -- D. Rome</p>
                    </div>
                    <i class="fa-solid fa-circle-dot" id="wright"></i>
                </div>
                <div class="question-answer-container">
                    <div class="question">
                        <p>7.</p>
                        <p> What is the capital of France?</p>
                    </div>
                    <div class="answer-options">
                        <p>A. Paris</p>
                        <p>B. London</p>
                        <p>C. Berlin</p>
                        <p>D. Rome</p>
                        <p class="answer">Answer -- D. Rome</p>
                    </div>
                    <i class="fa-solid fa-circle-dot" id="wrong"></i>
                </div>
                <div class="question-answer-container">
                    <div class="question">
                        <p>8.</p>
                        <p> What is the capital of France?</p>
                    </div>
                    <div class="answer-options">
                        <p>A. Paris</p>
                        <p>B. London</p>
                        <p>C. Berlin</p>
                        <p>D. Rome</p>
                        <p class="answer">Answer -- D. Rome</p>
                    </div>
                    <i class="fa-solid fa-circle-dot" id="wright"></i>
                </div>
                <div class="question-answer-container">
                    <div class="question">
                        <p>9.</p>
                        <p> What is the capital of France?</p>
                    </div>
                    <div class="answer-options">
                        <p>A. Paris</p>
                        <p>B. London</p>
                        <p>C. Berlin</p>
                        <p>D. Rome</p>
                        <p class="answer">Answer -- D. Rome</p>
                    </div>
                    <i class="fa-solid fa-circle-dot" id="wrong"></i>
                </div>
                <div class="question-answer-container">
                    <div class="question">
                        <p>10.</p>
                        <p> What is the capital of France?</p>
                    </div>
                    <div class="answer-options">
                        <p>A. Paris</p>
                        <p>B. London</p>
                        <p>C. Berlin</p>
                        <p>D. Rome</p>
                        <p class="answer">Answer -- D. Rome</p>
                    </div>
                    <i class="fa-solid fa-circle-dot" id="not-answer"></i>
                </div>
            </div>
        </div>
        <div class="timer">
            <p class="heading">
                Total time consumed
            </p>
            <p class="time">
                09:23
            </p>
            <p class="footer-heading">
                Minutes:Seconds
            </p>
        </div>
    </div>

@endsection