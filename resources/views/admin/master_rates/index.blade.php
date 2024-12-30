@extends('admin.layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Master Rates Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success mb-2" href="{{ route('vehicles.create') }}"><i class="fa fa-plus"></i> Create New
                    Rates</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Vehicle Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($vehicles as $vehicle)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $vehicle->vehicle_name }}</td>

                <td style="display: flex; gap: 5px">
                    <a class="btn btn-primary btn-sm" href="{{ route('vehicles.edit', $vehicle->id) }}"><i
                            class="fa fa-edit"></i> Edit</a>
                    <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST" class="d-inline-block"
                        role="delete">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
