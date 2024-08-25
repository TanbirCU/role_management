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
                            <span>Manage All Users</span>
                            <a href="#" class="btn btn-primary">Add Users</a>
                        </div>
                        {{-- <div class="card-header">Manage All users</div>
                        <div class="card-header">Add Users</div> --}}
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>tanvir</td>
                                        <td>tanvir@gamil.com</td>
                                        <td>02367388</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection