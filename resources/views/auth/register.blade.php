@extends('layouts.master')

@section('content')
    <div class="registrationPage">
        <div class="register">
            <div class="registerHeader">
                <h1>Registration</h1>
                <p><a href="#">Sign in</a> if you already have an <a href="#">account</a></p>
            </div>
            <div class="registerSection">
                <form action="" method="">
                    <div class="form-row1">
                        <div class="nameDiv">
                            <label for="fname">First Name:</label>
                            <input type="text" id="fname" class="inputForm" name="firstname" placeholder="First Name" required>
                        </div>
                        <div class="nameDiv">
                            <label for="lname">Last Name:</label>
                            <input type="text" id="lname" class="inputForm" name="lastname" placeholder="Last Name" required>
                        </div>
                    </div>

                    <div class="form-row3">
                        <div class="detailsDiv">
                            <label for="gender">Gender:</label>
                            <select id="gender" name="gender" class="inputForm1">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="detailsDiv">
                            <label for="dob">Date of Birth:</label>
                            <input type="date" id="dob" class="inputForm1" name="date_of_birth" required>
                        </div>

                        <div class="detailsDiv">
                            <label for="country">Country:</label>
                            <input type="text" id="country" class="inputForm" name="Country" placeholder="country" required>
                        </div>
                    </div>

                    <div class="form-row2">
                        <label for="email">Email:</label>
                        <input type="email" id="email" class="inputForm" name="email" placeholder="Email" required>
                    </div>
                    
                    <div class="form-row2">
                        <label for="password">Password:</label>
                        <input type="password" id="password" class="inputForm" name="password"placeholder="Password" required>
                    </div>
                    
                    <div class="form-row2">
                        <label for="confirm_password">Confirm Password:</label>
                        <input type="password" id="confirm_password" class="inputForm" name="confirm_password" placeholder="Confirm Password" required>
                    </div>

                    <div class="form-row4">
                        <div class="agreement">
                            <input type="checkbox" id="agree" class="agreeBox" name="agreement" required>
                            <label for="agree">I agree to the <a href="#">Terms and Conditions</a> & the above details is given by me, is correct.</label>
                        </div>

                        <input type="submit" value="Register" class="regsterution">
                    </div>

                </form>
            </div>
            <div class="registerFooter">
                <label for="newsletter">By agreeing to the Terms and Conditions you have subscribed our <a href="#">newsletter.</a></label>
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
