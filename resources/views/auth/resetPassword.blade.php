@extends('layouts.master')

@section('content')
    <div class="setNewPasswordPage">
        <div class="setNewPassword">
            <div class="setNewPasswordHeader">
                <i class="fa-solid fa-key" id="loginlogo"></i>
                 <p>Reset Password</p>
            </div>
            <div class="setNewPasswordSection">
                <form action="{{ route('reset.password') }}" method="POST">
                    @csrf

                    <!-- Fields for resetting the password -->
                    <div class="field password">
                        <div class="input-area">
                            <input type="password" name="new_password" placeholder="New Password">
                            <i class="icon fas fa-lock"></i>
                        </div>
                        @error('new_password')
                        <div class="error-txt">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="field password">
                        <div class="input-area">
                            <input type="password" name="confirm_password" placeholder="Confirm Password">
                            <i class="icon fas fa-lock"></i>
                        </div>
                        @error('confirm_password')
                        <div class="error-txt">{{ $message }}</div>
                        @enderror
                    </div>

                    @if($errors->has('password_mismatch'))
                    <div class="error-txt">{{ $errors->first('password_mismatch') }}</div>
                    @endif

                    <input type="submit" value="Reset Password">
                </form>


            </div>
            <div class="setNewPasswordFooter">
                <label for="newsletter">Remembered Password? <a href="{{ route('login') }}">Login</a></label>
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
    
@endsection