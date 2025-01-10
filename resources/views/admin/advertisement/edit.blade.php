@extends('admin.layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Advertisement</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('advertisement.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <form action=" {{ route('advertisement.update', $advertisement->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Placement:</strong>
                    <select name="placement_id" class="form-control" id="">
                        <option value="">select placement</option>
                        @foreach ($placements as $placement)
                            <option value="{{ $placement->id }}" @if ($advertisement->placement_id == $placement->id) selected @endif>
                                {{ $placement->placement }}
                            </option>
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
                    <input type="text" name="title" value="{{ $advertisement->title }}" placeholder="Title"
                        class="form-control">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Content:</strong>
                    <textarea class="form-control" value="{{ $advertisement->content }}" name="content" placeholder="Content">
                        {{ $advertisement->content }}
                    </textarea>
                    @error('content')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Media:</strong> <br>
                    <img src="{{ asset('admin/images/advertise/' . $advertisement->media) }}" width="100" height="100"
                        class="margin-bottom-10" alt="" id="media_preview">
                    <input type="file" value="{{ $advertisement->media }}" id="media" name="media"
                        class="form-control"
                        onchange="document.getElementById('media_preview').src = window.URL.createObjectURL(this.files[0])">
                    @error('media')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Type:</strong>
                    <select name="type" class="form-control" id="">
                        <option value="banner" @if ($advertisement->type == 'banner') selected @endif>Banner</option>
                        <option value="popup" @if ($advertisement->type == 'popup') selected @endif>Pop-Up</option>
                        <option value="video" @if ($advertisement->type == 'video') selected @endif>Video</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Target Url:</strong>
                    <input type="text" value="{{ $advertisement->target_url }}" name="target_url"
                        placeholder="Target Url" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    <select name="status" class="form-control" id="">
                        <option value="active" @if ($advertisement->status == 'active') selected @endif>Active</option>
                        <option value="inactive" @if ($advertisement->status == 'inactive') selected @endif>Inactive
                        </option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Start Date:</strong>
                    <input type="date" value="{{ date('Y-m-d', strtotime($advertisement->start_date)) }}"
                        name="start_date" placeholder="Start Date" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>End Date:</strong>
                    <input type="date" value="{{ date('Y-m-d', strtotime($advertisement->end_date)) }}" name="end_date"
                        placeholder="End Date" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-floppy-disk"></i>
                    Submit</button>
            </div>
    </form>
@endsection
