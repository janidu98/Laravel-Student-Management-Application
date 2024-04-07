@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Student Application</h2>
    </div>
    <div class="card-body">
        <a href="{{url('/student/create')}}" class="btn btn-success btn-sm" title="Add New Student">
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
                            <td>{{ $student->mobile }}</t
                            <td>
                                <a href="{{url('/student/' . $student->id)}}" title='View student'>
                                    <button class="btn btn-info btn-sm">
                                        <i class="fa fa-eye" aria-hidden='true'></i>View
                                    </button>
                                </a>
                                <a href="{{url('/student/' . $student->id) . './edit'}}" title='Edit student'>
                                    <button class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil-square-o" aria-hidden='true'></i>Edit
                                    </button>
                                </a>
                                
                                <form action="{{url('/student'.'/'.$student->id)}}" method='POST' accept-charset='UTF-8' style="disply:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                        <i class="fa fa-trash-o" aria-hidden='true'></i>Delete
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