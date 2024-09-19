<?php
namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    public function index(Request $request)
    {
        return Appointment::where('user_id', $request->user()->id)->get();
    }

   public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'service_id' => 'required|exists:services,id',
        'appointment_date' => 'required|date|after:now',
    ]);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 422);
    }

    $appointment = Appointment::create([
        'user_id' => $request->user()->id,
        'service_id' => $request->service_id,
        'appointment_date' => $request->appointment_date,
        'status' => 'pending',
    ]);

    return response()->json($appointment, 201);
}

    public function show(Appointment $appointment)
    {
        return $appointment;
    }
}
