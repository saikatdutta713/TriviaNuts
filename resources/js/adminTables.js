// User Management
let user_management_table = document.getElementById("user_management_table");
if (user_management_table) {
    const loadUsers = async (
        tableLength = 5,
        query = undefined,
        url = `/api/get/users/${tableLength}`
    ) => {
        try {
            user_management_table.innerHTML = "";
            if (query) {
                url = `/api/get/users/${tableLength}/${query}`;
            }
            const response = await fetch(url);
            const data = await response.json();
            if (data.total > 0) {
                let users = data.data;
                users.forEach((user) => {
                    const row = document.createElement("tr");
                    row.innerHTML = `
                        <td>${user.user_id}</td>
                        <td>
                        <div class="avatar-container">
                        <img src="${
                            window.location.origin + "/images/avatar.png"
                        }" alt="" />
                        </div>
                        </td>
                        <td>${user.name}</td>
                        <td>${user.email}</td>
                        <td>${user.role_name}</td>
                        <td>${user.active ? "Active" : "Inactive"}</td>
                        <td>${user.last_login_location}</td>
                        <td>${user.last_login}</td>
                        <td>
                            <span>
                                <a title="Edit" class="editButton"
                                    href="/admin/user/edit/${user.user_id}">
                                    <i class="fa fa-pen"></i>
                                </a>
                                    <a title="Delete" href="/admin/user/delete/attempt/${
                                        user.user_id
                                    }">
                                        <i class="fa fa-trash"></i>
                                    </a>
                            </span>
                        </td>
                    `;
                    user_management_table.appendChild(row);
                });
            } else {
                const row = document.createElement("tr");
                row.innerHTML = `<td colspan="9" style="text-align: center;">No records found</td>`;
                user_management_table.appendChild(row);
            }

            // Hint Text
            let hint__text = document.getElementById("user__hint__text");
            hint__text.childNodes[1].innerHTML = tableLength;
            hint__text.childNodes[3].innerHTML = data.total;

            // pagination
            let user__table__pagination = document.getElementById(
                "user__table__pagination"
            );
            user__table__pagination.innerHTML = "";
            let pageLinks = data.links;
            pageLinks.forEach((link) => {
                const li = document.createElement("li");
                li.innerHTML = `<span>${link.label}</span>`;
                li.classList.add("page__link");
                link.active ? li.classList.add("active") : null;
                user__table__pagination.appendChild(li);

                // Load users on click pagination link
                li.addEventListener("click", (ev) => {
                    loadUsers(user__table__length.value, undefined, link.url);
                });
            });

            user__table__pagination.childNodes[0].childNodes[0].classList.add(
                "prev"
            );
            let length = user__table__pagination.childNodes.length;
            user__table__pagination.childNodes[
                length - 1
            ].childNodes[0].classList.add("next");

            data.prev_page_url === null
                ? (user__table__pagination.childNodes[0].style.display = "none")
                : null;
            data.next_page_url === null
                ? (document.querySelector(".next").style.display = "none")
                : null;
        } catch (error) {
            console.error("Error:", error);
        }
    };

    // load users on page load
    document.addEventListener("DOMContentLoaded", () => {
        loadUsers();
    });

    // Handle user table length
    let user__table__length = document.getElementById("user__table__length");
    user__table__length.addEventListener("change", (ev) => {
        loadUsers(user__table__length.value, userDataSearchForm.value);
    });

    // User data search
    let userDataSearchForm = document.getElementById("user__data__search");
    let apiCallTimer;
    const apiCallDelay = 1000;
    userDataSearchForm.addEventListener("keyup", (ev) => {
        ev.preventDefault();

        clearTimeout(apiCallTimer);

        const searchQuery = userDataSearchForm.value;

        apiCallTimer = setTimeout(() => {
            loadUsers(user__table__length.value, searchQuery);
        }, apiCallDelay);
    });
}

