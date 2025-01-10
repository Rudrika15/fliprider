@extends('admin.layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Advertisement</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('advertisement.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <form action=" {{ route('advertisement.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Placement:</strong>
                    <select name="placement_id" class="form-control" id="">
                        <option value="">select placement</option>
                        @foreach ($placements as $placement)
                            <option value="{{ $placement->id }}">{{ $placement->placement }}</option>
                        @endforeach
                    </select>
                    @error('placement_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" value="{{ old('title') }}" name="title" placeholder="Title"
                        class="form-control">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Content:</strong>
                    <textarea class="form-control" value="{{ old('content') }}" name="content" placeholder="Content"></textarea>
                    @error('content')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Media:</strong> <br>
                    <img id="media_preview" width="100" height="100" class="margin-bottom-10" style="display: none;"
                        alt="">
                    <input type="file" value="{{ old('media') }}" name="media" class="form-control"
                        onchange="
                            document.getElementById('media_preview').style.display = 'block';
                            document.getElementById('media_preview').src = window.URL.createObjectURL(this.files[0]);
                        ">
                    @error('media')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Type:</strong>
                    <select name="type" value="{{ old('type') }}" class="form-control" id="">
                        <option value="banner">Banner</option>
                        <option value="popup">Pop-Up</option>
                        <option value="video">Video</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Target Url:</strong>
                    <input type="text" value="{{ old('target_url') }}" name="target_url" placeholder="Target Url"
                        class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    <select name="status" value="{{ old('status') }}" class="form-control" id="">
                        <option value="active">Active</option>
                        <option value="inactive" selected>Inactive</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Start Date:</strong>
                    <input type="date" value="{{ old('start_date') }}" name="start_date" placeholder="Start Date"
                        class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>End Date:</strong>
                    <input type="date" value="{{ old('end_date') }}" name="end_date" placeholder="End Date"
                        class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-floppy-disk"></i>
                    Submit</button>
            </div>
    </form>
@endsection
