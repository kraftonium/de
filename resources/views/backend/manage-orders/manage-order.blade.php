@extends('backend.partials.mainindex')

@push('title')
    <title>Manage Orders | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid">




            <div class="row">
                <div class="col-md-12 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Manage Order List</h4>
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
                                            <th>Price</th>
                                            <th>Warranty</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>

                                                    <h2 class="table-avatar">
                                                        <a
                                                            href="/profile.html">{{ $order->orderByCustomer->user->name }}</a>


                                                    </h2>
                                                </td>
                                                <td>{{ $order->orderByCustomer->user->email }}</td>
                                                <td>{{ $order->orderByCustomer->user->phoneno }}</td>
                                                <td><a href="/profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="{{ asset($order->orderByCustomer->user->image) }}"
                                                            alt="User Image"></a></td>
                                                <td>{{ \Carbon\Carbon::parse($order->orderByCustomer->user->dob)->format('d-m-Y') }}
                                                </td>
                                                <td>{{ $order->orderByCustomer->user->address }}</td>
                                                <td>
                                                    @if ($order->orderByCustomer->user->gender == 0)
                                                        Female
                                                    @elseif($order->orderByCustomer->user->gender == 1)
                                                        Male
                                                    @else
                                                        Other
                                                    @endif
                                                </td>

                                                <td>{{ $order->customerDetails->battery_no }}</td>
                                                <td>{{ $order->customerDetails->chassis_no }}</td>
                                                <td>{{ $order->customerDetails->controller_no }}</td>
                                                <td>{{ $order->customerDetails->vehicle->name_of_vehicle }}</td>
                                                <td>{{ $order->customerDetails->vehicle->vehicletype->type_of_vehicle }}
                                                </td>
                                                <td><a href="/profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="{{ asset($order->customerDetails->vehicle->image) }}"
                                                            alt="User Image"></a>
                                                </td>
                                                <td>{{ $order->customerDetails->vehicle->color }}</td>

                                                <td>{{ \Carbon\Carbon::parse($order->customerDetails->date_of_purchase)->format('d-m-Y') }}
                                                </td>
                                                <td>{{ \Carbon\Carbon::parse($order->customerDetails->produce_date)->format('d-m-Y') }}
                                                </td>
                                                <td>{{ $order->orderByWhom->name }}</td>
                                                <td>{{ $order->customerDetails->invoice_no }}</td>
                                                <td>{{ $order->customerDetails->insurance_policy_no }}</td>
                                                <td>{{ $order->customerDetails->customer_gstno }}</td>
                                                <td>{{ $order->total_price }}</td>
                                                <td>{{ $order->warranty }}</td>
                                                <td><a href="{{ url('/edit-order') }}/{{ $order->id }}"><i
                                                            class="fa fa-edit"></i></a><a
                                                        href="{{ url('/delete-order') }}/{{ $order->id }}"><i
                                                            class="fa fa-trash"></i></a></td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                                {{ $orders->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    </div>
@endsection
