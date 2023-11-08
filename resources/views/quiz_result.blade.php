@extends('layouts.master')
@section('title')
{{ isset($title) ? $title : env('APP_NAME')." Home Page" }}
@endsection

@section('content')
<div class="reattempt">
    <p>Want to re - attempt ?</p>
    <a href="{{ route('quiz.reattempt',['id'=>$quiz->quiz_id]) }}" style="text-decoration: none;"><button
            class="reattempt-button">Re - attempt</button></a>
</div>
<h1>Math quiz no - 1</h1>
<div class="row-container">
    <div class="total-score">
        <p class="score">Score - {{ $qountCurrectAnswers }}/{{ count($questions) }}</p>
        <p class="point">Total Points - {{ $score->score_value }}</p>
    </div>
    <div class="container">
        <div class="question-answer">
            @foreach ($questions as $question)
            <div class="question-answer-container">
                <div class="question">
                    <p>{{ $loop->index+1 }}.</p>
                    <p> {{ $question->question_text }}</p>
                </div>
                <div class="answer-options">
                    <p @if($question->correct_option == 'a' && $answerModel->getUserAnswer($question->question_id)=='a')
                        @if($question->correct_option==$answerModel->getUserAnswer($question->question_id))
                        style="color:blue;"
                        @else
                        style="color:red;"
                        @endif
                        @endif>A. {{ $question->answer_option_a }}</p>
                    <p @if($question->correct_option == 'b' && $answerModel->getUserAnswer($question->question_id)=='b')
                        @if($question->correct_option==$answerModel->getUserAnswer($question->question_id))
                        style="color:blue;"
                        @else
                        style="color:red;"
                        @endif
                        @endif>B. {{ $question->answer_option_b }}</p>
                    <p @if($question->correct_option == 'c' && $answerModel->getUserAnswer($question->question_id)=='c')
                        @if($question->correct_option==$answerModel->getUserAnswer($question->question_id))
                        style="color:blue;"
                        @else
                        style="color:red;"
                        @endif
                        @endif>C. {{ $question->answer_option_c }}</p>
                    <p @if($question->correct_option == 'd' && $answerModel->getUserAnswer($question->question_id)=='d')
                        @if($question->correct_option==$answerModel->getUserAnswer($question->question_id))
                        style="color:blue;"
                        @else
                        style="color:red;"
                        @endif
                        @endif>D. {{ $question->answer_option_d }}</p>
                    <p class="answer">Answer -- {{ $question->correct_option }}. {{ $question["answer_option_" .
                        $question->correct_option] }}</p>
                </div>
                <i class="fa-solid fa-circle-dot" id="wright"></i>
            </div>
            @endforeach

        </div>
    </div>
    <div class="timer">
        <p class="heading">
            Total time consumed
        </p>
        <p class="time">
            {{ $score->time_consumed }}
        </p>
        <p class="footer-heading">
            Minutes
        </p>
    </div>
</div>

@endsection