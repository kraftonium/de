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
                                            {{-- <th>User-Type</th> --}}
                                            <th>Battery No.</th>
                                            <th>Chassis No.</th>
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
                                    <tbody id="search_results">

                                    </tbody>
                                    <tbody>
                                        @foreach ($customers as $customer)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="javacript:void(0)">{{ $customer->user->name }}</a>
                                                    </h2>
                                                </td>
                                                <td>{{ $customer->user->email }}</td>
                                                <td>{{ $customer->user->phoneno }}</td>
                                                <td><a href="javacript:void(0)" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="{{ asset($customer->user->image) }}" alt="User Image"></a>
                                                </td>
                                                <td>{{ \Carbon\Carbon::parse($customer->user->dob)->format('d-m-Y') }}
                                                </td>
                                                <td>{{ $customer->user->address }}</td>
                                                <td>
                                                    @if ($customer->user->gender == 0)
                                                        Female
                                                    @elseif($customer->user->gender == 1)
                                                        Male
                                                    @else
                                                        Other
                                                    @endif
                                                </td>
                                                {{-- <td>Admin</td> --}}
                                                <td>{{ $customer->battery_no }}</td>
                                                <td>{{ $customer->chassis_no }}</td>
                                                <td>{{ $customer->controller_no }}</td>
                                                <td>{{ $customer->vehicle->name_of_vehicle }}</td>
                                                <td>{{ $customer->vehicle->vehicletype->type_of_vehicle }}</td>
                                                <td><a href="javacript:void(0)" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="{{ asset($customer->vehicle->image) }}"
                                                            alt="User Image"></a>
                                                </td>
                                                <td>{{ $customer->vehicle->color }}</td>

                                                <td>{{ \Carbon\Carbon::parse($customer->date_of_purchase)->format('d-m-Y') }}
                                                </td>
                                                <td>{{ \Carbon\Carbon::parse($customer->produce_date)->format('d-m-Y') }}
                                                </td>
                                                <td>{{ $customer->whoseuser->name }}</td>
                                                <td>{{ $customer->invoice_no }}</td>
                                                <td>{{ $customer->insurance_policy_no }}</td>
                                                <td>{{ $customer->customer_gstno }}</td>
                                                <td><a href="{{ url('/edit-customer') }}/{{ $customer->id }}"><i
                                                            class="fa fa-edit"></i></a><a
                                                        href="{{ url('/delete-customer') }}/{{ $customer->id }}"><i
                                                            class="fa fa-trash"></i></a></td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                {{ $customers->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    </div>

    {{-- 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#search_header').on('keyup', function() {
                let query = $(this).val();
                $.ajax({
                    url: '/search-customer-by-admin',
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
                            <td><h2 class="table-avatar"><a href="/manage-single-customer/${customer.id}">${customer.user.name}</a></h2></td>
                            <td>${customer.user.email}</td>
                            <td>${customer.user.phoneno}</td>
                            <td><a href="/profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="${customer.user.image}" alt="User Image"></a></td>
                            <td>${customer.user.dob}</td>
                            <td>${customer.user.address}</td>
                            <td>${customer.user.gender == 0 ? 'Female' : customer.user.gender == 1 ? 'Male' : 'Other'}</td>
                            <td>${customer.battery_number}</td>
                            <td>${customer.chassis_number}</td>
                            <td>${customer.controller_number}</td>
                            <td>${customer.vehicle.model}</td>
                            <td>${customer.vehicle.type}</td>
                            <td><a href="/vehicle/${customer.vehicle.id}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="${customer.vehicle.image}" alt="Vehicle Image"></a></td>
                            <td>${customer.vehicle.color}</td>
                            <td>${customer.purchase_date}</td>
                            <td>${customer.produce_date}</td>
                            <td>${customer.whoseuser ? customer.whoseuser.name : 'N/A'}</td>
                            <td>${customer.invoice_no}</td>
                            <td>${customer.insurance_no}</td>
                            <td>${customer.gst_no}</td>
                            <td>
                                <a href="/edit-customer/${customer.id}"><i class="fa fa-edit"></i></a>
                                <a href="/delete-customer/${customer.id}"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                       `;
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
    </script> --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#search_header').on('keyup', function() {
                let query = $(this).val();
                $.ajax({
                    url: '/search-customer-by-admin',
                    type: 'GET',
                    data: {
                        query: query
                    },
                    success: function(data) {
                        let output = '';

                        $.each(data, function(index, customer) {
                            output += `
                        <tr>
                            <td>${index + 1}</td>
                            <td><h2 class="table-avatar"><a href="/manage-single-customer/${customer.id}">${customer.user.name}</a></h2></td>
                            <td>${customer.user.email}</td>
                            <td>${customer.user.phoneno}</td>
                            <td><a href="/profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="${customer.user.image}" alt="User Image"></a></td>
                            <td>${customer.user.dob}</td>
                            <td>${customer.user.address}</td>
                            <td>${customer.user.gender == 0 ? 'Female' : customer.user.gender == 1 ? 'Male' : 'Other'}</td>
                            <td>${customer.battery_number}</td>
                            <td>${customer.chassis_number}</td>
                            <td>${customer.controller_number}</td>
                            <td>${customer.vehicle.model}</td>
                            <td>${customer.vehicle.type}</td>
                            <td><a href="/vehicle/${customer.vehicle.id}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="${customer.vehicle.image}" alt="Vehicle Image"></a></td>
                            <td>${customer.vehicle.color}</td>
                            <td>${customer.purchase_date}</td>
                            <td>${customer.produce_date}</td>
                            <td>${customer.whoseuser ? customer.whoseuser.name : 'N/A'}</td>
                            <td>${customer.invoice_no}</td>
                            <td>${customer.insurance_no}</td>
                            <td>${customer.gst_no}</td>
                            <td>
                                <a href="/edit-customer/${customer.id}"><i class="fa fa-edit"></i></a>
                                <a href="/delete-customer/${customer.id}"><i class="fa fa-trash"></i></a>
                            </td>
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
