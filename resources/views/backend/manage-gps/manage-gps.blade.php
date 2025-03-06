@extends('backend.partials.mainindex')

@push('title')
    <title>Manage GPS | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid">



            <div class="row">
                <div class="col-md-12 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Manage Gps Form List</h4>
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
                                            <th>Subject</th>
                                            <th>City</th>
                                            <th>State</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($gpss as $gps)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $gps->name }}</td>
                                                <td>{{ $gps->email }}</td>
                                                <td>{{ $gps->phoneno }}</td>
                                                <td>{{ $gps->subject }}</td>
                                                <td>{{ $gps->city }}</td>
                                                <td>{{ $gps->state }}</td>
                                                <td>{{ $gps->message }}
                                                </td>
                                                <td><a href="{{ url('/delete-gps') }}/{{ $gps->id }}"><i
                                                            class="fa fa-trash"></i></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $gpss->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    </div>
@endsection
