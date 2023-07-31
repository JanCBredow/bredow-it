<?php

namespace App\Http\Livewire\Bookings;

use App\Models\Booking;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;
use Livewire\WithPagination;


class Index extends Component
{
    use WithPagination;

    public $showBookingModal = false;

    /**
     * The livewire mount function
     *
     * @return void
     */
    public function mount()
    {
        // Resets the pagination after reloading the page
        $this->resetPage();
    }

    /**
     * Show the booking modal.
     *
     * @return void
     */
    public function showBookingModal()
    {
        $this->redirect('/bookings/create');
    }

    /**
     * The livewire render function.
     *
     * @return Application|Factory|View
     */
    public function render()
    {
        return view(
            'livewire.bookings.index',
            [
                'bookings' => $this->findBookings()
            ]
        );
    }

    public function showBooking(Booking $booking)
    {
        return redirect(route('bookings.show', [
            $booking->id
        ]));
    }

    /**
     * The bookings.
     *
     * @return LengthAwarePaginator
     */
    private function findBookings(): LengthAwarePaginator
    {
        return request()->user()->bookings()->paginate(10);
    }
}

