@extends('backend.partials.mainindex')

@push('title')
    <title>Manage Color Stock | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid">


            <div class="row">
                <div class="col-md-12 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Manage Color Stock List</h4>
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
                                        @foreach ($stocks as $stock)
                                            <tr
                                                style="background-color: {{ $stock->color }};font-weight:bolder; color: {{ $stock->color == 'black' ? 'white' : 'black' }};">
                                                <td style="color: {{ $stock->color == 'black' ? 'white' : 'black' }};">
                                                    {{ $loop->iteration }}</td>
                                                <td style="color: {{ $stock->color == 'black' ? 'white' : 'black' }};">
                                                    <h2 class="table-avatar">
                                                        {{ $stock->color }}</h2>
                                                <td style="color: {{ $stock->color == 'black' ? 'white' : 'black' }};">
                                                    {{ $stock->quantity }}</td>
                                                <td style="color: {{ $stock->color == 'black' ? 'white' : 'black' }};">
                                                    {{ $stock->whoseStockColor->name }}</td>
                                                @if (Auth::user()->id == 1)
                                                    <td><a href="{{ url('/edit-colors-stock') }}/{{ $stock->id }}"><i
                                                                class="fa fa-edit"></i></a><a
                                                            href="{{ url('/delete-colors-stock') }}/{{ $stock->id }}"><i
                                                                class="fa fa-trash"></i></a></td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $stocks->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    </div>
@endsection
