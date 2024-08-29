@extends('layout')

@section('content')
    <h4>Add Employee Data</h4>
    <form action="{{ route('employee.submit')}}" method="post">
        @csrf
        <label>Name</label>
        <input type="text" name="name" class="form-control" mb-2>
        <label>Age</label>
        <input type="number" name="age" class="form-control" mb-2>
        <label>Address</label>
        <input type="text" name="address" class="form-control" mb-2>
        <label>Phone Number</label>
        <input type="text" name="phone" class="form-control" mb-2>
        <label>Division</label>
        <input type="text" name="division" class="form-control" mb-2>
        <label>Salary</label>
        <input type="number" name="salary" class="form-control" mb-2>


        <button class="btn btn-primary">Add</button>
    </form>
@endsection