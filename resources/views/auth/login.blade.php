@extends('layouts.master')

@section('title')
{{ isset($title) ? $title : env('APP_NAME')." Home Page" }}
@endsection
@section('content')
<div class="loginPage">
    <div class="login">
        <div class="loginHeader">
            <i class="fa-solid fa-circle-user" id="loginlogo"></i>
        </div>
        <div class="loginSection">
            <form action="login" method="POST">
                @csrf

                <div class="field email">
                    <div class="input-area">
                        <input type="email" name="email" placeholder="Email Address">
                        <i class="icon fas fa-envelope"></i>
                    </div>
                    @error('email')
                    <div class="error-txt">{{ $message }}</div>
                    @enderror

                </div>
                <div class="field password">
                    <div class="input-area">
                        <input type="password" name="password" placeholder="Password">
                        <i class="icon fas fa-lock"></i>
                    </div>
                    @error('password')
                    <div class="error-txt">{{ $message }}</div>
                    @enderror
                </div>
                <div class="pass-txt">
                    <a href="{{ route('reset.password.email.form') }}">Forgot password?</a>
                </div>
                <input type="submit" value="Sign in" id="openOtpModalBtn">
            </form>
        </div>
        <div class="loginFooter">
            <div class="divider">

                <div class="divisionOr">
                    <div class="dash"></div>
                    <p>OR </p>
                    <div class="dash"></div>
                </div>
                <a href="{{ url('/auth/google') }}">
                    <div class="googleLogin">
                        Sign in with google
                        <i class="fa-brands fa-google" id="googleLogo"></i>
                    </div>
                </a>
            </div>
            <label for="newsletter">Not yet member? <a href="{{ route('register') }}">Register now</a></label>
        </div>
    </div>

    <div class="newUser-login">

        <div class="joinGifts">
            <p>Join TriviaNuts community for free.</p>
        </div>
        <div class="joinBenifits">
            <div class="benifits1">
                <i class="fa-solid fa-microchip" id="benifitsIcon"></i>
                <p>Explore tech's endless possibilities.</p>
            </div>

            <div class="benifits1">
                <i class="fa-brands fa-studiovinari" id="benifitsIcon"></i>
                <p>Fuel your curiosity, explore new quiz territories.</p>
            </div>

            <div class="benifits1">
                <i class="fa-solid fa-shield-halved" id="benifitsIcon"></i>
                <p>Let's quiz and badge up for success!</p>
            </div>

            <div class="benifits1">
                <i class="fa-solid fa-ranking-star" id="benifitsIcon"></i>
                <p>Level up, rise in the ranks!</p>
            </div>

            <div class="benifits1">
                <i class="fa-solid fa-chalkboard-user" id="benifitsIcon"></i>
                <p>Empower your community through informative posts</p>
            </div>

            <div class="benifits1">
                <i class="fa-solid fa-heart" id="benifitsIcon"></i>
                <p>Spice up your posts, gather more hearts!</p>
            </div>

            <div class="benifits1">
                <i class="fa-solid fa-handshake-angle" id="benifitsIcon"></i>
                <p>Explore new horizons, ask for guidance.</p>
            </div>

        </div>

    </div>
</div>


@isset($verify_otp)
<div id="OtpModal" class="otpModal">
    <form action="{{ route('verify.otp') }}" method="POST">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h2>Enter OTP</h2>
            </div>
            <div class="modal-body">
                <p>Otp has been send to your email address</p>
                <label for="otpInput">OTP:</label>
                <input type="text" id="otpInput" name="otpInput" placeholder="Enter OTP" autocomplete="off">
                @error('otpInput')
                <div class="error-txt">{{ $message }}</div>
                @enderror
            </div>
            <div class="modal-footer">
                <button type="resend" id="resendOTPBtn">Resend OTP</button>
                <button type="submit" id="submitOTPBtn">Submit</button>
            </div>
        </div>
    </form>
</div>
@endisset

@isset ($forgotPass)
<div class="forgotPasswordModal">
    <form action="{{ route('reset.link') }}" method="POST">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h2>Forgot Password</h2>
            </div>
            <div class="modal-body">
                <p>Enter your registered email address to reset your password.</p>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email_forgotPass" placeholder="Enter your email">
                @error('email_forgotPass')
                <div class="error-txt">{{ $message }}</div>
                @enderror
            </div>
            <div class="modal-footer">
                <button type="submit">Submit</button>
                <button class="cancel" id="cancelForgotPasswordBtn"><a href="{{ route('login') }}">Cancel</a></button>
            </div>
        </div>
    </form>
</div>
@endisset

@isset ($success)
<x-message-modal type="success" message="{{ $success }}" showCloseButton="true" />
@endisset

@isset ($error)
<x-message-modal type="error" message="{{ $error }}" showCloseButton="true" />
@endisset

@if (session()->has('success'))
<x-message-modal type="success" message="{{ session()->get('success') }}" showCloseButton="true" />
@endif

@if (session()->has('error'))
<x-message-modal type="error" message="{{ session()->get('error') }}" showCloseButton="true" />
@endif

@isset($success_notification)
<x-notification type="success" message="{{ $success_notification }}" />
@endisset

@if(session()->has('success_notification'))
<x-notification type="success" message="{{ session()->get('success_notification') }}" />
@endif
@if(session()->has('error_notification'))
<x-notification type="error" message="{{ session()->get('error_notification') }}" />
@endif
@endsection