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
                    Uday_Pal
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
                    <div id="timer">01:00</div>
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
                    <div class="questionno" id="quizQuestionNo" >
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

    </script>

    <script src="{{ asset('js/quiz.js') }}"></script>
    
</body>
</html>