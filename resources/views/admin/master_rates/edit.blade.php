@extends('admin.layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Vehicle</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary btn-sm mb-2" href="{{ route('vehicles.index') }}"><i class="fa fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>
    </div>

    <form action="{{ route('vehicles.update', $vehicle->id) }}" method="post">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Vehicle Name:</strong>
                    <input type="text" name="vehicle_name" value="{{ $vehicle->vehicle_name }}"
                        placeholder="Vehicle Name" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-floppy-disk"></i>
                    Submit</button>
            </div>
        </div>
    </form>
@endsection
