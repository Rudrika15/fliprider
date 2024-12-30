@extends('admin.layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Rates</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary btn-sm mb-2" href="{{ route('rates.index') }}"><i class="fa fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>
    </div>

    <form action="{{ route('rates.update', $rate->id) }}" method="post">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Select Vehicle:</strong>
                    <select class="form-control" name="vehicle_id" id="">
                        <option value="" selected disabled> Select Vehicle </option>
                        @foreach ($masterRates as $item)
                            <option value="{{ $item->id }}" @if ($item->id == $rate->master_id) selected @endif>
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
                    <strong>Rate:</strong>
                    <input type="number" min="0" value="{{ $rate->rate }}" name="rate" placeholder="Rate/KM"
                        class="form-control">
                    @error('rate')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Extra Rate:</strong>
                    <input type="number" min="0" value="{{ $rate->extra_rate }}" name="extra_rate" placeholder="Extra Rate/KM"
                        class="form-control">
                    @error('extra_rate')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-floppy-disk"></i>
                    Submit</button>
            </div>
        </div>
    </form>
@endsection
