@extends('frontend.layouts.master')
@section('main-content')
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
                        Book Your Appointment
                    </div>
                    <div class="card-body">
                        <form class="w-px-500 p-3 p-md-3 needs-validation" action="{{ route('appointmentbook') }}"
                            method="post" role="form" novalidate>
                            @csrf

                            @if ($errors->has('first_name'))
                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                            @endif
                            <div class="row mb-3 form-group">
                                <label class="col-sm-3 col-form-label">First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="first_name" placeholder="Name"
                                        value="{{ old('first_name') }}">
                                </div>
                            </div>

                            @if ($errors->has('last_name'))
                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                            @endif
                            <div class="row mb-3 form-group">
                                <label class="col-sm-3 col-form-label">Last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="last_name" placeholder="Name"
                                        value="{{ old('last_name') }}">
                                </div>
                            </div>


                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            <div class="row mb-3 form-group">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" placeholder="Email"
                                        value="{{ old('email') }}">
                                </div>
                            </div>


                            @if ($errors->has('date'))
                                <span class="text-danger">{{ $errors->first('date') }}</span>
                            @endif
                            <div class="row mb-3 form-group">
                                <label class="col-sm-3 col-form-label">Choose Date</label>
                                <div class="col-sm-9">
                                    <input type="text" name="date" id="datepicker" width="376" class="form-control"
                                        placeholder="Select Date">
                                </div>
                            </div>

                            @if ($errors->has('doctor'))
                                <span class="text-danger">{{ $errors->first('doctor') }}</span>
                            @endif
                            <div class="row mb-3 form-group">
                                <label class="col-sm-3 col-form-label">Select Doctor</label>
                                <div class="col-sm-9">
                                    <select class="form-select form-control-transparent" data-control="select2"
                                        id="frontDoctorId" name="doctor">
                                        <option selected="selected" value="">Select Doctor</option>
                                        @foreach ($doctors as $doctor)
                                            <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
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
                                        id="frontSlotId" name="slot" style="display: none;">
                                        <!-- Initially hiding the "Select Slot" option -->

                                        @foreach ($slots as $slot)
                                            <option style="color:rgb(101, 232, 101)" value="{{ $slot->id }}">
                                                {{ $slot->slot }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                                </div>
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
    <script>
        $(document).ready(function() {
            $('#frontDoctorId, #datepicker').change(function() {
                var selectedDoctor = $('#frontDoctorId').val();
                var selectedDate = $('#datepicker').val();

                if (selectedDoctor && selectedDate) {
                    $.ajax({
                        url: '/fetch-slots',
                        method: 'GET',
                        data: {
                            doctor_id: selectedDoctor,
                            date: selectedDate
                        },
                        success: function(response) {
                            var responseSlotIds = response.slots.map(function(slot) {
                                return slot.slot_id;
                            });

                            $('#frontSlotId').empty().show();
                            $('#frontSlotId').append($('<option>').text('Select Slot'));

                            @foreach ($slots as $slot)
                                var slotId = {{ $slot->id }};
                                var slotText = '{{ $slot->slot }}';
                                var option = $('<option>').val(slotId).text(slotText);

                                if (responseSlotIds.includes(slotId)) {
                                    option.prop('disabled', true);
                                    option.css('color', 'red');
                                    option.text(slotText + ' - Booked');
                                } else {
                                    option.css('color', 'rgb(101, 232, 101)');
                                }

                                $('#frontSlotId').append(option);
                            @endforeach
                        },

                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                } else {
                    $('#frontSlotId').empty().hide();
                }
            });
        });
    </script>
@endsection
