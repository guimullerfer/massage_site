<?php

namespace App\Http\Controllers;

use App\Models\Appointment;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function create(){
        return view('appointment.create');
    }

    public function store(Request $request){
        Appointment::create([
            'name' => $request->name,
            'email' => $request->email,
            'service' => $request->service,
            'phone' => $request->phone,
            'date_appointment' => $request->date_appointment,
            'time_appointment' => $request->time_appointment,
            'note' => $request->note
        ]);
        return redirect()->back()->with('success_message');
    }
}
