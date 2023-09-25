@extends('layouts.admin')
@section('admin__content')
   <div class="main__content">
        <div class="table__container">
            <div class="table__header">
                <div class="table__title">
                    <h2>Announcement Management</h2>
                </div>
                <div class="table__buttons">
                    <button class="add_new" id="openAddNewModalBtn"><i class="fa-solid fa-circle-plus"></i> 
                        Create an announcement</button>
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
                        <th>Id</th>
                        <th>Tittle</th>
                        <th>Audience</th>
                        <th>Status</th>
                        <th>Content</th>
                        <th>Publishing Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <div class="avatar-container">
                                <p class="avatar-name">#A150823</p>
                            </div>
                        </td>
                        <td>Independence Day Celebration</td>
                        <td>User</td>
                        <td>Published</td>
                        <td>Dear Quiz Enthusiasts,
                            Exciting news! In celebration of Independence Day, we're hosting a special quiz event just for you!</td>
                        <td>15/08/2023</td>
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
                                <p class="avatar-name">#A260124</p>
                            </div>
                        </td>
                        <td>Create new theme for Republic Day</td>
                        <td>Editor</td>
                        <td>Complete</td>
                        <td>New theme</td>
                        <td>10/01/2024</td>
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

    
@endsection