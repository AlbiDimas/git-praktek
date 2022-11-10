@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('students.update', $student->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb3">
                <label for="" class="form-label">
                    Name
                </label>
                <input type="text" name="name" class="form-control"
                    value="{{$student->name}}">
            </div>

            <div class="mb3">
                <label for="" class="form-label">
                    Phone Number
                </label>
                <input type="text" name="phone_number" class="form-control"
                    value="{{$student->phone_number}}">
            </div>

            <div class="mb3">
                <label for="" class="form-label">
                    Address
                </label>
                <input type="address" name="address" class="form-control"
                value="{{$student->address}}">
            </div>

            <div class="mb-4">
                <label for="" class="form-label">
                    Class
                </label>
                <input type="text" name="class" class="form-control"
                value="{{$student->class}}">
            </div>

            <div class="mb3">
                
                <input type="submit" value="update"  class="btn btn-primary">
            </div>

        </form>
    </div>
</div>
@endsection