@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Appointments</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Patient</th>
                    <th>Doctor</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->patient?->name ?? 'Unknown patient' }}</td>
                        <td>{{ $appointment->doctor?->name ?? 'Unknown doctor' }}</td>
                        <td>{{ $appointment->appointment_date }}</td>
                        <td>{{ ucfirst($appointment->status) }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No appointments found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
