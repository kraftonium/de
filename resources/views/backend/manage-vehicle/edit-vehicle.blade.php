@extends('backend.partials.mainindex')

@push('title')
    <title>Edit Vehicle | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid col-md-12">

            <div class="container">
                <h3 class="h3-heading mb-4">Edit Vehicle Type</h3>

                <form action="{{ url('/update-vehicle') }}/{{ $vehicle->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-12 form-input-container ">

                        <div class="mb-3 ">
                            <label for="vehiclename">Vehicle Name</label>
                            <input type="text" name="name_of_vehicle" id="vehiclename" class="form-control"
                                placeholder=" Vehicle Name" value="{{ $vehicle->name_of_vehicle }}">
                            <span class="text-danger">
                                @error('name_of_vehicle')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3 ">
                            <label for="vehicletype">Vehicle Type</label>
                            <select name="type_of_vehicle_id" id="vehicletype" class="form-control">
                                <option value="">Select Vehicle Type</option>
                                @foreach ($vehicletypes as $vehicletype)
                                    <option value="{{ $vehicletype->id }}"
                                        @if ($vehicle->type_of_vehicle_id == $vehicletype->id) selected @endif>
                                        {{ $vehicletype->type_of_vehicle }}
                                    </option>
                                @endforeach
                            </select>
                            <span class="text-danger">
                                @error('type_of_vehicle_id')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3  ">
                            <label for="img">Vehicle Img</label>
                            <input class="form-control" type="file" id="img" placeholder="Vehicle Image"
                                name="image">
                            <img src="{{ asset($vehicle->image) }}" alt="Vehicle Image" height="75" width="75">
                            <span class="text-danger">
                                @error('image')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3 ">
                            <label for="vehiclecolor">Vehicle Color</label>
                            <input type="text" name="color" id="vehiclecolor" class="form-control"
                                placeholder=" Vehicle Color" value="{{ $vehicle->color }}">
                            <span class="text-danger">
                                @error('color')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                    </div>

                    <div class="mb-0 d-flex gap-3 mt-4">
                        <button class="btn submit-btn w-50 " type="submit">Submit</button>
                        <button class="btn cancel-btn w-50"><a href="{{ url('/manage-vehicles') }}">Cancel</a></button>
                    </div>
                </form>
            </div>


        </div>
    </div>

    </div>
@endsection
