@extends('backend.partials.mainindex')

@push('title')
    <title>Manage Dealership | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid">


            {{-- <div class="row">
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
                                    <h3>{{ $totaldealers }}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Total Dealerships</h6>
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
            </div> --}}

            <div class="row">
                <div class="col-md-12 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Manage Dealership List</h4>
                        </div>
                        <div class="card-header">
                            <h4 class="card-title"><a href="{{ url('/add-dealership') }}">Add Dealership</a></h4>
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
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="search_results">

                                    </tbody>
                                    <tbody>

                                        @foreach ($dealerships as $dealership)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a
                                                            href="{{ url('/manage-single-dealer') }}/{{ $dealership->user_id }}">{{ $dealership->user->name }}</a>
                                                    </h2>
                                                </td>
                                                <td>{{ $dealership->user->email }}</td>
                                                <td>{{ $dealership->user->phoneno }}</td>
                                                <td><a href="/profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="{{ $dealership->user->image }}" alt="User Image"></a></td>
                                                <td>{{ $dealership->user->dob }}</td>
                                                <td>{{ $dealership->user->address }}</td>
                                                <td>
                                                    @if ($dealership->user->gender == 0)
                                                        Female
                                                    @elseif($dealership->user->gender == 1)
                                                        Male
                                                    @else
                                                        Other
                                                    @endif
                                                </td>
                                                <td>{{ $dealership->user->usertype->usertype }}</td>
                                                <td>{{ $dealership->firm_address }}</td>
                                                <td>{{ $dealership->firm_phoneno }}</td>
                                                <td>{{ $dealership->firm_email }}</td>
                                                <td>{{ $dealership->firm_name }}</td>
                                                <td>{{ $dealership->firm_gstno }}</td>
                                                <td>{{ $dealership->total_revenue }}</td>
                                                <td>{{ $dealership->total_profit }}</td>
                                                <td><a href="{{ url('/manage-single-dealer') }}/{{ $dealership->user_id }}"
                                                        class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle"
                                                            src="{{ asset($dealership->firm_photo) }}"
                                                            alt="User Image"></a></td>
                                                <td>{{ $dealership->whoseuser->name }}</td>
                                                <td>{{ $dealership->firm_pincode }}</td>
                                                <td>{{ $dealership->firm_area }}</td>
                                                <td>{{ $dealership->firm_taluka }}</td>
                                                <td>{{ $dealership->firm_district }}</td>
                                                <td>{{ $dealership->firm_zone }}</td>
                                                <td>{{ $dealership->firm_state }}</td>
                                                <td>{{ $dealership->firm_country }}</td>
                                                <td><a href="{{ url('/edit-dealership') }}/{{ $dealership->id }}"><i
                                                            class="fa fa-edit"></i></a><a
                                                        href="{{ url('/delete-dealership') }}/{{ $dealership->id }}"><i
                                                            class="fa fa-trash"></i></a></td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                {{ $dealerships->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script>
        $(document).ready(function() {
            $('#search_header').on('keyup', function() {
                let query = $(this).val();
                $.ajax({
                    url: '/search-dealership',
                    type: 'GET',
                    data: {
                        query: query
                    },
                    success: function(data) {
                        let output = '';
                        $.each(data, function(index, dealership) {
                            output += `
                        <tr>
                            <td>${index + 1}</td>
                            <td><h2 class="table-avatar"><a href="/manage-single-dealer/${dealership.user_id}">${dealership.user.name}</a></h2></td>
                            <td>${dealership.user.email}</td>
                            <td>${dealership.user.phoneno}</td>
                            <td><a href="/profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="${dealership.user.image}" alt="User Image"></a></td>
                            <td>${dealership.user.dob}</td>
                            <td>${dealership.user.address}</td>
                            <td>${dealership.user.gender == 0 ? 'Female' : dealership.user.gender == 1 ? 'Male' : 'Other'}</td>
                            <td>${dealership.user.usertype.usertype}</td>
                            <td>${dealership.firm_address}</td>
                            <td>${dealership.firm_phoneno}</td>
                            <td>${dealership.firm_email}</td>
                            <td>${dealership.firm_name}</td>
                            <td>${dealership.firm_gstno}</td>
                            <td>${dealership.total_revenue}</td>
                            <td>${dealership.total_profit}</td>
                            <td><a href="/manage-single-dealer/${dealership.user_id}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ asset('${dealership.firm_photo}') }}" alt="User Image"></a></td>
                            <td>${dealership.whoseuser.name}</td>
                            <td>${dealership.firm_pincode}</td>
                            <td>${dealership.firm_area}</td>
                            <td>${dealership.firm_taluka}</td>
                            <td>${dealership.firm_district}</td>
                            <td>${dealership.firm_zone}</td>
                            <td>${dealership.firm_state}</td>
                            <td>${dealership.firm_country}</td>
                            <td><a href="/edit-dealership/${dealership.id}"><i class="fa fa-edit"></i></a><a href="/delete-dealership/${dealership.id}"><i class="fa fa-trash"></i></a></td>
                        </tr>`;
                        });
                        $('tbody').html(output);
                    }
                });
            });
        });
    </script> --}}
    <script>
        $(document).ready(function() {
            $('#search_header').on('keyup', function() {
                let query = $(this).val();
                $.ajax({
                    url: '/search-dealership',
                    type: 'GET',
                    data: {
                        query: query
                    },
                    success: function(data) {
                        let output = '';

                        $.each(data, function(index, dealership) {
                            output += `
                        <tr>
                            <td>${index + 1}</td>
                            <td><h2 class="table-avatar"><a href="/manage-single-dealer/${dealership.user_id}">${dealership.user.name}</a></h2></td>
                            <td>${dealership.user.email}</td>
                            <td>${dealership.user.phoneno}</td>
                            <td><a href="/profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="${dealership.user.image}" alt="User Image"></a></td>
                            <td>${dealership.user.dob}</td>
                            <td>${dealership.user.address}</td>
                            <td>${dealership.user.gender == 0 ? 'Female' : dealership.user.gender == 1 ? 'Male' : 'Other'}</td>
                            <td>${dealership.user.usertype.usertype}</td>
                            <td>${dealership.firm_address}</td>
                            <td>${dealership.firm_phoneno}</td>
                            <td>${dealership.firm_email}</td>
                            <td>${dealership.firm_name}</td>
                            <td>${dealership.firm_gstno}</td>
                            <td>${dealership.total_revenue}</td>
                            <td>${dealership.total_profit}</td>
                            <td><a href="/manage-single-dealer/${dealership.user_id}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="${dealership.firm_photo}" alt="User Image"></a></td>
                            <td>${dealership.whoseuser.name}</td>
                            <td>${dealership.firm_pincode}</td>
                            <td>${dealership.firm_area}</td>
                            <td>${dealership.firm_taluka}</td>
                            <td>${dealership.firm_district}</td>
                            <td>${dealership.firm_zone}</td>
                            <td>${dealership.firm_state}</td>
                            <td>${dealership.firm_country}</td>
                            <td><a href="/edit-dealership/${dealership.id}"><i class="fa fa-edit"></i></a><a href="/delete-dealership/${dealership.id}"><i class="fa fa-trash"></i></a></td>
                        </tr>`;
                        });

                        $('#search_results').html(output);

                        // Hide tbody if no results, show if there are results
                        if (data.length === 0 || query === '') {
                            $('#search_results').hide();
                        } else {
                            $('#search_results').show();
                        }
                    }
                });
            });
        });
    </script>
@endsection
