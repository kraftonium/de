@extends('backend.partials.mainindex')

@push('title')
    <title>Edit Dealership | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid col-md-12">

            <div class="container">
                <h3 class="h3-heading mb-4">Edit State Dealer</h3>

                <form>
                    <div class="col-lg-12 form-input-container ">
                        <div class="mb-3  col-12">
                            <label for="name">Name</label>
                            <input class="form-control" type="text" id="name" placeholder="Name">
                        </div>

                        <div class="mb-3  col-12">
                            <label for="email">Email</label>
                            <input class="form-control" type="text" id="email" placeholder="Email">
                        </div>

                        <div class="mb-3  col-12">
                            <label for="phone">Phone No.</label>
                            <input class="form-control" type="text" id="phone" placeholder="Phone No.">
                        </div>

                        <div class="mb-3  col-12">
                            <label for="img">Photo</label>
                            <input class="form-control" type="file" id="img" placeholder="Image">
                        </div>

                        <div class="mb-3  col-12">
                            <label for="dob">DOB</label>
                            <input class="form-control" type="date" id="dob" placeholder="DOB">
                        </div>

                        <div class="mb-3  col-12">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" class="form-control" placeholder="Address"></textarea>
                        </div>

                        <div class="mb-3 col-12">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="mb-3 col-12">
                            <label for="usertype">User-Type</label>
                            <select name="usertype" id="usertype" class="form-control">
                                <option value="">Select Type</option>
                                <option value="Admin">Admin</option>
                                <option value="Customer">Customer</option>
                                <option value="State Dealer">State Dealer</option>
                                <option value="Zone Dealer">Zone Dealer</option>
                                <option value="District Dealer">District Dealer</option>
                                <option value="Taluka Dealer">Taluka Dealer</option>
                                <option value="Area Dealer">Area Dealer</option>
                            </select>
                        </div>

                        <div class="mb-3  col-12">
                            <label for="firmaddress">Firm Address</label>
                            <textarea name="firmaddress" id="firmaddress" class="form-control" placeholder="Firm Address"></textarea>
                        </div>

                        <div class="mb-3  col-12">
                            <label for="firmphone">Firm Phone No.</label>
                            <input class="form-control" type="text" id="firmphone" placeholder=" Firm Phone No.">
                        </div>

                        <div class="mb-3  col-12">
                            <label for="firmemail">Firm Email</label>
                            <input class="form-control" type="text" id="firmemail" placeholder="Firm Email">
                        </div>

                        <div class="mb-3  col-12">
                            <label for="firmname">Firm Name</label>
                            <input class="form-control" type="text" id="firmname" placeholder="Firm Name">
                        </div>

                        <div class="mb-3  col-12">
                            <label for="firmgst">Firm GST No.</label>
                            <input class="form-control" type="text" id="firmgst" placeholder="Firm GST No.">
                        </div>

                        <div class="mb-3  col-12">
                            <label for="totalrevenue">Total Revenue</label>
                            <input class="form-control" type="text" id="totalrevenue" placeholder="Total Revenue">
                        </div>

                        <div class="mb-3  col-12">
                            <label for="totalrevenue">Total Profit</label>
                            <input class="form-control" type="text" id="totalrevenue" placeholder="Total Profit">
                        </div>

                        <div class="mb-3  col-12">
                            <label for="firmimg">Firm Photo</label>
                            <input class="form-control" type="file" id="firmimg" placeholder="Firm Image">
                        </div>

                        <div class="mb-3 col-12">
                            <label for="whosedealer">Whose Dealer</label>
                            <input class="form-control" type="text" id="whosedealer" placeholder="Whose Dealer">
                        </div>

                        <div class="mb-3  col-12">
                            <label for="firmpincode">Firm Pincode</label>
                            <input class="form-control" type="text" id="firmpincode" placeholder="Firm Pincode">
                        </div>

                        <div class="mb-3  col-12">
                            <label for="firmstate">Firm State</label>
                            <input class="form-control" type="text" id="firmstate" placeholder="Firm State">
                        </div>

                        <div class="mb-3  col-12">
                            <label for="firmcountry">Firm Country</label>
                            <input class="form-control" type="text" id="firmcountry" placeholder="Firm Country">
                        </div>
                    </div>

                    <div class="mb-0 d-flex gap-3 mt-4">
                        <!-- <button class="btn auth-btn w-50 mt-5" style="display: block; margin: auto;"
                                                type="submit">Register</button> -->
                        <button class="btn submit-btn w-50 " type="submit">Submit</button>
                        <button class="btn cancel-btn w-50"><a href="manage-state-dealership.html">Cancel</a></button>
                    </div>
                </form>
            </div>


        </div>
    </div>

    </div>
@endsection
