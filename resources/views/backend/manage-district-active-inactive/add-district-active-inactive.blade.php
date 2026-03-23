@extends('backend.partials.mainindex')

@push('title')
    <title>Add District Active Inactive | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid col-md-12">

            <div class="container">
                <h3 class="h3-heading mb-4">Add New</h3>

                <form action="{{ url('/add-district-active-inactive-submit') }}" method="POST">
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
                            <label for="district">District</label>
                            <input class="form-control" type="text" id="district" placeholder="District" name="district"
                                value="{{ old('district') }}">
                            <span class="text-danger">
                                @error('district')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3">
                            <label for="status">Status</label>
                            <input class="form-control" type="text" id="status" placeholder="Status" name="status"
                                value="{{ old('status') }}">
                            <span class="text-danger">
                                @error('status')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>


                        <div class="mb-3  ">
                            <label for="name">Search Name Of Who Is Dealer</label>

                            <input type="hidden" id="user_id" name="user_id">

                            <input class="form-control" type="text" id="whose_dealer"
                                placeholder="Search Name Of Who Is Dealer" name="whose_dealer" oninput="searchUsers()">
                            <div id="userList" class="dropdown-menu w-100"
                                style="display: none; position: absolute; max-height: 200px; overflow-y: auto;"></div>
                            <span class="text-danger">
                                @error('whose_dealer')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>


                        <div class="mb-3  ">
                            <label for="name">Search Name Of That Dealer Is Under Whom ?</label>

                            <input type="hidden" id="under_id" name="under_id">

                            <input class="form-control" type="text" id="under_dealer"
                                placeholder="Search Name Of That Dealer Is Under Whom ?" name="under_dealer"
                                oninput="searchUnder()">
                            <div id="underList" class="dropdown-menu w-100"
                                style="display: none; position: absolute; max-height: 200px; overflow-y: auto;"></div>
                            <span class="text-danger">
                                @error('under_dealer')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3">
                            <label for="zone" class="form-label">Under Which Zone</label>
                            {{-- <input class="form-control" type="text" id="state" placeholder="State" name="state"
                                value="{{ old('state') }}"> --}}
                            <select name="zone" id="zone" class="form-select">
                                @foreach ($zones as $zone)
                                    <option value="{{ $zone->id }}" @if (old('zone') == $zone->id) selected @endif>
                                        {{ $zone->zone }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">
                                @error('zone')
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
            let query = $("#whose_dealer").val();

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
            $("#whose_dealer").val(name);
            $("#userList").hide();
        }
    </script>

    <script>
        function searchUnder() {
            let query = $("#under_dealer").val();

            if (query.length > 2) { // Start searching after 2 characters
                $.ajax({
                    url: '/search-users',
                    type: "GET",
                    data: {
                        query: query
                    },
                    success: function(data) {
                        let dropdown = $("#underList");
                        dropdown.empty();
                        if (data.length > 0) {
                            data.forEach(user => {
                                dropdown.append(
                                    `<a href="#" class="dropdown-item" onclick="selectUnder(${user.id}, '${user.name}')">${user.name}</a>`
                                );
                            });
                            dropdown.show();
                        } else {
                            dropdown.hide();
                        }
                    }
                });
            } else {
                $("#underList").hide();
            }
        }

        function selectUnder(id, name) {
            $("#under_id").val(id);
            $("#under_dealer").val(name);
            $("#underList").hide();
        }
    </script>
@endsection
