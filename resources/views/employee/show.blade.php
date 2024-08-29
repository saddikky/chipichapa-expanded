@extends('layout')


@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">


<div class="d-flex mt-2">
        <h2>List of Employee</h2>
        <div class="ms-auto">
            <a class="btn btn-custom-darkpurple mt-2" href="{{ route('employee.add')}}">Add New Employee</a>
        </div>
    </div>
    <div class="d-flex">
        <p>
            Manage in a demure way.
        </p>    
    </div>

    <table class="table table-striped table-hover rounded-table mt-2">
        <thead class="table-dark">
            <tr>
                <th>Employee ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Division</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($employee as $no=>$data)
            <tr>
                <td>{{ $no+1 }} </td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->age }}</td>
                <td>{{ $data->address }}</td>
                <td>{{ $data->phone }}</td>
                <td>{{ $data->division }}</td>
                <td>{{ $data->salary }}</td>
                <td>
                    <a href="{{ route('employee.edit', $data->id) }} " class="btn btn-sm btn-outline-primary">Edit</a>
                    <form action="{{ route('employee.delete', $data->id) }}" method="post">
                        @csrf
                        <button class="btn btn-sm btn-outline-danger mt-2">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8" class="text-center">No employee yet</td>
            </tr>
            @endforelse
        </tbody>

    </table>


    @endsection