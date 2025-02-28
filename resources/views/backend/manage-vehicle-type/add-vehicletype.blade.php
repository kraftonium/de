@extends('backend.partials.mainindex')

@push('title')
    <title>Add Vehicle Type | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid col-md-12">

            <div class="container">
                <h3 class="h3-heading mb-4">Add Vehicle Type</h3>

                <form action="{{ url('/add-vehicle-type-submit') }}" method="POST">
                    @csrf
                    <div class="col-lg-12 form-input-container ">

                        <div class="mb-3 col-12">
                            <label for="vehicletype">Vehicle Type</label>
                            <input type="text" id="vehicletype" class="form-control" placeholder="Add Vehicle Type"
                                name="type_of_vehicle" value="{{ old('type_of_vehicle') }}">
                            <span class="text-danger">
                                @error('type_of_vehicle')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                    </div>

                    <div class="mb-0 d-flex gap-3 mt-4">
                        <!-- <button class="btn auth-btn w-50 mt-5" style="display: block; margin: auto;"
                                                                                                                type="submit">Register</button> -->
                        <button class="btn submit-btn w-50 " type="submit">Submit</button>
                        <button class="btn cancel-btn w-50"><a href="{{ url('/manage-vehicle-type') }}">Cancel</a></button>
                    </div>
                </form>
            </div>


        </div>
    </div>

    </div>
@endsection
