@extends('layouts.master')
@section('title')
    {{ isset($title) ? $title : env('APP_NAME')." Home Page" }}
@endsection

@section('content')
<div class="profilePage">
    
    <div class="profileEdit">
        <div class="heading">
            <i class="fa-solid fa-pen-to-square"></i>
            <p>Update Details</p>
        </div>
        <button id="editProfileButton" class="editButton">
            <i class="fa-solid fa-user"></i>
            <p>Profile</p>
        </button>
        <button id="editEducationButton" class="editButton">
            <i class="fa-solid fa-school"></i>
            <p>Education</p> 
        </button>
        <button id="editBioButton" class="editButton">
            <i class="fa-solid fa-file"></i>
            <p>About Me</p> 
        </button>
        <button id="editSocialButton" class="editButton">
            <i class="fa-solid fa-share-from-square"></i>
            <p>Social Media</p>
        </button>
        <button id="editPasswordButton" class="editButton">
            <i class="fa-solid fa-key"></i>
            <p>Change Password</p>
        </button>
    </div>
    <div class="rightDiv">
        <div class="profileDetails">
            <div class="personalDetails1">
                <div class="personDetails">
                    <p class="detailsHeading">Name</p>
                    <p>{{ $user->name }}</p>
                    <p class="detailsHeading">Gender</p>
                    <p>{{ $user->gender }}</p>
                    <p class="detailsHeading">Birth Date</p>
                    <p>{{ $user->dob }}</p>
                </div>
                <div class="contactDetails">
                    <h4>Social Handle</h4>
                    <p>
                        <i class="fa-solid fa-envelope" id="userSocial"></i> 
                        {{ $user->email }}
                    </p>
                    <p>
                        <i class="fa-brands fa-square-facebook" id="userSocial"></i>
                        @if ($user->facebook) {{ $user->facebook }}
                    </p>
                    @endif
                    <p>
                        <i class="fa-brands fa-linkedin" id="userSocial"></i>
                        @if ($user->linkedin) {{ $user->linkedin }}
                    </p>
                    @endif
                </div>
            </div>
            <div class="personalDetails2">
                
                
                <div class="education">
                    <p class="detailsHeading">Last Course</p>
                    @if ($user->course_name)
                    <p>{{ $user->course_name }}</p>
                    @endif
                    <p class="detailsHeading">Institution Name</p>
                    @if ($user->institution_name)
                    <p>{{ $user->institution_name}}</p>
                    @endif
                </div>
                <div class="bio">
                    <h4>About Me</h4>
                    @if ($user->bio)
                    <p>{{ $user->bio }}</p>
                    @else
                    <p>About me is not updated!</p>
                    @endif
                </div>
            </div>
            <div class="profilePicture">
                <div class="avatar-container">
                        <img src="{{ asset('images/avatar-blue.png') }}" alt="User Avatar" class="avatar">
                    </div>
                <i class="fa-solid fa-gem" id="userBadge"></i>
                <div class="profileName">
                    <p>{{ $user->name }}</p>
                </div>
                <div class="profilePoints">
                    <p>Points : 765</p>
                </div>
            </div>
        </div>
        
    </div>
    <div class="button-update">
        <button id="toggleProfileEditButton" class="mobileToggleButton">
            Update
        </button>
    </div>
    

</div>


<div id="ProfileModal" class="profileModal">
    <div class="modal-content">
        <form action="{{ route('update.profile') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h2>Update Profile</h2>
            </div>
            <div class="modal-body">

                <label for="profileImage">Update Profile Picture:</label>
                <input type="file" id="profileImage" name="profileImage" accept="image/*">

                <label for="profileName">Name:</label>
                <input type="text" id="profileName" name="name" placeholder="Your Name" value="{{ $user->name }}">

                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" value="{{ $user->dob }}">

            </div>
            <div class="modal-footer">
                <button type="submit" id="submitEditModalBtn">Update</button>
                <button id="closeEditModalBtn">Cancel</button>
            </div>
        </form>
    </div>
