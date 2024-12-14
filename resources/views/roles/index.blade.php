@extends('./master')
@section('title')
    Roles list
@endsection
@section('content')
    
   <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>Manage All Roles</span>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addRoleModal">Add Roles</a>
                        </div>
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
                                    @forelse($roles as $key => $role)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $role->role_name }}</td>
                                            <td>
                                                <!-- Edit Button -->
                                                <button 
                                                    class="btn btn-sm btn-warning" 
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#editUserModal" 
                                                    onclick="openEditModal('{{ $role->name }}')">
                                                    <i class="fas fa-edit"></i>
                                                </button>

                                                 <!-- Delete Button -->
                                                <form action="{{ route('roles.destroy', $role->id) }}" method="POST" id="delete-form-{{ $role->id }}" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $role->id }})">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">No roles found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @include('modals.roles.add_roles_modal')

                </div>
            </div>
        </div>
    </section>
@endsection