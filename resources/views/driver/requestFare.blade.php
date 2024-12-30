@extends('admin.layouts.index')

@section('content')

    {{-- 'distance' => 'required|numeric|min:0',
            'duration' => 'required|numeric|min:0',
            'surgeMultiplier' => 'nullable|numeric|min:1',request these three inputs --}}

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Request Fare</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary btn-sm mb-2" href="{{ route('users.index') }}"><i class="fa fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('fare') }}" method="POST">
        @csrf
        <div class="row margin-top-20">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Vehicle Type:</strong>
                    <select class="form-control" name="vehicle_type" id="">
                        <option value="car">Car</option>
                        <option value="bike">Bike</option>
                        <option value="rikshaw">Rikshaw</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Distance:</strong>
                    <input type="text" name="distance" placeholder="Distance" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Extra Distance:</strong>
                    <input type="text" name="extra_distance" placeholder="Extra Distance" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection
