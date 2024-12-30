@extends('admin.layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Vehicle Rule</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('vehicles.rule.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <form action="{{ route('vehicles.rule.update', $rule->id) }}" method="post">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Vehicle Name:</strong>
                    <select class="form-control" name="vehicle_id" id="">
                        <option value="" selected disabled> Select Vehicle </option>
                        @foreach ($vehicle_name as $item)
                            <option value="{{ $item->id }}" @if ($item->id == $rule->master_id) selected @endif>
                                {{ $item->vehicle_name }}</option>
                        @endforeach
                    </select>
                    @error('vehicle_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" value="{{ $rule->title }}" name="title" placeholder="Title"
                        class="form-control">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" name="description" placeholder="Description">{{ $rule->description }}</textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
@endsection
