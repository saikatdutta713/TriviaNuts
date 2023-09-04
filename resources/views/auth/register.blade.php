<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="{{asset('css/auth/register.css')}}" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            /* background: #f0efef; */
        }

        ::selection {
            color: #fff;
            background: #5372F0;
        }
        .welcome{
            height: 60%;
            width: 30%;
            margin: auto;
        }
        .wrapper {
            height: 90%;
            width: 50%;
            padding: 1rem;
            background: #fff;
            border-radius: 5px;
            text-align: center;
            margin: auto;
            /* box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23); */
        }

        .wrapper header {
            color: #3A5198;
            height: 20%;
            width: 100%;
            
        }
        .wrapper header .logo{
            margin-right: auto;
            width: 20%;
            height: 40%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: pink;
            font-size: 20px;
        }
        .wrapper header .registration{
            margin: auto;
            width: 40%;
            height: 60%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
        }
        .wrapper form {
            /* margin: 40px 0; */
            height: 80%;
            width: 100%;
        }

        form .field {
            width: 100%;
            margin-bottom: 20px;
        }

        form .field.shake {
            animation: shake 0.3s ease-in-out;
        }

        @keyframes shake {

            0%,
            100% {
                margin-left: 0px;
            }

            20%,
            80% {
                margin-left: -12px;
            }

            40%,
            60% {
                margin-left: 12px;
            }
        }

        form .field .input-area {
            height: 50px;
            width: 45%;
            position: relative;
            float: left;
            margin: 1% 2.5% 1.5% 2.5%;
        }

        form input {
            width: 100%;
            height: 100%;
            outline: none;
            padding: 0 45px;
            font-size: 18px;
            background: none;
            caret-color: #5372F0;
            border-radius: 5px;
            border: 1px solid #bfbfbf;
            border-bottom-width: 2px;
            transition: all 0.2s ease;
        }

        form .field input:focus,
        form .field.valid input {
            border-color: #5372F0;
        }

        form .field.shake input,
        form .field.error input {
            border-color: #dc3545;
        }

        .field .input-area i {
            position: absolute;
            top: 50%;
            font-size: 18px;
            pointer-events: none;
            transform: translateY(-50%);
        }

        .input-area .icon {
            left: 15px;
            color: #bfbfbf;
            transition: color 0.2s ease;
        }

        .input-area .error-icon {
            right: 15px;
            color: #dc3545;
        }

        form input:focus~.icon,
        form .field.valid .icon {
            color: #5372F0;
        }

        form .field.shake input:focus~.icon,
        form .field.error input:focus~.icon {
            color: #bfbfbf;
        }

        form input::placeholder {
            color: #bfbfbf;
            font-size: 17px;
        }

        form .field .error-txt {
            color: #dc3545;
            text-align: left;
            margin-top: 5px;
        }

        form .field .error {
            display: none;
        }

        form .field.shake .error,
        form .field.error .error {
            display: block;
        }

        /* form .pass-txt {
            text-align: left;
            margin-top: -10px;
        } */

        .wrapper a {
            color: #5372F0;
            text-decoration: none;
        }

        .wrapper a:hover {
            text-decoration: underline;
        }

        form input[type="submit"] {
            height: 50px;
            margin-top: 30px;
            color: #fff;
            padding: 0;
            border: none;
            background: #3A5198;
            cursor: pointer;
            border-bottom: 2px solid rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        form input[type="submit"]:hover {
            background: #2c52ed;
        }


        #emailField{
            width: 95%;
        }
        .checkbox{
            height: 25px;
            margin-top: 5px;
        }

        #submit{
            width: 20%;
            margin:3% 40% 0 40%;
        }
        .policies{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 10%;
            width: 100%;
        }
        .policies .checkbox{
            /* height: 100%; */
            width: 6%; 
        }
        #policieText{
            height: 100%;
            width: 90%;
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="welcome">
        <img src="{{asset('images/welcome.svg')}}" alt="Photo" >
    </div>
    <div class="wrapper">
        <header>
            <div class="logo">
                Logo
            </div>
            <div class="registration">
                Registration
            </div>
        </header>
        <form action="registration" method="POST">
            @csrf
            <div class="field password">
                <div class="input-area">
                    <input type="firstName" name="firstName" placeholder="First Name">
                    {{-- <i class="icon fas fa-lock"></i> --}}
                    <i class="icon fas fa-user"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                {{-- @error('password')
                    <div class="error-txt">{{ $message }}</div>
                @enderror --}}
            </div>
            <div class="field password">
                <div class="input-area">
                    <input type="lastName" name="lastName" placeholder="Last Name">
                    <i class="icon fas fa-user-circle"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
            </div>
            <div class="field password">
                <div class="input-area">
                    <input type="Country" name="country" placeholder="Country">
                    <i class="icon fas fa-globe"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
            </div>
            <div class="field password">
                <div class="input-area">
                    <input type="City" name="city" placeholder="City">
                    <i class="icon fas fa-city"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
            </div>
            <div class="field password">
                <div class="input-area">
                    <input type="Gender" name="Gender" placeholder="Gender">
                    <i class="icon fas fa-mars"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
            </div>
            <div class="field password">
                <div class="input-area">
                    <input type="date" name="dob" >
                    <i class="icon fas fa-calendar-alt"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
            </div>
            <div class="field password">
                <div class="input-area">
                    <input type="password" name="Create password" placeholder="Create Password">
                    <i class="icon fas fa-unlock"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                
            </div>

            <div class="field password">
                <div class="input-area">
                    <input type="password" name="password" placeholder="Confirm Password">
                    <i class="icon fas fa-lock"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                
            </div>
            <div class="field email">
                <div class="input-area" id="emailField">
                    <input type="text" name="email" placeholder="Email Address">
                    <i class="icon fas fa-envelope"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                
                
            </div>
            <div class="policies"><input type="checkbox" class="checkbox"><p id="policieText">The above details given by me are correct. I accept all Terms & Conditions and privacy policy. </p></div>
            <input type="submit" value="Sign up" id="submit">
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="{{asset('js/kit.fontawesome.com_1cad59c07c.js')}}"></script>
</body>
</html>