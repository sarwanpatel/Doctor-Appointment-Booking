@extends('backend/admin')
@section('admin-content')
    <h3 class="text-center m-3">Appointment list</h3>
    <div class="container">
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Patient</th>
                        <th scope="col">Email</th>
                        <th scope="col">Slot</th>
                        <th scope="col">Date</th>
                        @if (Auth::check())
                            @if (Auth::user()->role == 1)
                                <th scope="col">Action</th>
                            @elseif(Auth::user()->role == 2)
                                <th scope="col">Doctor</th>
                            @endif
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointments as $index => $appointment)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $appointment->first_name }}</td>
                            <td>{{ $appointment->email }}</td>
                            <td>{{ $appointment->slot->slot }}</td>
                            <td>{{ $appointment->date }}</td>
                            @if (Auth::check())
                                @if (Auth::user()->role == 1)
                                    <td>
                                        <button type="button" class="btn btn-warning">
                                            <a href="{{ route('editAppointment', ['id' => $appointment->id]) }}"
                                                class="text-light">Edit</a>
                                        </button>
                                    </td>
                                @elseif(Auth::user()->role == 2)
                                    <td>{{ $appointment->doctor ? $appointment->doctor->name : 'N/A' }}</td>
                                @endif
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
