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
            <tbody id="quiz_management_table"></tbody>
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
                @csrf
                <div class="form-row">
                    <div class="form-column">
                        <label for="category">Category:</label>
                        <select id="category" name="category">
                            @foreach ($categories as $category)
                            <option value="{{ $category->category_id }}">{{ $category->category_title }}</option>
                            @endforeach
                        </select>
                        @error('category')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-column">
                        <label for="status">Status:</label>
                        <select id="status" name="status">
                            <option value="complete">Complete</option>
                            <option value="draft">Draft</option>
                        </select>
                        @error('status')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-column">
                    <label for="tittle-register">Title:</label>
                    <input type="text" id="tittle-register" name="title">
                    @error('title')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-column">
                    <label for="questionIds-register">Question Ids:</label>
                    <input type="text" id="questionIds-register" name="questions">
                    @error('questions')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-column">
                    <label for="publishing-date">Schedule Date:</label>
                    <input type="date" id="publishing-date" name="publishing_date">
                    @error('publishing_date')
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
    <div id="editModal" class="edit__modal">
        <div class="modal-content">
            <form action="{{ route('admin.quiz.edit', ['id' => $editQuiz->quiz_id]) }}" method="POST" class="update">
                @csrf
                <div class="modal-header">
                    <h2>Update Quiz</h2>
                </div>
                <div class="modal-body">
                    <label for="questionIds-register">Question Ids:</label>
                    <input type="text" id="questionIds-register" name="questions" @isset ($editQuiz)
                        value="{{ $editQuiz->questions }}" @endisset>

                    <label for="publishing-date">Schedule Date:</label>
                    <input type="date" id="publishing-date" name="publishing_date" @isset ($editQuiz)
                        value="{{ $editQuiz->time }}" @endisset>

                    <label for="userStatus">Status:</label>
                    <select id="status" name="status">
                        <option value="approved" @if ($editQuiz && $editQuiz->status == "approved") selected
                            @endif>Approve
                        </option>
                        <option value="complete" @if ($editQuiz && $editQuiz->status == "complete") selected
                            @endif>Complete
                        </option>
                        <option value="draft" @if ($editQuiz && $editQuiz->status == "draft") selected @endif>Draft
                        </option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="submit">Update</button>
                    <button id="closeEditModalBtn"><a href="{{ route('admin.quiz') }}">Cancel</a></button>
                </div>
            </form>
        </div>
    </div>
</div>
@endisset
<script src="{{ asset('js/adminTables.js') }}"></script>
@endsection