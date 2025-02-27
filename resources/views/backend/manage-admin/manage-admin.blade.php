@extends('backend.partials.mainindex')

@push('title')
    <title>Manage Admin | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row">
                <div class="col-md-12 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Manage Admin List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="max-height: 420px; overflow-y: auto;">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Dob</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td><a href="/profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="{{ asset($user->image) }}" alt="User Image"></a></td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="/profile.html">{{ $user->name }}</a>
                                                    </h2>
                                                </td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->phoneno }}</td>
                                                <td>
                                                    @if ($user->gender == '0')
                                                        Female
                                                    @elseif($user->gender == '1')
                                                        Male
                                                    @elseif($user->gender == '2')
                                                        Other
                                                    @endif
                                                </td>
                                                <td>{{ \Carbon\Carbon::parse($user->dob)->format('d-m-Y') }}</td>
                                                <td>{{ $user->address }}
                                                </td>
                                                <td><a href="{{ url('/edit-admin') }}/{{ $user->id }}"><i
                                                            class="fa fa-edit"></i></a><a
                                                        href="{{ url('/delete-admin') }}/{{ $user->id }}"><i
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
