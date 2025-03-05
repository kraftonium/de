@extends('backend.partials.mainindex')

@push('title')
    <title>Add Order | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid col-md-12">

            <div class="container">
                <h3 class="h3-heading mb-4">Add New Order</h3>

                <form action="{{ url('/add-order-submit') }}" method="POST">
                    @csrf
                    <div class="col-lg-12 form-input-container ">


                        <div class="mb-3  col-12">
                            <label for="name">Search Name Of Customer</label>
                            {{-- this is for user id for this is used to search name of user --}}
                            <input type="hidden" id="customer_id" name="customer_id">

                            <input class="form-control" type="text" id="name" placeholder="Search Name Of Customer"
                                name="name" oninput="searchUsers()">
                            <div id="userList" class="dropdown-menu w-100"
                                style="display: none; position: absolute; max-height: 200px; overflow-y: auto;"></div>
                            <span class="text-danger">
                                @error('customer_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>


                        <div class="mb-3  col-12">
                            <label for="whose_name">Search Name Of Whose Customer</label>
                            {{-- this is for user id for this is used to search name of user --}}
                            <input type="hidden" id="user_id" name="user_id">

                            <input class="form-control" type="text" id="whose_name"
                                placeholder="Search Name Of Whose Customer" name="whose_name"
                                oninput="searchWhoseCustomer()">
                            <div id="whose_customer_list" class="dropdown-menu w-100"
                                style="display: none; position: absolute; max-height: 200px; overflow-y: auto;"></div>
                            <span class="text-danger">
                                @error('whose_customer')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>



                        <div class="mb-3  col-12">
                            <label for="price_including_gst">Price Including GST</label>
                            <input class="form-control" type="text" id="price_including_gst"
                                placeholder="Price Including GST" name="price_including_gst"
                                value="{{ old('price_including_gst') }}">
                            <span class="text-danger">
                                @error('price_including_gst')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>


                        <div class="mb-3  col-12">
                            <label for="warranty">Warranty</label>
                            <input class="form-control" type="text" id="warranty" placeholder="Warranty" name="warranty"
                                value="{{ old('warranty') }}">
                            <span class="text-danger">
                                @error('warranty')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-0 d-flex gap-3 mt-4">
                            <button class="btn submit-btn w-50 " type="submit">Submit</button>
                            <button class="btn cancel-btn w-50"><a href="{{ url('/manage-orders') }}">Cancel</a></button>
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
            $("#customer_id").val(id);
            $("#name").val(name);
            $("#userList").hide();
        }

        function searchWhoseCustomer() {
            let query = $("#whose_name").val();

            if (query.length > 2) { // Start searching after 2 characters
                $.ajax({
                    url: '/search-users',
                    type: "GET",
                    data: {
                        query: query
                    },
                    success: function(data) {
                        let dropdown = $("#whose_customer_list");
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
                $("#whose_customer_list").hide();
            }
        }

        function selectWhoseUser(id, name) {
            $("#user_id").val(id);
            $("#whose_name").val(name);
            $("#whose_customer_list").hide();
        }
    </script>
@endsection
