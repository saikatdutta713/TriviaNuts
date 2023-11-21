// resources/js/quiz.js

// Function to check and hide/show the "nextButton" based on the content of "quizQuestionNo"
// function checkAndHideNextDiv() {
//     const firstDiv = document.getElementById("quizQuestionNo");
//     const previousDiv = document.getElementById("previousButton");
//     if (parseInt(firstDiv.textContent) === 1) {
//         previousDiv.style.display = "none";
//     }
// }

// Function to change the background color of clicked element and remove "selected" class from other elements
function changeBackgroundColor(clickedDiv) {
    const childDivs = document.querySelectorAll(".options");
    childDivs.forEach((div) => div.classList.remove("selected"));
    clickedDiv.classList.add("selected");

    const optionValue = clickedDiv.dataset.option;
    const quiz = clickedDiv.dataset.quiz;
    const question = clickedDiv.dataset.question;
    console.log(optionValue, quiz, question);

    fetch("/quiz/" + quiz + "/play/" + question + "/answer/" + optionValue)
        .then((response) => response.json())
        .then((data) => {
            console.log("Success: ", data);
        })
        .catch((error) => {
            console.error("Error:", error);
        });
}

// Event listener for DOMContentLoaded to initialize the functionality
document.addEventListener("DOMContentLoaded", function () {
    // checkAndHideNextDiv();

    // Add click event listeners to elements with class "options"
    const childDivs = document.querySelectorAll(".options");
    childDivs.forEach(function (div) {
        div.addEventListener("click", function () {
            changeBackgroundColor(this);
        });
    });
});
