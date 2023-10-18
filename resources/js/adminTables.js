// User Management
const loadUsers = async (
    tableLength = 5,
    query = undefined,
    url = `/api/get/users/${tableLength}`
) => {
    try {
        let user_management_table = document.getElementById(
            "user_management_table"
        );
        user_management_table.innerHTML = "";
        if (query) {
            url = `/api/get/users/${tableLength}/${query}`;
        }
        const response = await fetch(url);
        const data = await response.json();
        let users = data.data;
        users.forEach((user) => {
            const row = document.createElement("tr");
            row.innerHTML = `<tr>
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
                    <td>${user.role}</td>
                    <td>${user.active ? "Active" : "Inactive"}</td>
                    <td>${user.last_login_location}</td>
                    <td>${user.last_login}</td>
                    <td>
                        <span>
                            <a title="Edit" class="editButton"
                                href="/admin/user/edit/${user.user_id}"><i
                                    class="fa fa-pen"></i></a>
                            <a title="Delete" href="/admin/user/edit/${
                                user.user_id
                            }"><i
                                    class="fa fa-trash"></i></a>
                        </span>
                    </td>
                </tr>`;
            user_management_table.appendChild(row);
        });

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

// Handle table length
let user__table__length = document.getElementById("user__table__length");
user__table__length.addEventListener("change", (ev) => {
    loadUsers(user__table__length.value);
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
