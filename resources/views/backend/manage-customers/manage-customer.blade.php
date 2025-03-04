@extends('backend.partials.mainindex')

@push('title')
    <title>Manage Customer | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row">
                <div class="col-md-12 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Manage Customer List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="max-height: 420px; overflow-y: auto;">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Photo</th>
                                            <th>Dob</th>
                                            <th>Address</th>
                                            <th>Gender</th>
                                            <th>User-Type</th>
                                            <th>Battery No.</th>
                                            <th>Chaches No.</th>
                                            <th>Controller No.</th>
                                            <th>Vehicle Name</th>
                                            <th>Vehicle-Type</th>
                                            <th>Vehicle Img</th>
                                            <th>Vehicle Color</th>
                                            <th>Purchase Date</th>
                                            <th>Produce Date</th>
                                            <th>Whose Customer</th>
                                            <th>Invoice No.</th>
                                            <th>Insurance No.</th>
                                            <th>GST No.</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="/profile.html">Dr. Ruby Perrin</a>
                                                </h2>
                                            </td>
                                            <td>ruby@gmail.com</td>
                                            <td>12345 45675</td>
                                            <td><a href="/profile.html" class="avatar avatar-sm me-2"><img
                                                        class="avatar-img rounded-circle"
                                                        src="/backend-assets/img/doctors/doctor-thumb-01.jpg"
                                                        alt="User Image"></a></td>
                                            <td>12-12-2000</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis,
                                                nobis.</td>
                                            <td>Male</td>
                                            <td>Admin</td>
                                            <td>123456</td>
                                            <td>123456</td>
                                            <td>123456</td>
                                            <td>Divine 24</td>
                                            <td>2 wheelr</td>
                                            <td><a href="/profile.html" class="avatar avatar-sm me-2"><img
                                                        class="avatar-img rounded-circle"
                                                        src="/backend-assets/img/doctors/doctor-thumb-01.jpg"
                                                        alt="User Image"></a>
                                            </td>
                                            <td>Black</td>

                                            <td>12-02-2025</td>
                                            <td>01-01-2025</td>
                                            <td>Divyashakti Enterprise</td>
                                            <td>123456</td>
                                            <td>123456</td>
                                            <td>123456</td>
                                            <td><a href="edit-customer.html"><i class="fa fa-edit"></i></a><a
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
