// This is for able to see chart. We are using Apex Chart. U can check the documentation of Apex Charts too..
var options = {
    series: [
        {
            name: "Net Profit",
            data: [44, 55, 57, 56, 61, 58, 63, 60, 66],
        },
        {
            name: "Revenue",
            data: [76, 85, 101, 98, 87, 105, 91, 114, 94],
        },
        {
            name: "Free Cash Flow",
            data: [35, 41, 36, 26, 45, 48, 52, 53, 41],
        },
    ],
    chart: {
        type: "bar",
        height: 250, // make this 250
        sparkline: {
            enabled: true, // make this true
        },
    },
    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: "55%",
            endingShape: "rounded",
        },
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        show: true,
        width: 2,
        colors: ["transparent"],
    },
    xaxis: {
        categories: [
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
        ],
    },
    yaxis: {
        title: {
            text: "$ (thousands)",
        },
    },
    fill: {
        opacity: 1,
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return "$ " + val + " thousands";
            },
        },
    },
};

var chart = new ApexCharts(document.querySelector("#apex1"), options);
chart.render();

// Sidebar Toggle Codes;

var sidebarOpen = false;
var sidebar = document.getElementById("sidebar");
var sidebarCloseIcon = document.getElementById("sidebarIcon");

function toggleSidebar() {
    if (!sidebarOpen) {
        sidebar.classList.add("sidebar_responsive");
        sidebarOpen = true;
    }
}

function closeSidebar() {
    if (sidebarOpen) {
        sidebar.classList.remove("sidebar_responsive");
        sidebarOpen = false;
    }
}

// Add New Modal
var addNewModal = document.getElementById("addNewModal");
var openAddNewModalBtn = document.getElementById("openAddNewModalBtn");
var closeAddNewModalBtn = document.getElementById("closeAddNewModalBtn");

// When the user clicks the button, open the modal
openAddNewModalBtn.onclick = function () {
    addNewModal.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
closeAddNewModalBtn.onclick = function () {
    addNewModal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == addNewModal) {
        addNewModal.style.display = "none";
    }
};

// Edit Modal
const openModalBtn = document.querySelectorAll(".editButton");
const closeEditModalBtn = document.getElementById("closeEditModalBtn");
const editModal = document.getElementById("editModal");

// openModalBtn.addEventListener("click", () => {
//     editModal.style.display = "block";
// });

openModalBtn.forEach((button) => {
    button.addEventListener("click", () => {
        editModal.style.display = "block";
    });
});

closeEditModalBtn.addEventListener("click", () => {
    editModal.style.display = "none";
});

window.addEventListener("click", (event) => {
    if (event.target === editModal) {
        editModal.style.display = "none";
    }
});

// Get references to the form and the submit button question page
var form = document.querySelector(".register");
var submitButton = document.getElementById("submitAddNewModalBtn");

// Add a click event listener to the submit button
submitButton.addEventListener("click", function (event) {
    event.preventDefault(); // Prevent the default form submission
    form.submit(); // Submit the form
});
var formUpdate = document.querySelector(".update");
var submitButtonUpdate = document.getElementById("submitEditModalBtn");

// Add a click event listener to the submit button
submitButtonUpdate.addEventListener("click", function (event) {
    event.preventDefault(); // Prevent the default form submission
    formUpdate.submit(); // Submit the form
});

// JavaScript function to toggle the upload functionality
function toggleUpload() {
    const uploadButton = document.getElementById("uploadButton");
    const logoInput = document.getElementById("logoInput");
    const submitButton = document.getElementById("submitButton");
    const cancelButton = document.getElementById("cancelButton");

    if (logoInput.style.display === "none") {
        logoInput.style.display = "block";
        submitButton.style.display = "block";
        cancelButton.style.display = "block";
        uploadButton.textContent = "Submit";
    } else {
        logoInput.style.display = "none";
        submitButton.style.display = "none";
        cancelButton.style.display = "none";
        uploadButton.textContent = "Upload Logo";
    }
}

// JavaScript function to cancel the upload
function cancelUpload() {
    const uploadButton = document.getElementById("uploadButton");
    const logoInput = document.getElementById("logoInput");
    const submitButton = document.getElementById("submitButton");
    const cancelButton = document.getElementById("cancelButton");

    logoInput.value = ""; // Clear the selected file
    logoInput.style.display = "none";
    submitButton.style.display = "none";
    cancelButton.style.display = "none";
    uploadButton.textContent = "Upload Logo";
}

// Attach event listeners to relevant elements
document.addEventListener("DOMContentLoaded", function () {
    // Example event listener for the "uploadButton"
    const uploadButton = document.getElementById("uploadButton");
    uploadButton.addEventListener("click", toggleUpload);
});

document.addEventListener("DOMContentLoaded", function () {
    // Get the button and description div by their IDs
    var updateButton = document.getElementById("updateButton");
    var descriptionDiv = document.getElementById("descriptionDiv");

    // Add a click event listener to the button
    updateButton.addEventListener("click", function () {
        var newDescription = prompt("Enter the new description:");
        if (newDescription !== null) {
            descriptionDiv.innerHTML = newDescription;
        }
    });
});
