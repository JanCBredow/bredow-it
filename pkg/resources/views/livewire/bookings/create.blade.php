<div class="w-full flex flex-col">

    <!-- SERVICE -->
    <div class="{{ $currentStep != 1 ? 'hidden' : '' }} w-full flex flex-col">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">



            <div class="bg-white rounded-lg shadow-xl p-6">
                <h2 class="text-xl text-center md:text-left font-medium leading-6 text-gray-900">Allgemeine
                    Informationen</h2>

                <p class="mt-2 text-gray-600">Wähle zuerst deinen Service.</p>

                <h3 class="text-lg font-medium leading-6 text-gray-90 mt-4">Adresse</h3>

                <div class="text-gray-600">
                    <p>{{ $testCenter->name }}</p>
                    <p>{{ $testCenter->location->address }}</p>
                    <p>{{ $testCenter->location->zip }} {{ $testCenter->location->city }}</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-xl p-6 col-span-1 md:col-span-2">
                <h2 class="text-xl text-center md:text-left font-medium leading-6 text-gray-900">Wähle deinen
                    Service</h2>

                <fieldset class="mb-12">
                    @error('serviceId') <span
                        class="text-red-300">{{ __('Bitte wähle einen Service aus') }}</span> @enderror

                    <div
                        class="relative grid grid-cols-2 md:grid-cols-4 flex-wrap bg-white rounded-md-space-y-px mt-4 gap-4">
                        @foreach($testCenter->services as $service)
                            <label
                                class="border p-4 flex flex-col md:col-span-2 cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-2 focus:outline-none">
                                <div class="flex items-center text-sm">
                                    <input wire:model="serviceId" type="radio" name="project-type"
                                           value="{{ $service->id }}"
                                           class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                           aria-labelledby="pricing-plans-1-label"
                                           aria-describedby="pricing-plans-1-description-0 pricing-plans-1-description-1"
                                           required>
                                    <span class="ml-3 font-medium">{{ $service->name }}</span>
                                </div>
                                <p id="pricing-plans-1-description-1"
                                   class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                    <span id="project-type-0-description-1"
                                          class="mt-6 text-sm font-medium text-gray-900"> {{ $service->price }} €</span>
                                </p>
                            </label>
                        @endforeach
                    </div>
                </fieldset>

                <x-jet-button class="mx-auto block col-span-3" wire:click="submitServiceSelection"
                              wire:loading.attr="disabled">
                    Weiter
                </x-jet-button>
            </div>
        </div>
    </div>

    <!-- APPOINTMENT -->
    <div class="{{ $currentStep != 2 ? 'hidden' : '' }} w-full flex flex-col">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white rounded-lg shadow-xl p-6">

                <h2 class="text-xl text-center md:text-left font-medium leading-6 text-gray-900">Terminauswahl</h2>

                <p class="mt-2 text-gray-600">Du kannst flexibel über den ganzen Tag Termine aussuchen. Deinen Termin
                    kannst du jederzeit bis zu einer Stunde vorher storinieren.</p>

                <h3 class="text-lg font-medium leading-6 text-gray-90 mt-4">Öffnungszeiten</h3>

                <div class="text-gray-600">
                    <p>Montag - Freitag: 08:00 - 21:00</p>
                    <p>Samstag - Sonntag: 09:00 - 20:00</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-xl p-6 col-span-1 md:col-span-2">

                @error('date') <span class="error text-red-300">{{ __('Bitte wähle ein Datum aus') }}</span> @enderror
                @error('time') <span class="error text-red-300">{{ __('Bitte wähle eine Zeit aus') }}</span> @enderror

                <div class="mb-12">
                    <div>
                        <label for="date" class="block text-sm font-medium text-gray-700">Datum</label>
                        <input wire:model="date" type="date"
                               name="date" id="date" min="{{ \Carbon\Carbon::now()->toDateString() }}"
                               max="{{ \Carbon\Carbon::now()->addDays(14)->toDateString() }}"
                               class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                               required>
                    </div>
                    <fieldset>
                        <legend class="sr-only">
                            Pricing plans
                        </legend>
                        <div
                            class="relative grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 flex-wrap bg-white rounded-md-space-y-px mt-4 gap-4">
                            @forelse($testCenter->calculateFreeDates($date) as $openingHour)
                                <label
                                    class="border p-4 flex flex-col col-span-2 cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-2 focus:outline-none">
                                    <div class="flex items-center text-sm">
                                        <input wire:model="time" id="time" type="radio" name="time"
                                               value="{{ $openingHour->start }}"
                                               class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                               aria-labelledby="pricing-plans-1-label"
                                               aria-describedby="pricing-plans-1-description-0 pricing-plans-1-description-1"
                                               required>
                                        <span id="pricing-plans-1-label"
                                              class="ml-3 font-medium">{{ \Carbon\Carbon::parse($openingHour->start)->toTimeString("minute") }} Uhr</span>
                                    </div>
                                    <p id="pricing-plans-1-description-1"
                                       class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        ({{ $openingHour->freeDatesCount($date, $openingHour->start, $openingHour->end) }}
                                        Termine)</p>
                                </label>
                            @empty
                                <div class="col-span-2 md:col-span-4 lg:col-span-6">
                                    <h2 class="text-center mt-6">Leider keine Termine verfügbar</h2>
                                </div>
                            @endforelse
                        </div>
                    </fieldset>
                </div>

                <x-jet-button class="mx-auto block col-span-3" wire:click="submitDateTimeSelection"
                              wire:loading.attr="disabled">
                    Weiter
                </x-jet-button>
            </div>
        </div>
    </div>

    <!-- CUSTOMER ACCOUNTING SETUP -->
    <div class="{{ $currentStep != 3 ? 'hidden' : '' }} w-full flex flex-col gap-4">
        @if(!Auth::check())
            <div class="grid md:grid-cols-2 md:gap-6 bg-white rounded-lg shadow-xl p-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Kundenkonto</h3>
                    <p class="mt-1 text-sm text-gray-500">
                        Möchten Sie ein Kundenkonto anlegen? Die Terminbuchung ist auch ohne möglich. Mit einem
                        Kundenkonto können Sie in Zukunft schneller einchecken.
                    </p>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-1" x-data="{ createAccount: @entangle('createAccount') }">
                    <div class="flex flex-col gap-6">
                        <div class="flex items-center justify-between">
  <span class="flex-grow flex flex-col">
    <span class="font-medium text-gray-900" id="availability-label">Kundenkonto erstellen</span>
  </span>
                            <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
                            <button type="button"
                                    :class="{ 'bg-indigo-600': createAccount, 'bg-gray-200': !(createAccount) }"
                                    @click="createAccount = !createAccount"
                                    class="bg-gray-200 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    role="switch" aria-checked="false" aria-labelledby="availability-label"
                                    aria-describedby="availability-description">
                                <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                                <span aria-hidden="true"
                                      :class="{ 'translate-x-5': createAccount, 'translate-x-0': !(createAccount) }"
                                      class="translate-x-0 pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
                            </button>
                        </div>

                        <div x-show="createAccount" class="flex flex-row md:flex-row xs:flex-col gap-4">
                            <div class="w-full">
                                <label for="password" class="block text-sm font-medium text-gray-700">Passwort</label>
                                <div class="mt-1">
                                    <input wire:model="password" type="password" name="password" id="password"
                                           class="@error('password') border-red-300 text-red-900 placeholder-red-300 @enderror shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                           required>
                                </div>
                            </div>
                            <div class="w-full">
                                <label for="passwordConfirm" class="block text-sm font-medium text-gray-700">Passwort
                                    bestätigen</label>
                                <div class="mt-1">
                                    <input wire:model="passwordConfirm" type="password" name="passwordConfirm"
                                           id="passwordConfirm"
                                           class="@error('passwordConfirm') border-red-300 text-red-900 placeholder-red-300 @enderror shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                           required>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="col-span-1 bg-white rounded-lg shadow-xl p-6">
                <h2 class="text-xl text-center md:text-left font-medium leading-6 text-gray-900">Persönliche
                    Informationen</h2>

                <p class="mt-2 text-gray-600">Für die Buchung deines Termines brauchen wir einige Informationen von
                    dir.</p>

                <h3 class="text-lg font-medium leading-6 text-gray-90 mt-4">Termin</h3>

                <div class="text-gray-600">
                    <p>{{ \Carbon\Carbon::parse($date)->format('d.m.Y') }} {{ \Carbon\Carbon::parse($time)->format('H:i') }}</p>
                </div>

                <h3 class="text-lg font-medium leading-6 text-gray-90 mt-4">Standort</h3>

                <div class="text-gray-600">
                    <p>{{ $testCenter->name }}</p>
                    <p>{{ $testCenter->location->address }}</p>
                    <p>{{ $testCenter->location->zip }} {{ $testCenter->location->city }}</p>
                </div>
            </div>

            <div class="col-span-1 md:col-span-2 bg-white rounded-lg shadow-xl p-6">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="mt-5 md:mt-0 md:col-span-3">
                        <div class="flex flex-col gap-6">

                            <h3 class="font-bold text-2xl mb-4">Persönliche Daten</h3>

                            <div class="flex flex-col md:flex-row xs:flex-col gap-4">
                                <div class="w-full">
                                    <label for="sex"
                                           class="block text-sm font-medium text-gray-700">Geschlecht</label>
                                    <select wire:model="sex" id="sex" name="sex"
                                            class="@error('sex') border-red-300 text-red-900 placeholder-red-300 @enderror mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md"
                                            required>
                                        <option value="male" selected>Herr</option>
                                        <option value="female">Frau</option>
                                        <option value="diverse">Divers</option>
                                    </select>
                                </div>
                                <div class="w-full">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <div class="mt-1">
                                        <input wire:model="email" type="email" name="email" id="email"
                                               class="@error('email') border-red-300 text-red-900 placeholder-red-300 @enderror shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                               placeholder="you@example.com" required>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-row md:flex-row xs:flex-col gap-4">
                                <div class="w-full">
                                    <label for="fname" class="block text-sm font-medium text-gray-700">Vorname</label>
                                    <div class="mt-1">
                                        <input wire:model="fname" type="text" name="fname" id="fname"
                                               class="@error('fname') border-red-300 text-red-900 placeholder-red-300 @enderror shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                               placeholder="Max" required>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <label for="lname" class="block text-sm font-medium text-gray-700">Nachname</label>
                                    <div class="mt-1">
                                        <input wire:model="lname" type="text" name="lname" id="lname"
                                               class="@error('lname') border-red-300 text-red-900 placeholder-red-300 @enderror shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                               placeholder="Mustermann" required>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-row md:flex-row xs:flex-col gap-4">

                                <div class="w-full">
                                    <label for="street" class="block text-sm font-medium text-gray-700">Straße</label>
                                    <div class="mt-1">
                                        <input wire:model="street" type="text" name="street" id="street"
                                               class="@error('street') border-red-300 text-red-900 placeholder-red-300 @enderror shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                               placeholder="Musterstraße" required>
                                    </div>
                                </div>
                                <div>
                                    <label for="housenr"
                                           class="block text-sm font-medium text-gray-700">Hausnummer</label>
                                    <div class="mt-1">
                                        <input wire:model="housenr" type="number" name="housenr" id="housenr"
                                               class="@error('housenr') border-red-300 text-red-900 placeholder-red-300 @enderror shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                               placeholder="Nummer" required>
                                    </div>
                                </div>

                            </div>

                            <div class="flex flex-row md:flex-row xs:flex-col gap-4">
                                <div class="w-full">
                                    <label for="zip"
                                           class="block text-sm font-medium text-gray-700">Postleitzahl</label>
                                    <div class="mt-1">
                                        <input wire:model="zip" type="number" name="zip" id="zip"
                                               class="@error('zip') border-red-300 text-red-900 placeholder-red-300 @enderror shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                               placeholder="12345" required>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <label for="city" class="block text-sm font-medium text-gray-700">Stadt</label>
                                    <div class="mt-1">
                                        <input wire:model="city" type="text" name="city" id="city"
                                               class="@error('city') border-red-300 text-red-900 placeholder-red-300 @enderror shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                               placeholder="Musterstadt" required>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col md:flex-row xs:flex-col gap-4">
                                <div class="w-full">
                                    <label for="phone"
                                           class="block text-sm font-medium text-gray-700">Telefonnummer</label>
                                    <div class="mt-1">
                                        <input wire:model="phone" type="text" name="phone" id="phone"
                                               class="@error('phone') border-red-300 text-red-900 placeholder-red-300 @enderror shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                               placeholder="+49 111 11111111" required>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <label for="bday"
                                           class="block text-sm font-medium text-gray-700">Geburtstag</label>
                                    <div class="mt-1">
                                        <input wire:model="bday" type="text" name="bday" id="bday"
                                               placeholder="TT.MM.JJJJ"
                                               class="@error('bday') border-red-300 text-red-900 placeholder-red-300 @enderror shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                               required>
                                    </div>
                                </div>
                            </div>

                            <div class="relative flex items-start">
                                <div class="flex items-center h-5">
                                    <input wire:model="privacy" id="terms" aria-describedby="terms-description"
                                           name="terms" type="checkbox"
                                           class="@error('terms') border-red-300 text-red-900 placeholder-red-300 @enderror focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="terms" class="font-medium text-gray-700"></label>
                                    <span id="terms-description" class="text-gray-500"> Ich akzeptiere die <a
                                            class="text-indigo-500" href="{{ route('privacy') }}">Allgemeinen Geschäftsbedinungen</a> und <a
                                            class="text-indigo-500" href="{{ route('privacy') }}">Datenschutzbestimmungen</a>.</span>
                                </div>
                            </div>

                            <x-jet-button class="mx-auto block col-span-3" wire:click="book" wire:submit="book"
                                          wire:loading.attr="disabled">
                                Termin buchen
                            </x-jet-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="{{ $currentStep != 4 ? 'hidden' : '' }}">
        @if($booking)
            @livewire('bookings.details', [ 'booking' => $booking ])
        @endif
    </div>
</div>
