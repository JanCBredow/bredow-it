<div class="w-full">
    <div class="flex flex-col min-w-full">
        <div class="w-full">
            <div class="py-2 align-middle inline-block w-full">

                <div class="flex flex-col md:flex-row">
                    <div class="flex-grow">
                        <h2 class="text-2xl">Meine Termine</h2>
                    </div>
                    <div class="">
                        <x-jet-button wire:click.prevent="showBookingModal">
                            {{ __('Termin buchen') }}
                        </x-jet-button>
                    </div>
                </div>

                <div class="w-full shadow overflow-hidden border-b border-gray-200 sm:rounded-lg mt-4">
                    <table class="w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Termin
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Service
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Standort
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Testergebnis
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-right">
                                <span class="sr-only">Aktionen</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        @if(sizeof($bookings) === 0)
                            <tr>
                                <td class="w-full text-center px-8 py-8" colspan="6">
                                    <p class="mb-4">
                                        Keine Einträge gefunden
                                    </p>

                                    <x-jet-button wire:click.prevent="showBookingModal">
                                        {{ __('Termin buchen') }}
                                    </x-jet-button>
                                </td>
                            </tr>
                        @else
                            @foreach ($bookings->items() as $booking)
                                <tr class="bg-white">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $booking->appointment->date }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $booking->service->name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $booking->service->testCenter->name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $booking->covidTest ? $booking->covidTest->state : '-' }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <x-jet-button wire:click="showBooking({{ $booking }})">
                                            Anzeigen
                                        </x-jet-button>
                                        <x-jet-danger-button disabled>
                                            Stornieren
                                        </x-jet-danger-button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {!! $bookings->links() !!}
    </div>


    <x-jet-dialog-modal wire:model="showBookingModal">
        <x-slot name="title">
            {{ __('Termin buchen') }}
        </x-slot>

        <x-slot name="content">

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('showBookingModal')" wire:loading.attr="disabled">
                {{ __('Abbrechen') }}
            </x-jet-secondary-button>

            <x-jet-button class="ml-2" wire:click="bookAppoinment" wire:loading.attr="disabled">
                {{ __('Termin buchen') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
