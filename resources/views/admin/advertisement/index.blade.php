@extends('admin.layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Advertisement</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('advertisement.create') }}"> Create New Advertisement</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Placement</th>
                <th>Title</th>
                <th>Content</th>
                <th>Media</th>
                <th>Type</th>
                <th>Target Url</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            @foreach ($advertisements as $advertisement)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $advertisement->adPlacement->placement }}</td>
                    <td>{{ $advertisement->title }}</td>
                    <td>{{ $advertisement->content }}</td>
                    <td>
                        <img src="{{ asset('admin/images/advertise/' . $advertisement->media) }}" width="100"
                            alt="">
                    </td>
                    <td>{{ $advertisement->type }}</td>
                    <td>{{ $advertisement->target_url }}</td>
                    <td>{{ date('d-m-Y', strtotime($advertisement->start_date)) }}</td>
                    <td>{{ date('d-m-Y', strtotime($advertisement->end_date)) }}</td>
                    <td>{{ $advertisement->status }}</td>

                    <td style="display: flex; gap: 5px; border: none">
                        <a class="btn btn-primary btn-sm" href="{{ route('advertisement.edit', $advertisement->id) }}"><i
                                class="fa fa-edit"></i> Edit</a>
                        <form action="{{ route('advertisement.destroy', $advertisement->id) }}" method="POST"
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
