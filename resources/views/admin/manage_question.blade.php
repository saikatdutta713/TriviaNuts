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
                    <select name="table__length" class="table__length__selector" id="question__table__length">
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
                    <input type="search" id="question__data__search" class="table__search" aria-controls="datatables">
                </label>
            </div>
            <div class="table__buttons">
                <button class="add_new" id="openAddNewModalBtn"><a href="{{ route('admin.question.add.view') }}"><i
                            class="fa-solid fa-circle-plus"></i> Add New
                        Question</a></button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Question Id</th>
                    <th>Category</th>
                    <th>Question</th>
                    <th>Answers</th>
                    <th>Correct Answer</th>
                    <th>Quiz Id</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="question_management_table"></tbody>
        </table>
        <div class="clearfix">
            <div class="hint-text" id="question__hint__text">Showing <b>5</b> out of <b>25</b> entries</div>
            <ul class="pagination" id="question__table__pagination"></ul>
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
            <form class="register" action="{{ route('admin.question.add') }}" method="POST">
                @csrf
                <div class="form-column">
                    <label for="category" class="category-label">Category:</label>
                    <select id="category1" name="category" class="category-select">
                        @foreach ($categories as $category)
                        <option value="{{ $category->category_id }}">{{ $category->category_title }}</option>
                        @endforeach
                    </select>
                    @error('category')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-column">
                    <label for="question">Question:</label>
                    <textarea id="question" name="question" rows="4" cols="50"></textarea>
                    @error('question')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-column">
                    <label for="answer">Correct Answer:</label>
                    <input type="text" id="answer" name="answer">
                    @error('answer')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-column">
                    <label for="answer_option_a">Answer A:</label>
                    <input type="text" id="answer_option_a" name="answer_option_a">
                    @error('answer_option_a')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-column">
                    <label for="answer_option_b">Answer B:</label>
                    <input type="text" id="answer_option_b" name="answer_option_b">
                    @error('answer_option_b')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-column">
                    <label for="answer_option_c">Answer C:</label>
                    <input type="text" id="answer_option_c" name="answer_option_c">
                    @error('answer_option_c')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-column">
                    <label for="answer_option_d">Answer D:</label>
                    <input type="text" id="answer_option_d" name="answer_option_d">
                    @error('answer_option_d')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

            </form>
        </div>
        <div class="modal-footer">
            <button id="submitAddNewModalBtn">Add Question</button>
            <button id="closeAddNewModalBtn"><a href="{{ route('admin.question') }}">Cancel</a></button>
        </div>
    </div>
</div>
@endisset

<!-- The Edit Modal -->
@isset ($edit)
<div id="editModal" class="edit__modal">
    <div class="modal-content">
        <form action="{{ route('admin.question.edit',['id'=>$editQuestion->question_id]) }}" method="POST"
            class="update">
            <div class="modal-header">
                <h2>Update Question</h2>
            </div>
            <div class="modal-body">
                @csrf
                <label for="question">Question:</label>
                <textarea id="question" name="question" rows="4" cols="50">
                    @isset ($editQuestion) 
                    {{trim($editQuestion->question_text) }}
                    @endisset
                </textarea>

                <label for="answer">Correct Answer:</label>
                <input type="text" id="answer" name="answer" @isset ($editQuestion) value={{
                    $editQuestion->correct_option }}
                @endisset></textarea>

                <label for="answer_option_a-1">Other Answer 1:</label>
                <input type="text" id="answer_option_a" name="answer_option_a" @isset ($editQuestion) value={{
                    $editQuestion->answer_option_a }}
                @endisset></textarea>

                <label for="answer_option_b">Other Answer 2:</label>
                <input type="text" id="answer_option_b" name="answer_option_b" @isset ($editQuestion) value={{
                    $editQuestion->answer_option_b }}
                @endisset></textarea>

                <label for="answer_option_c">Other Answer 3:</label>
                <input type="text" id="answer_option_c" name="answer_option_c" @isset ($editQuestion) value={{
                    $editQuestion->answer_option_c }}
                @endisset></textarea>

                <label for="answer_option_d">Other Answer 4:</label>
                <input type="text" id="answer_option_d" name="answer_option_d" @isset ($editQuestion) value={{
                    $editQuestion->answer_option_d }}
                @endisset></textarea>
            </div>
            <div class="modal-footer">
                <button id="submitEditModalBtn" type="submit">Update</button>
                <button id="closeEditModalBtn"><a href="{{ route('admin.question') }}">Cancel</a></button>
            </div>
        </form>
    </div>
</div>
@endisset
<script src="{{ asset('js/adminTables.js') }}"></script>
@endsection