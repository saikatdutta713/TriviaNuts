import "./bootstrap.js";

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
