@extends('layouts.master')

@section('content')
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
            <p>Hello I'm Uday Krishna Pal is an aspiring web developer and designer, driven by a deep passion for crafting extraordinary digital experiences. As a recent graduate, [he/she] combines creativity with a strong foundation in coding and design principles. I thrives on learning and eagerly seeks opportunities to collaborate and contribute to web development and design projects. [He/She] recognizes the significance of clean code and user-friendly interfaces in delivering exceptional web solutions. With determination and a thirst for innovation, [Name] is poised to make a meaningful impact in the ever-evolving world of web development and design</p>
           </div>
           <div class="contactDetails">
                <h4>Contact  Details:</h4>
                <p><i class="fa-solid fa-envelope" id="userSocial"></i> uday@abc.com</p>
                <p><i class="fa-brands fa-linkedin" id="userSocial"></i> link</p>
           </div>
        </div>

        <div class="profileEdit">
            <div class="edit">
                <h4>Edit  Details:</h4>
                <p>Profile Pic</p>
                <p>Profile </p>
                <p>Education</p>
                <p>Bio</p>
                <p>Social Media</p>
                <p>Change Password</p>
                <p>Newsletter</p>
            </div>
            <div class="logout">
                <form action="logout.php" method="post">
                    <input type="submit" value="Logout" id="logoutButton">
                </form>
            </div>
            
        </div>
    </div>
@endsection