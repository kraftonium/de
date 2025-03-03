@extends('backend.partials.mainindex')

@push('title')
    <title>Manage State Dealership | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid">


            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon">
                                    <i class="fa fa-users  "></i>
                                </span>
                                <div class="dash-count">
                                    <h3>168</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Total Customer</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar  w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon ">
                                    <i class="fa fa-boxes "></i>
                                </span>
                                <div class="dash-count">
                                    <h3>487</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Total Stock</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar  w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon ">
                                    <i class="fa fa-shopping-cart"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>485</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Total Order</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon ">
                                    <i class="fa fa-dollar-sign"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>62523</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Total Profit</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar  w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Manage State Dealers List</h4>
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
                                            <th>Firm Address</th>
                                            <th>Firm Phone</th>
                                            <th>Firm Email</th>
                                            <th>Firm Name</th>
                                            <th>Firm GST No.</th>
                                            <th>Total Revenue</th>
                                            <th>Total Profit</th>
                                            <th>Firm Photo</th>
                                            <th>Whose Dealer</th>
                                            <th>Firm Pincode </th>
                                            <th>Firm State</th>
                                            <th>Firm Country</th>
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
                                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                                            <td>1231231231</td>
                                            <td>contact@divyashakti.com</td>
                                            <td>Divyashakti Enterprise</td>
                                            <td>123123</td>
                                            <td>500000</td>
                                            <td>50000</td>
                                            <td><a href="/profile.html" class="avatar avatar-sm me-2"><img
                                                        class="avatar-img rounded-circle"
                                                        src="/backend-assets/img/doctors/doctor-thumb-01.jpg"
                                                        alt="User Image"></a></td>
                                            <td>Divyashakti</td>
                                            <td>382010</td>
                                            <td>Gujarat</td>
                                            <td>India</td>
                                            <td><a href="edit-state-dealer.html"><i class="fa fa-edit"></i></a><a
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
