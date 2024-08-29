@extends('layout')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <div class="d-flex justify-content-center mt-4">
        <h2>Appointment List</h2>
    </div>
    <div class="d-flex justify-content-center">
        <p>
            Manage, whether to accept and deny, and don't forget to follow up the case to be assessed.
        </p>    
    </div>
    <table class="table table-striped table-hover rounded-table mt-3">
    <thead class="table-dark">
        <tr>
            <th>Customer Name</th>
            <th>Contact</th>
            <th>Title</th>
            <th>Service Type</th>
            <th>Detail</th>
            <th>Status Confirmation</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($appointments as $appointment)
            <tr>
                <td>{{ $appointment->user->name }}</td>
                <td>
                <p class="btn btn-sm btn-outline-primary">{{ $appointment->user->email }}</p>
                </td>
                <td>{{ $appointment->title }}</td>
                <td>{{ $appointment->service }}</td>
                <td>{{ $appointment->message }}</td>
                <td>
                @if ($appointment->status == 'Waiting')
                <form action="{{ route('admin.appt.update-status', ['id' => $appointment->id, 'status' => 'accepted']) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-outline-primary">Accept</button>
                </form>
                <form action="{{ route('admin.appt.update-status', ['id' => $appointment->id, 'status' => 'denied']) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-outline-danger mt-2">Deny</button>
                </form>
                @else
                    <span class="badge bg-{{ $appointment->status === 'Accepted' ? 'success' : 'danger' }} custom-badge">
                        {{ ucfirst($appointment->status) }}
                    </span>
                @endif
                </td>
                <td>    
                <form action="{{ route('admin.appt.delete', ['id' => $appointment->id]) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this appointment?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-outline-danger custom-badge">Delete</button>
                </form>
                </td>
            </tr>
        @empty
        <tr>
                <td colspan="7" class="text-center">No appointment yet</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection