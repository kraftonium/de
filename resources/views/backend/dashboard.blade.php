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
                        <h3 class="page-title h3-heading">Welcome Admin!</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon">
                                    <i class="fa fa-warehouse  "></i>
                                </span>
                                <div class="dash-count">
                                    <h3>168</h3>
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
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon ">
                                    <i class="fa fa-warehouse"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>487</h3>
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
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon ">
                                    <i class="fa fa-warehouse"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>485</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Jilla Dealers</h6>
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
                                    <i class="fa fa-warehouse"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>62523</h3>
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
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon">
                                    <i class="fa fa-warehouse"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>168</h3>
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
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon">
                                    <i class="fa fa-users "></i>
                                </span>
                                <div class="dash-count">
                                    <h3>487</h3>
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
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon ">
                                    <i class="fa fa-user-tie"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>485</h3>
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
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon">
                                    <i class="fa fa-chart-bar"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>$62523</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Total Vehicle Sell</h6>
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
                        const xValues = ["2024", "2023", "2022", "2021", "2020"];
                        const yValues = [1000000, 850000, 700000, 620000, 500000];
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
                        const xValues2 = ["2024", "2023", "2022", "2021", "2020"];
                        const yValues2 = [100000, 85000, 70000, 62000, 50000];
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
                <div class="col-md-6 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">State Dealership List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="max-height: 420px; overflow-y: auto;">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Dealer Name</th>
                                            <th>Firm Name</th>
                                            <th>Location</th>
                                            <th>Phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> <a href="../doctor-dashboard.html" class="avatar avatar-sm me-2"><img
                                                        class="avatar-img rounded-circle"
                                                        src="backend-assets/img/doctors/doctor-thumb-01.jpg"
                                                        alt="User Image"></a></td>
                                            <td>
                                                <h2 class="table-avatar">

                                                    <a href="/profile.html">Dr. Ruby Perrin</a>
                                                </h2>
                                            </td>
                                            <td>Lorem, ipsum.</td>
                                            <td>Gujarat</td>
                                            <td>12345 56789</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Zone Dealership List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="max-height: 420px; overflow-y: auto;">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Dealer Name</th>
                                            <th>Firm Name</th>
                                            <th>Location</th>
                                            <th>Phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> <a href="../doctor-dashboard.html" class="avatar avatar-sm me-2"><img
                                                        class="avatar-img rounded-circle"
                                                        src="backend-assets/img/doctors/doctor-thumb-01.jpg"
                                                        alt="User Image"></a></td>
                                            <td>
                                                <h2 class="table-avatar">

                                                    <a href="/profile.html">Dr. Ruby Perrin</a>
                                                </h2>
                                            </td>
                                            <td>Lorem, ipsum.</td>
                                            <td>Gujarat</td>
                                            <td>12345 56789</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Jilla Dealership List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="max-height: 420px; overflow-y: auto;">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Dealer Name</th>
                                            <th>Firm Name</th>
                                            <th>Location</th>
                                            <th>Phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> <a href="../doctor-dashboard.html" class="avatar avatar-sm me-2"><img
                                                        class="avatar-img rounded-circle"
                                                        src="backend-assets/img/doctors/doctor-thumb-01.jpg"
                                                        alt="User Image"></a></td>
                                            <td>
                                                <h2 class="table-avatar">

                                                    <a href="/profile.html">Dr. Ruby Perrin</a>
                                                </h2>
                                            </td>
                                            <td>Lorem, ipsum.</td>
                                            <td>Gujarat</td>
                                            <td>12345 56789</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Taluka Dealership List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="max-height: 420px; overflow-y: auto;">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Dealer Name</th>
                                            <th>Firm Name</th>
                                            <th>Location</th>
                                            <th>Phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> <a href="../doctor-dashboard.html" class="avatar avatar-sm me-2"><img
                                                        class="avatar-img rounded-circle"
                                                        src="backend-assets/img/doctors/doctor-thumb-01.jpg"
                                                        alt="User Image"></a></td>
                                            <td>
                                                <h2 class="table-avatar">

                                                    <a href="/profile.html">Dr. Ruby Perrin</a>
                                                </h2>
                                            </td>
                                            <td>Lorem, ipsum.</td>
                                            <td>Gujarat</td>
                                            <td>12345 56789</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Area Dealership List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="max-height: 420px; overflow-y: auto;">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Dealer Name</th>
                                            <th>Firm Name</th>
                                            <th>Location</th>
                                            <th>Phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> <a href="../doctor-dashboard.html" class="avatar avatar-sm me-2"><img
                                                        class="avatar-img rounded-circle"
                                                        src="backend-assets/img/doctors/doctor-thumb-01.jpg"
                                                        alt="User Image"></a></td>
                                            <td>
                                                <h2 class="table-avatar">

                                                    <a href="/profile.html">Dr. Ruby Perrin</a>
                                                </h2>
                                            </td>
                                            <td>Lorem, ipsum.</td>
                                            <td>Gujarat</td>
                                            <td>12345 56789</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="card card-table">
                        <div class="card-header">
                            <h4 class="card-title">Appointment List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Doctor Name</th>
                                            <th>Speciality</th>
                                            <th>Patient Name</th>
                                            <th>Apointment Time</th>
                                            <th>Status</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="../doctor-dashboard.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="backend-assets/img/doctors/doctor-thumb-01.jpg"
                                                            alt="User Image"></a>
                                                    <a href="../doctor-dashboard.html">Dr. Ruby Perrin</a>
                                                </h2>
                                            </td>
                                            <td>Dental</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="../patient-dashboard.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="backend-assets/img/patients/patient1.jpg"
                                                            alt="User Image"></a>
                                                    <a href="../patient-dashboard.html">Charlene Reed </a>
                                                </h2>
                                            </td>
                                            <td>9 Nov 2023 <span class="text-primary d-block">11.00 AM - 11.15
                                                    AM</span></td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input type="checkbox" id="status_1" class="check" checked="">
                                                    <label for="status_1" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                            <td>
                                                $200.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="../doctor-dashboard.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="backend-assets/img/doctors/doctor-thumb-02.jpg"
                                                            alt="User Image"></a>
                                                    <a href="../doctor-dashboard.html">Dr. Darren Elder</a>
                                                </h2>
                                            </td>
                                            <td>Dental</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="../patient-dashboard.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="backend-assets/img/patients/patient2.jpg"
                                                            alt="User Image"></a>
                                                    <a href="../patient-dashboard.html">Travis Trimble </a>
                                                </h2>
                                            </td>
                                            <td>5 Nov 2023 <span class="text-primary d-block">11.00 AM - 11.35
                                                    AM</span></td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input type="checkbox" id="status_2" class="check" checked="">
                                                    <label for="status_2" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                            <td>
                                                $300.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="../doctor-dashboard.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="backend-assets/img/doctors/doctor-thumb-03.jpg"
                                                            alt="User Image"></a>
                                                    <a href="../doctor-dashboard.html">Dr. Deborah Angel</a>
                                                </h2>
                                            </td>
                                            <td>Cardiology</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="../patient-dashboard.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="backend-assets/img/patients/patient3.jpg"
                                                            alt="User Image"></a>
                                                    <a href="../patient-dashboard.html">Carl Kelly</a>
                                                </h2>
                                            </td>
                                            <td>11 Nov 2023 <span class="text-primary d-block">12.00 PM - 12.15
                                                    PM</span></td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input type="checkbox" id="status_3" class="check" checked="">
                                                    <label for="status_3" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                            <td>
                                                $150.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="../doctor-dashboard.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="backend-assets/img/doctors/doctor-thumb-04.jpg"
                                                            alt="User Image"></a>
                                                    <a href="../doctor-dashboard.html">Dr. Sofia Brient</a>
                                                </h2>
                                            </td>
                                            <td>Urology</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="../patient-dashboard.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="backend-assets/img/patients/patient4.jpg"
                                                            alt="User Image"></a>
                                                    <a href="../patient-dashboard.html"> Michelle Fairfax</a>
                                                </h2>
                                            </td>
                                            <td>7 Nov 2023<span class="text-primary d-block">1.00 PM - 1.20
                                                    PM</span></td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input type="checkbox" id="status_4" class="check" checked="">
                                                    <label for="status_4" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                            <td>
                                                $150.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="../doctor-dashboard.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="backend-assets/img/doctors/doctor-thumb-05.jpg"
                                                            alt="User Image"></a>
                                                    <a href="../doctor-dashboard.html">Dr. Marvin Campbell</a>
                                                </h2>
                                            </td>
                                            <td>Orthopaedics</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="../patient-dashboard.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="backend-assets/img/patients/patient5.jpg"
                                                            alt="User Image"></a>
                                                    <a href="../patient-dashboard.html">Gina Moore</a>
                                                </h2>
                                            </td>
                                            <td>15 Nov 2023 <span class="text-primary d-block">1.00 PM - 1.15
                                                    PM</span></td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input type="checkbox" id="status_5" class="check" checked="">
                                                    <label for="status_5" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                            <td>
                                                $200.00
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
@endsection
