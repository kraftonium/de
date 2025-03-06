@extends('backend.partials.mainindex')

@push('title')
    <title>Manage Book Ride | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid">



            <div class="row">
                <div class="col-md-12 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Manage Book Ride Form List</h4>
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
                                            <th> Type</th>
                                            <th>Ride Date</th>
                                            <th>Ride Time</th>
                                            <th>City</th>
                                            <th>State</th>
                                            <th>Pincode</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rides as $ride)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $ride->name }}</td>
                                                <td>{{ $ride->email }}</td>
                                                <td>{{ $ride->phoneno }}</td>
                                                <td>{{ $ride->vehicle }}</td>
                                                <td>{{ \Carbon\Carbon::parse($ride->ride_date)->format('d-m-Y') }}</td>
                                                <td>{{ $ride->ride_time }}</td>
                                                <td>{{ $ride->city }}</td>
                                                <td>{{ $ride->state }}</td>
                                                <td>{{ $ride->pincode }}</td>
                                                <td>{{ $ride->address }}
                                                </td>
                                                <td><a href="{{ url('/delete-book-ride') }}/{{ $ride->id }}"><i
                                                            class="fa fa-trash"></i></a></td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                {{ $rides->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    </div>
@endsection
