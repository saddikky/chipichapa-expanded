@extends('layout')

@section('content')
    <div class="text-center mt-3">
        <h2>Edit Employee Data</h2>
        <p>Fill in the form to create an account</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body text-start">
                    <form action="{{ route('employee.update', $employee->id)}}" method="post">
                        @csrf
                        <label>Name</label>
                        <input type="text" name="name" value="{{ $employee->name}}" class="form-control" mb-2>
                        <label>Age</label>
                        <input type="number" name="age" value="{{ $employee->age}}" class="form-control" mb-2>
                        <label>Address</label>
                        <input type="text" name="address" value="{{ $employee->address}}" class="form-control" mb-2>
                        <label>Phone Number</label>
                        <input type="text" name="phone" value="{{ $employee->phone}}" class="form-control" mb-2>
                        <label>Division</label>
                        <input type="text" name="division" value="{{ $employee->division}}" class="form-control" mb-2>
                        <label>Salary</label>
                        <input type="number" name="salary" value="{{ $employee->salary}}" class="form-control" mb-2>
                        <button class="btn btn btn-custom-darkpurple mt-2">Edit</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection