@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('students.store')}}" method="post">
            @csrf
            <div class="mb3">
                <label for="" class="form-label">
                    Name
                </label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="mb3">
                <label for="" class="form-label">
                    Phone Number
                </label>
                <input type="text" name="phone_number" class="form-control">
            </div>

            <div class="mb3">
                <label for="" class="form-label">
                    Address
                </label>
                <input type="address" name="address" class="form-control">
            </div>

            <div class="mb-4">
                <label for="" class="form-label">
                    Class
                </label>
                <input type="text" name="class" class="form-control">
            </div>

            <div class="mb3">
                
                <input type="submit" value="submit"  class="btn btn-primary">
            </div>

        </form>
    </div>
</div>
@endsection