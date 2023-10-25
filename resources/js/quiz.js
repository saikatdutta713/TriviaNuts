// resources/js/quiz.js

// Function to check and hide/show the "nextButton" based on the content of "quizQuestionNo"
function checkAndHideNextDiv() {
    const firstDiv = document.getElementById("quizQuestionNo");
    const nextDiv = document.getElementById("nextButton");
    const previousDiv = document.getElementById("previousButton");

    if (parseInt(firstDiv.textContent) >= 10) {
        nextDiv.textContent = "Submit";
        nextDiv.style.backgroundColor = "green";
    }

    if (parseInt(firstDiv.textContent) === 1) {
        previousDiv.style.display = "none";
    } else {
        previousDiv.style.display = "block";
    }
}

// Function to change the background color of clicked element and remove "selected" class from other elements
function changeBackgroundColor(clickedDiv) {
    const childDivs = document.querySelectorAll(".options");
    childDivs.forEach((div) => div.classList.remove("selected"));
    clickedDiv.classList.add("selected");
}

// Reverse timer for 1 min
function initReverseTimer() {
    let seconds = 0;
    let minutes = 1;

    const timerDisplay = document.getElementById("reverse-timer");

    function updateTimer() {
        if (minutes === 0 && seconds === 0) {
            clearInterval(timerInterval);
            timerDisplay.innerText = "0:00";
            // You can add your custom action here when the timer reaches 0:00.
        } else {
            if (seconds === 0) {
                seconds = 59;
                minutes--;
            } else {
                seconds--;
            }

            const timeString = `${minutes.toString().padStart(2, "0")}:${seconds
                .toString()
                .padStart(2, "0")}`;
            timerDisplay.innerText = timeString;
        }
    }

    const timerInterval = setInterval(updateTimer, 1000); // Update the timer every second
}

// Timer for 10 min
function initTimer() {
    let seconds = 0;
    let minutes = 0;
    const timerDisplay = document.getElementById("timer");

    function updateTimer() {
        if (minutes === 10 && seconds === 0) {
            clearInterval(timerInterval);
            // You can add your custom action here when the timer reaches 10:00.
        } else {
            if (seconds === 59) {
                seconds = 0;
                minutes++;
            } else {
                seconds++;
            }

            const timeString = `${minutes.toString().padStart(2, "0")}:${seconds
                .toString()
                .padStart(2, "0")}`;
            timerDisplay.innerText = timeString;
        }
    }

    const timerInterval = setInterval(updateTimer, 1000); // Update the timer every second
}

// Event listener for DOMContentLoaded to initialize the functionality
document.addEventListener("DOMContentLoaded", function () {
    checkAndHideNextDiv();

    // Add click event listeners to elements with class "options"
    const childDivs = document.querySelectorAll(".options");
    childDivs.forEach(function (div) {
        div.addEventListener("click", function () {
            changeBackgroundColor(this);
        });
    });
    // Initialize the reverse timer
    initReverseTimer();

    // Initialize the timer
    initTimer();
});
