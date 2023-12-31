@extends('layouts.master')

@section('content')
<div class="loginPage">
    <div class="login">
        <div class="loginHeader">
            <i class="fa-solid fa-circle-user" id="loginlogo"></i>
        </div>
        <div class="loginSection">
            <form action="{{ route('admin.login') }}" method="POST">
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
                <div class="pass-txt" id="openForgotPasswordModalBtn"><a href="#">Forgot password?</a></div>
                <input type="submit" value="Sign in" id="openOtpModalBtn">
            </form>
        </div>
    </div>

    <div class="newUser">

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
    <form action="{{ route('admin.verify.otp') }}" method="POST">
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

@isset($forgotPass)
    <div id="ForgotPasswordModal" class="forgotPasswordModal">
    <form action="{{ route('reset.link') }}" method="POST">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h2>Forgot Password</h2>
            </div>
            <div class="modal-body">
                <p>Enter your registered email address to reset your password.</p>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email">
            </div>
            <div class="modal-footer">
                <button id="submitForgotPasswordBtn">Submit</button>
                <button id="cancelForgotPasswordBtn" class="cancel">Cancel</button>
            </div>
        </div>
    </form>
    </div>

@endisset
@endsection