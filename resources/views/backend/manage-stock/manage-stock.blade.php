@extends('backend.partials.mainindex')

@push('title')
    <title>Manage Stock | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid">




            <div class="row">
                <div class="col-md-12 d-flex">

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

    </div>
@endsection
