@extends('backend.partials.mainindex')

@push('title')
    <title>Manage Lucky Draw | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid">



            <div class="row">
                <div class="col-md-12 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Manage Lucky-Draw Form List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="max-height: 420px; overflow-y: auto;">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>City</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($draws as $draw)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $draw->name }}</td>
                                                <td>{{ $draw->phoneno }}</td>
                                                <td>{{ $draw->city }}</td>
                                                <td><a href="{{ url('/delete-lucky-draw') }}/{{ $draw->id }}"><i
                                                            class="fa fa-trash"></i></a></td>
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

    </div>
@endsection
