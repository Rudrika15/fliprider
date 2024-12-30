@extends('admin.layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Driver</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary btn-sm mb-2" href="{{ route('users.index') }}"><i class="fa fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>
    </div>
    <form action="{{ route('drivers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" value="{{ old('name') }}" name="name" placeholder="Name"
                        class="form-control">
                    @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" value="{{ old('email') }}" name="email" placeholder="Email"
                        class="form-control">
                    @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="password" value="{{ old('password') }}" name="password" placeholder="Password"
                        class="form-control">
                    @error('password')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Confirm Password:</strong>
                    <input type="password" value="{{ old('confirm-password') }}" name="confirm-password"
                        placeholder="Confirm Password" class="form-control">
                    @error('confirm-password')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mobile Number:</strong>
                    <input type="number" value="{{ old('phone') }}" min="0" name="phone"
                        placeholder="Mobile Number" class="form-control">
                    @error('phone')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <div class="form-group">
                    <strong>Image</strong>
                    <input type="file" accept="image/*" name="image" class="form-control">
                    @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>License Number</strong>
                    <input type="text" value="{{ old('license_number') }}" name="license_number"
                        placeholder="License Number" class="form-control">
                    @error('license_number')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>License Image</strong>
                    <input type="file" name="license_image" class="form-control">
                    @error('license_image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>License Expiry Date</strong>
                    <input type="date" value="{{ old('license_expiry_date') }}" min="{{ date('Y-m-d') }}"
                        name="license_expiry_date" class="form-control">
                    @error('license_expiry_date')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Vehicle Registration Number</strong>
                    <input type="text" value="{{ old('registration_number') }}" name="registration_number"
                        placeholder="Vehicle Registration Number" class="form-control">
                    @error('registration_number')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Company</strong>
                    <input type="text" value="{{ old('company') }}" name="company" placeholder="Company"
                        class="form-control">
                    @error('company')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Model</strong>
                    <input type="text" value="{{ old('model') }}" name="model" placeholder="Model"
                        class="form-control">
                    @error('model')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Year</strong>
                    <input type="text" value="{{ old('year') }}" name="year" placeholder="Year"
                        class="form-control">
                    @error('year')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Color</strong>
                    <input type="text" value="{{ old('color') }}" name="color" placeholder="Color"
                        class="form-control">
                    @error('color')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Capacity</strong>
                    <input type="number" value="{{ old('capacity') }}" min="0" name="capacity"
                        placeholder="Capacity" class="form-control">
                    @error('capacity')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>PUC Image</strong>
                    <input type="file" name="puc_image" class="form-control">
                    @error('puc_image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>PUC Expiry Date</strong>
                    <input type="date" min="{{ date('Y-m-d') }}" name="puc_expiry_date" class="form-control">
                    @error('puc_expiry_date')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Insurance Image</strong>
                    <input type="file" name="insurance_image" class="form-control">
                    @error('insurance_image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Insurance Expiry Date</strong>
                    <input type="date" min="{{ date('Y-m-d') }}" name="insurance_expiry_date" class="form-control">
                    @error('insurance_expiry_date')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>RC Image</strong>
                    <input type="file" name="rc_image" class="form-control">
                    @error('rc_image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>RC Expiry Date</strong>
                    <input type="date" min="{{ date('Y-m-d') }}" name="rc_expiry_date" class="form-control">
                    @error('rc_expiry_date')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary btn-sm mt-2 mb-3"><i class="fa-solid fa-floppy-disk"></i>
                    Submit</button>
            </div>
    </form>
@endsection
