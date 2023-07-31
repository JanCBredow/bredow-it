<x-guest-layout>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Termin buchen') }}
            </h2>
        </div>
    </header>

    <main class="mt-0 mb-auto">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @livewire('bookings.create', ['testCenter' => $testCenter, 'user' => $user])
            </div>
        </div>
    </main>

    <footer class="bg-white shadow static w-full p-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <p>Copyright &copy; 2023 Bredow-IT</p>
        </div>
    </footer>
</x-guest-layout>
