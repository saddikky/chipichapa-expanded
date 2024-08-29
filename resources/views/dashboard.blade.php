@extends('layout')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <div class="container d-flex flex-column">

        <div class="text-center mt-4">
            <h2>Hey there {{ Auth::user()->name }}, ready to work?</h2>
        </div>
        <div class="d-flex justify-content-center mb-5">
        <p>
            Be the number one IT expert, anytime, anywhere, always, in your mind.
        </p>    
        </div>
    
        <div class="d-flex justify-content-between flex-wrap">
        <div class="card" style="width: 25rem;">
            <div class="db-card-header">
                <h4 class="card-title">Employee List</h4>
            </div>
            <div class="card-body">
                <p class="card-text">Details and contact of your colleagues in ChipiChapa Family.</p>
                <a href="{{ route('employee.list') }}" class="btn btn-custom-darkpurple">Contact here</a>
            </div>
        </div>
        <div class="card" style="width: 25rem;">
            <div class="db-card-header">
                <h4 class="card-title">Employee Management</h4>
            </div>
            <div class="card-body">
                <p class="card-text">Manage data of your colleagues in ChipiChapa Family.</p>
                <a href="{{ route('employee.show') }}" class="btn btn-custom-darkpurple">Manage here</a>
            </div>
        </div>
        <div class="card" style="width: 25rem;">
            <div class="db-card-header">
                <h4 class="card-title">Appointment Management</h4>
            </div>
            <div class="card-body">
                <p class="card-text">All of requested appointment and details, click here.</p>
                <a href="{{ route('admin.appt.list') }}" class="btn btn-custom-darkpurple">See details here</a>
            </div>
        </div>
        </div>
    </div>


@endsection