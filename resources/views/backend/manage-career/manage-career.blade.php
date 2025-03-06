@extends('backend.partials.mainindex')

@push('title')
    <title>Manage Career | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid">



            <div class="row">
                <div class="col-md-12 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Manage Career Form List</h4>
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
                                            <th> Position</th>
                                            <th>Resume</th>
                                            <th>Cover Letter</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($careers as $career)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $career->name }}</td>
                                                <td>{{ $career->email }}</td>
                                                <td>{{ $career->phoneno }}</td>
                                                <td>{{ $career->profile }}</td>
                                                <td><a href="{{ asset($career->resumepath) }}">View Resume</a></td>
                                                <td>{{ $career->coverletter }}
                                                </td>
                                                <td><a href="{{ url('/delete-career') }}/{{ $career->id }}"><i
                                                            class="fa fa-trash"></i></a></td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                {{ $careers->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    </div>
@endsection
