@extends('admin.layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Drivers</h2>
            </div>
            <div class="pull-right">
                @can('role-create')
                    <a class="btn btn-success btn-sm mb-2" href="{{ route('drivers.create') }}"><i class="fa fa-plus"></i> Create
                        Driver</a>
                @endcan
            </div>
        </div>
    </div>

    <div class=" table-responsive">
        <table class="table table-bordered">

            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>License Number</th>
                <th>Rating</th>
                <th>Availability Status</th>
                <th>License Image</th>
                <th>License Expiry Date</th>
                <th>status</th>
                <th>Action</th>
            </tr>

            @foreach ($drivers as $driver)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $driver->user->name }}</td>
                    <td>{{ $driver->user->email }}</td>
                    <td>{{ $driver->user->phone }}</td>
                    <td>{{ $driver->license_number }}</td>
                    <td>{{ $driver->rating ?? 0 }}</td>
                    <td>{{ $driver->availability_status }}</td>
                    <td><img src="{{ asset('images/' . $driver->license_image) }}" alt=""></td>
                    <td>{{ $driver->license_expiry_date }}</td>
                    <td>{{ $driver->user->status }}</td>
                    <td>
                        <div style="display: flex; gap: 5px">
                            @can('role-edit')
                                <a class="btn btn-primary btn-xs" href="{{ route('drivers.edit', $driver->id) }}"><i
                                        class="fa fa-pencil-square-o"></i> Edit</a>
                            @endcan
                            @can('role-delete')
                                <form method="POST" action="{{ route('drivers.destroy', $driver->id) }}"
                                    style="display:inline" role="delete">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-xs"><i class="fa  fa-trash"></i>
                                        Delete</button>
                                </form>
                            @endcan
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    {!! $drivers->links() !!}
@endsection
