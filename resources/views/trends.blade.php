@extends('layouts.master')
@section('title')
    {{ isset($title) ? $title : env('APP_NAME')." Home Page" }}
@endsection

@section('content')
<div class="trendsContent">
    <div class="contentRow1">
        <div class="carousel-frame">
            <div class="image">
                <img src="{{ asset('images/trendsBuilding.svg') }}" alt="Image 1" />
            </div>
            <div class="frame-content">
            <h1>Current Trends in Architecture</h1>
            <p>Arcu bibendum at varius vel pharetra vel turpis nunc eget. In cursus turpis massa tincidunt dui ut ornare. Orci dapibus ultrices in iaculis nunc sed augue lacus viverra.</p>
            <p>Sed vulputate odio ut enim blandit volutpat maecenas. Sit amet venenatis urna cursus. Dolor sit amet consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus. </p>
            <p>
                <button class="learn-more-button">LEARN MORE</button>
            </p>
            </div>
        </div>

        <div class="carousel-frame">
            <div class="image">
                <img src="{{ asset('images/community.svg') }}" alt="Image 1" />
            </div>
            <div class="frame-content">
            <h1>Past Trends in Architecture</h1>
            <p>Arcu bibendum at varius vel pharetra vel turpis nunc eget. In cursus turpis massa tincidunt dui ut ornare. Orci dapibus ultrices in iaculis nunc sed augue lacus viverra.</p>
            <p>Sed vulputate odio ut enim blandit volutpat maecenas. Sit amet venenatis urna cursus. Dolor sit amet consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus. </p>
            <p>
                <button class="learn-more-button">LEARN MORE</button>
            </p>
            </div>
        </div>

        <div class="carousel-frame">
            <div class="image">
                <img src="{{ asset('images/community_reading.svg') }}" alt="Image 1" />
            </div>
            <div class="frame-content">
            <h1>Future Trends in Architecture</h1>
            <p>Arcu bibendum at varius vel pharetra vel turpis nunc eget. In cursus turpis massa tincidunt dui ut ornare. Orci dapibus ultrices in iaculis nunc sed augue lacus viverra.</p>
            <p>Sed vulputate odio ut enim blandit volutpat maecenas. Sit amet venenatis urna cursus. Dolor sit amet consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus. </p>
            <p>
                <button class="learn-more-button">LEARN MORE</button>
            </p>
            </div>
        </div>
    </div>
</div>
    

@endsection