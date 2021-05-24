<template>
    <div class="container-scroller">
        <!--Top Navbar-->
        <Navbar/>

        <!--Sidebar-->
        <Sidebar/>

        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb p-0 d-flex align-items-center mb-primary">
                                    <li class="breadcrumb-item page-header d-flex align-items-center">
                                        <h4 class="mb-0">Users and Roles</h4>
                                        <Icon class="ml-2 page-icon" :name="'user'"/>
                                    </li>
                                    <li class="breadcrumb-item">
                                        Users and roles
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="float-md-right mb-3 mb-sm-3 mb-md-0">
                                <button type="button" class="btn btn-primary btn-with-shadow mr-2">Invite User</button>
                                <button type="button" class="btn btn-primary btn-with-shadow">Add Role</button>
                            </div>
                        </div>
                    </div>

                    <!--Users And Roles Pages Started Here....-->
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                            <div class="card border-0 card-with-shadow card-with-search h-100 mb-3 mb-md-3 mb-lg-0">
                                <div class="card-header d-flex align-items-center p-primary bg-transparent">
                                    <h4 class="card-title d-inline-block mb-0">Users</h4>
                                    <div class="form-group form-group-with-search d-flex align-items-center">
                                        <span class="form-control-feedback">
                                            <Icon :name="'search'"/>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="nav mb-primary tab-filter-menu">
                                        <li class="nav-item">
                                            <a class="nav-link font-size-default py-0 active" href="#">All users</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link py-0 font-size-default" href="#">Active</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link py-0 font-size-default" href="#">Inactive</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link py-0 font-size-default" href="#">Invited</a>
                                        </li>
                                    </ul>
                                    <div class="datatable">
                                        <div class="card-with-shadow border-0">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="media d-flex align-items-center">
                                                                <div class="avatars-w-50 ml-2">
                                                                    <img class="rounded-circle" src="https://images.unsplash.com/photo-1568725624707-9d968f934b75?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    Najmun Nafiz
                                                                    <p class="text-muted font-size-90 mb-0">najmun@gmail.com</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-pill badge-success">Active</span>
                                                        </td>
                                                        <td>
                                                            <OptionsDropdownButton/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media d-flex align-items-center">
                                                                <div class="avatars-w-50 ml-2">
                                                                    <img class="rounded-circle" src="https://images.unsplash.com/photo-1565464027194-7957a2295fb7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    Safiur Islam
                                                                    <p class="text-muted font-size-90 mb-0">najmun@gmail.com</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-pill badge-warning">Inactive</span>
                                                        </td>
                                                        <td>
                                                            <OptionsDropdownButton/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media d-flex align-items-center">
                                                                <div class="avatars-w-50 ml-2">
                                                                    <img class="rounded-circle" src="https://images.unsplash.com/photo-1565464027398-8f98698f6d52?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    Sani
                                                                    <p class="text-muted font-size-90 mb-0">sani@gmail.com</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-pill badge-purple">Invited</span>
                                                        </td>
                                                        <td>
                                                            <OptionsDropdownButton/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media d-flex align-items-center">
                                                                <div class="avatars-w-50 ml-2">
                                                                    <img class="rounded-circle" src="https://images.unsplash.com/photo-1568725624707-9d968f934b75?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    Najmun Nafiz
                                                                    <p class="text-muted font-size-90 mb-0">najmun@gmail.com</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-pill badge-info">Active</span>
                                                        </td>
                                                        <td>
                                                            <OptionsDropdownButton/>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                            <div class="card border-0 card-with-shadow card-with-search h-100">
                                <div class="card-header d-flex align-items-center p-primary bg-transparent">
                                    <h4 class="card-title d-inline-block mb-0">Roles</h4>
                                    <div class="form-group form-group-with-search d-flex align-items-center">
                                        <span class="form-control-feedback">
                                            <Icon :name="'search'"/>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="roles-table">
                                        <div class="datatable">
                                            <div class="table-responsive table-view-responsive custom-scrollbar">
                                                <table class="table">
                                                    <thead class="pb-5">
                                                    <tr>
                                                        <th>Roles Name</th>
                                                        <th>No. of users</th>
                                                        <th>User(s)</th>
                                                        <th class="text-right">Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td data-title="Roles Name">
                                                            <a href="#">Admin</a>
                                                        </td>
                                                        <td data-title="No. of users">2</td>
                                                        <td data-title="User(s)">
                                                            <div class="avatars-with-shadow">
                                                                <div class="avatars-group-w-50">
                                                                    <img class="rounded-circle" src="https://images.unsplash.com/photo-1569779213435-ba3167dde7cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                                                    <img class="rounded-circle" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td data-title="Actions" class="table-action">
                                                            <OptionsDropdownButton/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td data-title="Roles Name">
                                                            <a href="#">Staff</a>
                                                        </td>
                                                        <td data-title="No. of users">2</td>
                                                        <td data-title="User(s)">
                                                            <div class="avatars-with-shadow">
                                                                <div class="avatars-group-w-50">
                                                                    <img class="rounded-circle" src="https://images.unsplash.com/photo-1569779213435-ba3167dde7cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                                                    <img class="rounded-circle" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                                                    <img class="rounded-circle" src="https://images.unsplash.com/photo-1565464027194-7957a2295fb7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                                                    <img class="rounded-circle" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                                                    <img class="rounded-circle" src="https://images.unsplash.com/photo-1565464027194-7957a2295fb7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td data-title="Actions" class="table-action">
                                                            <OptionsDropdownButton/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td data-title="Roles Name">
                                                            <a href="#">Employee</a>
                                                        </td>
                                                        <td data-title="No. of users">5</td>
                                                        <td data-title="User(s)">
                                                            <div class="avatars-with-shadow">
                                                                <div class="avatars-group-w-50" id="avatars-group-shadow">
                                                                    <img class="rounded-circle" src="https://images.unsplash.com/photo-1569779213435-ba3167dde7cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                                                    <img class="rounded-circle" src="https://images.unsplash.com/photo-1542909168-82c3e7fdca5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                                                    <img class="rounded-circle" src="https://images.unsplash.com/photo-1581791538302-03537b9c97bf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                                                    <img class="rounded-circle" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                                                    <img class="rounded-circle" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                                                    <a class="pl-3 text-muted"
                                                                       data-toggle="collapse"
                                                                       href="#multiCollapseExample2"
                                                                       aria-expanded="false"
                                                                       aria-controls="multiCollapseExample2">+ 10 more</a>
                                                                </div>
                                                                <div class="row avatar-sub-group-shadow">
                                                                    <div class="col-12 p-0">
                                                                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                                                                            <a class="float-right pr-3 mr-4 minimizing" id="shadow-hide" data-toggle="collapse"
                                                                               href="#multiCollapseExample2"
                                                                               aria-expanded="false" aria-controls="multiCollapseExample2">
                                                                                <i data-feather="maximize-2"/>
                                                                            </a>
                                                                            <div class="pt-0">
                                                                                <div class="avatars-group-w-50">
                                                                                    <img class="rounded-circle" src="https://images.unsplash.com/photo-1542909168-82c3e7fdca5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                                                                </div>
                                                                                <div class="avatars-group-w-50 mt-2">
                                                                                    <img class="rounded-circle" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                                                                </div>
                                                                                <div class="avatars-group-w-50 mt-2">
                                                                                    <img class="rounded-circle" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                                                                </div>
                                                                                <div class="avatars-group-w-50 mt-2">
                                                                                    <img class="rounded-circle" src="https://images.unsplash.com/photo-1569779213435-ba3167dde7cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                                                                </div>
                                                                                <div class="avatars-group-w-50 mt-2">
                                                                                    <img class="rounded-circle" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td data-title="Actions" class="table-action">
                                                            <OptionsDropdownButton/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td data-title="Roles Name">
                                                            <a href="#">Manager</a>
                                                        </td>
                                                        <td data-title="No. of users">2</td>
                                                        <td data-title="User(s)">
                                                            <div class="avatars-with-shadow">
                                                                <div class="avatars-group-w-50">
                                                                    <img class="rounded-circle" src="https://images.unsplash.com/photo-1569779213435-ba3167dde7cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                                                    <img class="rounded-circle" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                                                    <img class="rounded-circle" src="https://images.unsplash.com/photo-1565464027194-7957a2295fb7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td data-title="Actions" class="table-action">
                                                            <OptionsDropdownButton/>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    import CoreJS from '../assets/js/core'

    export default {
        name: "UsersRoles",
        extends: CoreJS,
        mounted(){

        }
    }
</script>
