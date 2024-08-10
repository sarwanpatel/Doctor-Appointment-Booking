<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Slot;
use Illuminate\Http\Request;
use App\Notifications\AppointmentConfirmation;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller

{

   public function index(Request $request)
{
    if (Auth::check()) 
    {
        $loggedInUser = Auth::user();
        $doctor = Doctor::where('name', $loggedInUser->name)->first();

        if ($doctor) {
            $appointments = Appointment::with('slot', 'doctor')
            ->where('doctor_id', $doctor->id)->get();
        }else{
            $appointments = Appointment::with('slot', 'doctor')->get();
        }
    } else {
        $appointments = Appointment::with('slot', 'doctor')->get();
    }

       return view('/backend/pages/appointment', ['appointments' => $appointments]);
}


     public function appointment(Request $request)
    {
    
        $request->validate([
            'first_name' => 'string|required',
            'last_name' => 'string|required',
            'email' => 'string|email|required|unique:appointments,email',
            'doctor' => 'required',
            'slot' => 'required',
            'date' => 'required'
        ]);

        $appointment = new Appointment();
        $appointment->first_name = $request->input('first_name');
        $appointment->last_name = $request->input('last_name');
        $appointment->email = $request->input('email');
        $appointment->doctor_id = $request->input('doctor');
        $appointment->slot_id = $request->input('slot');
        $appointment->date = $request->input('date');
        $appointment->save();

        //Mail::to($request->input('email'))->send(new BookingNofication($appointment));
        return back()->with('success','Your Appointment has been booked successfully.');
    }

    public function fetchSlot(Request $request)
          {
                $doctorId = $request->input('doctor_id');
                $date = $request->input('date');
                $slots = Appointment::where('doctor_id', $doctorId)
                            ->whereDate('date', $date)->get();
                return response()->json(['slots' => $slots]);
        }


        public function edit($id)
        { 
            $doctors = Doctor::all();
            $slots = Slot::all();
            $singleAppointment = Appointment::with('doctor', 'slot')->findOrFail($id);
            return view('/backend/pages/editappointment', compact('singleAppointment', 'doctors', 'slots'));
        }
}
