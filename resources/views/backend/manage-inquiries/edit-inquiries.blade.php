@extends('backend.partials.mainindex')

@push('title')
    <title>Edit Inquiries | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid col-md-12">

            <div class="container">
                <h3 class="h3-heading mb-4">Add New Stock</h3>

                <form action="{{ url('/update-inquiries') }}/{{ $inquiry->id }}" method="POST">
                    @csrf
                    <div class="col-lg-12 form-input-container ">
                        {{-- <div class="mb-3 ">
                            <label for="vehiclename">Vehicle Name</label>
                            <select name="vehicle_id" id="vehicle_id" class="form-control">
                                <option value="">Vehicle Name</option>
                                @foreach ($vehicles as $vehicle)
                                    <option value="{{ $vehicle->id }}" @if (old('vehicle_id') == $vehicle->id) selected @endif>
                                        {{ $vehicle->name_of_vehicle }} |
                                        {{ $vehicle->color }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">
                                @error('vehicle_id')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div> --}}



                        <div class="mb-3  ">
                            <label for="name">Name</label>
                            <input class="form-control" type="text" id="name" placeholder="Name" name="name"
                                value="{{ $inquiry->name }}">
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  ">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" id="email" placeholder="Email" name="email"
                                value="{{ $inquiry->email }}">
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  ">
                            <label for="phoneno">Phoneno</label>
                            <input class="form-control" type="text" id="phoneno" placeholder="Phoneno" name="phoneno"
                                value="{{ $inquiry->phoneno }}">
                            <span class="text-danger">
                                @error('phoneno')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  ">
                            <label for="city">City</label>
                            <input class="form-control" type="text" id="city" placeholder="City" name="city"
                                value="{{ $inquiry->city }}">
                            <span class="text-danger">
                                @error('city')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  ">
                            <label for="inquiry_subject">Inquiry Subject</label>
                            <input class="form-control" type="text" id="inquiry_subject" placeholder="Inquiry Subject"
                                name="inquiry_subject" value="{{ $inquiry->inquiry_subject }}">
                            <span class="text-danger">
                                @error('inquiry_subject')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  ">
                            <label for="description">Description</label>
                            {{-- <input class="form-control" type="text" id="description" placeholder="Description"
                                name="inquiry_subject" value="{{ old('inquiry_subject') }}"> --}}
                            <textarea name="description" id="description" class="form-control" placeholder="Description" cols="30"
                                rows="10">{{ $inquiry->description }}</textarea>
                            <span class="text-danger">
                                @error('description')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>



                        <div class="mb-3  ">
                            <label for="name">Search Name Of Whose Stock</label>

                            <input type="hidden" id="user_id" name="user_id" value="{{ $inquiry->whose_inquiry }}">

                            <input class="form-control" type="text" id="whose_inquiry"
                                placeholder="Search Name Of Whose Stock" name="whose_inquiry" oninput="searchUsers()"
                                value="{{ $inquiry->whoseInquiry->name }}">
                            <div id="userList" class="dropdown-menu w-100"
                                style="display: none; position: absolute; max-height: 200px; overflow-y: auto;"></div>
                            <span class="text-danger">
                                @error('whose_inquiry')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>


                    </div>

                    <div class="mb-0 d-flex gap-3 mt-4">
                        <button class="btn submit-btn w-50 " type="submit">Submit</button>
                        <button class="btn cancel-btn w-50"><a href="{{ url('/dashboard') }}">Cancel</a></button>
                    </div>
                </form>
            </div>


        </div>
    </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function searchUsers() {
            let query = $("#whose_inquiry").val();

            if (query.length > 2) { // Start searching after 2 characters
                $.ajax({
                    url: '/search-users',
                    type: "GET",
                    data: {
                        query: query
                    },
                    success: function(data) {
                        let dropdown = $("#userList");
                        dropdown.empty();
                        if (data.length > 0) {
                            data.forEach(user => {
                                dropdown.append(
                                    `<a href="#" class="dropdown-item" onclick="selectUser(${user.id}, '${user.name}')">${user.name}</a>`
                                );
                            });
                            dropdown.show();
                        } else {
                            dropdown.hide();
                        }
                    }
                });
            } else {
                $("#userList").hide();
            }
        }

        function selectUser(id, name) {
            $("#user_id").val(id);
            $("#whose_inquiry").val(name);
            $("#userList").hide();
        }
    </script>
@endsection
