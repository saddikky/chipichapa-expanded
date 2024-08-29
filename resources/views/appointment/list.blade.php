@extends('user-layout')


@section('content')
    <div class="d-flex mt-2">
        <h2>List of Appointment</h2>
        <div class="ms-auto">
            <a class="btn btn-custom-darkpurple btn-home" href="{{ route('appt.create')}}">Create Appointment</a>
        </div>
    </div>

    <table class="table table-striped table-hover rounded-table mt-4">
    <thead class="table-dark">
        <tr>
            <th>Title</th>
            <th>Service Type</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @forelse($appointment as $appointment)
            <tr>
                <td>{{ $appointment->title }}</td>
                <td>{{ $appointment->service }}</td>
                <!-- <td>{{ $appointment->status }}</td> -->
                 <td><span class="status-message badge {{ $appointment->status === 'Accepted' ? 'badge-success' : ($appointment->status === 'Waiting' ? 'badge-primary' : 'badge-danger') }} custom-badge">
                        {{ ucfirst($appointment->status) }}
                    </span></td>
            </tr>
        @empty
        <tr>
            <td colspan="3" class="text-center">No appointment yet</td>
        </tr>
        @endforelse
    </tbody>
    </table>

@endsection