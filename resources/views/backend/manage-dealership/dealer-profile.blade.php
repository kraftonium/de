@extends('backend.partials.mainindex')

@push('title')
    <title>Dealer Profile | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Dealer Profile</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Dealer Profile</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="profile-header">
                        <div class="row align-items-center">
                            <div class="col-auto profile-image">
                                <a href="#">
                                    <img class="rounded-circle" alt="User Image" src="{{ asset($dealer->user->image) }}">
                                </a>
                            </div>
                            <div class="col ml-md-n2 profile-user-info">
                                <h4 class="user-name mb-0">{{ $dealer->user->name }}</h4>
                                <h6 class="text-muted">{{ $dealer->user->email }}
                                </h6>
                            </div>
                            <div class="col-auto profile-image">
                                <a href="#">
                                    <img class="rounded-circlee" alt="User Image"
                                        src="{{ asset($dealer->whoseuser->image) }}">
                                </a>
                            </div>
                            <div class="col ml-md-n2 profile-user-info">
                                <h4 class="user-name mb-0">{{ $dealer->whoseuser->name }}</h4>
                                <h6 class="text-muted">{{ $dealer->whoseuser->phoneno }}
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="profile-menu">
                        <ul class="nav nav-tabs nav-tabs-solid">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">About</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#password_tab">Password</a>
                            </li> --}}
                            {{-- <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#changeabout_tab">Edit Info</a>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="tab-content profile-tab-cont">

                        <div class="tab-pane fade show active" id="per_details_tab">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>Personal Details</span>

                                            </h5>
                                            <div class="grid-column">
                                                <div class="row">
                                                    <p class="col-sm-3 text-muted">Name</p>
                                                    <p class="col-sm-9">{{ $dealer->user->name }}</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-3 text-muted">Email ID</p>
                                                    <p class="col-sm-9">{{ $dealer->user->email }}
                                                    </p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-3 text-muted">Mobile</p>
                                                    <p class="col-sm-9">{{ $dealer->user->phoneno }}</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-3 text-muted">Date of Birth</p>
                                                    <p class="col-sm-9">{{ $dealer->user->dob }}</p>
                                                </div>

                                                <div class="row">
                                                    <p class="col-sm-3 text-muted">Gender</p>
                                                    <p class="col-sm-9">
                                                        @if ($dealer->user->gender == 0)
                                                            Female
                                                        @elseif($dealer->user->gender == 1)
                                                            Male
                                                        @else
                                                            Other
                                                        @endif
                                                    </p>
                                                </div>

                                                <div class="row">
                                                    <p class="col-sm-3 text-muted">User Type</p>
                                                    <p class="col-sm-9">{{ $dealer->user->usertype->usertype }}</p>
                                                </div>

                                                <div class="row">
                                                    <p class="col-sm-3 text-muted">Address</p>
                                                    <p class="col-sm-9 mb-0">{{ $dealer->user->address }}</p>
                                                </div>


                                                <div class="row">
                                                    <p class="col-sm-3 text-muted">Firm Address</p>
                                                    <p class="col-sm-9 mb-0">{{ $dealer->firm_address }}</p>
                                                </div>

                                                <div class="row">
                                                    <p class="col-sm-3 text-muted">Firm Name</p>
                                                    <p class="col-sm-9">{{ $dealer->firm_name }}</p>
                                                </div>

                                                <div class="row">
                                                    <p class="col-sm-3 text-muted"> Firm Email ID</p>
                                                    <p class="col-sm-9">{{ $dealer->firm_email }}
                                                    </p>
                                                </div>

                                                <div class="row">
                                                    <p class="col-sm-3 text-muted">Firm Mobile</p>
                                                    <p class="col-sm-9">{{ $dealer->firm_phoneno }}</p>
                                                </div>

                                                <div class="row">
                                                    <p class="col-sm-3 text-muted">Firm GST</p>
                                                    <p class="col-sm-9">{{ $dealer->firm_gstno }}</p>
                                                </div>

                                                <div class="row">
                                                    <p class="col-sm-3 text-muted">Total Revenue</p>
                                                    <p class="col-sm-9">{{ $dealer->total_revenue }}</p>
                                                </div>

                                                <div class="row">
                                                    <p class="col-sm-3 text-muted">Total Profit</p>
                                                    <p class="col-sm-9">{{ $dealer->total_profit }}</p>
                                                </div>

                                                <div class="row">
                                                    <p class="col-sm-3 text-muted">Whose Dealer</p>
                                                    <p class="col-sm-9">{{ $dealer->whoseuser->name }}</p>
                                                </div>

                                                <div class="row">
                                                    <p class="col-sm-3 text-muted">Firm Pincode</p>
                                                    <p class="col-sm-9">{{ $dealer->firm_pincode }}</p>
                                                </div>

                                                <div class="row">
                                                    <p class="col-sm-3 text-muted">Firm Area</p>
                                                    <p class="col-sm-9">{{ $dealer->firm_area }}</p>
                                                </div>

                                                <div class="row">
                                                    <p class="col-sm-3 text-muted">Firm Taluka</p>
                                                    <p class="col-sm-9">{{ $dealer->firm_taluka }}</p>
                                                </div>

                                                <div class="row">
                                                    <p class="col-sm-3 text-muted">Firm District</p>
                                                    <p class="col-sm-9">{{ $dealer->firm_district }}</p>
                                                </div>

                                                <div class="row">
                                                    <p class="col-sm-3 text-muted">Firm Zone</p>
                                                    <p class="col-sm-9">{{ $dealer->firm_zone }}</p>
                                                </div>

                                                <div class="row">
                                                    <p class="col-sm-3 text-muted">Firm State</p>
                                                    <p class="col-sm-9">{{ $dealer->firm_state }}</p>
                                                </div>

                                                <div class="row">
                                                    <p class="col-sm-3 text-muted">Firm Country</p>
                                                    <p class="col-sm-9">{{ $dealer->firm_country }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                            </div>

                        </div>


                        <div id="password_tab" class="tab-pane fade">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Change Password</h5>
                                    <div class="row">
                                        <div class="col-md-10 col-lg-6">
                                            <form action="{{ url('/change-password') }}/{{ $dealer->user->id }}"
                                                method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label class="mb-2">Current Password</label>
                                                    <input type="password" class="form-control" name="current_password">
                                                    <span class="text-danger">
                                                        @error('current_password')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="mb-2">New Password</label>
                                                    <input type="password" class="form-control" name="password">
                                                    <span class="text-danger">
                                                        @error('password')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="mb-2">Confirm New Password</label>
                                                    <input type="password" class="form-control"
                                                        name="password_confirmation">
                                                    <span class="text-danger">
                                                        @error('password_confirmation')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="mb-3">
                                                    <a href="{{ url('/admin-forgot-password') }}"
                                                        style="color: #4874BB !important; font-weight: bold;">Forgot
                                                        Password</a>
                                                </div>
                                                <button class="btn btn-primary" type="submit">Save
                                                    Changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div id="changeabout_tab" class="tab-pane fade">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Edit Personal Details</h5>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12">
                                            <form action="{{ url('/update-admin-profile') }}/{{ $dealer->user->id }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                {{-- <div class="mb-3">
                                                    <select class="form-control" name="usertype_id" id="usertype_id">
                                                        <option value="">Select User Type</option>
                                                        @foreach ($usertypes as $usertype)
                                                            <option value="{{ $usertype->id }}"
                                                                @if ($user->usertype_id == $usertype->id) selected @endif>
                                                                {{ $usertype->usertype }}</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="text-danger">
                                                        @error('usertype_id')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div> --}}

                                                <div class="col-lg-12 form-input-container ">
                                                    <div class="mb-3  ">
                                                        <label for="img">Photo</label>
                                                        <input class="form-control" type="file" id="img"
                                                            placeholder="Image" name="image">
                                                        <img src="{{ asset($dealer->user->image) }}" alt="User Image"
                                                            width="150" height="150">
                                                    </div>

                                                    <div class="mb-3  ">
                                                        <label for="name">Name</label>
                                                        <input class="form-control" type="text" id="name"
                                                            placeholder="Name" name="name"
                                                            value="{{ $dealer->user->name }}">
                                                        <span class="text-danger">
                                                            @error('name')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>

                                                    </div>

                                                    <div class="mb-3  ">
                                                        <label for="email">Email.</label>
                                                        <input class="form-control" type="text" id="email"
                                                            placeholder="Email" name="email"
                                                            value="{{ $dealer->user->email }}">
                                                        <span class="text-danger">
                                                            @error('email')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>

                                                    <div class="mb-3  ">
                                                        <label for="phone">Phone No.</label>
                                                        <input class="form-control" type="text" id="phone"
                                                            placeholder="Phone No." name="phoneno" maxlength="10"
                                                            value="{{ $dealer->user->phoneno }}">
                                                        <span class="text-danger">
                                                            @error('phoneno')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>

                                                    <div class="mb-3 d-flex gap-2 px-2 flex-wrap"
                                                        style="color: #595C5F; flex-direction: column;">
                                                        <label for="male" style="color: #000;">Gender
                                                            :</label>

                                                        <div class="d-flex justify-content-between mb-1">

                                                            <div>
                                                                <input type="radio" id="female" name="gender"
                                                                    value="0"
                                                                    @if ($dealer->user->gender == '0') checked @endif>
                                                                <label for="female">Female</label>
                                                            </div>
                                                            <div>
                                                                <input type="radio" id="male" name="gender"
                                                                    value="1"
                                                                    @if ($dealer->user->gender == '1') checked @endif>
                                                                <label for="male">Male</label>
                                                            </div>

                                                            <div>
                                                                <input type="radio" id="other" name="Gender"
                                                                    value="2"
                                                                    @if ($dealer->user->gender == '2') checked @endif>
                                                                <label for="other">Other</label>
                                                            </div>
                                                            <span class="text-danger">
                                                                @error('gender')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>

                                                    </div>


                                                    <div class="mb-3  ">
                                                        <label for="dob">DOB</label>
                                                        <input class="form-control" type="date" id="dob"
                                                            placeholder="Date" name="dob"
                                                            value="{{ $dealer->user->dob }}">
                                                        <span class="text-danger">
                                                            @error('dob')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>


                                                    <div class="mb-3 ">
                                                        <label for="address">Address</label>
                                                        <textarea name="address" id="address" class="form-control" name="address" placeholder="Address">{{ $dealer->user->address }}</textarea>
                                                        <span class="text-danger">
                                                            @error('address')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>



                                                    <div class="col-sm-12">
                                                        <div class="mb-3">
                                                            <label class="mb-2" for="firmimg">Firm Image</label>
                                                            <input type="file" class="form-control" id="firmimg"
                                                                name="firm_photo">
                                                            <img src="{{ asset($dealer->firm_photo) }}" alt="Firm Photo"
                                                                height="150" width="150">
                                                        </div>
                                                    </div>

                                                    <div class=" col-sm-12">
                                                        <div class="mb-3">
                                                            <label class="mb-2" for="business_profile_link">Firm
                                                                Google Business Profile Link</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $dealer->firm_google_business_profile_link }}"
                                                                id="business_profile_link" name="business_profile_link">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="mb-3">
                                                            <label class="mb-2" for="firmaddress">Firm Address</label>
                                                            <textarea name="firmaddress" id="firmaddress" rows="2" name="firm_address" class="form-control">{{ $dealer->firm_address }}</textarea>
                                                            <span class="text-danger">
                                                                @error('firm_address')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class=" col-sm-12">
                                                        <div class="mb-3">
                                                            <label class="mb-2" for="firmname">Firm Name</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $dealer->firm_name }}" id="firmname"
                                                                name="firm_name">
                                                            <span class="text-danger">
                                                                @error('firm_name')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class=" col-sm-12">
                                                        <div class="mb-3">
                                                            <label class="mb-2" for="firmemail">Firm Email ID</label>
                                                            <input type="email" class="form-control"
                                                                value="{{ $dealer->firm_email }}" id="firmemail"
                                                                name="firm_email">
                                                            <span class="text-danger">
                                                                @error('firm_email')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class=" col-sm-12">
                                                        <div class="mb-3">
                                                            <label class="mb-2" for="firmphone">Firm Mobile</label>
                                                            <input type="text" value="{{ $dealer->firm_phoneno }}"
                                                                class="form-control" id="firmphone" name="firm_phoneno">
                                                            <span class="text-danger">
                                                                @error('firm_phoneno')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class=" col-sm-12">
                                                        <div class="mb-3">
                                                            <label class="mb-2" for="firmgst">Firm GST</label>
                                                            <input type="text" value="{{ $dealer->firm_gstno }}"
                                                                class="form-control" id="firmgst" name="firm_gstno">
                                                            <span class="text-danger">
                                                                @error('firm_gstno')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class=" col-sm-12">
                                                        <div class="mb-3">
                                                            <label class="mb-2" for="totalrevenue">Total Revenue</label>
                                                            <input type="text" value="{{ $dealer->total_revenue }}"
                                                                class="form-control" id="totalrevenue"
                                                                name="total_revenue">
                                                            <span class="text-danger">
                                                                @error('total_revenue')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class=" col-sm-12">
                                                        <div class="mb-3">
                                                            <label class="mb-2" for="totalprofit">Total Profit</label>
                                                            <input type="text" value="{{ $dealer->total_profit }}"
                                                                class="form-control" id="totalprofit">
                                                            <span class="text-danger">
                                                                @error('total_profit')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </div>

                                                    {{-- <div class=" col-sm-12">
                                                        <div class="mb-3">
                                                            <label class="mb-2" for="whosedealer">Whose Dealer</label>
                                                            <input type="text" value="{{ $dealer->whoseuser->name }}"
                                                                class="form-control" id="whosedealer">
                                                        </div>
                                                    </div> --}}

                                                    <div class="mb-3  ">
                                                        <label for="whose_name">Search Name Of Whose Dealer</label>
                                                        {{-- this is for user id for this is used to search name of user --}}
                                                        <input type="hidden" id="whose_user_id" name="whose_user_id"
                                                            value="{{ $dealer->whose_dealer }}">

                                                        <input class="form-control" type="text" id="whose_name"
                                                            placeholder="Search Name" name="whose_name"
                                                            oninput="searchWhoseUsers()"
                                                            value="{{ $dealer->whoseuser->name }}">
                                                        <div id="whose_userList" class="dropdown-menu w-100"
                                                            style="display: none; position: absolute; max-height: 200px; overflow-y: auto;">
                                                        </div>
                                                        <span class="text-danger">
                                                            @error('whose_name')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>

                                                    <div class=" col-sm-12">
                                                        <div class="mb-3">
                                                            <label class="mb-2" for="firmpincode">Firm Pincode</label>
                                                            <input type="text" value="{{ $dealer->firm_pincode }}"
                                                                class="form-control" id="firmpincode">
                                                            <span class="text-danger">
                                                                @error('firm_pincode')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class=" col-sm-12">
                                                        <div class="mb-3">
                                                            <label class="mb-2" for="firmarea">Firm Area</label>
                                                            <input type="text" value="{{ $dealer->firm_area }}"
                                                                class="form-control" id="firmarea">
                                                            <span class="text-danger">
                                                                @error('firm_area')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class=" col-sm-12">
                                                        <div class="mb-3">
                                                            <label class="mb-2" for="firmtaluka">Firm Taluka</label>
                                                            <input type="text" value="{{ $dealer->firm_taluka }}"
                                                                class="form-control" id="firmtaluka">
                                                            <span class="text-danger">
                                                                @error('firm_taluka')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class=" col-sm-12">
                                                        <div class="mb-3">
                                                            <label class="mb-2" for="firmdistrict">Firm District</label>
                                                            <input type="text" value="{{ $dealer->firm_district }}"
                                                                class="form-control" id="firmdistrict">
                                                            <span class="text-danger">
                                                                @error('firm_district')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class=" col-sm-12">
                                                        <div class="mb-3">
                                                            <label class="mb-2" for="firmzone">Firm Zone</label>
                                                            <input type="text" value="{{ $dealer->firm_zone }}"
                                                                class="form-control" id="firmzone">
                                                            <span class="text-danger">
                                                                @error('firm_zone')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class=" col-sm-12">
                                                        <div class="mb-3">
                                                            <label class="mb-2" for="firmstate">Firm State</label>
                                                            <input type="text" value="{{ $dealer->firm_state }}"
                                                                class="form-control" id="firmstate">
                                                            <span class="text-danger">
                                                                @error('firm_state')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class=" col-sm-12">
                                                        <div class="mb-3">
                                                            <label class="mb-2" for="firmcountry">Firm Country</label>
                                                            <input type="text" value="{{ $dealer->firm_country }}"
                                                                class="form-control" id="firmcountry">
                                                            <span class="text-danger">
                                                                @error('firm_country')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="mb-0 d-flex gap-3 mt-4">
                                                    <button class="btn submit-btn w-50 " type="submit">Submit</button>
                                                    <button class="btn cancel-btn w-50"><a
                                                            href="javascript:history.back()">Cancel</a></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
