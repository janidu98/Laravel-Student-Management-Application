@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Student Information</h2>
    </div>
    <div class="card-body">
        <a href="{{url('/students/create')}}" class="btn btn-success btn-sm" title="Add New Student">
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
                    @foreach($students as $student)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->mobile }}</td>
                            <td>
                                <a href="{{url('/student/' . $student->id)}}" title='View student'>
                                    <button class="btn btn-info btn-sm">
                                        View
                                    </button>
                                </a>
                                <a href="{{url('/student/' . $student->id) . './edit'}}" title='Edit student'>
                                    <button class="btn btn-primary btn-sm">
                                        Edit
                                    </button>
                                </a>
                                <form action="{{url('/student'.'/'.$student->id)}}" method='POST' accept-charset='UTF-8' style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)">
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