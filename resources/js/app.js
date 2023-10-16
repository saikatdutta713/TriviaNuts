import "./bootstrap.js";

//category.blade.php
document.addEventListener("DOMContentLoaded", function () {
    let prevContent = null;
    function toggleDisplay(event) {
        const contentDiv = document.getElementById("metarial2");
        const contentDiv1 = document.getElementById("metarial1");
        const subjectDiv = document.getElementById("subjectName");
        if (
            contentDiv.style.display === "" ||
            contentDiv.style.display === "none" ||
            contentDiv.style.display === "block"
        ) {
            contentDiv.style.display = "block";
            contentDiv1.style.display = "none";
        }
        contentDiv.style.transition = "background-color 0.1s ease-in-out";
        contentDiv.style.backgroundColor = "#a1fa6e"; // Set the desired color
        const clickedContent = event.target.textContent;
        if (prevContent !== clickedContent) {
            setTimeout(function () {
                contentDiv.style.backgroundColor = ""; // Revert back to previous background color
            }, 500);
        } else {
            contentDiv.style.backgroundColor = "";
        }
        prevContent = clickedContent;
        subjectDiv.textContent = clickedContent;
    }
    const toggleButtons = document.querySelectorAll(".subject1");
    toggleButtons.forEach(function (toggleButton) {
        toggleButton.addEventListener("click", toggleDisplay);
    });

    function changeBackgroundColor(clickedDiv) {
        const subjectDivs = document.querySelectorAll(".subject1");
        subjectDivs.forEach((div) => div.classList.remove("selected"));
        clickedDiv.classList.add("selected");
    }

    const subjectDivs = document.querySelectorAll(".subject1");
    subjectDivs.forEach(function (div) {
        div.addEventListener("click", function () {
            changeBackgroundColor(this);
        });
    });

    const contentDiv1 = document.getElementById("metarial1");
    const contentDiv2 = document.getElementById("metarial2");
    const contentDiv3 = document.getElementById("metarial3");
    const toggleStartB = document.querySelector("#quizstartb");
    // Displaying rule window by clicking stat button
    toggleStartB.addEventListener("click", function () {
        contentDiv1.style.display = "none";
        contentDiv2.style.display = "none";
        contentDiv3.style.display = "block";
    });

    const toggleStartSmallB = document.querySelectorAll("#startB");
    toggleStartSmallB.forEach(function (toggleButton) {
        toggleButton.addEventListener("click", function () {
            const bhoverText = toggleButton
                .closest(".quizno1")
                .querySelector(".bhover").textContent;
            const levelNameDiv = document.querySelector("#levelText");
            levelNameDiv.textContent = bhoverText;
            contentDiv1.style.display = "none";
            contentDiv2.style.display = "none";
            contentDiv3.style.display = "block";
        });
    });

    // Displaying quiz levels by clicking back button of rule window
    const toggleButtonBack = document.querySelector(".back");
    toggleButtonBack.addEventListener("click", function () {
        contentDiv1.style.display = "none";
        contentDiv2.style.display = "block";
        contentDiv3.style.display = "none";
    });

    const toggleButtonMetarial2 = document.querySelectorAll(".subject1");
    toggleButtonMetarial2.forEach(function (toggleButton) {
        toggleButton.addEventListener("click", function () {
            contentDiv1.style.display = "none";
            contentDiv2.style.display = "block";
            contentDiv3.style.display = "none";
        });
    });
});

