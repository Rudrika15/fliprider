@extends('admin.layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Vehicle Rules Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success mb-2" href="{{ route('vehicles.rule.create') }}"><i class="fa fa-plus"></i> Create
                    New
                    Vehicle Rule</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Vehicle Name</th>
            <th>Title</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($vehicleRules as $vehicle_rule)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $vehicle_rule->masterRate->vehicle_name }}</td>
                <td>{{ $vehicle_rule->title }}</td>
                <td>{{ $vehicle_rule->description }}</td>

                <td style="display: flex; gap: 5px">
                    <a class="btn btn-primary btn-sm" href="{{ route('vehicles.rule.edit', $vehicle_rule->id) }}"><i
                            class="fa fa-edit"></i> Edit</a>
                    <form action="{{ route('vehicles.rule.destroy', $vehicle_rule->id) }}" method="POST"
                        class="d-inline-block" role="delete">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
