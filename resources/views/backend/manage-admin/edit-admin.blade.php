@extends('backend.partials.mainindex')

@push('title')
    <title>Edit Admin | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid col-md-12">

            <div class="container">
                <h3 class="h3-heading mb-4">Edit Admin</h3>

                <form action="{{ url('/update-admin') }}/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!--<div class="mb-3">-->
                    <!--    <select class="form-control" name="usertype_id" id="usertype_id">-->
                    <!--        <option value="">Select User Type</option>-->
                    <!--        @foreach ($usertypes as $usertype)-->
                    <!--            <option value="{{ $usertype->id }}" @if ($user->usertype_id == $usertype->id) selected @endif>-->
                    <!--                {{ $usertype->usertype }}</option>-->
                    <!--        @endforeach-->
                    <!--    </select>-->
                    <!--    <span class="text-danger">-->
                    <!--        @error('usertype_id')-->
                    <!--            {{ $message }}-->
                    <!--        @enderror-->
                    <!--    </span>-->
                    <!--</div>-->
                    
                     @if (Auth::user()->id == 1)
                        <div class="mb-3">
                            <select class="form-control" name="usertype_id" id="usertype_id">
                                <option value="">Select User Type</option>
                                @foreach ($usertypes as $usertype)
                                    <option value="{{ $usertype->id }}" @if (old('usertype_id') == $usertype->id) selected @endif>
                                        {{ $usertype->usertype }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">
                                @error('usertype_id')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    @else
                        <input type="hidden" value="7" name="usertype_id" id="usertype_id">
                    @endif

                    <div class="col-lg-12 form-input-container ">
                        <div class="mb-3  ">
                            <label for="img">Photo</label>
                            <input class="form-control" type="file" id="img" placeholder="Image" name="image">
                            <img src="{{ asset($user->image) }}" alt="User Image" width="150" height="150">
                        </div>

                        <div class="mb-3  ">
                            <label for="name">Name</label>
                            <input class="form-control" type="text" id="name" placeholder="Name" name="name"
                                value="{{ $user->name }}">
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>

                        </div>

                        <div class="mb-3  ">
                            <label for="email">Email.</label>
                            <input class="form-control" type="text" id="email" placeholder="Email" name="email"
                                value="{{ $user->email }}">
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  ">
                            <label for="phone">Phone No.</label>
                            <input class="form-control" type="text" id="phone" placeholder="Phone No." name="phoneno"
                                maxlength="10" value="{{ $user->phoneno }}">
                            <span class="text-danger">
                                @error('phoneno')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3 d-flex gap-2 px-2 flex-wrap" style="color: #595C5F; flex-direction: column;">
                            <label for="male" style="color: #000;">Gender :</label>

                            <div class="d-flex justify-content-between mb-1">

                                <div>
                                    <input type="radio" id="female" name="gender" value="0"
                                        @if ($user->gender == '0') checked @endif>
                                    <label for="female">Female</label>
                                </div>
                                <div>
                                    <input type="radio" id="male" name="gender" value="1"
                                        @if ($user->gender == '1') checked @endif>
                                    <label for="male">Male</label>
                                </div>

                                <div>
                                    <input type="radio" id="other" name="Gender" value="2"
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


                        <div class="mb-3  ">
                            <label for="dob">DOB</label>
                            <input class="form-control" type="date" id="dob" placeholder="Date" name="dob"
                                value="{{ $user->dob }}">
                            <span class="text-danger">
                                @error('dob')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>


                        <div class="mb-3 ">
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
                        <button class="btn submit-btn w-50 " type="submit">Submit</button>
                        <button class="btn cancel-btn w-50"><a href="javascript:history.back()">Cancel</a></button>
                    </div>
                </form>
            </div>


        </div>
    </div>

    </div>
@endsection
