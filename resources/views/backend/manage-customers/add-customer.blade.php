@extends('backend.partials.mainindex')

@push('title')
    <title>Add Customer | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid col-md-12">

            <div class="container">
                <h3 class="h3-heading mb-4">Add New Customer</h3>

                <form action="{{ url('/add-customer-submit') }}" method="POST">
                    @csrf
                    <div class="col-lg-12 form-input-container ">
                        <div class="mb-3  col-12">
                            <input type="hidden" id="user_id" name="user_id">
                            <label for="name">Name</label>
                            <input class="form-control" type="text" id="name" placeholder="Name" name="name"
                                oninput="searchUsers()">
                            <div id="userList" class="dropdown-menu w-100"
                                style="display: none; position: absolute; max-height: 200px; overflow-y: auto;"></div>
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  col-12">
                            <label for="email">Email</label>
                            <input class="form-control" type="text" id="email" placeholder="Email" name="email"
                                value="{{ old('email') }}">
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  col-12">
                            <label for="phoneno">Phone No.</label>
                            <input class="form-control" type="text" id="phoneno" placeholder="Phone No." name="phoneno"
                                maxlength="10" value="{{ old('phoneno') }}">
                            <span class="text-danger">
                                @error('phoneno')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  col-12">
                            <label for="battery">Battery No.</label>
                            <input class="form-control" type="text" id="battery" placeholder="Battery No."
                                name="battery_no" value="{{ old('battery_no') }}">
                            <span class="text-danger">
                                @error('battery_no')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  col-12">
                            <label for="chassis_no">Chassis No.</label>
                            <input class="form-control" type="text" id="chassis_no" placeholder="Chassis No."
                                name="chassis_no" value="{{ old('chassis_no') }}">
                            <span class="text-danger">
                                @error('chassis_no')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  col-12">
                            <label for="controller_no">Controller No.</label>
                            <input class="form-control" type="text" id="controller_no" placeholder="Controller No."
                                name="controller_no" value="{{ old('controller_no') }}">
                            <span class="text-danger">
                                @error('controller_no')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3 col-12">
                            <label for="vehicle_id">Vehicle Name</label>
                            <select name="vehicle_id" id="vehicle_id" class="form-control">
                                <option value="">Vehicle Name</option>
                                @foreach ($vehicles as $vehicle)
                                    <option value="{{ $vehicle->id }}" @if (old('vehicle_id') == $vehicle->id) selected @endif>
                                        {{ $vehicle->name_of_vehicle }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">
                                @error('ehicle_id')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  col-12">
                            <label for="date_of_purchase">Purchase Date</label>
                            <input class="form-control" type="date" id="date_of_purchase" placeholder="Purchase Date"
                                name="date_of_purchase" value="{{ old('date_of_purchase') }}">
                            <span class="text-danger">
                                @error('date_of_purchase')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  col-12">
                            <label for="produce_date">Produce Date</label>
                            <input class="form-control" type="date" id="produce_date" name="produce_date"
                                placeholder="Produce Date" value="{{ old('produce_date') }}">
                            <span class="text-danger">
                                @error('produce_date')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  col-12">
                            <input type="hidden" id="whose_customer" name="whose_customer">
                            <label for="name">Whose Customer</label>
                            <input class="form-control" type="text" id="whose_customer_name"
                                placeholder="Whose Customer" name="whose_customer_name" oninput="searchWhoseCustomer()">
                            <div id="whose_customer_list" class="dropdown-menu w-100"
                                style="display: none; position: absolute; max-height: 200px; overflow-y: auto;"></div>
                            <span class="text-danger">
                                @error('whose_customer_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  col-12">
                            <label for="insurance">Insurance No.</label>
                            <input class="form-control" type="text" id="insurance" placeholder="Insurance No."
                                name="insurance_policy_no" value="{{ old('insurance_policy_no') }}">
                            <span class="text-danger">
                                @error('insurance_policy_no')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  col-12">
                            <label for="invoice">Invoice No.</label>
                            <input class="form-control" type="text" id="invoice" placeholder="Invoice No."
                                name="invoice_no" value="{{ old('invoice_no') }}">
                            <span class="text-danger">
                                @error('invoice_no')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  col-12">
                            <label for="gst">Customer GST No.</label>
                            <input class="form-control" type="text" id="gst" placeholder="Customer GST No."
                                name="customer_gstno" value="{{ old('customer_gstno') }}">
                            <span class="text-danger">
                                @error('customer_gstno')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                    </div>

                    <div class="mb-0 d-flex gap-3 mt-4">
                        <button class="btn submit-btn w-50 " type="submit">Submit</button>
                        <button class="btn cancel-btn w-50"><a href="{{ url('/manage-customers') }}">Cancel</a></button>
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

        function searchWhoseCustomer() {
            let query = $("#whose_customer_name").val();

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
            $("#whose_customer").val(id);
            $("#whose_customer_name").val(name);
            $("#whose_customer_list").hide();
        }
    </script>
@endsection
