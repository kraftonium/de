@extends('backend.partials.mainindex')

@push('title')
    <title>Manage Dealership | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid">


            <div class="row">
                {{-- <div class="card-header"> --}}
                <h4 class="">Firm Name : {{ $dealership->firm_name }}</h4>
                {{-- </div> --}}
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon">
                                    <i class="fa fa-users  "></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{ $totalcustomers }}</h3>
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
                                    <h3>{{ $totalstock }}</h3>
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
                                    <h3>{{ $totalorders }}</h3>
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
                                    <h3>{{ $totalrevenue }}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Total Revenue</h6>
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
                                    <h3>{{ $lastmonthorders }}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Last Month Orders</h6>
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
                                    <i class="fa fa-dollar-sign"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{ $lastmonthrevenue }}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Last Month Revenue</h6>
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
                                    <i class="fa fa-dollar-sign"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{ $tds }}</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Total TDS</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar  w-50"></div>
                                </div>
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
                        <h4 class="card-title">Dealer Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" style="max-height: 420px; overflow-y: auto;">
                            <table class="table table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        {{-- <th>#</th> --}}
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
                                        {{-- <th>Total Profit</th> --}}
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
                                <tbody>

                                    <tr>
                                        {{-- <td>{{ $loop->iteration }}</td> --}}
                                        <td>
                                            <h2 class="table-avatar">
                                                {{-- <a href="/profile.html"> --}}
                                                {{ $dealership->user->name }}
                                                {{-- </a> --}}
                                            </h2>
                                        </td>
                                        <td>{{ $dealership->user->email }}</td>
                                        <td>{{ $dealership->user->phoneno }}</td>
                                        <td>
                                            {{-- <a href="/profile.html" class="avatar avatar-sm me-2"> --}}
                                            <img class="avatar-img rounded-circle"
                                                src="{{ asset($dealership->user->image) }}" alt="User Image">
                                            {{-- </a> --}}
                                        </td>
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
                                        {{-- <td>{{ $dealership->total_profit }}</td> --}}
                                        <td><a href="/profile.html" class="avatar avatar-sm me-2"><img
                                                    class="avatar-img rounded-circle"
                                                    src="{{ asset($dealership->firm_photo) }}" alt="User Image"></a>
                                        </td>
                                        <td>{{ $dealership->whoseuser->name }}</td>
                                        <td>{{ $dealership->firm_pincode }}</td>
                                        <td>{{ $dealership->firm_area }}</td>
                                        <td>{{ $dealership->firm_taluka }}</td>
                                        <td>{{ $dealership->firm_district }}</td>
                                        <td>{{ $dealership->firm_zone }}</td>
                                        <td>{{ $dealership->firm_state }}</td>
                                        <td>{{ $dealership->firm_country }}</td>
                                        @if (Auth::user()->id == 1)
                                            <td><a href="{{ url('/edit-dealership') }}/{{ $dealership->id }}"><i
                                                        class="fa fa-edit"></i></a><a
                                                    href="{{ url('/delete-dealership') }}/{{ $dealership->id }}"><i
                                                        class="fa fa-trash"></i></a></td>
                                        @endif
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
                        <h4 class="card-title">Manage His Dealers List</h4>
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
                                        {{-- <th>Total Profit</th> --}}
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
                                <tbody>
                                    @foreach ($totalhisdealers as $dealers)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    {{-- <a href="/profile.html"> --}}
                                                    {{ $dealers->user->name }}
                                                    {{-- </a> --}}
                                                </h2>
                                            </td>
                                            <td>{{ $dealers->user->usertype->usertype }}</td>
                                            <td>{{ $dealers->user->email }}</td>
                                            <td>{{ $dealers->user->phoneno }}</td>
                                            <td>
                                                {{-- <a href="/profile.html" class="avatar avatar-sm me-2"> --}}
                                                <img class="avatar-img rounded-circle"
                                                    src="{{ asset($dealers->user->image) }}" alt="User Image">
                                                {{-- </a> --}}
                                            </td>
                                            <td>{{ $dealers->user->dob }}</td>
                                            <td>{{ $dealers->user->address }}</td>
                                            <td>
                                                @if ($dealers->user->gender == 0)
                                                    Female
                                                @elseif($dealers->user->gender == 1)
                                                    Male
                                                @else
                                                    Other
                                                @endif
                                            </td>
                                            <td>{{ $dealers->user->usertype->usertype }}</td>
                                            <td>{{ $dealers->firm_address }}</td>
                                            <td>{{ $dealers->firm_phoneno }}</td>
                                            <td>{{ $dealers->firm_email }}</td>
                                            <td>{{ $dealers->firm_name }}</td>
                                            <td>{{ $dealers->firm_gstno }}</td>
                                            <td>{{ $dealers->total_revenue }}</td>
                                            {{-- <td>{{ $dealership->total_profit }}</td> --}}
                                            <td><a href="" class="avatar avatar-sm me-2"><img
                                                        class="avatar-img rounded-circle"
                                                        src="{{ asset($dealers->firm_photo) }}" alt="User Image"></a>
                                            </td>
                                            <td>{{ $dealers->whoseuser->name }}</td>
                                            <td>{{ $dealers->firm_pincode }}</td>
                                            <td>{{ $dealers->firm_area }}</td>
                                            <td>{{ $dealers->firm_taluka }}</td>
                                            <td>{{ $dealers->firm_district }}</td>
                                            <td>{{ $dealers->firm_zone }}</td>
                                            <td>{{ $dealers->firm_state }}</td>
                                            <td>{{ $dealers->firm_country }}</td>
                                            @if (Auth::user()->id == 1)
                                                <td><a href="{{ url('/edit-dealership') }}/{{ $dealers->id }}"><i
                                                            class="fa fa-edit"></i></a><a
                                                        href="{{ url('/delete-dealership') }}/{{ $dealers->id }}"><i
                                                            class="fa fa-trash"></i></a></td>
                                            @endif
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{ $totalhisdealers->links() }}
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-md-12 d-flex">

                <div class="card card-table flex-fill">
                    <div class="card-header">
                        <h4 class="card-title"><a
                                href="{{ url('/manage-single-dealer-inquiries') }}/{{ $dealership->user->id }}">Manage
                                Inquiries</a></h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" style="max-height: 420px; overflow-y: auto;">
                            <table class="table table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phoneno</th>
                                        <th>City</th>
                                        <th>Inquiry Subject</th>
                                        <th>Description</th>
                                        <th>Whose Inquiry</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inquiries as $inquiry)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}</td>

                                            <td>
                                                <h2 class="table-avatar">
                                                    {{ $inquiry->name }}</h2>
                                            <td>
                                                {{ $inquiry->email }}</td>
                                            <td>
                                                {{ $inquiry->phoneno }}</td>
                                            <td>
                                                {{ $inquiry->city }}</td>
                                            <td>
                                                {{ $inquiry->inquiry_subject }}</td>
                                            <td>
                                                {{ $inquiry->description }}</td>
                                            <td>
                                                {{ $inquiry->whoseInquiry->name }}</td>
                                            @if (Auth::user()->id == 1)
                                                <td><a href="{{ url('/edit-inquiries') }}/{{ $inquiry->id }}"><i
                                                            class="fa fa-edit"></i></a><a
                                                        href="{{ url('/delete-inquiries') }}/{{ $inquiry->id }}"><i
                                                            class="fa fa-trash"></i></a></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $inquiries->links() }}
                        </div>
                    </div>
                </div>

            </div>





            <div class="card card-table flex-fill">
                <div class="card-header">
                    <h4 class="card-title">Manage Stock List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="max-height: 420px; overflow-y: auto;">
                        <table class="table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Color</th>
                                    <th>Quantity</th>
                                    <th>Whose Stock</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($colorstocks as $cstock)
                                    <tr style="background-color: {{ $cstock->color }};font-weight:bolder;">
                                        <td style="color: {{ $cstock->color == 'black' ? 'white' : 'black' }};">
                                            {{ $loop->iteration }}</td>
                                        <td style="color: {{ $cstock->color == 'black' ? 'white' : 'black' }};">
                                            <h2 class="table-avatar">
                                                {{ $cstock->color }}</h2>
                                        <td style="color: {{ $cstock->color == 'black' ? 'white' : 'black' }};">
                                            {{ $cstock->quantity }}</td>
                                        <td style="color: {{ $cstock->color == 'black' ? 'white' : 'black' }};">
                                            {{ $cstock->whoseStockColor->name }}</td>
                                        @if (Auth::user()->id == 1)
                                            <td style="color: {{ $cstock->color == 'black' ? 'white' : 'black' }};"><a
                                                    href="{{ url('/edit-stock') }}/{{ $cstock->id }}"><i
                                                        class="fa fa-edit"></i></a><a
                                                    href="{{ url('/delete-stock') }}/{{ $cstock->id }}"><i
                                                        class="fa fa-trash"></i></a></td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>







            <div class="card card-table flex-fill">
                <div class="card-header">
                    <h4 class="card-title">Manage Stock List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="max-height: 420px; overflow-y: auto;">
                        <table class="table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Vehicle Name</th>
                                    <th>Quantity</th>
                                    <th>Whose Stock</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stocks as $stock)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <h2 class="table-avatar">{{ $stock->vehicle->name_of_vehicle }} |
                                                {{ $stock->vehicle->color }}</h2>
                                        <td>{{ $stock->quantity }}</td>
                                        <td>{{ $stock->whoseStock->name }}</td>
                                        @if (Auth::user()->id == 1)
                                            <td><a href="{{ url('/edit-stock') }}/{{ $stock->id }}"><i
                                                        class="fa fa-edit"></i></a><a
                                                    href="{{ url('/delete-stock') }}/{{ $stock->id }}"><i
                                                        class="fa fa-trash"></i></a></td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>

    </div>
    </div>

    </div>
@endsection
