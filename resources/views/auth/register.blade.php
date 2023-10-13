@extends('layouts.master')

@section('content')
<div class="registrationPage">
    <div class="register">
        <div class="registerHeader">
            <h1>Registration</h1>
            <p><a href="#">Sign in</a> if you already have an account</p>
        </div>
        <div class="registerSection">
            <form action="{{ Route('register') }}" method="POST">
                @csrf
                <input type="hidden" name="verification_token" value="{{ Str::random(40) }}">
                <div class="form-row1">
                    <div class="nameDiv">
                        <label for="name">Full Name:</label>
                        <input type="text" id="name" class="inputForm @error ('name') is-invalid @enderror" name="name">
                        @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-row3">
                    <div class="detailsDiv">
                        <label for="gender">Gender:</label>
                        <select id="gender" name="gender" class="inputForm">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                        @error('gender')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="detailsDiv1">
                        <label for="country">Country:</label>
                        <input type="text" id="country" class="inputForm" name="Country">
                        @error('country')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="detailsDiv2">
                        <label for="dob">Date of Birth:</label>
                        <input type="date" id="dob" class="inputForm" name="dob">
                        @error('dob')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    
                </div>

                <div class="form-row2">
                    <label for="email">Email:</label>
                    <input type="email" id="email" class="inputForm" name="email">
                    @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-row2">
                    <label for="password">Password:</label>
                    <input type="password" id="password" class="inputForm" name="password">
                    @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-row2">
                    <label for="password_confirmation">Confirm Password:</label>
                    <input type="password" id="password_confirmation" class="inputForm" name="password_confirmation">
                    @error('password_confirmation')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-row4">
                    <div class="agreement">
                        <input type="checkbox" id="terms" class="agreeBox" name="terms">
                        <label for="agree">I agree to the <a href="#">Terms and Conditions</a> & the above details is
                            given by me, is correct.</label>
                        @error('terms')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <input type="submit" value="Register" class="regsterution">
                </div>

            </form>
        </div>
        <div class="registerFooter">
            <label for="newsletter">By agreeing to the Terms and Conditions you have subscribed our <a
                    href="#">newsletter.</a></label>
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
@if (isset($verificationMail) && $verificationMail)
<x-message-modal type="success" message="Your account has been created successfully." buttonText="Okay"
    buttonLink="{{ Route('login') }}" />
@endif
@endsection