</div>

<div id="EducationModal" class="educationModal">
    <form action="{{ route('update.education') }}" method="POST">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h2>Update Last Education Details</h2>
            </div>
            <div class="modal-body">
                <label for="courseName">Course Name:</label>
                <input type="text" id="courseName" name="courseName" placeholder="Course Name" value="{{ $user->course_name }}">

                <label for="institutionName">Institution Name:</label>
                <input type="text" id="institutionName" name="institutionName" placeholder="Institution Name" value="{{ $user->institution_name }}">
            </div>
            <div class="modal-footer">
                <button type="submit" id="submitEditModalBtn">Add</button>
                <button id="closeEducationModalBtn">Cancel</button>
            </div>
        </div>
    </form>

</div>

<div id="BioModal" class="bioModal">
    <div class="modal-content">
        <form action="{{ route('update.bio') }}" method="POST">
            @csrf
            <div class="modal-header">
                <h2>Update About Me</h2>
            </div>
            <div class="modal-body">
                <label for="profileBio">About Me:</label>
                <textarea id="profileBio" name="profileBio" rows="15" placeholder="Tell us about yourself" value="{{ $user->bio }}"></textarea>
            </div>
            <div class="modal-footer">
                <button type="submit" id="submitEditModalBtn">Update</button>
                <button id="closeBioModalBtn">Cancel</button>
            </div>
        </form>
    </div>
</div>

<div id="SocialModal" class="socialModal">
    <div class="modal-content">
        <form action="{{ route('update.social') }}" method="POST">
            @csrf
            <div class="modal-header">
                <h2>Add Social Media</h2>
            </div>
            <div class="modal-body">
                <label for="facebookProfile">Facebook Profile:</label>
                <input type="text" id="facebookProfile" name="facebookProfile" placeholder="Facebook Profile URL" value="{{ $user->facebook }}">

                <label for="linkedinProfile">LinkedIn Profile:</label>
                <input type="text" id="linkedinProfile" name="linkedinProfile" placeholder="LinkedIn Profile URL" value="{{ $user->linkedin }}">
            </div>
            <div class="modal-footer">
                <button type="submit" id="submitEditModalBtn">Add</button>
                <button id="closeSocialModalBtn">Cancel</button>
            </div>
        </form>
    </div>
</div>

<div id="PasswordModal" class="passwordModal">
    <div class="modal-content">
        <form action="{{ route('update.password') }}" method="POST">
            @csrf
            <div class="modal-header">
                <h2>Change Password</h2>
            </div>
            <div class="modal-body">
                <label for="currentPassword">Current Password:</label>
                <input type="password" id="currentPassword" name="current_password" placeholder="Current Password">

                <label for="newPassword">New Password:</label>
                <input type="password" id="newPassword" name="new_password" placeholder="New Password">

                <label for="password_confirmation">Confirm New Password:</label>
                <input type="password" id="password_confirmation" name="confirm_password"
                    placeholder="Confirm New Password">
            </div>
            <div class="modal-footer">
                <button type="submit" id="submitPasswordChange">Update</button>
                <button class="close" id="closePasswordBtn">Cancel</button>
            </div>
        </form>
    </div>
</div>
<script>
$(document).ready(function () {
    $("#toggleProfileEditButton").click(function () {
        $(".profileEdit").slideToggle(); // Toggle the visibility of profileEdit
    });

    // Close the profileEdit when clicking outside of it
    $(document).click(function (event) {
        if (!$(event.target).closest(".profileEdit").length && !$(event.target).is("#toggleProfileEditButton")) {
            $(".profileEdit").slideUp();
        }
    });

    // Prevent clicks inside the profileEdit from closing it
    $(".profileEdit").click(function (event) {
        event.stopPropagation();
    });
});
</script>
@if (session()->has('notification_type'))

<x-notification type="{{ session()->get('notification_type') }}" message="{{ session()->get('notification_message') }}" />
@endif
@endsection