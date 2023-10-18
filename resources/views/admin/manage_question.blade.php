@extends('layouts.admin')

@section('admin__pageHeading')
    <p>Question Management</p>
@endsection
@section('admin__content')
<div class="main__content">
    <div class="table__container">
        <div class="table__header">
            {{-- <div class="table__title">
                <h2>Question Management</h2>
            </div> --}}
            
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
                    Entries
                </label>
            </div>
            <div id="tables_filter" class="tables__filter">
                <label>
                    Search:
                    <input type="search" class="table__search" aria-controls="datatables">
                </label>
            </div>
            <div class="table__buttons">
                <button class="add_new" id="openAddNewModalBtn"><i class="fa-solid fa-circle-plus"></i> Add New
                    Question</button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Question Id</th>
                    <th>Category</th>
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Other 3 options</th>
                    <th>Quiz Id</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <div class="avatar-container">
                            <p class="avatar-name">#M052</p>
                        </div>
                    </td>
                    <td>Mathematics</td>
                    <td>What is the solution to the equation 2x + 3 = 11?</td>
                    <td> x = 4</td>
                    <td>x = 5, x = 6, x = 7</td>
                    <td>#052ab</td>
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
                            <p class="avatar-name">#C0123</p>
                        </div>
                    </td>
                    <td>Computer</td>
                    <td> In computer science, what does the acronym "CPU" stand for?</td>
                    <td>Central Processing Unit</td>
                    <td> Computer Peripheral Unit, Control Program Utility, Central Power Unit</td>
                    <td>-</td>
                    <td>
                        <span>
                            <button title="Edit" class="editButton" data-id="2"><i class="fa fa-pen"></i></button>
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
@isset ($add)
<div id="addNewModal" class="addNew__modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <h2>Add New Question</h2>
        </div>
        <div class="modal-body">
            <form class="register">

                <div class="form-column">
                <label for="category" class="category-label">Category:</label>
                <select id="category1" name="category" class="category-select">
                    <option value="mathematics">Mathematics</option>
                    <option value="computer">Computer</option>
                    <option value="aptitude">Aptitude</option>
                    <option value="current_affair">Current Affair</option>
                </select>
                {{-- <span class="invalid-feedback" id="dobError">Hello</span> --}}
                @error('terms')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-column">
                <label for="question">Question:</label>
                <textarea id="question" name="question" rows="4" cols="50"></textarea>
                {{-- <span class="invalid-feedback" id="dobError">Hello</span> --}}
                @error('terms')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-column">
                <label for="answer">Correct Answer:</label>
                <input type="text" id="answer" name="answer">
                {{-- <span class="invalid-feedback" id="dobError">Hello</span> --}}
                @error('terms')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-column">
                <label for="other-answer-1">Other Answer 1:</label>
                <input type="text" id="other-answer-1" name="other_answer_1">
                {{-- <span class="invalid-feedback" id="dobError">Hello</span> --}}
                @error('terms')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-column">
                <label for="other-answer-2">Other Answer 2:</label>
                <input type="text" id="other-answer-2" name="other_answer_2">
                {{-- <span class="invalid-feedback" id="dobError">Hello</span> --}}
                @error('terms')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-column">
                <label for="other-answer-3">Other Answer 3:</label>
                <input type="text" id="other-answer-3" name="other_answer_3">
                {{-- <span class="invalid-feedback" id="dobError">Hello</span> --}}
                @error('terms')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                </div>

            </form>
        </div>
        <div class="modal-footer">
            <button id="submitAddNewModalBtn">Add Question</button>
            <button id="closeAddNewModalBtn">Cancel</button>
        </div>
    </div>
</div>
@endisset

<!-- The Edit Modal -->
@isset ($edit)
<div id="editModal" class="edit__modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Update Question</h2>
        </div>
        <div class="modal-body">
            <form action="" class="update">
                <label for="question">Question:</label>
                <textarea id="question" name="question" rows="4" cols="50"></textarea>

                <label for="answer">Correct Answer:</label>
                <input type="text" id="answer" name="answer">

                <label for="other-answer-1">Other Answer 1:</label>
                <input type="text" id="other-answer-1" name="other_answer_1">

                <label for="other-answer-2">Other Answer 2:</label>
                <input type="text" id="other-answer-2" name="other_answer_2">

                <label for="other-answer-3">Other Answer 3:</label>
                <input type="text" id="other-answer-3" name="other_answer_3">
            </form>
        </div>
        <div class="modal-footer">
            <button id="submitEditModalBtn">Update</button>
            <button id="closeEditModalBtn">Cancel</button>
        </div>
    </div>
</div>
@endisset
@endsection