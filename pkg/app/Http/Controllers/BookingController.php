<?php

## need edit
namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Booking;
use App\Models\Patient;
use App\Models\Service;
use App\Models\TestCenter;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        return view(
            'bookings.index',
            $request->user()->bookings
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view(
            'bookings.book', [
                'testCenter' => TestCenter::first(),
                'user' => \Auth::check() ? \request()->user() : User::findGuestUser()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|Redirector|RedirectResponse
     */
    public function store(Request $request)
    {

    }

    public function show(Booking $booking)
    {
        return view('bookings.details', [
                'booking' => $booking
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Booking $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        return view(
            'bookings.edit',
            $booking
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param \App\Models\Booking $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Booking $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
