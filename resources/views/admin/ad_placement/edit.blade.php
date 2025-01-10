@extends('admin.layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Advertisement Placement</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('advertisement.placement.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <form action="{{ route('advertisement.placement.update', $ad_placement->id) }}') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Placement:</strong>
                    <input type="text" value="{{ $ad_placement->placement }}" name="placement" placeholder="Placement"
                        class="form-control">
                    @error('placement')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-disk"></i>
                    Submit</button>
            </div>
        </div>
    </form>
@endsection
