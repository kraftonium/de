@extends('backend.partials.mainindex')

@push('title')
    <title>Manage Dealership Form | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid">



            <div class="row">
                <div class="col-md-12 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Manage Dealership Form List</h4>
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
                                            <th>City</th>
                                            <th>State</th>
                                            <th>Pincode</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dealers as $dealer)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $dealer->name }}</td>
                                                <td>{{ $dealer->email }}</td>
                                                <td>{{ $dealer->phoneno }}</td>
                                                <td>{{ $dealer->dealership }}</td>
                                                <td>{{ $dealer->city }}</td>
                                                <td>{{ $dealer->state }}</td>
                                                <td>{{ $dealer->pincode }}</td>
                                                <td>{{ $dealer->address }}
                                                </td>
                                                <td><a href="{{ url('/delete-dealership-form') }}/{{ $dealer->id }}"><i
                                                            class="fa fa-trash"></i></a></td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                {{ $dealers->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    </div>
@endsection
