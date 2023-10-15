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
                    <select name="table__length" id="user__table__length" class="table__length__selector">
                        <option value="5">5</option>
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
                    <input type="search" id="user__data__search" class="table__search" aria-controls="datatables">
                </label>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>DP</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Last Login Location</th>
                    <th>Last Login Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="user_management_table"></tbody>
        </table>
        <div class="clearfix">
            <div class="hint-text" id="user__hint__text">Showing <b>5</b> out of <b>25</b> entries</div>
            <ul class="pagination" id="user__table__pagination"></ul>
        </div>
    </div>
</div>

<!-- The Add New Modal -->
@isset ($add)
<div id="addNewModal" class="addNew__modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <h2>Add New User</h2>
        </div>
        <div class="modal-body">
            <form class="register" action="{{ route('admin.user.add') }}" method="POST">
                @csrf
                <label for="name-register">Full Name:</label>
                <input type="text" id="name-register" name="name">
                <label for="email-register">Email:</label>
                <input type="text" id="email-register" name="email">
                <label for="gender-register">Gender:</label>
                <input type="text" id="gender-register" name="gender">
                <label for="dob-register">Date Of Birth:</label>
                <input type="date" id="dob-register" name="dob">
                <label for="dob-register">Country:</label>
                <input type="text" id="country-register" name="country">
                <label for="password-register">Password:</label>
                <input type="password" id="password-register" name="password">
                <label for="password-confirmation">Confirm Password:</label>
                <input type="password-confirmation" id="password-confirmation" name="confirm_password">
                <p class="check-mark">
                    <input type="checkbox" id="accept-terms" name="terms">
                    <label for="accept-terms">I agree to the <a href="#">Terms</a></label>
                </p>
            </form>
        </div>
        <div class="modal-footer">
            <button id="submitAddNewModalBtn" type="submit">Add User</button>
            <button id="closeAddNewModalBtn">Cancel</button>
        </div>
    </div>
</div>
@endisset

<!-- The Edit Modal -->
@isset ($edit)
<div id="editModal" class="edit__modal">
    <form action="" method="post">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Update User</h2>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.user.edit',['id'=>1]) }}" method="POST" class="update">
                    @csrf
                    <label for="userRole">User Role:</label>
                    <select id="userRole" name="role">
                        @if (auth()->user()->isSuperAdmin())
                        <option value=1 @if ($editUser->role==1) selected @endif>Super Admin</option>
                        @endif
                        @if (auth()->user()->isSuperAdmin())
                        <option value=2 @if ($editUser->role==2) selected @endif>Admin</option>
                        @endif
                        @if (auth()->user()->isSuperAdmin() || auth()->user()->isAdmin())
                        <option value=3 @if ($editUser->role==3) selected @endif>Editor</option>
                        @endif
                        <option value=0 @if ($editUser->role==0) selected @endif>User</option>
                    </select>

                    <label for="userStatus">Status:</label>
                    <select id="userStatus" name="status">
                        <option value="1" @if ($editUser->active==1) selected @endif>Active</option>
                        <option value="0" @if ($editUser->active==0) selected @endif>Deactive</option>
                    </select>
                </form>
            </div>
            <div class="modal-footer">
                <button id="submitEditModalBtn" type="submit">Update</button>
                <button id="closeEditModalBtn">Cancel</button>
            </div>
        </div>
    </form>
</div>
@endisset
<script src="{{ asset('js/adminTables.js') }}"></script>
<script>
    let user_management_table = document.getElementById("user_management_table");

</script>
@endsection