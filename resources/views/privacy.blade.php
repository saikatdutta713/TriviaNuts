@extends('layouts.master')
@section('title')
    {{ isset($title) ? $title : env('APP_NAME')." Home Page" }}
@endsection

@section('content')
    <div class="main">
        <h1>Privacy & Policy</h1>
    <section class="privacy-policy">
        <h3>Information We Collect</h3>
        <p>We collect information that you provide directly to us, such as when you create an account, subscribe to our newsletter, or contact us. This information may include your name, email address, and any other information you choose to provide.</p>

        <h3>How We Use Your Information</h3>
        <p>We may use the information we collect for various purposes, including to provide and maintain the service, send you updates and promotional materials, and respond to your requests. We may also use your information for research and analysis to improve our services.</p>

        <h3>Sharing Your Information</h3>
        <p>We may share your information with third parties for various purposes. This may include sharing your information with marketing partners to send you promotional materials. We may also share your information with analytics providers to better understand user behavior and improve our services. We will not share your information with third parties for their marketing purposes without your consent.</p>

        <h3>Security</h3>
        <p>We take the security of your information seriously and have implemented measures to protect your data from unauthorized access and use. However, no method of transmission over the internet or electronic storage is completely secure, so we cannot guarantee its absolute security.</p>

        <h3>Changes to this Privacy Policy</h3>
        <p>We may update our Privacy Policy from time to time to reflect changes in our practices and services. Any changes will be posted on this page, and the revised Privacy Policy will become effective when it is posted. We encourage you to review this page periodically for any updates.</p>
    </section>
    </div>
@endsection