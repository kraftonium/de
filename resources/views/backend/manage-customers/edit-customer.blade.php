@extends('backend.partials.mainindex')

@push('title')
    <title>Edit Customer | Divyashakti Enterprise</title>
@endpush

@section('mainsection')
    <div class="page-wrapper">
        <div class="content container-fluid col-md-12">

            <div class="container">
                <h3 class="h3-heading mb-4">Edit Customer</h3>

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
                            <label for="battery">Battery No.</label>
                            <input class="form-control" type="text" id="battery" placeholder="Battery No.">
                        </div>

                        <div class="mb-3  col-12">
                            <label for="chaches">Chaches No.</label>
                            <input class="form-control" type="text" id="chaches" placeholder="Chaches No.">
                        </div>

                        <div class="mb-3  col-12">
                            <label for="controller">Controller No.</label>
                            <input class="form-control" type="text" id="controller" placeholder="Controller No.">
                        </div>

                        <div class="mb-3 col-12">
                            <label for="vehiclename">Vehicle Name</label>
                            <select name="vehiclename" id="vehiclename" class="form-control">
                                <option value="">Vehicle Name</option>
                                <option value="Classic">Classic</option>
                                <option value="Divine 24">Divine 24</option>
                            </select>
                        </div>

                        <div class="mb-3 col-12">
                            <label for="vehicle">Vehicle-Type</label>
                            <select name="usertype" id="vehicle" class="form-control">
                                <option value="">Vehicle-Type</option>
                                <option value="2-wheeler">2-wheeler</option>
                                <option value="3-wheeler">3-wheeler</option>
                            </select>
                        </div>

                        <div class="mb-3  col-12">
                            <label for="vimg">Vehicle Img</label>
                            <input class="form-control" type="file" id="vimg" placeholder="Vehicle Image">
                        </div>

                        <div class="mb-3 col-12">
                            <label for="vehiclecolor">Vehicle Color</label>
                            <select name="vehiclecolor" id="vehiclecolor" class="form-control">
                                <option value="">Vehicle Color</option>
                                <option value="Black">Black</option>
                                <option value="Red">Red</option>
                            </select>
                        </div>

                        <div class="mb-3  col-12">
                            <label for="purchasedate">Purchase Date</label>
                            <input class="form-control" type="date" id="purchasedate" placeholder="Purchase Date">
                        </div>

                        <div class="mb-3  col-12">
                            <label for="producedate">Produce Date</label>
                            <input class="form-control" type="date" id="producedate" placeholder="Produce Date">
                        </div>

                        <div class="mb-3  col-12">
                            <label for="whomcustomer">Whose Customer</label>
                            <input class="form-control" type="text" id="whomcustomer" placeholder="Whom Customer">
                        </div>

                        <div class="mb-3  col-12">
                            <label for="insurance">Insurance No.</label>
                            <input class="form-control" type="text" id="insurance" placeholder="Insurance No.">
                        </div>

                        <div class="mb-3  col-12">
                            <label for="invoice">Invoice No.</label>
                            <input class="form-control" type="text" id="invoice" placeholder="Invoice No.">
                        </div>

                        <div class="mb-3  col-12">
                            <label for="gst">GST No.</label>
                            <input class="form-control" type="text" id="gst" placeholder="GST No.">
                        </div>



                    </div>

                    <div class="mb-0 d-flex gap-3 mt-4">
                        <!-- <button class="btn auth-btn w-50 mt-5" style="display: block; margin: auto;"
                                    type="submit">Register</button> -->
                        <button class="btn submit-btn w-50 " type="submit">Submit</button>
                        <button class="btn cancel-btn w-50"><a href="manage-customer.html">Cancel</a></button>
                    </div>
                </form>
            </div>


        </div>
    </div>

    </div>
@endsection