//profile.blade.php
document.addEventListener("DOMContentLoaded", function () {
    // Code for handling the Profile modal
    const editProfileButton = document.getElementById("editProfileButton");
    const editModal = document.getElementById("ProfileModal");
    editProfileButton.addEventListener("click", () => {
        editModal.style.display = "block";
    });
    const closeEditModalBtn = document.getElementById("closeEditModalBtn");
    closeEditModalBtn.addEventListener("click", () => {
        editModal.style.display = "none";
    });
    window.addEventListener("click", (event) => {
        if (event.target === editModal) {
            editModal.style.display = "none";
        }
    });

    // Code for handling the Password modal
    const editPasswordButton = document.getElementById("editPasswordButton");
    const editPasswordModal = document.getElementById("PasswordModal");
    editPasswordButton.addEventListener("click", () => {
        editPasswordModal.style.display = "block";
    });
    const closePasswordBtn = document.getElementById("closePasswordBtn");
    closePasswordBtn.addEventListener("click", () => {
        editPasswordModal.style.display = "none";
    });
    window.addEventListener("click", (event) => {
        if (event.target === editPasswordModal) {
            editPasswordModal.style.display = "none";
        }
    });

    // Code for handling the Education modal
    const editEducationButton = document.getElementById("editEducationButton");
    const editEducationModal = document.getElementById("EducationModal");
    editEducationButton.addEventListener("click", () => {
        editEducationModal.style.display = "block";
    });
    const closeEducationBtn = document.getElementById("closeEducationModalBtn");
    closeEducationBtn.addEventListener("click", () => {
        editEducationModal.style.display = "none";
    });
    window.addEventListener("click", (event) => {
        if (event.target === editEducationModal) {
            editEducationModal.style.display = "none";
        }
    });

    // Code for handling the Bio modal
    const editBioButton = document.getElementById("editBioButton");
    const bioModal = document.getElementById("BioModal");
    editBioButton.addEventListener("click", () => {
        bioModal.style.display = "block";
    });
    const closeBioBtn = document.getElementById("closeBioModalBtn");
    closeBioBtn.addEventListener("click", () => {
        bioModal.style.display = "none";
    });
    window.addEventListener("click", (event) => {
        if (event.target === bioModal) {
            bioModal.style.display = "none";
        }
    });

    // Code for handling the Social Media modal
    const addSocialButton = document.getElementById("editSocialButton");
    const socialModal = document.getElementById("SocialModal");
    addSocialButton.addEventListener("click", () => {
        socialModal.style.display = "block";
    });
    const closeSocialBtn = document.getElementById("closeSocialModalBtn");
    closeSocialBtn.addEventListener("click", () => {
        socialModal.style.display = "none";
    });
    window.addEventListener("click", (event) => {
        if (event.target === socialModal) {
            socialModal.style.display = "none";
        }
    });
});

//login.blade.php
document.addEventListener("DOMContentLoaded", function () {
    // Code for handling the OTP modal
    const openOtpModalBtn = document.getElementById("openOtpModalBtn");
    const otpModal = document.getElementById("OtpModal");

    openOtpModalBtn.addEventListener("click", () => {
        otpModal.style.display = "block";
    });

    const closeOtpModalBtn = document.getElementById("cancelOTPBtn");
    closeOtpModalBtn.addEventListener("click", () => {
        otpModal.style.display = "none";
    });

    window.addEventListener("click", (event) => {
        if (event.target === otpModal) {
            otpModal.style.display = "none";
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // Code for handling the Forgot Password modal
    const openForgotPasswordModalBtn = document.getElementById(
        "openForgotPasswordModalBtn"
    );
    const forgotPasswordModal = document.getElementById("ForgotPasswordModal");

    openForgotPasswordModalBtn.addEventListener("click", () => {
        forgotPasswordModal.style.display = "block";
    });

    const closeForgotPasswordModalBtn = document.getElementById(
        "cancelForgotPasswordBtn"
    );
    closeForgotPasswordModalBtn.addEventListener("click", () => {
        forgotPasswordModal.style.display = "none";
    });

    window.addEventListener("click", (event) => {
        if (event.target === forgotPasswordModal) {
            forgotPasswordModal.style.display = "none";
        }
    });
});

//Registration page dob checking
document.addEventListener("DOMContentLoaded", function () {
    // Get the date of birth input element
    const dobInput = document.getElementById("dob");
    const dobError = document.getElementById("dobError");

    // Listen for form submission
    document
        .querySelector(".registerForm")
        .addEventListener("submit", function (event) {
            // Reset the error message
            dobError.textContent = "";

            // Get the entered date of birth
            const dobValue = new Date(dobInput.value);

            // Calculate the user's age
            const currentDate = new Date();
            const age = currentDate.getFullYear() - dobValue.getFullYear();

            // Check if the age is less than 12
            if (age < 12) {
                dobError.textContent =
                    "You must be at least 12 years old to the register.";
                event.preventDefault(); // Prevent form submission
            }
        });
});
