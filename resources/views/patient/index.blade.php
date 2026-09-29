@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">List of Patients</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Student ID</th>
                    <th>Course</th>
                    <th>Year Level</th>
                </tr>
            </thead>
            <tbody>
                @forelse($patients as $patient)
                    <tr>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->student_id }}</td>
                        <td>{{ $patient->course }}</td>
                        <td>{{ $patient->year_level }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No patients found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
