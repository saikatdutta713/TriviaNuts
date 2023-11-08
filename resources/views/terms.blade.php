@extends('layouts.master')
@section('title')
    {{ isset($title) ? $title : env('APP_NAME')." Home Page" }}
@endsection

@section('content')
    <main>
        <h1>Terms & Conditions</h1>
        <section class="terms-conditions">
            <h3> Acceptance of Terms</h3>
            <p>By accessing or using this website, you agree to comply with and be bound by these terms and conditions.</p>

            <h3> Privacy Policy</h3>
            <p>Your use of this website is also governed by our Privacy Policy. Please review our Privacy Policy for more information.</p>

            <h3> Intellectual Property</h3>
            <p>All content on this website is protected by intellectual property rights and is the property of the website owner.</p>

            <h3> Disclaimers</h3>
            <p>This website is provided "as is" and the website owner makes no warranties or representations regarding the use, accuracy, or reliability of the materials on this website.</p>

            <h3> Limitation of Liability</h3>
            <p>The website owner shall not be liable for any damages arising out of the use or inability to use this website.</p>

            <h3> Governing Law</h3>
            <p>These terms and conditions are governed by and construed in accordance with the laws of your jurisdiction.</p>
        </section>
    </main>
@endsection