@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Dashboard</h2>

    <div class="row g-3">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>Total Patients</h5>
                    <h2>{{ $patientsCount }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>Total Doctors</h5>
                    <h2>{{ $doctorsCount }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>Total Appointments</h5>
                    <h2>{{ $appointmentsCount }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
