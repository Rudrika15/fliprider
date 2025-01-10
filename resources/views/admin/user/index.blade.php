@extends('admin.layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Users Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success mb-2" href="{{ route('users.create') }}"><i class="fa fa-plus"></i> Create New
                    User</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                {{-- <th>No</th> --}}
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($data as $key => $user)
                <tr>
                    {{-- <td>{{ ++$i }}</td> --}}
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if (!empty($user->getRoleNames()))
                            @foreach ($user->getRoleNames() as $v)
                                <label class="badge bg-success">{{ $v }}</label>
                            @endforeach
                        @endif
                    </td>
                    <td class="">
                        <a class="btn btn-info btn-xs" href="{{ route('users.show', $user->id) }}"><i
                                class="fa fa-list"></i>
                            Show</a>
                        <a class="btn btn-primary btn-xs" href="{{ route('users.edit', $user->id) }}">
                            <i class="fa fa fa-pencil-square-o"></i> Edit</a>
                        <form method="POST" action="{{ route('users.destroy', $user->id) }}" style="display:inline"
                            role="delete">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-xs"><i class="fa  fa-trash"></i>
                                Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    {!! $data->links() !!}
@endsection
