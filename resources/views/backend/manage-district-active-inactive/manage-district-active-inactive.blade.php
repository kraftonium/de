@extends('backend.partials.mainindex')

@push('title')
    <title>Manage District Active Inactive | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid">


            <div class="row">
                <div class="col-md-12 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Manage District Active Inactive</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="max-height: 420px; overflow-y: auto;">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>District</th>
                                            <th>Status</th>
                                            <th>Under Which Zone</th>
                                            <th>Dealer</th>
                                            <th>Under Whom</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($status as $stat)
                                            <tr
                                                style="@if ($stat->status == 'Active') background-color:green; @elseif($stat->status == 'Inactive') background-color:red; @endif">
                                                <td>
                                                    {{ $loop->iteration }}</td>

                                                <td><a href="{{ url('/manage-taluka-active-inactive') }}/{{ $stat->id }}"
                                                        style="color: black!important;">
                                                        <h2 class="table-avatar">
                                                            {{ $stat->district }}</h2>
                                                    </a>
                                                <td>
                                                    {{ $stat->status }}</td>
                                                <td>
                                                    {{ $stat->Zone->zone }}</td>
                                                <td>
                                                    {{ $stat->whoseDealer->name }}</td>
                                                <td>
                                                    {{ $stat->underDealer->name }}</td>
                                                @if (Auth::user()->id == 1)
                                                    <td><a
                                                            href="{{ url('/edit-district-active-inactive') }}/{{ $stat->id }}"><i
                                                                class="fa fa-edit"></i></a><a
                                                            href="{{ url('/delete-district-active-inactive') }}/{{ $stat->id }}"><i
                                                                class="fa fa-trash"></i></a></td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $status->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    </div>
@endsection
