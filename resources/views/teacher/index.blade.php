@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Teachers Information</h2>
    </div>
    <div class="card-body">
        <a href="{{url('/teachers/create')}}" class="btn btn-success btn-sm" title="Add New Teacher">
            <li class="fa fa-plus" aria-hidden="true">Add New</li>
        </a>
        <br/>
        <br/>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teachers as $teacher)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->address }}</td>
                            <td>{{ $teacher->mobile }}</td>
                            <td>
                                <a href="{{url('/teachers/' . $teacher->id)}}" title='View teacher'>
                                    <button class="btn btn-info btn-sm">
                                        View
                                    </button>
                                </a>
                                <a href="{{url('/teachers/' . $teacher->id) . './edit'}}" title='Edit teacher'>
                                    <button class="btn btn-primary btn-sm">
                                        Edit
                                    </button>
                                </a>
                                <form action="{{url('/teachers/'.$teacher->id)}}" method='POST' accept-charset='UTF-8' style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete teacher" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection