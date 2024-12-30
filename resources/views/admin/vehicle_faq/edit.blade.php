@extends('admin.layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Vehicle Faq</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary btn-sm mb-2" href="{{ route('vehicles.faq.index') }}"><i
                        class="fa fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('vehicles.faq.update', $faq->id) }}" class="form-horizontal') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Vehicle Type:</strong>
                            <select class="form-control" name="vehicle_id" id="">
                                <option value="" selected disabled> Select Vehicle </option>
                                @foreach ($vehicle_name as $item)
                                    <option value="{{ $item->id }}" @if ($item->id == $faq->master_id) selected @endif>
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
                            <strong>Question:</strong>
                            <input type="text" value="{{ $faq->title }}" name="title" placeholder="Question"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Answer:</strong>
                            <textarea type="text" value="{{ $faq->description }}" name="description" placeholder="Answer" class="form-control">{{ $faq->description }} </textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-floppy-disk"></i>
                            Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
