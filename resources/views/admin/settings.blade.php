@extends('layouts.admin')

@section('admin_title')
    {{ isset($title) ? $title : env('APP_NAME')." Home Page" }}
@endsection
@section('admin__pageHeading')
    <p>Settings</p>
@endsection
@section('admin__content')
    <div class="main__content">

        @if (auth()->user()->isSuperAdmin())
        <div class="maintain">
            <form method="GET" action="{{ route('maintenance.toggle') }}">
                @csrf
                <div class="sidebar__link">
                    <i class="fa-solid fa-gears" id="maintain"></i>
                    <p>Maintenance Mode</p>
                    <label class="switch">
                        <input type="checkbox" name="maintenance_mode" {{ app()->isDownForMaintenance() ? 'checked' : '' }}>
                        <span class="slider round"></span>
                    </label>
                </div>
            </form>
        </div>
        <div class="logo">
            <div class="logo-container">
                <img src="{{ asset('images/TriviaNuts_Logo.svg') }}" alt="Current Logo">
            </div>

            <form method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="logo-upload">
                    <label for="logoInput" class="upload-button" id="uploadButton">Upload Logo</label>
                    <input type="file" id="logoInput" name="logo" style="display: none;">
                    <button type="submit" style="display: none;" id="submitButton">Submit</button>
                    <button type="button" style="display: none;" id="cancelButton" onclick="cancelUpload()">Cancel</button>
                </div>
            </form>
        </div>

        <div id="editableDiv1" >
            <form id="titleForm">
                <label for="title">Page Title:</label>
                <input type="text" id="titleInput" size="30">
                <button type="button" onclick="updateTitle()">Update Title</button>
            </form>
        </div>

        <div class="rowTextarea">
            <div id="editableDiv" >
                <form id="descriptionForm">
                    <label for="description">Description:</label>
                    <textarea id="descriptionInput" cols="30" rows="10"></textarea>
                    <button type="button" onclick="updateDescription()">Update Description</button>
                </form>
            </div>

            <div id="editableDiv" >
                <form id="metaTagForm">
                    <label for="metaTag">Meta Tag:</label>
                    <textarea id="metaTagInput" cols="30" rows="10"></textarea>
                    <button type="button" onclick="updateMetaDescription()">Update Meta Tag</button>
                </form>
            </div>
        </div>
        @endif

    </div>
@endsection