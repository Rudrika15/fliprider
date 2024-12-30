@extends('admin.layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Rates Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success mb-2" href="{{ route('rates.create') }}"><i class="fa fa-plus"></i> Create New
                    Rates</a>
            </div>
        </div>
    </div>


    <div class="table table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Vehicle Name</th>
                    <th scope="col">Rate</th>
                    <th scope="col">Extra Rate</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rates as $rate)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $rate->masterRate->vehicle_name }}</td>
                        <td>{{ $rate->rate }}</td>
                        <td>{{ $rate->extra_rate }}</td>
                        <td style="display: flex; gap: 5px">
                            <a href="{{ route('rates.edit', $rate->id) }}" class="btn btn-primary btn-sm"><i
                                    class="fa fa-edit"></i> Edit</a>
                            <form action="{{ route('rates.destroy', $rate->id) }}" method="POST" class="d-inline-block"
                                role="delete">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                                    Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $rates->links() }}
    </div>
@endsection
