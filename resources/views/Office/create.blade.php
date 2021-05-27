@extends('layouts.app')

@section('content')

<!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Create New Office <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Fill up the form below to create a new Office</small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Office</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Create</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- jQuery Validation (.js-validation class is initialized in js/pages/be_forms_validation.min.js which was auto compiled from _es6/pages/be_forms_validation.js) -->
        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
        <form class="js-validation" action="/office" method="POST" autocomplete="off">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">New Office Form</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="">
                        <!-- Basic Details -->
                        <h2 class="content-heading border-bottom mb-4 pb-2">Basic Details</h2>
                        <div class="row items-push">
                            <div class="col-lg-4">
                                <p class="font-size-sm text-muted">
                                    This section captures the Name of the Office, Identifier related to the office; consider this to be anything like DDO Code, 
                                    IFSC Code or DISE that uniquely identifies the office other than its name. Then we have the designation for the Head of the Office. 
                                    The head of office designation is important as all the communications for the office are issued for the mentioned designation.
                                </p>
                            </div>
                            <div class="col-lg-8 col-xl-5">
                                <div class="form-group">
                                    <label for="name">Office Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter an Office name..">
                                </div>
                                <div class="form-group">
                                    <label for="identifier">Identifier <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="identifier" name="identifier" placeholder="Any identifier for Office like IFSC/DDO/DISE code">
                                </div>
                                <div class="form-group">
                                    <label for="hod_designation">Designation for Head of Office <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="hod_designation" name="hod_designation" placeholder="Enter designation for Head of Office">
                                </div>
                            </div>
                        </div>
                        <!-- END Basic Details -->

                        <!-- Location -->
                        <h2 class="content-heading border-bottom mb-4 pb-2">Location</h2>
                        <div class="row items-push">
                            <div class="col-lg-4">
                                <p class="font-size-sm text-muted">
                                    You can easily validate any kind of data you like either it is in a normal input, a textarea or a select box
                                </p>
                            </div>
                            <div class="col-lg-8 col-xl-5">
                                <div class="form-group">
                                    <label for="block_muni_id">Block or Municipality <span class="text-danger">*</span></label>
                                    <select class="form-control" id="block_muni_id" name="block_muni_id">
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="police_station_id">Police Station <span class="text-danger">*</span></label>
                                    <select class="form-control" id="police_station_id" name="police_station_id">
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="address" name="address" rows="5" placeholder="Address of the new Office"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="post_office">Post Office <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="post_office" name="post_office" placeholder="Enter Post Office">
                                </div>
                                <div class="form-group">
                                    <label for="pincode">Pincode <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter Pincode">
                                </div>
                            </div>
                        </div>
                        <!-- END Location -->

                        <!-- Category -->
                        <h2 class="content-heading border-bottom mb-4 pb-2">Category</h2>
                        <div class="row items-push">
                            <div class="col-lg-4">
                                <p class="font-size-sm text-muted">
                                    Check out how easy it is to enable the validation on third party plugins such as Select2
                                </p>
                            </div>
                            <div class="col-lg-8 col-xl-5">
                                <div class="form-group">
                                    <label for="category_id">Office Category <span class="text-danger">*</span></label>
                                    <select class="js-select2 form-control" id="category_id" name="category_id" style="width: 100%;" data-placeholder="Choose one..">
                                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="institute_id">Office Institute <span class="text-danger">*</span></label>
                                    <select class="js-select2 form-control" id="institute_id" name="institute_id" style="width: 100%;" data-placeholder="Choose at least two..">
                                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- END Category -->
                        
                        <!-- Contact -->
                        <h2 class="content-heading border-bottom mb-4 pb-2">Contact</h2>
                        <div class="row items-push">
                            <div class="col-lg-4">
                                <p class="font-size-sm text-muted">
                                    Check out how easy it is to enable the validation on third party plugins such as Select2
                                </p>
                            </div>
                            <div class="col-lg-8 col-xl-5">
                                <div class="form-group">
                                    <label for="hod_mobile">Mobile No. for Office Head <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="hod_mobile" name="hod_mobile" placeholder="Enter Mobile no. for Office Head">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Official Email id">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
                                </div>
                                <div class="form-group">
                                    <label for="fax">Fax <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="fax" name="fax" placeholder="Enter fax">
                                </div>
                            </div>
                        </div>
                        <!-- END Contact -->

                        <!-- Employee Strength -->
                        <h2 class="content-heading border-bottom mb-4 pb-2">Employee Strength</h2>
                        <div class="row items-push">
                            <div class="col-lg-4">
                                <p class="font-size-sm text-muted">
                                    Check out how easy it is to enable the validation on third party plugins such as Select2
                                </p>
                            </div>
                            <div class="col-lg-8 col-xl-5">
                                <div class="form-group">
                                    <label for="male_staff">Male Staff <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="male_staff" name="male_staff" placeholder="Enter Total count for Male Staffs">
                                </div>
                                <div class="form-group">
                                    <label for="female_staff">Female Staff <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="female_staff" name="female_staff" placeholder="Enter Total count for Female Staffs">
                                </div>
                                <div class="form-group">
                                    <label for="total_staff">Total Staff <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="total_staff" name="total_staff" placeholder="Total count for Male and Female Staffs" readonly>
                                </div>
                            </div>
                        </div>
                        <!-- END Employee Strength -->
                        
                        <!-- Submit -->
                        <div class="row items-push">
                            <div class="col-lg-7 offset-lg-4">
                            <div class="form-group">
                                <a href="#" data-toggle="modal" data-target="#modal-terms">Terms &amp; Conditions</a> <span class="text-danger">*</span>
                                <div class="custom-control custom-checkbox custom-control-primary">
                                    <input type="checkbox" class="custom-control-input" id="val-terms" name="val-terms" value="1">
                                    <label class="custom-control-label" for="val-terms">I agree</label>
                                </div>
                            </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        <!-- END Submit -->
                    </div>
                </div>
            </div>
        </form>
        <!-- jQuery Validation -->
    </div>
    <!-- END Page Content -->

@endsection

@section('js_page')

<!-- Page JS Plugins -->
<script src="{{ asset('js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>

<!-- Page JS Code -->
<script src="{{ asset('js/pages/office.js') }}"></script>

@endsection