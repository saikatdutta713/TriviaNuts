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
                <div class="userdp">
                    <i class="fa-solid fa-circle-user" id="userdp"></i>
                </div>
                <div class="username">
                    {{ ucwords($user->name) }}
                </div>
            </div>
            <div class="questiontab">
                <div class="qrow1">
                    <div class="question_no">
                        1
                    </div>
                    <div class="question_no">
                        2
                    </div>
                    <div class="question_no">
                        3
                    </div>
                </div>
                <div class="qrow1">
                    <div class="question_no">
                        4
                    </div>
                    <div class="question_no">
                        5
                    </div>
                    <div class="question_no">
                        6
                    </div>
                </div>
                <div class="qrow1">
                    <div class="question_no">
                        7
                    </div>
                    <div class="question_no">
                        8
                    </div>
                    <div class="question_no">
                        9
                    </div>
                </div>
                <div class="qrow1">
                    <div class="question_no">
                        10
                    </div>
                </div>
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
                    <p> Mathematics : Quiz Level 1</p>
                </div>
            </div>
            <div class="ruppertab">
                <div class="timeoption">
                    Total time
                    <div id="timer">00:00</div>
                </div>
                <div class="timeoption">
                    Time remain for this question
                    <div id="reverse-timer">01:00</div>
                </div>
                <div class="closeoption">
                    <p id="closeb">Back</p>
                </div>
            </div>
        </div>
        <div class="content">

            <div class="question">
                <div class="questionno" id="quizQuestionNo">
                    1.
                    <i class="fa-solid fa-caret-down" onclick="toggleDisplay()" id="quizQuestion"></i>
                </div>
                <div class="questiontext">
                    Which of the following is the most important trend in computer technology in 2023?

                </div>
            </div>
            <div class="answer">
                <div class="imoge">
                </div>
                <div class="option">
                    <div class="boxoption">
                        <div class="options" onclick="changeBackgroundColor(this)">
                            Rise of artificial intelligence
                        </div>
                        <div class="options" onclick="changeBackgroundColor(this)">
                            Growth of cloud computing
                        </div>
                        <div class="options" onclick="changeBackgroundColor(this)">
                            Increasing use of big data
                        </div>
                        <div class="options" onclick="changeBackgroundColor(this)">
                            Development of quantum computing
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="lowertab">
            <div class="tabbutton" id="previousButton">
                <i class="fa-solid fa-angle-left"></i>
                Previous
            </div>
            <div class="tabbutton" id="nextButton">
                Next
                <i class="fa-solid fa-angle-right"></i>
            </div>
        </div>
    </div>


    <script>
    //   // Function to check the value and hide the next div if needed
    //     function checkAndHideNextDiv() {
    //         const firstDiv = document.getElementById("quizQuestionNo");
    //         const nextDiv = document.getElementById("nextButton");

    //         if (parseInt(firstDiv.textContent) >= 10) {
    //             nextDiv.style.display = "none";
    //         } else {
    //             nextDiv.style.display = "block";
    //         }
    //     }

    //     // Call the function initially to check the initial value
    //     checkAndHideNextDiv();

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



        
        let currentQuestionNo = 1;
        let reverseTimerInterval;
        let manualNextClicked = false;
        let manualPreviousClicked = false;
        let timerInterval;

        function simulateNextQuestion() {
            const quizQuestionNo = document.getElementById("quizQuestionNo");
            const nextButton = document.getElementById("nextButton");
            const previousDiv = document.getElementById("previousButton");
            const reverseTimer = document.getElementById("reverse-timer");

            if (!manualPreviousClicked) {
                currentQuestionNo++;
            }else{
                currentQuestionNo--;
                if (currentQuestionNo ==1) {
                previousDiv.style.display = "none";
            }
            }

            manualPreviousClicked = false;

            if (currentQuestionNo >= 11) {
                clearInterval(reverseTimerInterval);
                clearInterval(timerInterval);
                return;
            }

            if (currentQuestionNo >= 10) {
                nextButton.textContent = "Submit";
                nextButton.style.backgroundColor = "green";
            }

            quizQuestionNo.textContent = currentQuestionNo + ".";

            if (currentQuestionNo >=2) {
                previousDiv.style.display = "block";
            }
            if (currentQuestionNo ==1) {
                previousDiv.style.display = "none";
            }


            reverseTimer.textContent = "01:00";
        }

        function updateReverseTimer() {
            const reverseTimer = document.getElementById("reverse-timer");
            let [minutes, seconds] = reverseTimer.textContent.split(":").map(Number);

            if (minutes === 0 && seconds === 0) {
                simulateNextQuestion();
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
            let seconds = 0;
            let minutes = 0;
            const timerDisplay = document.getElementById("timer");

            function updateTimer() {
                if (minutes === 10 && seconds === 0) {
                    clearInterval(timerInterval);
                } else {
                    if (seconds === 59) {
                        seconds = 0;
                        minutes++;
                    } else if (minutes === 10 && seconds === 0) {
                        clearInterval(timerInterval); // Stop the timer at 10 minutes
                    } else {
                        seconds++;
                    }

                    

                    const timeString = `${minutes.toString().padStart(2, "0")}:${seconds
                        .toString()
                        .padStart(2, "0")}`;
                    timerDisplay.innerText = timeString;
                }
            }

            timerInterval = setInterval(updateTimer, 1000);
        }

        reverseTimerInterval = setInterval(updateReverseTimer, 1000);

        const manualNextButton = document.getElementById("nextButton");
        manualNextButton.addEventListener("click", function () {
            manualNextClicked = true;
            simulateNextQuestion();
        });

        const manualPreviousButton = document.getElementById("previousButton");
        manualPreviousButton.addEventListener("click", function () {
            manualPreviousClicked = true;
            simulateNextQuestion();
        });

        initTimer();
    </script>

    <script src="{{ asset('js/quiz.js') }}"></script>

</body>

</html>