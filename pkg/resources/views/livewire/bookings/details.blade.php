<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <div class="col-span-2 bg-white rounded-lg shadow-xl p-6 text-gray-600">
        <h2 class="text-xl text-center md:text-left font-medium leading-6 text-gray-900">
            Buchungsbestätigung</h2>

        <p class="mt-2">Hiermit bestätigen wir Ihre Buchung:</p>
        <div class="mt-8 mb-8">
            <p class="my-1"><b>Name</b>: {{ $booking->patient->fullName() }}</p>
            <p class="my-1"><b>Termin</b>: {{ $booking->appointment->date->format('d.m.Y H:i') }}</p>
            <p class="my-1"><b>Service</b>: {{ $booking->service->name }}</p>
        </div>
        <p>Sie können sich vor Ort ganz einfach mit Ihrem QR-Code anmelden. Sie müssen nur den QR Code und Ihren
            Personalausweis mitbringen.</p>
        <p>Sie erhalten alle nötigen Daten auch einmal separat an Ihre E-Mail <b>{{ $booking->patient->email }}</b>. </p>

    </div>

    <div id="booking-thank-qr" class="col-span-1 bg-white rounded-lg shadow-xl p-6">

        {!! $booking->qr_code !!}
    </div>

</div>

<style>
    #booking-thank-qr svg {
        width: 100% !important;
    }
</style>
