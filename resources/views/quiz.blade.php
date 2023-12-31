<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Question Page</title>
    <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/kit.fontawesome.com_1cad59c07c.js') }}" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <div class="leftcolumn" id="leftcolumn">
        {{-- <div class="content1"> --}}
            <div class="logo">
                <img src="{{ asset('images/TriviaNuts_Logo.svg') }}" alt="logo" />
                <div class="closeoption" onclick="toggleDisplayNone()">
                    <p id="closeb">Back</p>
                </div>
            </div>
            <div class="userprofile">
                <div class="userdp__container">
                    @if (auth()->user()->picture==null)
                    <i class="fa-solid fa-circle-user" id="avatar"></i>
                    @else
                    <img src="{{ Storage::url('avatars/').auth()->user()->picture }}" class="userdp" alt="picture" />
                    @endif
                </div>
                <div class="username">
                    {{ ucwords(auth()->user()->name) }}
                </div>
            </div>
            <div class="questiontab">
                @foreach ($questions as $question)
                <a href="{{ route('quiz.jump.quesion',['id'=>$thisQuiz->quiz_id,'question'=>$loop->index]) }}">
                    <div class="question_no">{{ $loop->index+1 }}</div>
                </a>
                @endforeach
            </div>
        </div>
        {{-- </div> --}}
    </div>
    <div class="rightcolumn">
        <div class="uppertab">
            <div class="luppertab">
                <div class="logo">
                    Logo
                </div>
                <div class="quizname">
                    <p> {{ $quizCategory->category_title }} : {{ $thisQuiz->title }}</p>
                </div>
            </div>
            <div class="ruppertab">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <div class="timeoption">
                    Total time
                    <div id="timer">00:00</div>
                </div>
                <div class="timeoption">
                    Time remain for this question
                    <div id="reverse-timer">01:00</div>
                </div>
                <div class="closeoption">
                    <a href="{{ route('quiz.exit',['id'=>$thisQuiz->quiz_id]) }}" id="closeb"
                        style="text-decoration: none;">Back</a>
                </div>
            </div>
        </div>
        <div class="content">

            <div class="question">
                <div class="questionno" id="quizQuestionNo">
                    {{ intval($activeQuestion) + 1 }}.
                    <i class="fa-solid fa-caret-down" onclick="toggleDisplay()" id="quizQuestion"></i>
                </div>
                <div class="questiontext">
                    {{ trim($questions[$activeQuestion]->question_text) }}
                </div>
            </div>
            <div class="answer">
                <div class="imoge">
                </div>
                <div class="option">
                    <div class="boxoption">
                        <div class="options @if($answers!=null)
                            @if(array_key_exists($questions[$activeQuestion]->question_id,$answers) && $answers[$questions[$activeQuestion]->question_id]=='a')
                                selected
                            @endif
                        @endif" data-option='a' data-quiz="{{ $thisQuiz->quiz_id }}"
                            data-question="{{ $questions[$activeQuestion]->question_id }}"
                            data-lastQuestion="{{ $lastQuestion->question_id }}">
                            {{ $questions[$activeQuestion]->answer_option_a }}
                        </div>
                        <div class="options @if($answers!=null)
                            @if(array_key_exists($questions[$activeQuestion]->question_id,$answers) && $answers[$questions[$activeQuestion]->question_id]=='b')
                                selected
                            @endif
                        @endif" data-option='b' data-quiz="{{ $thisQuiz->quiz_id }}"
                            data-question="{{ $questions[$activeQuestion]->question_id }}"
                            data-lastQuestion="{{ $lastQuestion->question_id }}">
                            {{ $questions[$activeQuestion]->answer_option_b }}
                        </div>
                        <div class="options @if($answers!=null)
                            @if(array_key_exists($questions[$activeQuestion]->question_id,$answers) && $answers[$questions[$activeQuestion]->question_id]=='c')
                                selected
                            @endif
                        @endif" data-option='c' data-quiz="{{ $thisQuiz->quiz_id }}"
                            data-question="{{ $questions[$activeQuestion]->question_id }}"
                            data-lastQuestion="{{ $lastQuestion->question_id }}">
                            {{ $questions[$activeQuestion]->answer_option_c }}
                        </div>
                        <div class="options @if($answers!=null)
                            @if(array_key_exists($questions[$activeQuestion]->question_id,$answers) && $answers[$questions[$activeQuestion]->question_id]=='d')
                                selected
                            @endif
                        @endif" data-option='d' data-quiz="{{ $thisQuiz->quiz_id }}"
                            data-question="{{ $questions[$activeQuestion]->question_id }}"
                            data-lastQuestion="{{ $lastQuestion->question_id }}">
                            {{ $questions[$activeQuestion]->answer_option_d }}
                        </div>
                    </div>
                </div>
            </div>
            @isset ($success)
            <x-message-modal type="success" message="{{ $success }}" showCloseButton="true" />
            @endisset

            @isset ($error)
            <x-message-modal type="error" message="{{ $error }}" showCloseButton="true" />
            @endisset

            @isset ($warning)
            <x-message-modal type="warning" message="{{ $warning }}" buttonText="Confirm"
                buttonLink="{{ $redirect_link }}" showCloseButton="true" />
            @endisset

            @if (session()->has('success'))
            <x-message-modal type="success" message="{{ $success }}" showCloseButton="true" />
            @endif

            @if (session()->has('error'))
            <x-message-modal type="error" message="{{ $error }}" showCloseButton="true" />
            @endif

            @if (session()->has('warning'))
            <x-message-modal type="warning" message="{{ session()->get('warning') }}"
                buttonText="{{ session()->get('buttonText') }}" buttonLink="{{ session()->get('redirect_link') }}"
                showCloseButton="true" closeButtonText="{{ session()->get('closeButtonText') }}" />
            @endif

            @if(session()->has('success_notification'))
            <x-notification type="success" message="{{ session()->get('success_notification') }}" />
            @endif
            @if(session()->has('error_notification'))
            <x-notification type="error" message="{{ session()->get('error_notification') }}" />
            @endif
            @if(session()->has('warning_notification'))
            <x-notification type="warning" message="{{ session()->get('warning_notification') }}" />
            @endif
        </div>
        <div class="lowertab">
            @if ($activeQuestion!=0)
            <a href="{{ route('quiz.jump.quesion',['id'=>$thisQuiz->quiz_id,'question'=>$activeQuestion-1]) }}"
                class="tabbutton">
                <i class="fa-solid fa-angle-left"></i>
                Previous
            </a>
            @endif
            @if ($activeQuestion!=count($questions)-1)
            <a href="{{ route('quiz.jump.quesion',['id'=>$thisQuiz->quiz_id,'question'=>$activeQuestion+1]) }}"
                class="tabbutton" id="nextButton">
                Next
                <i class="fa-solid fa-angle-right"></i>
            </a>
            @endif
            @if ($activeQuestion==count($questions)-1)
            <a href="{{ route('quiz.submit',['id'=>$thisQuiz->quiz_id]) }}" class="tabbutton @if (!array_key_exists('answers',$quiz)) 
                disabled
            @endif" id="quiz__submit">
                Submit
            </a>
            @endif
        </div>
    </div>

    <script>
        function toggleDisplay() {
        var contentDiv = document.getElementById("leftcolumn");
        if (contentDiv.style.display === "none") {
            contentDiv.style.display = "block";
        } else {
            contentDiv.style.display = "none";
        }
    }

        function toggleDisplayNone() {
        var contentDiv = document.getElementById("leftcolumn");
        if (contentDiv.style.display === "block") {
            contentDiv.style.display = "none";
        } else {
            contentDiv.style.display = "block";
        }
        }



        
        function updateReverseTimer() {
            const reverseTimer = document.getElementById("reverse-timer");
            let [minutes, seconds] = reverseTimer.textContent.split(":").map(Number);

            if (minutes === 0 && seconds === 0) {
                if(document.body.contains(document.getElementById("nextButton")))
                    document.getElementById("nextButton").click();
            } else {
                if (seconds === 0) {
                    seconds = 59;
                    minutes--;
                    
                } else {
                    seconds--;
                }
                
                reverseTimer.textContent = `${minutes
                    .toString()
                    .padStart(2, "0")}:${seconds.toString().padStart(2, "0")}`;
            }
        }

        function initTimer() {
            let seconds = {{ session()->get('quiz')['timerStart']['seconds'] }};
            let minutes = {{ session()->get('quiz')['timerStart']['minutes'] }};
            const timerDisplay = document.getElementById("timer");

            // Get the CSRF token from the meta tag
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            function updateTimer() {
                
                if (minutes === {{ intval(count($questions)) }} && seconds === 0) {
                    clearInterval(timerInterval);
                } else {
                    if (seconds === 59) {
                        seconds = 0;
                        minutes++;
                    } else if (minutes === {{ intval(count($questions)) }} && seconds === 0) {
                        console.log("{{ route('quiz.submit',['id'=>$thisQuiz->quiz_id]) }}");
                        clearInterval(timerInterval); // Stop the timer at 10 minutes
                        window.location.href = "{{ route('quiz.submit',['id'=>$thisQuiz->quiz_id]) }}";
                    } else {
                        seconds++;
                    }

                    const xhr = new XMLHttpRequest();
                    xhr.open('POST', '/quiz/set/timer', true);
                    xhr.setRequestHeader('Content-Type', 'application/json');

                    // Set the CSRF token in the request headers
                    xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
                    
                    // xhr.onreadystatechange = function () {
                    // if (xhr.readyState === 4 && xhr.status === 200) {
                    // // Callback function after successful response (if needed)
                    // console.log('Timer values sent successfully');
                    // console.log('Response:', xhr.responseText);
                    // }
                    // };
                    
                    const data = JSON.stringify({ seconds, minutes });
                    xhr.send(data);

                    const timeString = `${minutes.toString().padStart(2, "0")}:${seconds
                        .toString()
                        .padStart(2, "0")}`;
                    timerDisplay.innerText = timeString;
                }
            }

            timerInterval = setInterval(updateTimer, 1000);
        }

        reverseTimerInterval = setInterval(updateReverseTimer, 1000);

        // const manualNextButton = document.getElementById("nextButton");
        // manualNextButton.addEventListener("click", function () {
        //     manualNextClicked = true;
        //     simulateNextQuestion();
        // });

        // const manualPreviousButton = document.getElementById("previousButton");
        // manualPreviousButton.addEventListener("click", function () {
        //     manualPreviousClicked = true;
        //     simulateNextQuestion();
        // });

        initTimer();
        
    </script>

    <script src="{{ asset('js/quiz.js') }}"></script>

</body>

</html>