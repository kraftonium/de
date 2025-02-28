@extends('backend.partials.mainindex')

@push('title')
    <title>Add Usertype | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid col-md-12">

            <div class="container">
                <h3 class="h3-heading mb-4">Add User Type</h3>

                <form action="{{ url('/add-usertype-submit') }}" method="POST">
                    @csrf
                    <div class="col-lg-12 form-input-container ">

                        <div class="mb-3 col-12">
                            <label for="usertype">User Type</label>
                            <input type="text" name="usertype" id="usertype" class="form-control"
                                placeholder="Add UserType" value="{{ old('usertype') }}">
                            <span class="text-danger">
                                @error('usertype')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                    </div>

                    <div class="mb-0 d-flex gap-3 mt-4">
                        <button class="btn submit-btn w-50 " type="submit">Submit</button>
                        <button class="btn cancel-btn w-50"><a href="{{ url('/manage-usertype') }}">Cancel</a></button>
                    </div>
                </form>
            </div>


        </div>
    </div>

    </div>
@endsection
