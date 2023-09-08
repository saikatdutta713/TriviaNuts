/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/admin.js ***!
  \*******************************/
__webpack_require__.r(__webpack_exports__);
// This is for able to see chart. We are using Apex Chart. U can check the documentation of Apex Charts too..
var options = {
  series: [{
    name: "Net Profit",
    data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
  }, {
    name: "Revenue",
    data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
  }, {
    name: "Free Cash Flow",
    data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
  }],
  chart: {
    type: "bar",
    height: 250,
    // make this 250
    sparkline: {
      enabled: true // make this true
    }
  },

  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: "55%",
      endingShape: "rounded"
    }
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    show: true,
    width: 2,
    colors: ["transparent"]
  },
  xaxis: {
    categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"]
  },
  yaxis: {
    title: {
      text: "$ (thousands)"
    }
  },
  fill: {
    opacity: 1
  },
  tooltip: {
    y: {
      formatter: function formatter(val) {
        return "$ " + val + " thousands";
      }
    }
  }
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
var openModalBtn = document.querySelectorAll(".editButton");
var closeEditModalBtn = document.getElementById("closeEditModalBtn");
var editModal = document.getElementById("editModal");

// openModalBtn.addEventListener("click", () => {
//     editModal.style.display = "block";
// });

openModalBtn.forEach(function (button) {
  button.addEventListener("click", function () {
    editModal.style.display = "block";
  });
});
closeEditModalBtn.addEventListener("click", function () {
  editModal.style.display = "none";
});
window.addEventListener("click", function (event) {
  if (event.target === editModal) {
    editModal.style.display = "none";
  }
});
/******/ })()
;