@extends('backend.partials.mainindex')

@push('title')
    <title>Manage Inquiries | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid">


            <div class="row">
                <div class="col-md-12 d-flex">

                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Manage Inquiries</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="max-height: 420px; overflow-y: auto;">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phoneno</th>
                                            <th>City</th>
                                            <th>Inquiry Subject</th>
                                            <th>Description</th>
                                            <th>Whose Inquiry</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="search_results"></tbody>

                                    <tbody>
                                        @foreach ($inquiries as $inquiry)
                                            <tr>
                                                <td>
                                                    {{ $loop->iteration }}</td>

                                                <td>
                                                    <h2 class="table-avatar">
                                                        {{ $inquiry->name }}</h2>
                                                <td>
                                                    {{ $inquiry->email }}</td>
                                                <td>
                                                    {{ $inquiry->phoneno }}</td>
                                                <td>
                                                    {{ $inquiry->city }}</td>
                                                <td>
                                                    {{ $inquiry->inquiry_subject }}</td>
                                                <td>
                                                    {{ $inquiry->description }}</td>
                                                <td>
                                                    {{ $inquiry->whoseInquiry->name }}</td>
                                                @if (Auth::user()->id == 1)
                                                    <td><a href="{{ url('/edit-inquiries') }}/{{ $inquiry->id }}"><i
                                                                class="fa fa-edit"></i></a><a
                                                            href="{{ url('/delete-inquiries') }}/{{ $inquiry->id }}"><i
                                                                class="fa fa-trash"></i></a></td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $inquiries->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {

            $('#search_header').on('keyup', function() {
                let query = $(this).val();

                $.ajax({
                    url: '/search-inquiries',
                    type: 'GET',
                    data: {
                        query: query
                    },
                    success: function(data) {
                        let output = '';

                        $.each(data, function(index, inquiry) {

                            output += `
                        <tr>
                            <td>${index + 1}</td>
                            <td>${inquiry.name}</td>
                            <td>${inquiry.email}</td>
                            <td>${inquiry.phoneno}</td>
                            <td>${inquiry.city}</td>
                            <td>${inquiry.inquiry_subject}</td>
                            <td>${inquiry.description}</td>
                            <td>${inquiry.whoseInquiry ? inquiry.whose_inquiry.name : ''}</td>
                        </tr>
                    `;
                        });

                        $('#search_results').html(output);

                        if (data.length === 0 || query === '') {
                            $('#search_results').hide();
                        } else {
                            $('#search_results').show();
                        }
                    }
                });
            });

        });
    </script>
@endsection
