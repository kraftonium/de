@extends('backend.partials.mainindex')

@push('title')
    <title>Manage Vehicles | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row">
                <div class="col-md-12 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Manage Vehicle </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="max-height: 420px; overflow-y: auto;">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Vehicle Name</th>
                                            <th>Vehicle Type</th>
                                            <th>Vehicle Img</th>
                                            <th>Vehicle Colour</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($vehicles as $vehicle)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $vehicle->name_of_vehicle }}</td>
                                                <td>{{ $vehicle->vehicletype->type_of_vehicle }}</td>
                                                <td><a href="javascriptvoid:(0)" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="{{ asset($vehicle->image) }}" alt="User Image"></a></td>
                                                <td>{{ $vehicle->color }}</td>
                                                <td><a href="{{ url('/edit-vehicle') }}/{{ $vehicle->id }}"><i
                                                            class="fa fa-edit"></i></a><a
                                                        href="{{ url('/delete-vehicle') }}/{{ $vehicle->id }}"><i
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
