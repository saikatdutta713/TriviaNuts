@extends('layouts.admin')

@section('admin__content')
<div class="main__content">
    <div class="table__container">
        <div class="table__header">
            <div class="table__title">
                <h2>Quiz Management</h2>
            </div>
            <div class="table__buttons">
                <button class="add_new" id="openModalBtn"><i class="fa-solid fa-circle-plus"></i> Add New User</button>
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
                    <input type="search" class="table__search" placeholder="" aria-controls="basic-datatables">
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
                        <a href="#" title="Edit"><i class="fa fa-pen"></i></a>
                        <a href="#" title="Delete"><i class="fa fa-trash"></i></a>
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
                        <a href="#" title="Edit"><i class="fa fa-pen"></i></a>
                        <a href="#" title="Delete"><i class="fa fa-trash"></i></a>
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
<!-- The Modal -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <h2 class="modal-title">User Registration</h2>
        <span class="close">&times;</span>
        <form>
            @csrf
            <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
            </div>

            <!-- Modal Footer with Submit and Cancel Buttons -->
            <div class="modal-footer">
                <button type="submit" class="btn-submit">Submit</button>
                <button type="button" class="btn-cancel">Cancel</button>
            </div>
        </form>
    </div>
</div>
<script>
    // Get the modal element
        var modal = document.getElementById("myModal");
        
        // Get the button that opens the modal
        var btn = document.getElementById("openModalBtn");
        
        // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
        
            // When the user clicks the button, open the modal
            btn.onclick = function() {
            modal.style.display = "block";
            }
        
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }
        
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                modal.style.display = "none";
                }
                }
</script>
@endsection