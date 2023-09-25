@extends('layouts.master')

@section('content')
<div class="profilePage">
    <div class="profilePicture">
        <i class="fa-solid fa-gem" id="userBadge"></i>
        <i class="fa-solid fa-circle-user" id="userPic"></i>

        <div class="profileName">
            <p>{{ $user->name }}</p>
        </div>
        <div class="profilePoints">
            <p>Points : 765</p>
        </div>
    </div>

    <div class="profileDetails">
        <div class="personalDetails">
            <div class="personDetails">
                <h4>Personal Details:</h4>
                <p>{{ $user->name }}</p>
                <p>{{ $user->gender }}</p>
                <p>Birth Date - {{ $user->dob }}</p>
            </div>
            <div class="education">
                <h4>Last Education Details:</h4>
                @if ($user->course_name && $user->institution_name)
                <p>{{ $user->course_name }} from {{ $user->institution_name }}</p>
                @endif
            </div>
        </div>
        <div class="bio">
            <h4>Bio:</h4>
            @if ($user->bio)
            <p>{{ $user->bio }}</p>
            @else
            <p>Bio is not updated!</p>
            @endif
        </div>
        <div class="contactDetails">
            <h4>Contact Details:</h4>
            <p><i class="fa-solid fa-envelope" id="userSocial"></i> {{ $user->email }}</p>
            @if ($user->facebook)
            <p><i class="fa-brands fa-square-facebook" id="userSocial"></i> {{ $user->facebook }}</p>
            @endif
            @if ($user->linkedin)
            <p><i class="fa-brands fa-linkedin" id="userSocial"></i> {{ $user->linkedin }}</p>
            @endif
        </div>
    </div>

    <div class="profileEdit">
        <h4>Edit Details:</h4>
        <button id="editProfileButton" class="editButton">Profile</button>
        <button id="editEducationButton" class="editButton">Education Details</button>
        <button id="editBioButton" class="editButton">Bio </button>
        <button id="editSocialButton" class="editButton">Social Media</button>
        <button id="editPasswordButton" class="editButton">Change Password</button>
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
                <input type="text" id="courseName" name="courseName" placeholder="Course Name">

                <label for="institutionName">Institution Name:</label>
                <input type="text" id="institutionName" name="institutionName" placeholder="Institution Name">
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
                <h2>Update Bio</h2>
            </div>
            <div class="modal-body">
                <label for="profileBio">Bio:</label>
                <textarea id="profileBio" name="profileBio" rows="7" placeholder="Tell us about yourself"></textarea>
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
                <input type="text" id="facebookProfile" name="facebookProfile" placeholder="Facebook Profile URL">

                <label for="linkedinProfile">LinkedIn Profile:</label>
                <input type="text" id="linkedinProfile" name="linkedinProfile" placeholder="LinkedIn Profile URL">
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
@isset ($notification_type)

<x-notification type="{{ $notification_type }}" message="{{ $notification_message }}" />
@endisset
@endsection