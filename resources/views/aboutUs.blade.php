@extends('layouts.master')
@section('title')
    {{ isset($title) ? $title : env('APP_NAME')." Home Page" }}
@endsection

@section('content')
    
    <div class="main">
        <div class="about-section">
            <div class="about-image">
                <img src="{{ asset('images/aboutus.jpg') }}" alt="Team Photo">
            </div>
            <div class="about-content">
                
                <div class="description">
                    <p>"Hello, we are Uday, Pritam, and Saikat, and we're thrilled to share our journey as three best friends and the creators of 'Trivianuts,' an educational quiz application. Our story is a tale of friendship, innovation, and a shared vision to revolutionize education.</p>
                </div>
                <div class="title">
                    <h2>Our Team:</h2>
                </div>
                <div class="description">

                    <p><h4>Saikat Dutta</h4> Tech Maestro: With a BCA background, Saikat is the driving force behind the technical aspect of Trivianuts. He's responsible for database management and crafting a robust backend. His coding expertise ensures a seamless and high-quality user experience.</p>
                    <p><h4>Pritam Bag</h4>Creative Visionary: With a background in BSC Mathematics, Pritam leads the way in designing the app, managing the database, and creating engaging quizzes. His unique blend of creativity and technical skills ensures a user-friendly experience. Pritam's journey extends from frontend design to backend development, guided by Saikat's expertise.</p>
                    
                    <p><h4>Uday Krishna Pal</h4> Academic Mentor: Also holding a BCA degree, my role is to enrich the app's educational content, aligning it with relevant topics from our college curriculum. I act as the bridge between our project and our mentor, Rajesh Sir, ensuring our journey remains educationally enriching.</p>

                </div>
                <div class="title">
                    <h2>Our Story:</h2>
                </div>
                <div class="description">
                    <p>Trivianuts began as a minor project during our MCA program, guided by the invaluable mentorship of <h4>Rajesh Sir.</h4> The shared vision of creating an interactive, educational quiz platform ignited our collective enthusiasm. As best friends, each with unique strengths, we united to turn this vision into a reality, guided by Rajesh Sir's wisdom.</p>
                </div>

                <div class="title">
                    <h2>Vision:</h2>
                </div>
                <div class="description">
                    <p>Our vision is to bridge the gap between education and entertainment. We're committed to making learning engaging for all, shattering the myth that education must be dull. Trivianuts represents our collective effort to infuse fun into education.</p>
                </div>

                <div class="title">
                    <h2>Our Mission:</h2>
                </div>
                <div class="description">
                    <P>Our mission is two-fold: to provide a platform that enriches educational content with entertainment and to make this platform accessible to all. Trivianuts is more than just a quiz application; it's a transformative tool, fusing knowledge and enjoyment.</p>
                </div>

                <div class="title">
                    <h2>The Future:</h2>
                </div>
                <div class="description">
                    <p>Exciting plans await us. Alongside our current journey, we plan to introduce test series to further enhance the learning experience. This expansion aligns perfectly with our commitment to provide value and ensure our users stay engaged and informed.</p>
                </div>
            </div>
        </div>
    </div>
@endsection