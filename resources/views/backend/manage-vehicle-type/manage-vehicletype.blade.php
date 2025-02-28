@extends('backend.partials.mainindex')

@push('title')
    <title>Manage Vehicle Type | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row">
                <div class="col-md-12 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Manage Vehicle Type</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="max-height: 420px; overflow-y: auto;">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Vehicle Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($types as $type)
                                            <tr>
                                                <td> {{ $loop->iteration }} </td>
                                                <td>{{ $type->type_of_vehicle }}</td>
                                                <td><a href="{{ url('/edit-vehicle-type') }}/{{ $type->id }}"><i
                                                            class="fa fa-edit"></i></a><a
                                                        href="{{ url('/delete-vehicle-type') }}/{{ $type->id }}"><i
                                                            class="fa fa-trash"></i></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $types->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    </div>
@endsection
