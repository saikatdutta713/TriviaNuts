@extends('layouts.master')
@section('title')
    {{ isset($title) ? $title : env('APP_NAME')." Home Page" }}
@endsection

@section('content')
    <section class="contact-form">
        <h1>Get in Touch</h1>
        <form action="submit_form.php" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </section>
@endsection