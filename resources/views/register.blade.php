<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--<title>Email and Password Validation</title>-->

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>


    <style>
        /* Google Fonts - Poppins */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f0efef;
        }

        .chatnmeet-logo {
            height: inherit;
            width: 100%;
            background: #fff;
            top: 0px;
            position: fixed;
            justify-content: center;
            font-size: 16pt;
        }


        .container {
            position: relative;
            max-width: 370px;
            width: 100%;
            padding: 25px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
        }

        .container header {
            font-size: 22px;
            font-weight: 600;
            color: #3A5198;
        }

        .container form {
            margin-top: 30px;
        }

        form .field {
            margin-bottom: 20px;
        }

        form .input-field {
            position: relative;
            height: 55px;
            width: 100%;
            border-radius: 8px;
            border: 2px solid #d1d1d1;

        }



        .input-icon {
            position: absolute;
            top: 50%;
            font-size: 18px;
            pointer-events: none;
            transform: translateY(-50%);
            left: 15px;
            color: #979696;
        }


        .input-field input {
            height: 100%;
            width: 100%;
            outline: none;
            border: none;
            border-radius: 8px;
            padding: 0 45px;
            outline: none;
            float: right;
            box-sizing: border-box;

        }

        form .input-field input:focus,
        form .input-field.valid input {
            border-color: #5372F0;
        }


        .field name-field :hover {
            border-color: red;
        }


        .invalid input {
            border-color: #d93025;
        }

        .input-field .show-hide {
            position: absolute;
            right: 13px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 18px;
            color: #919191;
            cursor: pointer;
            padding: 3px;
        }

        .field .error {
            display: flex;
            align-items: center;
            margin-top: 6px;
            color: #d93025;
            font-size: 13px;
            display: none;
        }

        .invalid .error {
            display: flex;
        }

        .error .error-icon {
            margin-right: 6px;
            font-size: 15px;
        }

        .create-password .error {
            align-items: flex-start;
        }

        .create-password .error-icon {
            margin-top: 4px;
        }

        .button {
            margin: 25px 0 6px;
        }

        .button input {
            color: #fff;
            font-size: 16px;
            font-weight: 400;
            background-color: #3A5198;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .button input:hover {
            background-color: #0e4bf1;
        }
    </style>
</head>

<body>
    <div class="chatnmeet-logo">Chat_N_Meet</div>
    <div class="container">
        <header>Sign up</header>
        <form action="https://www.codinglabweb.com/">

            <div class="field name-field">
                <div class="input-field">
                    <div class="input-icon">
                        <i class='fa-solid fa-user'></i>
                    </div>
                    <input type="name" placeholder="Enter your name" class="email" onclick="myFunction()" />
                </div>
                <span class="error name-error">
                    <i class="bx bx-error-circle error-icon"></i>
                    <p class="error-text">Please enter a valid name</p>
                </span>
            </div>

            <div class="field email-field">
                <div class="input-field">
                    <div class="input-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <input type="email" placeholder="Enter your email" class="email" />
                </div>
                <span class="error email-error">
                    <i class="bx bx-error-circle error-icon"></i>
                    <p class="error-text">Please enter a valid email</p>
                </span>
            </div>
            <div class="field create-password">
                <div class="input-field">
                    <div class="input-icon">
                        <i class="fa-solid fa-unlock-keyhole"></i>
                    </div>
                    <input type="password" placeholder="Create password" class="password" />
                    <i class="bx bx-hide show-hide"></i>
                </div>
                <span class="error password-error">
                    <i class="bx bx-error-circle error-icon"></i>
                    <p class="error-text">
                        Please enter atleast 8 charatcer with number, symbol, small and
                        capital letter.
                    </p>
                </span>
            </div>
            <div class="field confirm-password">
                <div class="input-field">
                    <div class="input-icon">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <input type="password" placeholder="Confirm password" class="cPassword" />
                    <i class="bx bx-hide show-hide"></i>
                </div>
                <span class="error cPassword-error">
                    <i class="bx bx-error-circle error-icon"></i>
                    <p class="error-text">Password don't match</p>
                </span>
            </div>
            <div class="input-field button">
                <input type="submit" value="Submit Now" />
            </div>
        </form>
    </div>

    <!-- JavaScript -->
    <!--<script src="js/script.js"></script>-->
    <script>
        const form = document.querySelector("form"),
        emailField = form.querySelector(".email-field"),
        emailInput = emailField.querySelector(".email"),
        passField = form.querySelector(".create-password"),
        passInput = passField.querySelector(".password"),
        cPassField = form.querySelector(".confirm-password"),
        cPassInput = cPassField.querySelector(".cPassword");
        
        // Email Validtion
        function checkEmail() {
        const emaiPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if (!emailInput.value.match(emaiPattern)) {
        return emailField.classList.add("invalid"); //adding invalid class if email value do not mathced with email pattern
        }
        emailField.classList.remove("invalid"); //removing invalid class if email value matched with emaiPattern
        }
        
        // Hide and show password
        const eyeIcons = document.querySelectorAll(".show-hide");
        
        eyeIcons.forEach((eyeIcon) => {
        eyeIcon.addEventListener("click", () => {
        const pInput = eyeIcon.parentElement.querySelector("input"); //getting parent element of eye icon and selecting the
        password input
        if (pInput.type === "password") {
        eyeIcon.classList.replace("bx-hide", "bx-show");
        return (pInput.type = "text");
        }
        eyeIcon.classList.replace("bx-show", "bx-hide");
        pInput.type = "password";
        });
        });
        
        // Password Validation
        function createPass() {
        const passPattern =
        /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        
        if (!passInput.value.match(passPattern)) {
        return passField.classList.add("invalid"); //adding invalid class if password input value do not match with passPattern
        }
        passField.classList.remove("invalid"); //removing invalid class if password input value matched with passPattern
        }
        
        // Confirm Password Validtion
        function confirmPass() {
        if (passInput.value !== cPassInput.value || cPassInput.value === "") {
        return cPassField.classList.add("invalid");
        }
        cPassField.classList.remove("invalid");
        }
        
        // Calling Funtion on Form Sumbit
        form.addEventListener("submit", (e) => {
        e.preventDefault(); //preventing form submitting
        checkEmail();
        createPass();
        confirmPass();
        
        //calling function on key up
        emailInput.addEventListener("keyup", checkEmail);
        passInput.addEventListener("keyup", createPass);
        cPassInput.addEventListener("keyup", confirmPass);
        
        if (
        !emailField.classList.contains("invalid") &&
        !passField.classList.contains("invalid") &&
        !cPassField.classList.contains("invalid")
        ) {
        location.href = form.getAttribute("action");
        }
        });

        $('.input-field').on('click',function(e){
            console.log('ok');
        });

        console.log('ok');





        
    </script>
</body>

</html>