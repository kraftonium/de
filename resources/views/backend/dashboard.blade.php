@extends('backend.partials.mainindex')

@push('title')
    <title>Dashboard | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title h3-heading">Welcome {{ Auth::user()->name }}!</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-sm-6 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon">
                                    <i class="fa fa-warehouse  "></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{ $statedealers }}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">State Dealers</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar  w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon ">
                                    <i class="fa fa-warehouse"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{ $zonedealers }}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Zone Dealers</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar  w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon ">
                                    <i class="fa fa-warehouse"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{ $districtdealers }}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">District Dealers</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon ">
                                    <i class="fa fa-warehouse"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{ $talukadealers }}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Taluka Dealers</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar  w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-xl-3 col-sm-6 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon">
                                    <i class="fa fa-warehouse"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{ $areadealers }}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Area Dealers</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar  w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon">
                                    <i class="fa fa-users "></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{ $customers }}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Total Customers</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon ">
                                    <i class="fa fa-user-tie"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{ $totaldealers }}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Total Dealers</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon">
                                    <i class="fa fa-chart-bar"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>Rs.{{ $totalrevenue }}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Total Revenue</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <canvas id="myChart" style="width:100%;max-width:700px"></canvas>

                    <script>
                        const xValues = ["2025", "2024", "2023", "2022", "2021"];
                        // const yValues = [1000000, 850000, 700000, 620000, 500000];
                        const yValues = @json($yValues);
                        const barColors = ["#FD9520", "#1555AC", "#FA3E86", "#20AED7", "#000"];

                        new Chart("myChart", {
                            type: "bar",
                            data: {
                                labels: xValues,
                                datasets: [{
                                    backgroundColor: barColors,
                                    data: yValues
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: {
                                    legend: {
                                        display: false
                                    },
                                    title: {
                                        display: true,
                                        text: "Total Revenue",
                                        font: {
                                            size: 18
                                        }
                                    }
                                },
                                scales: {
                                    x: {
                                        ticks: {
                                            color: "#333", // Change x-axis label color
                                            font: {
                                                size: 14
                                            }, // Change x-axis label font size
                                            padding: 10
                                        },
                                        grid: {
                                            display: false // Hide grid lines on x-axis
                                        }
                                    },
                                    y: {
                                        beginAtZero: true,
                                        ticks: {
                                            color: "#333", // Change y-axis label color
                                            font: {
                                                size: 14
                                            }, // Change y-axis label font size
                                            callback: function(value) {
                                                return value.toLocaleString(); // Format numbers with commas
                                            }
                                        },
                                        grid: {
                                            color: "#ddd", // Change grid line color
                                            borderDash: [5, 5] // Dashed grid lines
                                        }
                                    }
                                }
                            }
                        });
                    </script>


                </div>
                <div class="col-md-12 col-lg-6">
                    <canvas id="myChart2" style="width:100%;max-width:700px"></canvas>

                    <script>
                        const xValues2 = ["2021", "2022", "2023", "2024", "2025"];
                        // const yValues2 = [100000, 85000, 70000, 62000, 50000];
                        const yValues2 = @json($yDealers);
                        const barColors2 = ["#FD9520", "#1555AC", "#FA3E86", "#20AED7", "#000"];

                        new Chart("myChart2", {
                            type: "bar",
                            data: {
                                labels: xValues2,
                                datasets: [{
                                    backgroundColor: barColors2,
                                    data: yValues2
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: {
                                    legend: {
                                        display: false
                                    },
                                    title: {
                                        display: true,
                                        text: "Total Profit",
                                        font: {
                                            size: 18
                                        }
                                    }
                                },
                                scales: {
                                    x: {
                                        ticks: {
                                            color: "#333", // Change x-axis label color
                                            font: {
                                                size: 14
                                            }, // Change x-axis label font size
                                            padding: 10
                                        },
                                        grid: {
                                            display: false // Hide grid lines on x-axis
                                        }
                                    },
                                    y: {
                                        beginAtZero: true,
                                        ticks: {
                                            color: "#333", // Change y-axis label color
                                            font: {
                                                size: 14
                                            }, // Change y-axis label font size
                                            callback: function(value) {
                                                return value.toLocaleString(); // Format numbers with commas
                                            }
                                        },
                                        grid: {
                                            color: "#ddd", // Change grid line color
                                            borderDash: [5, 5] // Dashed grid lines
                                        }
                                    }
                                }
                            }
                        });
                    </script>


                </div>

            </div>
            <div class="row">
                <div class="col-md-12 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">State Dealership List</h4>
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
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Zone Dealership List</h4>
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
                                            <th>Firm Zone</th>
                                            <th>Firm State</th>
                                            <th>Firm Country</th>
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
                                            <td>Gandhinagar</td>
                                            <td>Gujarat</td>
                                            <td>India</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">District Dealership List</h4>
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
                                            <th>Firm District</th>
                                            <th>Firm Zone</th>
                                            <th>Firm State</th>
                                            <th>Firm Country</th>
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
                                            <td>Gandhinagar</td>
                                            <td>Gandhinagar</td>
                                            <td>Gujarat</td>
                                            <td>India</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Taluka Dealership List</h4>
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
                                            <th>Firm Taluka</th>
                                            <th>Firm District</th>
                                            <th>Firm Zone</th>
                                            <th>Firm State</th>
                                            <th>Firm Country</th>
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
                                            <td>Infocity</td>
                                            <td>Gandhinagar</td>
                                            <td>Gandhinagar</td>
                                            <td>Gujarat</td>
                                            <td>India</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Area Dealership List</h4>
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
                                            <th>Firm Area</th>
                                            <th>Firm Taluka</th>
                                            <th>Firm District</th>
                                            <th>Firm Zone</th>
                                            <th>Firm State</th>
                                            <th>Firm Country</th>
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
                                            <td>Infocity</td>
                                            <td>Infocity</td>
                                            <td>Gandhinagar</td>
                                            <td>Gandhinagar</td>
                                            <td>Gujarat</td>
                                            <td>India</td>
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
