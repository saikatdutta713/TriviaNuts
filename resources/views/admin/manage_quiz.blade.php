@extends('layouts.admin')

@section('admin_ title')
    {{ isset($title) ? $title : env('APP_NAME')." Home Page" }}
@endsection
@section('admin__pageHeading')
<p>Quiz Management</p>
@endsection
@section('admin__content')
<div class="main__content">
    <div class="table__container">
        <div class="table__sub__header">
            <div class="table__length" id="table__length">
                <label>
                    Show
                    <select name="table__length" id="quiz__table__length" class="table__length__selector">
                        <option value="5">5</option>
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
                    <input type="search" id="quiz__data__search" class="table__search" aria-controls="datatables">
                </label>
            </div>
            <div class="table__buttons">
                <button class="add_new" id="openAddNewModalBtn">
                    <a href="{{ route('admin.quiz.add.view') }}">
                        <i class="fa-solid fa-circle-plus"></i> Add New Quiz
                    </a>
                </button>
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
            <tbody id="quiz_management_table">
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
            </tbody>
        </table>
        <div class="clearfix">
            <div class="hint-text" id="quiz__hint__text">Showing <b>5</b> out of <b>25</b> entries</div>
            <ul class="pagination" id="quiz__table__pagination"></ul>
        </div>
    </div>
</div>

<!-- The Add New Modal -->
@isset ($add)
<div id="addNewModal" class="addNew__modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <h2>Add New Quiz</h2>
        </div>
        <div class="modal-body">
            <form class="register" action="{{ route('admin.quiz.add') }}" method="POST">

                <div class="form-row">
                    <div class="form-column">
                        <label for="category">Category:</label>
                        <select id="category" name="category">
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
                        <label for="status">Status:</label>
                        <select id="status" name="status">
                            <option value="complete">Complete</option>
                            <option value="draft">Draft</option>
                        </select>
                        {{-- <span class="invalid-feedback" id="dobError">Hello</span> --}}
                        @error('terms')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-column">
                    <label for="tittle-register">Tittle:</label>
                    <input type="text" id="tittle-register">
                    {{-- <span class="invalid-feedback" id="dobError">Hello</span> --}}
                    @error('terms')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-column">
                    <label for="questionIds-register">Question Ids:</label>
                    <input type="text" id="questionIds-register">
                    {{-- <span class="invalid-feedback" id="dobError">Hello</span> --}}
                    @error('terms')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-column">
                    <label for="publishing-date">Schedule Date:</label>
                    <input type="date" id="publishing-date" name="publishing_date">
                    {{-- <span class="invalid-feedback" id="dobError">Hello</span> --}}
                    @error('terms')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button id="submitAddNewModalBtn">Add User</button>
            <button id="closeAddNewModalBtn"><a href="{{ route('admin.quiz') }}">Cancel</a></button>
        </div>
    </div>
</div>
@endisset

<!-- The Edit Modal -->
@isset ($edit)
<div id="editModal" class="edit__modal">
    <div class="modal-content">
        <form action="{{ route('admin.quiz.edit',['id'=>$editQuiz->quiz_id]) }}" action="POST" class="update">
            @csrf
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
                    <option value="approve">Approve</option>
                    <option value="complete">Complete</option>
                    <option value="draft">Draft</option>
                </select>
            </div>
            <div class="modal-footer">
                <button id="submitEditModalBtn">Update</button>
                <button id="closeEditModalBtn"><a href="{{ route('admin.quiz') }}">Cancel</a></button>
            </div>
        </form>
    </div>
</div>
@endisset
<script src="{{ asset('js/adminTables.js') }}"></script>
@endsection