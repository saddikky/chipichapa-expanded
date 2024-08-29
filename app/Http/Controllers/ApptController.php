<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class ApptController extends Controller
{
    function createAppt() {
        return view('appointment.create');
    }

    public function storeAppt(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'service_type' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Appointment::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'service' => $request->service_type,
            'message' => $request->message,
        ]);

        return redirect()->route('appt.list')->with('success', 'Appointment request submitted.');
    }

    public function listAppt() {
        $appointment = Appointment::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return view('appointment.list', compact('appointment'));
    }

    public function admListAppt() {
        $appointments = Appointment::orderBy('created_at', 'desc')->get();
        return view('appointment.admin-list', compact('appointments'));
    }

    public function updateStatus($id, $status) {
        $appointment = Appointment::findOrFail($id);
        $appointment->update(['status' => $status]);

        return redirect()->route('admin.appt.list')->with('success', 'Appointment status updated.');
    }

    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);

        $appointment->delete();

        return redirect()->back()->with('success', 'Appointment deleted successfully.');
    }

}
