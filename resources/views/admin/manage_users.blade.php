@extends('layouts.admin')

@section('admin__content')
<div class="main__content">
    <div class="table__container">
        <div class="table__header">
            <div class="table__title">
                <h2>User Management</h2>
            </div>
            <div class="table__buttons">
                <button class="add_new" id="openAddNewModalBtn"><i class="fa-solid fa-circle-plus"></i> Add New
                    User</button>
            </div>
        </div>
        <div class="table__sub__header">
            <div class="table__length" id="table__length">
                <label>
                    Show
                    <select name="table__length" class="table__length__selector">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    entries
                </label>
            </div>
            <div id="tables_filter" class="tables__filter">
                <label>
                    Search:
                    <input type="search" class="table__search" aria-controls="datatables">
                </label>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Last Login Location</th>
                    <th>Last Login Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <div class="avatar-container">
                            <img src="{{ asset('images/avatar.png') }}" alt="" />
                            <p class="avatar-name">John Doe</p>
                        </div>
                    </td>
                    <td>abd@gmail.com</td>
                    <td>Admin</td>
                    <td>Active</td>
                    <td>India</td>
                    <td>04/10/2013</td>
                    <td>
                        <button title="Edit" class="editButton" data-id="1"><i class="fa fa-pen"></i></button>
                        <button title="Delete"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        <div class="avatar-container">
                            <img src="{{ asset('images/avatar.png') }}" alt="" />
                            <p class="avatar-name">John Doe</p>
                        </div>
                    </td>
                    <td>abd@gmail.com</td>
                    <td>Admin</td>
                    <td>Active</td>
                    <td>India</td>
                    <td>04/10/2013</td>
                    <td>
                        <button title="Edit" class="editButton" data-id="2"><i class="fa fa-pen"></i></button>
                        <button title="Delete"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
                <!-- Other table rows go here -->
            </tbody>
        </table>
        <div class="clearfix">
            <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
            <ul class="pagination">
                <li class="disabled"><a href="#" style="border: none">Previous</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li class="active"><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li class="next"><a href="#" style="border: none">Next</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- The Add New Modal -->
<div id="addNewModal" class="addNew__modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <h2>Add New User</h2>
        </div>
        <div class="modal-body">
            <form class="register">
                <label for="name-register">Full Name:</label>
                <input type="text" id="name-register">
                <label for="email-register">Email:</label>
                <input type="text" id="email-register">
                <label for="gender-register">Gender:</label>
                <input type="text" id="gender-register">
                <label for="dob-register">Date Of Birth:</label>
                <input type="text" id="dob-register">
                <label for="password-register">Password:</label>
                <input type="password" id="password-register">
                <label for="password-confirmation">Confirm Password:</label>
                <input type="password-confirmation" id="password-confirmation">
                <p class="check-mark">
                    <input type="checkbox" id="accept-terms">
                    <label for="accept-terms">I agree to the <a href="#">Terms</a></label>
                </p>
            </form>
        </div>
        <div class="modal-footer">
            <button id="submitAddNewModalBtn">Add User</button>
            <button id="closeAddNewModalBtn">Cancel</button>
        </div>
    </div>
</div>

<!-- The Edit Modal -->
<div id="editModal" class="edit__modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Update User</h2>
        </div>
        <div class="modal-body">
            <label for="userRole">User Role:</label>
            <select id="userRole">
                <option value="Admin">Admin</option>
                <option value="user">User</option>
                <option value="Editor">Editor</option>
            </select>

            <label for="userStatus">Status:</label>
            <select id="userStatus">
                <option value="Active">Active</option>
                <option value="Deactive">Deactive</option>
            </select>
        </div>
        <div class="modal-footer">
            <button id="submitEditModalBtn">Update</button>
            <button id="closeEditModalBtn">Cancel</button>
        </div>
    </div>
</div>
@endsection