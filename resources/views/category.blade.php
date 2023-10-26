@extends('layouts.master')
@section('title')
{{ isset($title) ? $title : env('APP_NAME')." Home Page" }}
@endsection

@section('content')
<div class="scategory">
    <div class="punch_line">
        <p>
            Keep going, you're on the right track!
        </p>
    </div>
    <div class="sdisplay">
        <div class="subject">
            <div class="subject1" id="subject1">
                Mathematics
            </div>
            <div class="subject1" id="subject1">
                Computer
            </div>
            <div class="subject1" id="subject1">
                Aptitude
            </div>
            <div class="subject1" id="subject1">
                Current Affair
            </div>
        </div>
        <div class="metarial">
            <div class="metarial1" id="metarial1">
                <i class="fa-solid fa-diamond-turn-right fa-flip-horizontal fa-3x"></i>
                <p>Choose any one subject from left to start your Quiz</p>
            </div>
            <div class="metarial2" id="metarial2">
                <div class="quizmessage">
                    <p>Welcome {{ $user->name }} play now!!</p>
                </div>
                <div class="quizno">
                    <div class="quizrow1">
                        <div class="quizno1">
                            <div class="bhover">
                                Level 1
                            </div>
                            <div class="ahover">
                                <div class="starts">
                                    <i class="fa-solid fa-lock fa-lg"></i>
                                </div>
                                <div class="startb">
                                    <i class="fa-solid fa-circle-play fa-2xl" id="startB"></i>
                                </div>
                            </div>
                        </div>
                        <div class="quizno1">
                            <div class="bhover">
                                Level 2
                            </div>
                            <div class="ahover">
                                <div class="starts">
                                    <i class="fa-solid fa-lock fa-lg"></i>
                                </div>
                                <div class="startb">
                                    <i class="fa-solid fa-circle-play fa-2xl" id="startB"></i>
                                </div>
                            </div>
                        </div>
                        <div class="quizno1">
                            <div class="bhover">
                                Level 3
                            </div>
                            <div class="ahover">
                                <div class="starts">
                                    <i class="fa-solid fa-lock fa-lg"></i>
                                </div>
                                <div class="startb">
                                    <i class="fa-solid fa-circle-play fa-2xl" id="startB"></i>
                                </div>
                            </div>
                        </div>
                        <div class="quizno1">
                            <div class="bhover">
                                Level 4
                            </div>
                            <div class="ahover">
                                <div class="starts">
                                    <i class="fa-solid fa-lock fa-lg"></i>
                                </div>
                                <div class="startb">
                                    <i class="fa-solid fa-circle-play fa-2xl" id="startB"></i>
                                </div>
                            </div>
                        </div>
                        <div class="quizno1">
                            <div class="bhover">
                                Level 5
                            </div>
                            <div class="ahover">
                                <div class="starts">
                                    <i class="fa-solid fa-lock fa-lg"></i>
                                </div>
                                <div class="startb">
                                    <i class="fa-solid fa-circle-play fa-2xl" id="startB"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="quizrow2">
                        <div class="quizno1">
                            <div class="bhover">
                                Level 6
                            </div>
                            <div class="ahover">
                                <div class="starts">
                                    <i class="fa-solid fa-lock fa-lg"></i>
                                </div>
                                <div class="startb">
                                    <i class="fa-solid fa-circle-play fa-2xl" id="startB"></i>
                                </div>
                            </div>
                        </div>
                        <div class="quizno1">
                            <div class="bhover">
                                Level 7
                            </div>
                            <div class="ahover">
                                <div class="starts">
                                    <i class="fa-solid fa-lock fa-lg"></i>
                                </div>
                                <div class="startb">
                                    <i class="fa-solid fa-circle-play fa-2xl" id="startB"></i>
                                </div>
                            </div>
                        </div>
                        <div class="quizno1">
                            <div class="bhover">
                                Level 8
                            </div>
                            <div class="ahover">
                                <div class="starts">
                                    <i class="fa-solid fa-lock fa-lg"></i>
                                </div>
                                <div class="startb">
                                    <i class="fa-solid fa-circle-play fa-2xl" id="startB"></i>
                                </div>
                            </div>
                        </div>
                        <div class="quizno1">
                            <div class="bhover">
                                Level 9
                            </div>
                            <div class="ahover">
                                <div class="starts">
                                    <i class="fa-solid fa-lock fa-lg"></i>
                                </div>
                                <div class="startb">
                                    <i class="fa-solid fa-circle-play fa-2xl" id="startB"></i>
                                </div>
                            </div>
                        </div>
                        <div class="quizno1">
                            <div class="bhover">
                                Level 10
                            </div>
                            <div class="ahover">
                                <div class="starts">
                                    <i class="fa-solid fa-lock fa-lg"></i>
                                </div>
                                <div class="startb">
                                    <i class="fa-solid fa-circle-play fa-2xl" id="startB"></i>
                                </div>
                            </div>
                        </div>
                        <div class="quizno2">
                            <i class="fa-solid fa-angles-right fa-lg" id="morearrow"></i>
                        </div>
                    </div>
                </div>
                <div class="quizstartb" id="quizstartb">
                    <i class="fa-solid fa-circle-play fa-xl"></i>
                    Start
                </div>
            </div>
            <div class="metarial3" id="metarial3">
                <div class="quizName">
                    <div class="subjectName" id="subjectName">
                        {{-- Subject --}}
                    </div>
                    <div class="level">
                        <p>Quiz:</p>
                        <p id="levelText"> </p>
                        {{-- Quiz level 1 --}}
                    </div>
                    <div class="back">
                        Back
                    </div>
                </div>
                <div class="rule">
                    <div class="ruleContent">
                        <i class="fa-solid fa-handshake" id="handshake"></i>
                        <p>You have 10 minutes to solve 10 question. You can only choose 1 option out of 4 for each
                            question. On the time of playing quiz if you click on back button your quiz will
                            automatically submitted. </p>
                    </div>
                </div>
                <div class="startButton">

                    <p><i class="fa-solid fa-circle-play fa-xl" id="startQuizB"></i>Start</p>
                </div>
            </div>
        </div>
    </div>
    <div class="fquestions">
        <div class="fquestion">
            <i class="fa-solid fa-tags fa-2xl" id="fqlogo"></i>
            <p> Why did the computer go to the doctor?</p>
        </div>
        <div class="fanswer">
            Because it had a "byte" problem! It kept feeling a bit "fuzzy" and couldn't stop "clicking" its mouse. Turns
            out, it was just a case of a "virus" and the doctor recommended a healthy dose of antivirus software and a
            "tech"y time-out!
        </div>
    </div>
    <div class="badge">
        <div class="lbadge">
            <i class="fa-solid fa-hashtag fa-xl"></i>
            <p> BadgeCollections</p>
        </div>
        <div class="rbadge">
            <div class="badgefirst">
                <div class="badge1">
                    <i class="fa-solid fa-heart fa-2xl" id="badgeicon"></i>
                    <h1>Badge1</h1>
                    <p>100$</p>
                </div>
                <div class="badge1">
                    <i class="fa-solid fa-hat-cowboy fa-2xl" id="badgeicon"></i>
                    <h1>Badge2</h1>
                    <p>200$</p>
                </div>
                <div class="badge1">
                    <i class="fa-solid fa-spider fa-2xl" id="badgeicon"></i>
                    <h1>Badge3</h1>
                    <p>300$</p>
                </div>
                <div class="badge1">
                    <i class="fa-solid fa-hippo fa-2xl" id="badgeicon"></i>
                    <h1>Badge4</h1>
                    <p>400$</p>
                </div>
                <div class="badge1">
                    <i class="fa-solid fa-shield-cat fa-2xl" id="badgeicon"></i>
                    <h1>Badge5</h1>
                    <p>500$</p>
                </div>
                <div class="badge1">
                    <i class="fa-solid fa-shield-dog fa-2xl fa-2xl" id="badgeicon"></i>
                    <h1>Badge6</h1>
                    <p>600$</p>
                </div>
            </div>
            <div class="badgesecond">
                <div class="badge1">
                    <i class="fa-solid fa-paw fa-2xl" id="badgeicon"></i>
                    <h1>Badge7</h1>
                    <p>700$</p>
                </div>
                <div class="badge1">
                    <i class="fa-solid fa-shield-virus fa-2xl" id="badgeicon"></i>
                    <h1>Badge8</h1>
                    <p>800$</p>
                </div>
                <div class="badge1">
                    <i class="fa-solid fa-shield-heart fa-2xl" id="badgeicon"></i>
                    <h1>Badge9</h1>
                    <p>900$</p>
                </div>
                <div class="badge1">
                    <i class="fa-sharp fa-solid fa-star-half-stroke fa-2xl" id="badgeicon"></i>
                    <h1>Badge10</h1>
                    <p>1000$</p>
                </div>
                <div class="badge1">
                    <i class="fa-brands fa-wolf-pack-battalion fa-2xl" id="badgeicon"></i>
                    <h1>Badge11</h1>
                    <p>1100$</p>
                </div>
                <div class="badge1">
                    <i class="fa-solid fa-gem fa-2xl" id="badgeicon"></i>
                    <h1>Badge12</h1>
                    <p>1200$</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection