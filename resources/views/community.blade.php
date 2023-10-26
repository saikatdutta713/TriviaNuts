@extends('layouts.master')
@section('title')
    {{ isset($title) ? $title : env('APP_NAME')." Home Page" }}
@endsection
    @section('content')
        <div class="communityContent">
            <div class="communityContent1" id="communityContent1">
                <div class="upperContent">
                    <div class="searchBox">
                        <i class="fa-solid fa-magnifying-glass" id="searchLogo"></i>
                        <input type="text" placeholder="Search.." id="searchInput">
                    </div>
                    <div class="topics">
                        <p>Topics:</p>
                        <p class="topicsSubject">Mathematics</p>
                        <p class="topicsSubject">Computer</p>
                        <p class="topicsSubject">Aptitude</p>
                        <p class="topicsSubject">Current Affair</p>
                    </div>
                    <div class="imageCommunity">
                        
                    </div>
                </div>
                <div class="lowerContent">
                    <div class="postTab">
                        <div class="createPost" id="createPost">
                            <p>Create Post</p>
                        </div>
                        <div class="postNav">
                            <p>Community Post</p>
                            <div class="posts">
                                All post
                            </div>
                            <div class="posts">
                                My post
                            </div>
                            <div class="posts">
                                Authors
                                <i class="fa-solid fa-star" style="color: #f0bc00;"></i>
                            </div>
                            <div class="posts">
                                Posts
                                <i class="fa-solid fa-star" style="color: #f0bc00;"></i>
                            </div>
                        </div>
                    </div>

                    <div class="ContentHelp">
                        <div class="askHelp" id="askHelp">
                            <p><i class="fa-regular fa-circle-question" id="questionLogo"></i>
                            Ask Question</p>
                            
                        </div>
                        <div class="helpLeader">
                            <div class="people">
                            Helps last 10 days
                            </div>
                            <div class="people">
                                <div class="author">
                                    Uday
                                </div>
                                <div class="number">
                                    20 
                                    <i class="fa-regular fa-circle-check"></i>
                                </div>
                            </div>

                            <div class="people">
                                <div class="author">
                                    Saikat
                                </div>
                                <div class="number">
                                    17
                                    <i class="fa-regular fa-circle-check"></i>
                                </div>
                            </div>

                            <div class="people">
                                <div class="author">
                                    Pol
                                </div>
                                <div class="number">
                                    10 
                                    <i class="fa-regular fa-circle-check"></i>
                                </div>
                            </div>

                            <div class="people">
                                <div class="author">
                                    Robin
                                </div>
                                <div class="number">
                                    8
                                    <i class="fa-regular fa-circle-check"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="postContent">
                        <div class="filterNav">
                            <div class="displayButton">
                                <div class="displayTabs">
                                    Community Posts
                                </div>
                                <div class="displayTabs">
                                    <i class="fa-solid fa-check-double"></i>
                                    15 Read
                                </div>
                            </div>
                            <div class="filterButton">
                                <div class="filterTabs">
                                    Author
                                    <i class="fa-solid fa-angle-down" id="downArrow"></i>
                                </div>
                                <div class="filterTabs">
                                    Label
                                    <i class="fa-solid fa-angle-down" id="downArrow"></i>
                                </div>
                                <div class="filterTabs">
                                    Sort
                                    <i class="fa-solid fa-angle-down" id="downArrow"></i>
                                </div>
                            </div>
                        </div>
                        <div class="membersPost">
                            <div class="postOwner">
                                <div class="profile">
                                <i class="fa-solid fa-circle-user" id="profilePic"></i>
                                </div>
                                <div class="details">
                                    <div class="tittle" >
                                        <p id="tittleP">Exploring the Cutting-Edge World of Robotics: Unveiling Innovations and Future Possibilities</p>
                                    </div>
                                    <div class="aboutTittle">
                                        <div class="tittleType">
                                            <i class="fa-regular fa-lightbulb"></i>
                                            Idea
                                        </div>
                                        <div class="tittleType">
                                            <i class="fa-regular fa-clock"></i>
                                            26 minutes ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="postSocial">
                                
                                <div class="social">
                                    <i class="fa-regular fa-bookmark" id="socialIcon1"></i>
                                </div>
                                <div class="social">
                                    <i class="fa-regular fa-heart" id="socialIcon1"></i>
                                    210
                                </div>
                                <div class="social">
                                    <i class="fa-regular fa-eye" id="socialIcon"></i>
                                    1395
                                </div>
                            </div>
                        </div>

                        <div class="membersPost">
                            <div class="postOwner">
                                <div class="profile">
                                <i class="fa-solid fa-circle-user" id="profilePic"></i>
                                </div>
                                <div class="details">
                                    <div class="tittle">
                                        <p id="tittleP">Robotics: Shaping Tomorrow's World Today</p>
                                    </div>
                                    <div class="aboutTittle">
                                        <div class="tittleType">
                                            <i class="fa-regular fa-lightbulb"></i>
                                            Idea
                                        </div>
                                        <div class="tittleType">
                                            <i class="fa-regular fa-clock"></i>
                                            26 minutes ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="postSocial">
                                
                                <div class="social">
                                    <i class="fa-regular fa-bookmark" id="socialIcon1"></i>
                                </div>
                                <div class="social">
                                    <i class="fa-regular fa-heart" id="socialIcon1"></i>
                                    10
                                </div>
                                <div class="social">
                                    <i class="fa-regular fa-eye" id="socialIcon"></i>
                                    55
                                </div>
                            </div>
                        </div>

                        <div class="membersPost">
                            <div class="postOwner">
                                <div class="profile">
                                <i class="fa-solid fa-circle-user" id="profilePic"></i>
                                </div>
                                <div class="details">
                                    <div class="tittle">
                                        <p id="tittleP">Revolutionizing Industries: The Role of Robotics in Shaping the Future</p>
                                    </div>
                                    <div class="aboutTittle">
                                        <div class="tittleType">
                                            <i class="fa-regular fa-lightbulb"></i>
                                            Idea
                                        </div>
                                        <div class="tittleType">
                                            <i class="fa-regular fa-clock"></i>
                                            26 minutes ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="postSocial">
                                
                                <div class="social">
                                    <i class="fa-regular fa-bookmark" id="socialIcon1"></i>
                                </div>
                                <div class="social">
                                    <i class="fa-regular fa-heart" id="socialIcon1"></i>
                                    55
                                </div>
                                <div class="social">
                                    <i class="fa-regular fa-eye" id="socialIcon"></i>
                                    216
                                </div>
                            </div>
                        </div>
                        <div class="more">
                            <p>Previous</p>
                            <p>Next</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    @endsection

{{-- Create post modal --}}
<div id="postModal" class="postModal">
    <div class="modal-content">
        <form action="" method="">
            <div class="modal-header">
                <h2>Post Your Thoughts</h2>
            </div>
            <div class="modal-body">
                <label for="postTitle">Title:</label>
                <input type="text" id="postTitle" name="postTitle" placeholder="Your title" value="">
                <label for="postTitle">Content:</label>
                <textarea id="postTitle" name="postTitle" rows="8" placeholder="Write here your thoughts" value=""></textarea>
            </div>
            <div class="modal-footer">
                <button type="submit" id="submitEditModalBtn">Post</button>
                <button id="closePostnModalBtn">Cancel</button>
            </div>
        </form>
    </div>
</div>

{{-- Ask question modal --}}
<div id="askQuestionModal" class="askQuestionModal">
    <div class="modal-content">
        <form action="" method="">
            <div class="modal-header">
                <h2>Ask Your Question</h2>
            </div>
            <div class="modal-body">
                <label for="askQuestion">Question:</label>
                <textarea id="askQuestion" name="askQuestion" rows="8" placeholder="Write here your mind's hesitation" value=""></textarea>
            </div>
            <div class="modal-footer">
                <button type="submit" id="submitEditModalBtn">Ask</button>
                <button id="closeQuestionModalBtn">Cancel</button>
            </div>
        </form>
    </div>
</div>

