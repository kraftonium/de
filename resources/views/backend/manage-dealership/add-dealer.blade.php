@extends('backend.partials.mainindex')

@push('title')
    <title>Add Dealership | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid col-md-12">

            <div class="container">
                <h3 class="h3-heading mb-4">Add New Dealer</h3>

                <form action="{{ url('/add-dealership-submit') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="col-lg-12 form-input-container">

                        <div class="mb-3  ">
                            <label for="name">Search Name</label>
                            {{-- this is for user id for this is used to search name of user --}}
                            <input type="hidden" id="user_id" name="user_id">

                            <input class="form-control" type="text" id="name" placeholder="Search Name"
                                name="name" oninput="searchUsers()">
                            <div id="userList" class="dropdown-menu w-100"
                                style="display: none; position: absolute; max-height: 200px; overflow-y: auto;"></div>
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  ">
                            <label for="firm_address">Firm Address</label>
                            <textarea name="firm_address" id="firm_address" class="form-control" placeholder="Address">{{ old('firm_address') }}</textarea>
                            <span class="text-danger">
                                @error('firm_address')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>


                        <div class="mb-3  ">
                            <label for="firm_phoneno">Firm Phone No.</label>
                            <input class="form-control" type="text" id="firm_phoneno" placeholder=" Firm Phone No."
                                name="firm_phoneno" value="{{ old('firm_phoneno') }}">
                            <span class="text-danger">
                                @error('firm_phoneno')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  ">
                            <label for="firm_email">Firm Email</label>
                            <input class="form-control" type="text" id="firm_email" placeholder="Firm Email"
                                name="firm_email" value="{{ old('firm_email') }}">
                            <span class="text-danger">
                                @error('firm_email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  ">
                            <label for="firm_name">Firm Name</label>
                            <input class="form-control" type="text" id="firm_name" placeholder="Firm Name"
                                name="firm_name" value="{{ old('firm_name') }}">
                            <span class="text-danger">
                                @error('firm_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  ">
                            <label for="firm_gstno">Firm GST No.</label>
                            <input class="form-control" type="text" id="firm_gstno" placeholder="Firm GST No."
                                name="firm_gstno" value="{{ old('firm_gstno') }}">
                            <span class="text-danger">
                                @error('firm_gstno')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  ">
                            <label for="total_revenue">Total Revenue</label>
                            <input class="form-control" type="text" id="total_revenue" name="total_revenue"
                                placeholder="Total Revenue" value="{{ old('total_revenue') }}">
                            <span class="text-danger">
                                @error('total_revenue')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  ">
                            <label for="total_profit">Total Profit</label>
                            <input class="form-control" type="text" id="total_profit" placeholder="Total Profit"
                                name="total_profit" value="{{ old('total_profit') }}">
                            <span class="text-danger">
                                @error('total_profit')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  ">
                            <label for="firm_photo">Firm Photo</label>
                            <input class="form-control" type="file" id="firm_photo" name="firm_photo"
                                placeholder="Firm Image" value="{{ old('firm_photo') }}">
                            <span class="text-danger">
                                @error('firm_photo')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  ">
                            <label for="business_profile_link">Firm Google Business Profile Link</label>
                            <input class="form-control" type="text" id="business_profile_link"
                                name="business_profile_link" placeholder="Firm Google Business Profile Link"
                                value="{{ old('business_profile_link') }}">

                        </div>

                        <div class="mb-3  ">
                            <label for="whose_name">Search Name Of Whose Dealer</label>
                            {{-- this is for user id for this is used to search name of user --}}
                            <input type="hidden" id="whose_user_id" name="whose_user_id">

                            <input class="form-control" type="text" id="whose_name" placeholder="Search Name"
                                name="whose_name" oninput="searchWhoseUsers()">
                            <div id="whose_userList" class="dropdown-menu w-100"
                                style="display: none; position: absolute; max-height: 200px; overflow-y: auto;"></div>
                            <span class="text-danger">
                                @error('whose_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  ">
                            <label for="firm_pincode">Firm Pincode</label>
                            <input class="form-control" type="text" id="firm_pincode" placeholder="Firm Pincode"
                                name="firm_pincode" value="{{ old('firm_pincode') }}">
                            <span class="text-danger">
                                @error('firm_pincode')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  ">
                            <label for="firm_area">Firm Area</label>
                            <input class="form-control" type="text" id="firm_area" name="firm_area"
                                placeholder="Firm Area" value="{{ old('firm_area') }}">
                            {{-- <span class="text-danger">
                                @error('firm_area')
                                    {{ $message }}
                                @enderror
                            </span> --}}
                        </div>

                        <div class="mb-3  ">
                            <label for="firm_taluka">Firm Taluka</label>
                            <input class="form-control" type="text" id="firm_taluka" placeholder="Firm Taluka"
                                name="firm_taluka" value="{{ old('firm_taluka') }}">
                            {{-- <span class="text-danger">
                                @error('firm_taluka')
                                    {{ $message }}
                                @enderror
                            </span> --}}
                        </div>

                        <div class="mb-3  ">
                            <label for="firm_district">Firm District</label>
                            <input class="form-control" type="text" id="firm_district" placeholder="Firm District"
                                name="firm_district" value="{{ old('firm_district') }}">
                            {{-- <span class="text-danger">
                                @error('firm_district')
                                    {{ $message }}
                                @enderror
                            </span> --}}
                        </div>

                        <div class="mb-3  ">
                            <label for="firm_zone">Firm Zone</label>
                            <input class="form-control" type="text" id="firm_zone" name="firm_zone"
                                placeholder="Firm Zone" value="{{ old('firm_zone') }}">
                            {{-- <span class="text-danger">
                                @error('firm_zone')
                                    {{ $message }}
                                @enderror
                            </span> --}}
                        </div>

                        <div class="mb-3  ">
                            <label for="firm_state">Firm State</label>
                            <input class="form-control" type="text" id="firm_state" name="firm_state"
                                value="{{ old('firm_state') }}" placeholder="Firm State">
                            {{-- <span class="text-danger">
                                @error('firm_state')
                                    {{ $message }}
                                @enderror
                            </span> --}}
                        </div>

                        <div class="mb-3  ">
                            <label for="firm_country">Firm Country</label>
                            <input class="form-control" type="text" id="firm_country" name="firm_country"
                                value="{{ old('firm_country') }}" placeholder="Firm Country">
                            <span class="text-danger">
                                @error('firm_country')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="mb-0 d-flex gap-3 mt-4">
                        <button class="btn submit-btn w-50 " type="submit">Submit</button>
                        <button class="btn cancel-btn w-50"><a
                                href="{{ url('/manage-dealerships') }}">Cancel</a></button>
                    </div>
                </form>
            </div>


        </div>
    </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function searchUsers() {
            let query = $("#name").val();

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
            $("#name").val(name);
            $("#userList").hide();
        }

        function searchWhoseUsers() {
            let query = $("#whose_name").val();

            if (query.length > 2) { // Start searching after 2 characters
                $.ajax({
                    url: '/search-users',
                    type: "GET",
                    data: {
                        query: query
                    },
                    success: function(data) {
                        let dropdown = $("#whose_userList");
                        dropdown.empty();
                        if (data.length > 0) {
                            data.forEach(user => {
                                dropdown.append(
                                    `<a href="#" class="dropdown-item" onclick="selectWhoseUser(${user.id}, '${user.name}')">${user.name}</a>`
                                );
                            });
                            dropdown.show();
                        } else {
                            dropdown.hide();
                        }
                    }
                });
            } else {
                $("#whose_userList").hide();
            }
        }

        function selectWhoseUser(id, name) {
            $("#whose_user_id").val(id);
            $("#whose_name").val(name);
            $("#whose_userList").hide();
        }
    </script>
@endsection
