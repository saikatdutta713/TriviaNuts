@extends('layouts.admin')

@section('admin__content')
<div class="main__content">
    <div class="table__container">
        <div class="table__header">
            <div class="table__title">
                <h2>Quiz Management</h2>
            </div>
            <div class="table__buttons">
                <button class="add_new" id="openAddNewModalBtn"><i class="fa-solid fa-circle-plus"></i> Add New
                    Quiz</button>
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
                    <th>Quiz Id</th>
                    <th>Category</th>
                    <th>Tittle</th>
                    <th>Status</th>
                    <th>Question Ids</th>
                    <th>Schedule Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <div class="avatar-container">
                            <p class="avatar-name">#052aa</p>
                        </div>
                    </td>
                    <td>Mathematics</td>
                    <td>Set Theory, Probability</td>
                    <td>Complete</td>
                    <td>Q39.Q29,Q35,
                        Q40,Q53,Q15,
                        Q21,Q19,Q69,Q90</td>
                    <td>01/11/2023</td>
                    <td>
                        <span>
                            <button title="Edit" class="editButton" data-id="1"><i class="fa fa-pen"></i></button>
                            <button title="Delete"><i class="fa fa-trash"></i></button>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        <div class="avatar-container">
                            <p class="avatar-name">#052ab</p>
                        </div>
                    </td>
                    <td>Computer</td>
                    <td>DSA & Algorithm</td>
                    <td>Draft</td>
                    <td>Q39.Q29,Q35,
                        Q40,Q53,Q15</td>
                    <td>04/11/2023</td>
                    <td>
                        <span>
                            <button title="Edit" class="editButton" data-id="2"><i class="fa fa-pen"></i></button>
                            <button title="Delete"><i class="fa fa-trash"></i></button>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        <div class="avatar-container">
                            <p class="avatar-name">#051ab</p>
                        </div>
                    </td>
                    <td>Computer</td>
                    <td>DSA & Algorithm, OS</td>
                    <td>Published</td>
                    <td>Q39.Q29,Q35,
                        Q40,Q53,Q15,
                        Q21,Q19,Q69,Q90</td>
                    <td>04/9/2023</td>
                    <td>
                        <span>
                            {{-- <button title="Edit" class="editButton" data-id="2"><i class="fa fa-pen"></i></button> --}}
                            <button title="Delete"><i class="fa fa-trash"></i></button>
                        </span>
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
            <h2>Add New Quiz</h2>
        </div>
        <div class="modal-body">
            <form class="register">

                <div class="form-row">
                    <div class="form-column">
                        <label for="category">Category:</label>
                        <select id="category" name="category">
                            <option value="mathematics">Mathematics</option>
                            <option value="computer">Computer</option>
                            <option value="aptitude">Aptitude</option>
                            <option value="current_affair">Current Affair</option>
                        </select>
                    </div>
                    <div class="form-column">
                        <label for="status">Status:</label>
                        <select id="status" name="status">
                            <option value="complete">Complete</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div>
                </div>

                <label for="tittle-register">Tittle:</label>
                <input type="text" id="tittle-register">


                <label for="questionIds-register">Question Ids:</label>
                <input type="text" id="questionIds-register">

                <label for="publishing-date">Schedule Date:</label>
                <input type="date" id="publishing-date" name="publishing_date">
                
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
            <h2>Update Quiz</h2>
        </div>
        <div class="modal-body">
            <label for="questionIds-register">Question Ids:</label>
            <input type="text" id="questionIds-register">

            <label for="publishing-date">Schedule Date:</label>
            <input type="date" id="publishing-date" name="publishing_date">

            <label for="userStatus">Status:</label>
            <select id="status" name="status">
                <option value="complete">Complete</option>
                <option value="draft">Draft</option>
            </select>
        </div>
        <div class="modal-footer">
            <button id="submitEditModalBtn">Update</button>
            <button id="closeEditModalBtn">Cancel</button>
        </div>
    </div>
</div>
@endsection