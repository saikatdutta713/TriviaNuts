@extends('layouts.master')

@section('content')
<x-notification type="success" :message="'You have registered Successfully'" />
    <div class="profilePage">
        <div class="profilePicture">
            <i class="fa-solid fa-gem" id="userBadge"></i>  
            <i class="fa-solid fa-circle-user" id="userPic"></i> 
            <div class="profileName">
                <p>Uday_Kri$hna_pal</p>
            </div>  
            <div class="profilePoints">
                <p>Points : 765</p>
            </div>
        </div>

        <div class="profileDetails">
           <div class="personalDetails">
                <div class="personDetails">
                    <h4>Personal Details:</h4>
                    <p>Uday Krishna Pal</p>
                    <p>Male</p>
                    <p>Birth Date - 20.12.1999</p>
                </div>
                <div class="education">
                    <h4>Last Education Details:</h4>
                    <p>MCA from Techno College Hooghly</p>
                </div>
           </div>
           <div class="bio">
            <h4>Bio:</h4>
            <p>Hello I'm Uday Krishna Pal is an aspiring web developer and designer, driven by a deep passion for crafting extraordinary digital experiences. As a recent graduate, [he/she] combines creativity with a strong foundation in coding and design principles. I thrives on learning and eagerly seeks opportunities to collaborate and contribute to web development and design projects. [He/She] recognizes the significance of clean code and user-friendly interfaces in delivering exceptional web solutions. With determination and a thirst for innovation, [Name] is poised to make a meaningful impact in the ever-evolving world of web development and design.</p>
           </div>
           <div class="contactDetails">
                <h4>Contact  Details:</h4>
                <p><i class="fa-solid fa-envelope" id="userSocial"></i> uday@abc.com</p>
                <p><i class="fa-brands fa-square-facebook" id="userSocial"></i> Link</p>
                <p><i class="fa-brands fa-linkedin" id="userSocial"></i> Link</p>
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
            <div class="modal-header">
                <h2>Update Profile</h2>
            </div>
            <div class="modal-body">
                
                <label for="profileImage">Update Profile Picture:</label>
                <input type="file" id="profileImage" name="profileImage" accept="image/*">
                
                <label for="profileName">Name:</label>
                <input type="text" id="profileName" name="profileName" placeholder="Your Name">

                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob">
                
            </div>
            <div class="modal-footer">
                <button id="submitEditModalBtn">Update</button>
                <button id="closeEditModalBtn">Cancel</button>
            </div>
        </div>
    </div>

    <div id="EducationModal" class="educationModal">
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
                <button id="submitEditModalBtn">Add</button>
                <button id="closeEducationModalBtn">Cancel</button>
            </div>
        </div>
    </div>

    <div id="BioModal" class="bioModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Update Bio</h2>
            </div>
            <div class="modal-body">
                <label for="profileBio">Bio:</label>
                <textarea id="profileBio" name="profileBio" rows="7" placeholder="Tell us about yourself"></textarea>
            </div>
            <div class="modal-footer">
                <button id="submitEditModalBtn">Update</button>
                <button id="closeBioModalBtn">Cancel</button>
            </div>
        </div>
    </div>

    <div id="SocialModal" class="socialModal">
        <div class="modal-content">
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
                <button id="submitEditModalBtn">Add</button>
                <button id="closeSocialModalBtn">Cancel</button>
            </div>
        </div>
    </div>

    <div id="PasswordModal" class="passwordModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Change Password</h2>
            </div>
            <div class="modal-body">
                <label for="currentPassword">Current Password:</label>
                <input type="password" id="currentPassword" name="currentPassword" placeholder="Current Password">
                
                <label for="newPassword">New Password:</label>
                <input type="password" id="newPassword" name="newPassword" placeholder="New Password">
                
                <label for="confirmPassword">Confirm New Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm New Password">
            </div>
            <div class="modal-footer">
                <button id="submitPasswordChange">Update</button>
                <button class="close" id="closePasswordBtn">Cancel</button>
            </div>
        </div>
    </div>

@endsection