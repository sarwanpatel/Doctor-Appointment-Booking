@extends('backend/admin')
@section('admin-content')
    <h3 class="text-center m-3">Edit Appointment</h3>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background: #0d6efd; color:#f1f7fa; font-weight:bold;">
                        Appointment Details
                    </div>
                    <div class="card-body">
                        <form class="w-px-500 p-3 p-md-3 needs-validation" method="post" role="form" novalidate>
                            @csrf

                            @if ($errors->has('first_name'))
                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                            @endif
                            <div class="row mb-3 form-group">
                                <label class="col-sm-3 col-form-label">First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="first_name" placeholder="Name"
                                        value="{{ $singleAppointment->first_name ?? old('first_name') }}">
                                </div>
                            </div>

                            @if ($errors->has('last_name'))
                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                            @endif
                            <div class="row mb-3 form-group">
                                <label class="col-sm-3 col-form-label">Last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="last_name" placeholder="Name"
                                        value="{{ $singleAppointment->last_name ?? old('last_name') }}">
                                </div>
                            </div>


                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            <div class="row mb-3 form-group">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" placeholder="Email"
                                        value="{{ $singleAppointment->email ?? old('email') }}">
                                </div>
                            </div>


                            @if ($errors->has('date'))
                                <span class="text-danger">{{ $errors->first('date') }}</span>
                            @endif
                            <div class="row mb-3 form-group">
                                <label class="col-sm-3 col-form-label">Choose Date</label>
                                <div class="col-sm-9">
                                    <input type="text" name="date" id="datepicker" width="376" class="form-control"
                                        placeholder="Select Date" value="{{ $singleAppointment->date ?? old('date') }}">
                                </div>
                            </div>

                            @if ($errors->has('doctor'))
                                <span class="text-danger">{{ $errors->first('doctor') }}</span>
                            @endif
                            <div class="row mb-3 form-group">
                                <label class="col-sm-3 col-form-label">Select Doctor</label>
                                <div class="col-sm-9">
                                    <select class="form-select form-control-transparent" data-control="select2"
                                        id="frontDoctorId" name="doctor" disabled id="s_doctor_id">
                                        @foreach ($doctors as $doctor)
                                            <option value="{{ $doctor->id }}"
                                                {{ $singleAppointment->doctor->name == $doctor->name ? 'selected' : '' }}>
                                                {{ $doctor->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            @if ($errors->has('slot'))
                                <span class="text-danger">{{ $errors->first('slot') }}</span>
                            @endif

                            <div class="row mb-3 form-group">
                                <label class="col-sm-3 col-form-label">Select slot</label>
                                <div class="col-sm-9">
                                    <select class="form-select form-control-transparent" data-control="select2"
                                        id="frontSlotId" name="slot">
                                        @foreach ($slots as $slot)
                                            <option value="{{ $slot->id }}"
                                                {{ $singleAppointment->slot->slot == $slot->slot ? 'selected' : '' }}
                                                style="{{ $singleAppointment->slot->slot == $slot->slot ? 'color: red;' : 'color: rgb(101, 232, 101);' }}">
                                                {{ $slot->slot }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label"></label>
                                {{-- <div class="col-sm-9">
                                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                                </div> --}}
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <script>
        $(document).ready(function() {
            $('#datepicker').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                startDate: new Date()
            }).on('changeDate', function(e) {
                var selectedDate = e.date;
                var currentDate = new Date();

                if (selectedDate < currentDate) {
                    $(this).datepicker('setDate', currentDate);
                }
            });
        });
    </script>
@endsection
