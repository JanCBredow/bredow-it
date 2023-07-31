<?php

namespace App\Http\Livewire\Bookings;

use App\Models\Booking;
use Livewire\Component;

class Details extends Component
{
    private $booking;

    public function mount(Booking $booking) {
        $this->booking = $booking;
    }

    public function render()
    {
        return view('livewire.bookings.details', [
            'booking' => $this->booking
        ]);
    }
}
