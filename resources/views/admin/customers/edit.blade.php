@extends('layouts.admin.layout')

@section('content')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left flex-column align-items-start">
                        <h3>Edit Customer</h3>
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.customers.index') }}">List Customers</a></li>
                            <li class="breadcrumb-item">Edit Customer</li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-6">
                    <a href="{{ route('admin.customers.index') }}" class="btn btn-primary pull-right">Back to List</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger" style="border-left: 5px solid red;">
                        Invalid Fields. Please check all fields before submitting the form.
                    </div>
                @endif
                <form action="{{ route('admin.customers.update', $customer->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xl-9 col-lg-8">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="username-field" class="form-label">Username</label>
                                        <input type="text" class="form-control" name="username" id="username-field" value="{{ $customer->username }}">
                                        <span class="text-danger">@error('username'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="email-field" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" id="email-field" value="{{ $customer->email }}">
                                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="password-field" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" id="password-field" value="{{ $customer->password }}" disabled>
                                        <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="firstname-field" class="form-label">Firstname</label>
                                        <input type="text" class="form-control" name="firstname" id="firstname-field" value="{{ $customer->firstname }}">
                                        <span class="text-danger">@error('firstname'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="lastname-field" class="form-label">Lastname</label>
                                        <input type="text" class="form-control" name="lastname" id="lastname-field" value="{{ $customer->lastname }}">
                                        <span class="text-danger">@error('lastname'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="profile-image-field" class="form-label">Profile Image <span class="text-warning">(MAXIMUM OF 2MB)</span></label>
                                        <input type="file" class="form-control" name="profile_image" id="profile-image-field" accept="image/*">
                                        <span class="text-danger">@error('profile_image'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-number-field" class="form-label">Contact Number</label>
                                        <input type="text" class="form-control" name="contact_number" id="contact-number-field" value="{{ $customer->contact_number }}">
                                        <span class="text-danger">@error('contact_number'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="gender-field" class="form-label">Gender</label>
                                        <select name="gender" id="gender-field" class="form-select">
                                            <option {{ $customer->customer_detail->gender == 'Male' ? 'selected' : null }} value="Male">Male</option>
                                            <option {{ $customer->customer_detail->gender == 'Female' ? 'selected' : null }} value="Female">Female</option>
                                        </select>
                                        <span class="text-danger">@error('gender'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-6">
                                            <div class="form-group">
                                                <label for="birthdate-field" class="form-label">Birthdate</label>
                                                <input type="date" class="form-control" name="birthdate" id="birthdate-field" value="{{ $customer->customer_detail->birthdate }}">
                                                <span class="text-danger">@error('birthdate'){{ $message }}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6">
                                            <div class="form-group">
                                                <label for="age-field" class="form-label">Age</label>
                                                <input type="int" class="form-control" name="age" id="age-field" readonly value="{{ $customer->customer_detail->age }}">
                                                <span class="text-danger">@error('age'){{ $message }}@enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="address-field" class="form-label">Address</label>
                                        <input type="text" class="form-control" name="address" id="address-field" value="{{ $customer->customer_detail->address }}">
                                        <span class="text-danger">@error('address'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="zip-code-field" class="form-label">Zip Code</label>
                                        <input type="text" class="form-control" name="zip_code" id="zip-code-field" value="{{ $customer->customer_detail->zip_code }}">
                                        <span class="text-danger">@error('zip_code'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <button class="btn btn-primary pull-right">Save Customer</button>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <h5>Preview Image</h5>
                            <img class="w-100 rounded" src="http://127.0.0.1:8000/assets/images/dashboard/man.png" alt="">
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
@endsection