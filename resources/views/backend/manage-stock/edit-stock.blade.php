@extends('backend.partials.mainindex')

@push('title')
    <title>Edit Stock | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid col-md-12">

            <div class="container">
                <h3 class="h3-heading mb-4">Edit Stock</h3>

                <form action="{{ url('/update-stock') }}/{{ $stock->id }}" method="POST">
                    @csrf
                    <div class="col-lg-12 form-input-container ">
                        <div class="mb-3 col-12">
                            <label for="vehiclename">Vehicle Name</label>
                            <select name="vehicle_id" id="vehicle_id" class="form-control">
                                <option value="">Vehicle Name</option>
                                @foreach ($vehicles as $vehicle)
                                    <option value="{{ $vehicle->id }}" @if ($stock->vehicle_id == $vehicle->id) selected @endif>
                                        {{ $vehicle->name_of_vehicle }} |
                                        {{ $vehicle->color }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">
                                @error('vehicle_id')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>



                        <div class="mb-3  col-12">
                            <label for="quantity">Quantity</label>
                            <input class="form-control" type="text" id="quantity" placeholder="Quantity" name="quantity"
                                value="{{ $stock->quantity }}">
                            <span class="text-danger">
                                @error('quantity')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>


                        <div class="mb-3  col-12">
                            <label for="name">Search Name Of Whose Stock</label>
                            {{-- this is for user id for this is used to search name of user --}}
                            <input type="hidden" id="user_id" name="user_id" value="{{ $stock->whose_stock }}">

                            <input class="form-control" type="text" id="name"
                                placeholder="Search Name Of Whose Stock" name="whose_stock" oninput="searchUsers()"
                                value="{{ $stock->whoseStock->name }}">
                            <div id="userList" class="dropdown-menu w-100"
                                style="display: none; position: absolute; max-height: 200px; overflow-y: auto;"></div>
                            <span class="text-danger">
                                @error('whose_stock')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>


                    </div>

                    <div class="mb-0 d-flex gap-3 mt-4">
                        <button class="btn submit-btn w-50 " type="submit">Submit</button>
                        <button class="btn cancel-btn w-50"><a href="{{ url('/manage-stock') }}">Cancel</a></button>
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
    </script>
@endsection
