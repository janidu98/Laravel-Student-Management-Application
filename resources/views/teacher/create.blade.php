@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Student Page</div>

        <div class="card-body">
            <form action="{{url('/teachers')}}" method='POST'>
                @csrf
                <label for="name">Name</label><br/>
                <input type="text" name="name" id="name" class="form-control"><br/>
                <label for="address">Address</label><br/>
                <input type="text" name="address" id="address" class="form-control"><br/>
                <label for="mobile">Mobile</label><br/>
                <input type="text" name="mobile" id="mobile" class="form-control"><br/>
                <input type="submit" class="btn btn-success" value='Save'><br/>
            </form>
        </div>
    </div>

@endsection