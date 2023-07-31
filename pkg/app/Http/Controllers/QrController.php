<?php

## need edit
namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class QrController extends Controller
{
    public function scan(Request $request, string $qrCode) {
        $booking = Booking::where('qr_code_id', $qrCode)->get()->first();
        if (!$booking) {
            return abort(404);
        }
        return redirect('/admin/resources/patients/' . $booking->patient_id);
    }
}
