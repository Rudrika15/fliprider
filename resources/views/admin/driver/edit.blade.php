@extends('admin.layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Driver</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary btn-sm mb-2" href="{{ route('users.index') }}"><i class="fa fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>
    </div>
    <form action="{{ route('drivers.update', $driver->user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" value="{{ $driver->user->name }}" name="name" placeholder="Name"
                        class="form-control">
                    @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" value="{{ $driver->user->email ?? old('email') }}" name="email"
                        placeholder="Email" class="form-control">
                    @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="password" value="{{  old('password') }}" name="password" placeholder="Password"
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
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mobile Number:</strong>
                    <input type="number" value="{{ $driver->user->phone ?? old('phone') }}" min="0" name="phone"
                        placeholder="Mobile Number" class="form-control">
                    @error('phone')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <div class="form-group">
                    <strong>Image</strong>
                    @if ($driver->user->image)
                        <img src="{{ asset('images/' . $driver->user->image) }}" width="100" height="100"
                            class="mb-2" alt="Image">
                    @endif

                    <input type="file" value="{{ $driver->user->image }}" accept="image/*" name="image"
                        class="form-control">
                    @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>License Number</strong>
                    <input type="text" value="{{ $driver->license_number ?? old('license_number') }}"
                        name="license_number" placeholder="License Number" class="form-control">
                    @error('license_number')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>License Image</strong>
                    @if ($driver->license_image)
                        <img src="{{ asset('images/' . $driver->license_image) }}" width="100" height="100"
                            class="mb-2" alt="Image">
                    @endif
                    <input type="file" accept="image/*" value="{{ $driver->license_image }}" name="license_image"
                        class="form-control">
                    @error('license_image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>License Expiry Date</strong>
                    <input type="date" value="{{ $driver->license_expiry_date ?? old('license_expiry_date') }}"
                        min="{{ date('Y-m-d') }}" name="license_expiry_date" class="form-control">
                    @error('license_expiry_date')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Vehicle Registration Number</strong>
                    <input type="text" value="{{ $driver->vehicle->registration_number ?? old('registration_number') }}"
                        name="registration_number" placeholder="Vehicle Registration Number" class="form-control">
                    @error('registration_number')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Company</strong>
                    <input type="text" value="{{ $driver->vehicle->makers ?? old('company') }}" name="company"
                        placeholder="Company" class="form-control">
                    @error('company')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Model</strong>
                    <input type="text" value="{{ $driver->vehicle->model ?? old('model') }}" name="model"
                        placeholder="Model" class="form-control">
                    @error('model')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Year</strong>
                    <input type="text" value="{{ $driver->vehicle->year ?? old('year') }}" name="year"
                        placeholder="Year" class="form-control">
                    @error('year')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Color</strong>
                    <input type="text" value="{{ $driver->vehicle->color ?? old('color') }}" name="color"
                        placeholder="Color" class="form-control">
                    @error('color')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Capacity</strong>
                    <input type="number" value="{{ $driver->vehicle->capacity ?? old('capacity') }}" min="0"
                        name="capacity" placeholder="Capacity" class="form-control">
                    @error('capacity')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>PUC Image</strong>
                    @if ($driver->vehicle->puc_image)
                        <img src="{{ asset('images/' . $driver->vehicle->puc_image) }}" width="100" height="100"
                            class="mb-2" alt="Image">
                    @endif
                    <input type="file" accept="image/*" value="{{ $driver->vehicle->puc_image }}" name="puc_image"
                        class="form-control">
                    @error('puc_image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>PUC Expiry Date</strong>
                    <input type="date" value="{{ $driver->vehicle->puc_expiry_date ?? old('puc_expiry_date') }}"
                        min="{{ date('Y-m-d') }}" name="puc_expiry_date" class="form-control">
                    @error('puc_expiry_date')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Insurance Image</strong>

                    @if ($driver->vehicle->insurance_image)
                        <img src="{{ asset('images/' . $driver->vehicle->insurance_image) }}" width="100"
                            height="100" class="mb-2" alt="Image">
                    @endif
                    <input type="file" accept="image/*" value="{{ $driver->vehicle->insurance_image }}"
                        name="insurance_image" class="form-control">
                    @error('insurance_image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Insurance Expiry Date</strong>
                    <input type="date" min="{{ date('Y-m-d') }}"
                        value="{{ $driver->vehicle->insurance_expiry_date ?? old('insurance_expiry_date') }}"
                        name="insurance_expiry_date" class="form-control">
                    @error('insurance_expiry_date')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>RC Image</strong>
                    @if ($driver->vehicle->rc_image)
                        <img src="{{ asset('images/' . $driver->vehicle->rc_image) }}" width="100" height="100"
                            class="mb-2" alt="Image">
                    @endif
                    <input type="file" value="{{ $driver->vehicle->rc_image }}" accept="image/*" name="rc_image"
                        class="form-control">
                    @error('rc_image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>RC Expiry Date</strong>
                    <input type="date" value="{{ $driver->vehicle->rc_expiry_date ?? old('rc_expiry_date') }}"
                        min="{{ date('Y-m-d') }}" name="rc_expiry_date" class="form-control">
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
