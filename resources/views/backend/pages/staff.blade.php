@extends('backend/admin')
@section('admin-content')
    <h3 class="text-center m-3">Appointment list</h3>
    <div class="container">
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Slot</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointments as $index => $appointment)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $appointment->first_name }}</td>
                            <td>{{ $appointment->last_name }}</td>
                            <td>{{ $appointment->slot }}</td>
                            <td>{{ $appointment->date }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
