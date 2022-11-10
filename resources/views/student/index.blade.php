@extends('layouts.app')
@section('content')
<div class="card">
<div class="card-body">
<div class="col-12">
<div class="card">
<div class="table-responsive">
<table class="table table-vcenter card-table">
    <div class="mb-3">
<a href="/students/create" class="btn btn-primary">Add</a>
    </div>
<thead>
<tr>
<th>id</th>
<th>Name</th>
<th>Phone</th>
<th>Address</th>
<th>Action</th>


</tr>
</thead>
<tbody>
@foreach ($students as $student)
<tr>
<th>{{ $student->id }}</th>
<td>{{ $student->name }}</td>
<td>{{ $student->phone_number }}</td>
<td>{{ $student->address }}</td>
<td>
<a href="{{ route('students.tampilkandata', $student->id)}}" class="btn btn-success">Edit</a>
<a href="{{ route('students.delete', $student->id) }}" class="btn btn-danger">Delete</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
@endsection