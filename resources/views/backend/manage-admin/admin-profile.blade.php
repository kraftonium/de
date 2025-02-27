@extends('backend.partials.mainindex')

@push('title')
    <title>Admin Profile | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Profile</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ul>
                    </div>
                </div>
            </div>

            @if (session('profile-update-success'))
                <div class="alert alert-success" id="profile-update-success-message">
                    {{ session('profile-update-success') }}
                </div>
                <script>
                    setTimeout(function() {
                        let message = document.getElementById('profile-update-success-message');
                        if (message) {
                            message.style.display = 'none';
                        }
                    }, 5000); // 5 seconds
                </script>
            @endif


            @if (session('change-passord-success'))
                <div class="alert alert-success" id="password-success-message">
                    {{ session('change-passord-success') }}
                </div>
                <script>
                    setTimeout(function() {
                        let message = document.getElementById('password-success-message');
                        if (message) {
                            message.style.display = 'none';
                        }
                    }, 5000); // 5 seconds
                </script>
            @endif

            <div class="row">
                <div class="col-md-12">
                    <div class="profile-header">
                        <div class="row align-items-center">
                            <div class="col-auto profile-image">
                                <a href="#">
                                    <img class="rounded-circle" alt="User Image" src="{{ asset($user->image) }}">
                                </a>
                            </div>
                            <div class="col ml-md-n2 profile-user-info">
                                <h4 class="user-name mb-0">{{ $user->name }}</h4>
                                <h6 class="text-muted">{{ $user->email }}
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="profile-menu">
                        <ul class="nav nav-tabs nav-tabs-solid">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#password_tab">Password</a>
                            </li>
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
                                                <a class="edit-link" data-bs-toggle="modal" href="#edit_personal_details"><i
                                                        class="fa fa-edit me-1"></i>Edit</a>
                                            </h5>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted">Name</p>
                                                <p class="col-sm-10">{{ $user->name }}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted">Email ID</p>
                                                <p class="col-sm-10">{{ $user->email }}
                                                </p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted">Mobile</p>
                                                <p class="col-sm-10">{{ $user->phoneno }}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted">Date of Birth</p>
                                                <p class="col-sm-10">
                                                    {{ \Carbon\Carbon::parse($user->dob)->format('d-m-Y') }}</p>
                                            </div>

                                            <div class="row">
                                                <p class="col-sm-2 text-muted">Address</p>
                                                <p class="col-sm-10 mb-0">{{ $user->address }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Personal Details</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ url('/update-admin-profile') }}/{{ $user->id }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <select class="form-control" name="usertype_id"
                                                                id="usertype_id">
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
                                                        </div>

                                                        <div class="col-lg-12 form-input-container ">
                                                            <div class="mb-3  col-12">
                                                                <label for="img">Photo</label>
                                                                <input class="form-control" type="file" id="img"
                                                                    placeholder="Image" name="image">
                                                                <img src="{{ asset($user->image) }}" alt="User Image"
                                                                    width="150" height="150">
                                                            </div>

                                                            <div class="mb-3  col-12">
                                                                <label for="name">Name</label>
                                                                <input class="form-control" type="text" id="name"
                                                                    placeholder="Name" name="name"
                                                                    value="{{ $user->name }}">
                                                                <span class="text-danger">
                                                                    @error('name')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>

                                                            </div>

                                                            <div class="mb-3  col-12">
                                                                <label for="email">Email.</label>
                                                                <input class="form-control" type="text" id="email"
                                                                    placeholder="Email" name="email"
                                                                    value="{{ $user->email }}">
                                                                <span class="text-danger">
                                                                    @error('email')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                            </div>

                                                            <div class="mb-3  col-12">
                                                                <label for="phone">Phone No.</label>
                                                                <input class="form-control" type="text" id="phone"
                                                                    placeholder="Phone No." name="phoneno" maxlength="10"
                                                                    value="{{ $user->phoneno }}">
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
                                                                        <input type="radio" id="female"
                                                                            name="gender" value="0"
                                                                            @if ($user->gender == '0') checked @endif>
                                                                        <label for="female">Female</label>
                                                                    </div>
                                                                    <div>
                                                                        <input type="radio" id="male"
                                                                            name="gender" value="1"
                                                                            @if ($user->gender == '1') checked @endif>
                                                                        <label for="male">Male</label>
                                                                    </div>

                                                                    <div>
                                                                        <input type="radio" id="other"
                                                                            name="Gender" value="2"
                                                                            @if ($user->gender == '2') checked @endif>
                                                                        <label for="other">Other</label>
                                                                    </div>
                                                                    <span class="text-danger">
                                                                        @error('gender')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </div>

                                                            </div>


                                                            <div class="mb-3  col-12">
                                                                <label for="dob">DOB</label>
                                                                <input class="form-control" type="date" id="dob"
                                                                    placeholder="Date" name="dob"
                                                                    value="{{ $user->dob }}">
                                                                <span class="text-danger">
                                                                    @error('dob')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                            </div>


                                                            <div class="mb-3 col-12">
                                                                <label for="address">Address</label>
                                                                <textarea name="address" id="address" class="form-control" name="address" placeholder="Address">{{ $user->address }}</textarea>
                                                                <span class="text-danger">
                                                                    @error('address')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                            </div>



                                                        </div>

                                                        <div class="mb-0 d-flex gap-3 mt-4">
                                                            <button class="btn submit-btn w-50 "
                                                                type="submit">Submit</button>
                                                            <button class="btn cancel-btn w-50"><a
                                                                    href="javascript:history.back()">Cancel</a></button>
                                                        </div>
                                                    </form>
                                                    {{-- <form>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="mb-3">
                                                                    <label class="mb-2">First Name</label>
                                                                    <input type="text" class="form-control"
                                                                        value="John">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <label class="mb-2">Last Name</label>
                                                                <div class="mb-3">
                                                                    <input type="text" class="form-control"
                                                                        value="Doe">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-3">
                                                                    <label class="mb-2">Date of
                                                                        Birth</label>
                                                                    <div class="cal-icon">
                                                                        <input type="text"
                                                                            class="form-control datetimepicker"
                                                                            value="24-07-1983">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="mb-3">
                                                                    <label class="mb-2">Email ID</label>
                                                                    <input type="email" class="form-control"
                                                                        value="johndoe@example.com">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="mb-3">
                                                                    <label class="mb-2">Mobile</label>
                                                                    <input type="text" value="+1 202-555-0125"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <h5 class="form-title"><span>Address</span>
                                                                </h5>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-3">
                                                                    <label class="mb-2">Address</label>
                                                                    <input type="text" class="form-control"
                                                                        value="4663 Agriculture Lane">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="mb-3">
                                                                    <label class="mb-2">City</label>
                                                                    <input type="text" class="form-control"
                                                                        value="Miami">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="mb-3">
                                                                    <label class="mb-2">State</label>
                                                                    <input type="text" class="form-control"
                                                                        value="Florida">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="mb-3">
                                                                    <label class="mb-2">Zip Code</label>
                                                                    <input type="text" class="form-control"
                                                                        value="22434">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="mb-3">
                                                                    <label class="mb-2">Country</label>
                                                                    <input type="text" class="form-control"
                                                                        value="United States">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary w-100">Save</button>
                                                    </form> --}}
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
                                            <form action="{{ url('/change-password') }}/{{ $user->id }}"
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
                                                    <a href="/auth/forgot-password.html"
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

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
