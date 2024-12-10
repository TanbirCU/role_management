@extends('./master')
@section('title')
    users list
@endsection
@section('content')
   <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>Manage All Roles</span>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">Add User</a>
                        </div>
                        {{-- <div class="card-header">Manage All users</div>
                        <div class="card-header">Add Users</div> --}}
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Role Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>admin</td>
                                        <td>
                                            <button 
                                                class="btn btn-sm btn-warning" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#editUserModal" 
                                                onclick="openEditModal('John Doe', 'john@example.com', '+1234567890', 'Admin')">
                                                <i class="fas fa-edit"></i>
                                            </button>

                                            <!-- Delete Icon -->
                                            <form action="" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @include('modals.add_user_modal')

                </div>
            </div>
        </div>
    </section>
@endsection