@extends('admin.layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ad Placement</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('advertisement.placement.create') }}"> Create New Ad Placement</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Placement</th>
                <th>Action</th>
            </tr>
            @foreach ($ad_placements as $ad_placement)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $ad_placement->placement }}</td>

                    <td style="display: flex; gap: 5px">
                        <a class="btn btn-primary btn-sm"
                            href="{{ route('advertisement.placement.edit', $ad_placement->id) }}"><i class="fa fa-edit"></i>
                            Edit</a>
                        <form action="{{ route('advertisement.placement.destroy', $ad_placement->id) }}" method="POST"
                            class="d-inline-block" role="delete">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
