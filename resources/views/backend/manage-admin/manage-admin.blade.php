@extends('backend.partials.mainindex')

@push('title')
    <title>Manage Admin | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row">
                <div class="col-md-12 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Manage Admin List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="max-height: 420px; overflow-y: auto;">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Dob</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="/profile.html" class="avatar avatar-sm me-2"><img
                                                        class="avatar-img rounded-circle"
                                                        src="/backend-assets/img/doctors/doctor-thumb-01.jpg"
                                                        alt="User Image"></a></td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="/profile.html">Dr. Ruby Perrin</a>
                                                </h2>
                                            </td>
                                            <td>ruby@gmail.com</td>
                                            <td>12345 45675</td>
                                            <td>12-12-2000</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, nobis.
                                            </td>
                                            <td><a href="edit-admin.html"><i class="fa fa-edit"></i></a><a
                                                    href="javascript:void(0)"><i class="fa fa-trash"></i></a></td>
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
@endsection
