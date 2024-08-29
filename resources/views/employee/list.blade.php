@extends('layout')


@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">


<div class="d-flex justify-content-center mt-4">
        <h2>List of Employee</h2>
    </div>
    <div class="d-flex justify-content-center">
        <p>
            List of ChipiChapa Family members, contact as necessary.
        </p>    
    </div>

    <table class="table table-striped table-hover rounded-table mt-4">
        <thead class="table-dark">
            <tr>
                <th>Employee ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Division</th>
                <th>Action</th>
            </tr>
        </thead>

        @forelse($employee as $no=>$data)
        <tr>
            <td>{{ $no+1 }} </td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->age }}</td>
            <td>{{ $data->division }}</td>
            <td>
                <p class="btn btn-sm btn-outline-primary">Contact</p>
            </td>
        </tr>
        @empty
        <tr>
                <td colspan="5" class="text-center">No employee yet</td>
            </tr>
        @endforelse

    </table>


    @endsection