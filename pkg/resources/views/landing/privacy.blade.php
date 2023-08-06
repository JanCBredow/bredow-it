<x-guest-layout>
    @livewire('header')

    <div class="bg-gray-800 text-white">
        <div class="mx-auto mt-4 max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- We've used 3xl here, but feel free to try other max-widths based on your needs -->
            <div class="mx-auto max-w-3xl">

                <div class="bg-gray-600 text-white px-6 py-32 lg:px-8">
                    <div class="mx-auto max-w-3xl text-base leading-7 text-white">
                        <p class="text-base font-semibold leading-7 text-indigo-400"><a href="{{ url()->previous() }}">Zurück</a></p>
                        <h1 class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Datenschutzerklärung</h1>
                        <p class="mt-6 text-xl leading-8 text-gray-200">In dieser Datenschutzerklärung möchten wir Sie darüber informieren, welche Daten wir erheben, wie wir sie verwenden, und welche Rechte Sie in Bezug auf Ihre Daten haben. Der Schutz Ihrer persönlichen Informationen hat für uns oberste Priorität, daher haben wir alle notwendigen Maßnahmen ergriffen, um sicherzustellen, dass Ihre Daten bei uns sicher und vertraulich behandelt werden.</p>
                        <div class="mt-10 max-w-2xl text-gray-200">
                            <p>Bitte nehmen Sie sich einen Moment Zeit, um unsere Datenschutzerklärung vollständig zu lesen, damit Sie genau wissen, wie wir mit Ihren Daten umgehen. Falls Sie Fragen oder Anliegen haben, können Sie uns jederzeit kontaktieren – alle relevanten Kontaktdaten finden Sie auf unserer <a href="{{route('contact')}}" class="text-indigo-400">Kontaktseite</a></p>
                            <ul role="list" class="mt-8 max-w-xl space-y-8 text-gray-300">
                                <li class="flex gap-x-3">
                                    <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                                    </svg>
                                    <span><strong class="font-semibold text-white">Nutzerdaten: </strong>Wir speichern Nutzerdaten sicher und vertraulich. Informationen umfassen Name, E-Mail und optional Profilinformationen.</span>
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                                    </svg>
                                    <span><strong class="font-semibold text-white">Technische Daten: </strong> Wir erfassen IP-Adresse, Geräteinfos (Browsertyp, Betriebssystem) sowie Webseiten-Nutzung (Seitenaufrufe, Verweildauer) für Analyse und Verbesserungen.</span>
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                                    </svg>
                                    <span><strong class="font-semibold text-white">Cookies und Tracking-Daten: </strong> Wir erfassen IP-Adresse, Geräteinfos (Browsertyp, Betriebssystem) sowie Webseiten-Nutzung (Seitenaufrufe, Verweildauer) für Analyse und Verbesserungen.</span>
                                </li>
                            </ul>
                            <p class="mt-8 text-gray-200">Als verantwortungsbewusstes Unternehmen garantieren wir, dass wir Ihre Nutzerdaten niemals verkaufen. Ihr Vertrauen ist uns wichtig, und Datenschutz steht bei uns an erster Stelle.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @livewire('footer')
</x-guest-layout>