// Question Management
let question_management_table = document.getElementById(
    "question_management_table"
);
if (question_management_table) {
    const loadQuestions = async (
        tableLength = 5,
        query = undefined,
        url = `/api/get/questions/${tableLength}`
    ) => {
        try {
            question_management_table.innerHTML = "";
            if (query) {
                url = `/api/get/questions/${tableLength}/${query}`;
            }
            const response = await fetch(url);
            const data = await response.json();
            if (data.total > 0) {
                let questions = data.data;
                questions.forEach((question, index) => {
                    const row = document.createElement("tr");
                    row.innerHTML = `
                    <td>${index + 1}</td>
                    <td>${question.question_id}</td>
                    <td>${question.category_title}</td>
                    <td>${question.question_text}</td>
                    <td>${question.answer_option_a} ${question.answer_option_b} 
                    ${question.answer_option_c} ${question.answer_option_a}</td>
                    <td>${question.correct_option}</td>
                    <td>${question.correct_option}</td>
                    <td>
                        <span>
                            <a title="Edit" class="editButton"
                                href="/admin/question/edit/${
                                    question.question_id
                                }"><i class="fa fa-pen"></i>
                            </a>
                            <a title="Delete" href="/admin/question/delete/attempt/
                            ${question.question_id}">
                                <i class="fa fa-trash"></i>
                            </a>
                        </span>
                    </td>
                `;
                    question_management_table.appendChild(row);
                });
            } else {
                const row = document.createElement("tr");
                row.innerHTML = `<td colspan="8" style="text-align: center;">No records found</td>`;
                question_management_table.appendChild(row);
            }

            // Hint Text
            let hint__text = document.getElementById("question__hint__text");
            hint__text.childNodes[1].innerHTML = tableLength;
            hint__text.childNodes[3].innerHTML = data.total;

            // pagination
            let question__table__pagination = document.getElementById(
                "question__table__pagination"
            );
            question__table__pagination.innerHTML = "";
            let pageLinks = data.links;
            pageLinks.forEach((link) => {
                const li = document.createElement("li");
                li.innerHTML = `<span>${link.label}</span>`;
                li.classList.add("page__link");
                link.active ? li.classList.add("active") : null;
                question__table__pagination.appendChild(li);

                // Load questions on click pagination link
                li.addEventListener("click", (ev) => {
                    loadQuestions(
                        question__table__length.value,
                        undefined,
                        link.url
                    );
                });
            });

            question__table__pagination.childNodes[0].childNodes[0].classList.add(
                "prev"
            );
            let length = question__table__pagination.childNodes.length;
            question__table__pagination.childNodes[
                length - 1
            ].childNodes[0].classList.add("next");

            data.prev_page_url === null
                ? (question__table__pagination.childNodes[0].style.display =
                      "none")
                : null;
            data.next_page_url === null
                ? (document.querySelector(".next").style.display = "none")
                : null;
        } catch (error) {
            console.error("Error:", error);
        }
    };
    // load questions on page load
    document.addEventListener("DOMContentLoaded", () => {
        loadQuestions();
    });

    // Handle question table length
    let question__table__length = document.getElementById(
        "question__table__length"
    );
    question__table__length.addEventListener("change", (ev) => {
        loadQuestions(
            question__table__length.value,
            questionDataSearchForm.value
        );
    });

    // Question data search
    let questionDataSearchForm = document.getElementById(
        "question__data__search"
    );
    let apiCallTimer;
    const apiCallDelay = 1000;
    questionDataSearchForm.addEventListener("keyup", (ev) => {
        ev.preventDefault();

        clearTimeout(apiCallTimer);

        const searchQuery = questionDataSearchForm.value;

        apiCallTimer = setTimeout(() => {
            loadQuestions(question__table__length.value, searchQuery);
        }, apiCallDelay);
    });
}

// quiz Management
let quiz_management_table = document.getElementById("quiz_management_table");
if (quiz_management_table) {
    const loadquizzes = async (
        tableLength = 5,
        query = undefined,
        url = `/api/get/quizzes/${tableLength}`
    ) => {
        try {
            quiz_management_table.innerHTML = "";
            if (query) {
                url = `/api/get/quizzes/${tableLength}/${query}`;
            }
            const response = await fetch(url);
            const data = await response.json();
            if (data.total > 0) {
                let quizzes = data.data;
                quizzes.forEach((quiz, index) => {
                    const row = document.createElement("tr");
                    row.innerHTML = `
                    <td>${index + 1}</td>
                    <td>${quiz.quiz_id}</td>
                    <td>${quiz.category_title}</td>
                    <td>${quiz.title}</td>
                    <td>${quiz.status}</td>
                    <td>${quiz.questions}</td>
                    <td>${quiz.time}</td>
                    <td>
                        <span>
                            <a title="Edit" class="editButton"
                                href="/admin/quiz/edit/${
                                    quiz.quiz_id
                                }"><i class="fa fa-pen"></i>
                            </a>
                            <a title="Delete" href="/admin/quiz/delete/attempt/${
                                quiz.quiz_id
                            }">
                                <i class="fa fa-trash"></i>
                            </a>
                        </span>
                    </td>
                `;
                    quiz_management_table.appendChild(row);
                });
            } else {
                const row = document.createElement("tr");
                row.innerHTML = `<td colspan="8" style="text-align: center;">No records found</td>`;
                quiz_management_table.appendChild(row);
            }

            // Hint Text
            let hint__text = document.getElementById("quiz__hint__text");
            hint__text.childNodes[1].innerHTML = tableLength;
            hint__text.childNodes[3].innerHTML = data.total;

            // pagination
            let quiz__table__pagination = document.getElementById(
                "quiz__table__pagination"
            );
            quiz__table__pagination.innerHTML = "";
            let pageLinks = data.links;
            pageLinks.forEach((link) => {
                const li = document.createElement("li");
                li.innerHTML = `<span>${link.label}</span>`;
                li.classList.add("page__link");
                link.active ? li.classList.add("active") : null;
                quiz__table__pagination.appendChild(li);

                // Load quizzes on click pagination link
                li.addEventListener("click", (ev) => {
                    loadquizzes(quiz__table__length.value, undefined, link.url);
                });
            });

            quiz__table__pagination.childNodes[0].childNodes[0].classList.add(
                "prev"
            );
            let length = quiz__table__pagination.childNodes.length;
            quiz__table__pagination.childNodes[
                length - 1
            ].childNodes[0].classList.add("next");

            data.prev_page_url === null
                ? (quiz__table__pagination.childNodes[0].style.display = "none")
                : null;
            data.next_page_url === null
                ? (document.querySelector(".next").style.display = "none")
                : null;
        } catch (error) {
            console.error("Error:", error);
        }
    };
    // load quizzes on page load
    document.addEventListener("DOMContentLoaded", () => {
        loadquizzes();
    });

    // Handle quiz table length
    let quiz__table__length = document.getElementById("quiz__table__length");
    quiz__table__length.addEventListener("change", (ev) => {
        loadquizzes(quiz__table__length.value, quizDataSearchForm.value);
    });

    // quiz data search
    let quizDataSearchForm = document.getElementById("quiz__data__search");
    let apiCallTimer;
    const apiCallDelay = 1000;
    quizDataSearchForm.addEventListener("keyup", (ev) => {
        ev.preventDefault();

        clearTimeout(apiCallTimer);

        const searchQuery = quizDataSearchForm.value;

        apiCallTimer = setTimeout(() => {
            loadquizzes(quiz__table__length.value, searchQuery);
        }, apiCallDelay);
    });
}
